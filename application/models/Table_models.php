<?php
class Table_models extends CI_Model
{
  
	function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok"); // ป้องกันกรณีเวลา server ไม่ตรง
    }
    

    public function get_DataProduction(){

      $this->db->select('*');
      $this->db->from('tb_production');
      $this->db->order_by('tb_production.id','DESC');
      //$this->db->limit(1);
      $Query=$this->db->get();
      return $Query->result_array();

    }

    public function delete_Production($id)
        {
               
        $this->db->delete('tb_production',array('id'=>$id));

        }
}
?>