<?php namespace App\Models;
use CodeIgniter\Model;

class Quotes_model extends Model 
{ 
    public function get_all_quotes($order)
    {
        return $this->db->table('quotes')->orderBy('id_quotes', $order)->get()->getResultArray();
    }
    public function get_random_quotes($total)
    {
        return $this->db->table('quotes')->orderBy('id_quotes', 'RANDOM')->limit($total)->get()->getResultArray();
    }
}