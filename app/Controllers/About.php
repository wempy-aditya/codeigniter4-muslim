<?php
namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "About",
			'lokasi' => "About",
			'konten' => 'front_page/v_about',
		];
		return view('front_layout/v_wrapper', $data);
	}
}