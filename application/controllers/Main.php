<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Main_models');
	}
	public function index()
	{
		$data['Query'] = $this->Main_models->get_DataSystem();
		$data['QueryProd'] = $this->Main_models->get_DataProduction();
		$data['QueryProdAcc'] = $this->Main_models->get_DataProductionAcc();
		$data['QueryDay'] = $this->Main_models->get_DataDay();
		$data['QueryNight'] = $this->Main_models->get_DataNight();
		// echo '<pre>';
		// print_r($data['QueryProd']);
		// echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('main', $data);
		$this->load->view('template/footer');
	}

	public function editNameSystem()
	{
		$this->Main_models->update_NameSystem();
		$this->session->set_flashdata('edit_success', TRUE);
		redirect('main', 'refresh');
	}

	public function addData()
	{
		$this->Main_models->insert_Production();
		$this->session->set_flashdata('insert_success', TRUE);
		redirect('main', 'refresh');
	}
	public function editData($id)
	{
		$data['Query'] = $this->Main_models->get_DataSystem();
		$data['QueryProd'] = $this->Main_models->get_DataProduction();
		$data['QueryProdAcc'] = $this->Main_models->get_DataProductionAcc();
		$data['QueryEdit'] = $this->Main_models->get_DataProductionById($id);
		// echo '<pre>';
		// print_r($data['QueryEdit']);
		// echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('main_edit', $data);
		$this->load->view('template/footer');
	}
	public function updateData()
	{
		$this->Main_models->update_Production();
		$this->session->set_flashdata('edit_success', TRUE);
		redirect('main', 'refresh');
	}
	public function delData($id)
	{
		$this->Main_models->delete_Production($id);
		$this->session->set_flashdata('del_success', TRUE);
		redirect('main', 'refresh');
	}
}
