<?php
class dataPegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda belum login!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Data Pegawai";


        //PAGINATION
        $this->load->library('pagination');

        //ambil data keyword searching
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        // $this->db->like('nama_pegawai', $data['keyword']);
        // $this->db->from('data_pegawai');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        //initialize config
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['pegawai'] = $this->penggajianModel->showDataPegawai($config['per_page'], $data['start'], $data['keyword']);



        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataPegawai', $data);
        $this->load->view('templates_admin/footer');


    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Pegawai";

        $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formTambahPegawai', $data);
        $this->load->view('templates_admin/footer');


    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nik = $this->input->post('nik');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $jabatan = $this->input->post('jabatan');
            $status = $this->input->post('status');
            $hak_akses = $this->input->post('hak_akses');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $photo = $_FILES['photo']['name'];

            if ($photo == '') {
            } else {
                $config['upload_path'] = 'assets/photo';
                $config['allowed_types'] = 'jpeg|jpg|png|tiff';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal Diupload";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }
            $data = [
                'nik' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan' => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status' => $status,
                'hak_akses' => $hak_akses,
                'username' => $username,
                'password' => $password,
                'photo' => $photo,
                'email' => $email,
            ];

            $this->penggajianModel->insert_data($data, 'data_pegawai');
            $this->session->set_flashdata('pesan', ' <div class="alert alert-success alert-dismissible fade show">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
            Data  <strong>berhasil ditambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>');
            redirect('admin/dataPegawai');
        }
    }

    public function updateData($id)
    {
        $where = [
            'id_pegawai' => $id,
        ];
        $data['title'] = "Update Data Pegawai";
        $data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai = '$id'")->result();


        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formUpdatePegawai', $data);
        $this->load->view('templates_admin/footer');

    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id = $this->input->post('id_pegawai');
            $nik = $this->input->post('nik');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $jabatan = $this->input->post('jabatan');
            $status = $this->input->post('status');
            $hak_akses = $this->input->post('hak_akses');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $photo = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path'] = 'assets/photo';
                $config['allowed_types'] = 'jpeg|jpg|png|tiff';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nik' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin,
                'jabatan' => $jabatan,
                'tanggal_masuk' => $tanggal_masuk,
                'status' => $status,
                'hak_akses' => $hak_akses,
                'username' => $username,
                'password' => $password,
            ];

            $where = [
                'id_pegawai' => $id,
            ];

            $this->penggajianModel->update_data('data_pegawai', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
            Data  <strong>berhasil diupdate!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>');
            redirect('admin/dataPegawai');
        }
    }

    public function deleteData($id)
    {
        $where = ['id_pegawai' => $id];
        $this->penggajianModel->delete_data($where, 'data_pegawai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show">
        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
        Data  <strong>berhasil dihapus!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        </button>
    </div>');
        redirect('admin/dataPegawai');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }



}


?>