<?php namespace App\Models;
use CodeIgniter\Model;

class Wirid_model extends Model 
{ 
    public function get_all_wirid($order, $limit)
    {
        return $this->db->table('wirid')->orderBy('id_wirid', $order)->limit($limit)->get()->getResultArray();
    }
    public function get_wirid($id_wirid)
    {
        return $this->db->table('wirid')->where('id_wirid', $id_wirid)->get()->getRowArray();
    }
}