<?php
namespace App\Controllers;
use App\Models\Quran_model;

class Quran extends BaseController
{
	protected $Quran_model;

    public function __construct()
    {
        $this->Quran_model = new Quran_model();
    }

	public function index()
	{
		$client = \Config\Services::curlrequest(); 
		$response = $client->get('https://api.banghasan.com/quran/format/json/surat')->getBody();
		$surat = json_decode($response, true);
		$data=[
            'title' => "Al-Quran Online",
			'lokasi' => "Quran",
			'surat' => $surat['hasil'],
			'konten' => 'front_page/v_quran',
		];
		return view('front_layout/v_wrapper', $data);
	}

	public function surat($id_surat) 
	{
		if ($id_surat > 114) {
			return redirect()->to('/Quran');
		}
        $surah = $this->Quran_model->get_surat_detail($id_surat);
        $ayat = $this->Quran_model->get_ayat_by_surat($id_surat);
		$data=[
            'title' => $surah['surah'],
			'lokasi' => 'Quran',
			'surat'=> $surah,
			'ayat' => $ayat,
			'konten' => 'front_page/v_surat',
		];
		return view('front_layout/v_wrapper', $data);
	}

}
