<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Table_models');
		$this->load->model('Main_models');
	}
	public function index()
	{
		$data['Query'] = $this->Main_models->get_DataSystem();
		$this->load->view('template/header');
		$this->load->view('table',$data);
		$this->load->view('template/footer');
	}
	public function editNameSystem()
	{
		$this->Main_models->update_NameSystem();
		$this->session->set_flashdata('edit_success', TRUE);
		redirect('main', 'refresh');
	}
	public function editData($id)
	{
		$data['Query'] = $this->Main_models->get_DataSystem();
		$data['QueryProd'] = $this->Main_models->get_DataProduction();
		$data['QueryEdit'] = $this->Main_models->get_DataProductionById($id);
		// echo '<pre>';
		// print_r($data['QueryEdit']);
		// echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('table_edit', $data);
		$this->load->view('template/footer');
	}
	public function updateData()
	{
		$this->Main_models->update_Production();
		$this->session->set_flashdata('edit_success', TRUE);
		redirect('table', 'refresh');
	}
	public function ajax_list()
	{
		$QueryProd = $this->Table_models->get_DataProduction();
		// 		echo '<pre>';
		// print_r($QueryProd);
		// echo '</pre>';
		// exit;

		$data=array();
        $i=1;
		foreach ($QueryProd as $rows) 
		{
			$action = '<a href="'.site_url().'table/editData/'.$rows['id'].'" type="button" class="btn btn-warning btn-sm">แก้ไข</a> '.'<a href="'.site_url().'table/delData/'.$rows['id'].'" type="button" class="btn btn-danger btn-sm" onclick="return confirm("คุณยืนยันที่จะลบใช่หรือไม่?");">ลบ</a>';

			$total12t=((int)$rows['Totaltrip12T_CR1']+(int)$rows['Totaltrip12T_CR2']+(int)$rows['Totaltrip12T_CR3']+(int)$rows['Totaltrip12T_CR4']);
			$total16t=((int)$rows['Totaltrip16T_CR1']+(int)$rows['Totaltrip16T_CR2']+(int)$rows['Totaltrip16T_CR3']+(int)$rows['Totaltrip16T_CR4']);
			$total25t=((int)$rows['Totaltrip25T_CR1']+(int)$rows['Totaltrip25T_CR2']+(int)$rows['Totaltrip25T_CR3']+(int)$rows['Totaltrip25T_CR4']+(int)$rows['Totaltrip25T_CR5']+(int)$rows['Totaltrip25T_CR6']+(int)$rows['Totaltrip25T_CR7']+(int)$rows['Totaltrip25T_CR8']+(int)$rows['Totaltrip25T_CR9']+(int)$rows['Totaltrip25T_CR10']+(int)$rows['Totaltrip25T_CR11']+(int)$rows['Totaltrip25T_CR12']+(int)$rows['Totaltrip25T_CR13']+(int)$rows['Totaltrip25T_CR14']);
			$total30t=((int)$rows['Totaltrip30T_CR1']+(int)$rows['Totaltrip30T_CR2']+(int)$rows['Totaltrip30T_CR3']+(int)$rows['Totaltrip30T_CR4']+(int)$rows['Totaltrip30T_CR5']+(int)$rows['Totaltrip30T_CR6']);

			$sumCat=((int)$rows['Totaltrip785D_CR1']+(int)$rows['Totaltrip777D_CR1']);
			$sumDt=$total12t+$total16t+$total25t+$total30t;

			array_push($data,
			array(
				$i,
				$rows['dateShift'],
			    $rows['timeShift'],
				((int)$rows['Totaltrip785D_CR1']),
				((int)$rows['Totaltrip777D_CR1']),
				((int)$rows['TotaltripEGAT_CR1']),
				$total12t,
				$total16t,
				$total25t,
				$total30t,
				$sumCat,
				$sumDt,
				$rows['SumTotalBcmJob1_3'],
				$action

			)
		);
		$i++;
	   }
	$this->output->set_content_type('application/json')->set_output(json_encode(array('data'=>$data)));
	
	//echo json_encode($output);

	}
	public function delData($id)
	{   
	
		$this->Main_models->delete_Production($id);
		$this->session->set_flashdata('del_success', TRUE);
		redirect('table', 'refresh');
	}
}
