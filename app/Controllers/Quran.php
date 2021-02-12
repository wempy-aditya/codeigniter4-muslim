<?php

namespace App\Controllers;

class Quran extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Al-Quran Online",
			'lokasi' => "Quran",
			'konten' => 'front_page/v_quran',
		];
		return view('front_layout/v_wrapper', $data);
	}

}
