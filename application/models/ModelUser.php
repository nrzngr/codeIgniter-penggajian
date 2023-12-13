<?php
class ModelUser extends CI_Model
{
    public function simpanToken($data = null)
    {
    $this->db->insert('user_token', $data);
    }
}