<?php

class Autentifikasi extends CI_Controller
{
    public function index()
    {
        //Jika statusnya sudah Login, maka tidak bisa mengakses halaman Login alias dikembalikan ke tampilan User
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', ['required' => 'Email harus diisi!', 'valid_email' => 'Email tidak benar!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';

            //Kata 'Login' merupakan nilai dari variabel judul dalam array $data yang dikirimkan ke View "Aute_Header"
            $this->load->view('templates/Aute_Header', $data);
            $this->load->view('autentifikasi/Login');
            $this->load->view('templates/Aute_Footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        // Jika User Ada
        if ($user) {
            // Jika User Sudah Aktif
            if ($user['is_active'] == 1) {
                // Cek Password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silakan Ubah Profil Anda untuk Ubah Foto Profil</div>');
                        }
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!</div>');
            redirect('autentifikasi');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah berhasil logout!</div>');
        redirect('autentifikasi');
    }

    public function blok()
    {
        $this->load->view('autentifikasi/Blok');
    }

    public function gagal()
    {
        $this->load->view('autentifikasi/Gagal');
    }

}