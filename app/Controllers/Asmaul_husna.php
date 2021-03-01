<?php
namespace App\Controllers;

class Asmaul_husna extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Asmaul Husna",
			'lokasi' => "Asmaul_Husna",
			'konten' => 'front_page/v_asmaul_husna',
		];
		return view('front_layout/v_wrapper', $data);
	}
}