<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
            'title' => "Home",
			'konten' => 'front_page/v_home',
		];
		return view('front_layout/v_wrapper', $data);
	}
}
