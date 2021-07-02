<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	protected $baseData = [
		'title'			=> 'Giver Clothes',
	];

	public function index()
	{
		$explode = explode(' ', $this->baseData['title']);
		$data['titleExploded'] = $explode;

		// var_dump($explode);
		// die;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/preloader', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/script', $data);
	}
}