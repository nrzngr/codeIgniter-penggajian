<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login page';
            $this->load->view('auth_templates/header', $data);
            $this->load->view('autentifikasi/login', $data);
            $this->load->view('auth_templates/footer');
        } else {
            $this->_login();
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[data_pegawai.nik]',
            [

                'required' => 'NIK Wajib diisi',
                'is_unique' => 'NIK Sudah Terdaftar!'
            ]);

        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email|is_unique[data_pegawai.email]',
            [
                'valid_email' => 'Email Tidak Benar!!',
                'required' => 'Email Wajib diisi',
                'is_unique' => 'Email Sudah Terdaftar!'
            ],
        );

        $this->form_validation->set_rules(
            'nama_pegawai',
            'Nama Lengkap',
            'required',
            [
                'required' => 'Nama Wajib diisi'
            ],
        );

        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',
            [
                'required' => 'Jenis Kelamin Wajib diisi'
            ],
        );

        $this->form_validation->set_rules(
            'jabatan',
            'Jabatan',
            'required',
            [
                'required' => 'Jabatan Wajib diisi'
            ],
        );

        $this->form_validation->set_rules(
            'nama_pegawai',
            'Nama Lengkap',
            'required',
            [
                'required' => 'Nama Wajib diisi'
            ],
        );

        $this->form_validation->set_rules(
            'username',
            'username',
            'required|trim|is_unique[data_pegawai.username]',
            [
                'valid_email' => 'Username Tidak Benar!!',
                'required' => 'Username Wajib diisi',
                'is_unique' => 'Username Sudah Terdaftar!'
            ],
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama!!',
                'required' => 'Password Wajib diisi',
                'min_length' => 'Password Terlalu Pendek'
            ],
        );

        $this->form_validation->set_rules(
            'password2',
            'RepeatPassword',
            'required|trim|matches[password]',
            [
                'matches' => 'Password Tidak Sama!!',
                'required' => 'Password Wajib diisi',
                'min_length' => 'Password Terlalu Pendek'
            ],
        );

        if ($this->form_validation->run() == false) {

            $data['title'] = "Registrasi";
            $this->load->view('auth_templates/header', $data);
            $this->load->view('autentifikasi/register', $data);
            $this->load->view('auth_templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $data  = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'jabatan' => $this->input->post('jabatan', true),
                'tanggal_masuk' => date("Y-m-d"),
                'status' => 'Pegawai Tetap',
                'photo' => 'default.jpg',
                'hak_akses' => 1,
                'is_active' => 1,
                'email' => htmlspecialchars($email),


            ];

            $token      = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time(),
            ];

            $this->ModelUser->simpanData($data); //menggunakan model
            $this->ModelUser->simpanToken($user_token);
            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda
            </div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $email    = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'hak_akses' => $user['hak_akses'],
                    ];
                    $this->session->set_userdata($data);

                    if ($user['hak_akses'] == 1) {
                        redirect('admin/Dashboard');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan
                                Ubah Profile Anda untuk Ubah Photo Profil</div>');
                        }
                        redirect('pegawai/Dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password anda salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum teraktivasi
            </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak teregistrasi
            </div>');
            redirect('auth');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('hak_akses');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout
            </div>');
            redirect('auth');
    }

}
?>