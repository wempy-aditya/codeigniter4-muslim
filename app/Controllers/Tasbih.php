<?php 
namespace App\Controllers;

class Tasbih extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Tasbih",
			'lokasi' => "Tasbih",
			'konten' => 'front_page/v_tasbih',
		];
		return view('front_layout/v_wrapper', $data);
	}

}
