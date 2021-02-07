<?php namespace App\Models;
use CodeIgniter\Model;

class Quran_model extends Model 
{ 
    public function get_all_ayat()
    {
        return $this->db->table('quran_id')->orderBy('id', 'ASC')->get()->getResultArray();
    }
    public function get_ayat_by_surat($surat)
    {
        return $this->db->table('quran_id')->where('id_surat', $surat)->orderBy('id', 'ASC')->get()->getResultArray();
    }
    public function get_surat_detail($surat)
    {
        return $this->db->table('surah')->where('id_surah', $surat)->get()->getRowArray();
    }

    public function get_all_surat()
    {
        return $this->db->table('surah')->orderBy('id_surah', 'ASC')->get()->getResultArray();
    }
}