<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Main_models');
		$this->load->model('Report_models');
	}
	public function index()
	{
		$data['Query'] = $this->Main_models->get_DataSystem();
		$data['QueryReportDay'] = $this->Report_models->get_DataReportDay();
		$data['QueryReportNight'] = $this->Report_models->get_DataReportNight();
		// echo '<pre>';
		// print_r($data['QueryReportDay']);
		// echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report', $data);
		$this->load->view('template/footer');
	}
}
