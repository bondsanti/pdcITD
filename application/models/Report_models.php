<?php
class Report_models extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok"); // ป้องกันกรณีเวลา server ไม่ตรง
    }


    public function get_DataReportDay()
    {
        // $dateShift = $this->input->post('dateShift');
        $strDate = date("Y-m-d", strtotime($this->input->post('dateShift')));
        $dateShiftStart = $strDate . " 07:30";
        $dateShiftEnd = $strDate . " 19:00";

        $this->db->select('*');
        $this->db->from('tb_production');
        $this->db->where('tb_production.timeShift >=', $dateShiftStart);
        $this->db->where('tb_production.timeShift <=', $dateShiftEnd);
        $Query = $this->db->get();
        return $Query->result_array();
    }
    public function get_DataReportNight()
    {
        // $dateShift = $this->input->post('dateShift');
        $strDate1 = date("Y-m-d", strtotime($this->input->post('dateShift')));
        $strDate = date("Y-m-d", strtotime($this->input->post('dateShift')));
        $strDate2 = date("Y-m-d", strtotime($strDate . " +1Day"));
        $dateShiftStart = $strDate1 . " 19:30";
        $dateShiftEnd = $strDate2 . " 07:00";



        $this->db->select('*');
        $this->db->from('tb_production');
        $this->db->where('tb_production.timeShift >=', $dateShiftStart);
        $this->db->where('tb_production.timeShift <=', $dateShiftEnd);
        $Query = $this->db->get();
        return $Query->result_array();
    }
}
