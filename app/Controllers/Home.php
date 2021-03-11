<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$client = \Config\Services::curlrequest(); 
		$response = $client->get('https://api.banghasan.com/sholat/format/json/kota')->getBody();
		$nama_kota = json_decode($response, true);
		$data=[
            'title' => "Home",
			'lokasi' => "Home",
			'kota'=> $nama_kota['kota'],
			'konten' => 'front_page/v_home',
		];
		return view('front_layout/v_wrapper', $data);
	}
	
	public function test() {
		return view('front_page/v_test');
	}
}
