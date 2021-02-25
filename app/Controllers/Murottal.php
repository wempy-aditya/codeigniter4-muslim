<?php
namespace App\Controllers;

class Murottal extends BaseController
{
	public function index()
	{
		$client = \Config\Services::curlrequest(); 
		$response = $client->get('https://api.npoint.io/99c279bb173a6e28359c/data')->getBody();
		$murottal = json_decode($response, true);
		$data=[
            'title' => "Murottal Al-Quran",
			'lokasi' => "Murottal",
			'murottal' => $murottal,
			'konten' => 'front_page/v_murottal',
		];
		return view('front_layout/v_wrapper', $data);
	}
}