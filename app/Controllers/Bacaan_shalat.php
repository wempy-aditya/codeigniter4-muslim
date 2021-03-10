<?php
namespace App\Controllers;

class Bacaan_shalat extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Bacaan Shalat",
			'lokasi' => "Bacaan_Shalat",
			'konten' => 'front_page/v_bacaan_shalat',
		];
		return view('front_layout/v_wrapper', $data);
	}
}