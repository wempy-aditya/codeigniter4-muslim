<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Quran_model;
use App\Models\Quotes_model;
use CodeIgniter\RESTful\ResourceController;

class Rest_api extends ResourceController
{
    protected $format = 'json';
    protected $Quran_model;
    protected $Quotes_model;

    public function __construct()
    {
        $this->Quran_model = new Quran_model();
        $this->Quotes_model = new Quotes_model();
    }

	public function index()
	{
        $respon=[
            "status" => "success", 
            "message" => "Selamat datang di Rest Api website muslim spesial untuk bulan Ramadhan. Dibuat oleh Wempy Tech"
        ];
        return $this->respond($respon, 200);
    }
    
    public function get_all_ayat() {
        $ayat = $this->Quran_model->get_all_ayat();
        $respon = [
            "status" => "success",
            "ayat" => $ayat
        ];
        return $this->respond($respon, 200);
    }
    public function get_ayat_by_surat($surat) {
        $surah = $this->Quran_model->get_surat_detail($surat);
        $ayat = $this->Quran_model->get_ayat_by_surat($surat);
        $respon = [
            "status" => "success",
            "surah" => $surah,
            "ayat" => $ayat
        ];
        return $this->respond($respon, 200);
    }
    public function get_all_surat() {
        $surah = $this->Quran_model->get_all_surat();
        $respon = [
            "status" => "success",
            "daftar_surat" => $surah
        ];
        return $this->respond($respon, 200);
    }

    public function get_all_quotes($order) 
    {
        $quotes = $this->Quotes_model->get_all_quotes($order);
        $respon = [
            "status" => "success",
            "order" => $order,
            "quotes" => $quotes
        ];
        return $this->respond($respon, 200);
    }
    public function get_random_quotes($total) 
    {
        $quotes = $this->Quotes_model->get_random_quotes($total);
        $respon = [
            "status" => "success",
            "select" => "random",
            "total" => $total,
            "quotes" => $quotes
        ];
        return $this->respond($respon, 200);
    }
}
