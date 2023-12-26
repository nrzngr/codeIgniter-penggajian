<?php
class PenggajianModel extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function showDataPegawai($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pegawai', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jabatan', $keyword);
        }
        return $this->db->get('data_pegawai', $limit, $start)->result_array();
    }

    public function showDataJabatan($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_jabatan', $keyword);
        }
        return $this->db->get('data_jabatan', $limit, $start)->result_array();
    }

    

    public function countPegawai()
    {
        return $this->db->get('data_pegawai')->num_rows();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('data_pegawai');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function simpanToken($data = null)
    {
        $this->db->insert('user_token', $data);
    }

    public function simpanData($data = null)
    {
        $this->db->insert('data_pegawai', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('data_pegawai', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('data_pegawai', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('data_pegawai');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

}
?>