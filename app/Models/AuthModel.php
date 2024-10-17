<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    function get_data_login($email, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('email', $email); // Ganti username dengan email
        $log = $builder->get()->getRow();
        return $log;
    }
}
