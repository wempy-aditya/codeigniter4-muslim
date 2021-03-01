<?php
namespace App\Controllers;

class Doa_harian extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Doa Harian",
			'lokasi' => "Doa_Harian",
			'konten' => 'front_page/v_doa_harian',
		];
		return view('front_layout/v_wrapper', $data);
	}
}