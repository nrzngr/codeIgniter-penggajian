<?php

class GantiPassword extends CI_Controller
{


    public function index()
    {
        $data['title']   = "Ganti Password";
        $data['pegawai'] = $this->db->get_where('data_pegawai', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Password saat ini', 'required|trim');

        $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]');

        $this->form_validation->set_rules('new_password2', 'Ulangi password baru', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates_pegawai/header', $data);
            $this->load->view('templates_pegawai/sidebar');
            $this->load->view('pegawai/formGantiPassword', $data);
            $this->load->view('templates_pegawai/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['pegawai']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah
            </div>');
                redirect('pegawai/gantiPassword');
            } else {
                if($current_password == $new_password){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak boleh sama dengan sebelumnya
            </div>');
                redirect('pegawai/gantiPassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('data_pegawai');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah
            </div>');
                redirect('pegawai/gantiPassword');
                }
            }
        }
    }

   
}

?>