<?php
class Main_models extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Bangkok"); // ป้องกันกรณีเวลา server ไม่ตรง
  }

  public function get_DataSystem()
  {

    $this->db->select('*');
    $this->db->from('tb_system');
    $this->db->where('tb_system.id', '1');
    $Query = $this->db->get();
    if ($Query->num_rows() > 0) {
      $data = $Query->row();
      return $data;
    }
    return FALSE;
  }
  public function update_NameSystem()
  {

    $data = array(
      'nameSystem' => $this->input->post('nameSystem'),
      'tarGet' => $this->input->post('tarGet'),
      'crName1' => $this->input->post('crName1'),
      'crName2' => $this->input->post('crName2'),
      'crName3' => $this->input->post('crName3'),
      'crName4' => $this->input->post('crName4'),
      'crName5' => $this->input->post('crName5'),
      'crName6' => $this->input->post('crName6'),
      'cat785D' => $this->input->post('cat785D'),
      'cat777D' => $this->input->post('cat777D'),
      'dum12T' => $this->input->post('dum12T'),
      'dum16T' => $this->input->post('dum16T'),
      'dum25T' => $this->input->post('dum25T'),
      'dum30T' => $this->input->post('dum30T'),
      'EGAT' => $this->input->post('EGAT')
    );
    $this->db->where('id', $this->input->post('id'));
    $Query = $this->db->update('tb_system', $data);

    //insert log
    $log = "Edid->tbSystem : " . json_encode($data);
    $dataLog = array(

      'activity' => $log

    );

    $Query = $this->db->insert('tb_log', $dataLog);
  }
  public function get_DataProductionById($id)
  {

    $this->db->select('*');
    $this->db->from('tb_production');
    $this->db->where('tb_production.id', $id);
    $Query = $this->db->get();
    if ($Query->num_rows() > 0) {
      $data = $Query->row();
      return $data;
    }
    return FALSE;
  }
  public function update_Production()
  {
    if ($this->input->post('SumTotalBcmJob1_3') >= $this->input->post('tarGet')) {
      $toptrip = "1";
    } else {
      $toptrip = "0";
    }

    $StrDate = $this->input->post('dateShift') . " " . $this->input->post('timeShift');

    $data = array(

      'dateShift' => $this->input->post('dateShift'),
      'timeShift' => $StrDate,
      'overSizerCR1' => $this->input->post('overSizerCR1'),
      'overSizerCR2' => $this->input->post('overSizerCR2'),
      'overSizerCR3' => $this->input->post('overSizerCR3'),
      'overSizerCR4' => $this->input->post('overSizerCR4'),
      'overSizerCR5' => $this->input->post('overSizerCR5'),
      'overSizerCR6' => $this->input->post('overSizerCR6'),
      'TotalOverSizer' => $this->input->post('TotalOverSizer'),

      'companyName1' => $this->input->post('companyName1'),
      'trip785D_CR1_1' => $this->input->post('trip785D_CR1_1'),
      'trip785D_CR1_2' => $this->input->post('trip785D_CR1_2'),
      'trip785D_CR1_3' => $this->input->post('trip785D_CR1_3'),
      'trip785D_CR1_4' => $this->input->post('trip785D_CR1_4'),
      'trip785D_CR1_5' => $this->input->post('trip785D_CR1_5'),
      'trip785D_CR1_6' => $this->input->post('trip785D_CR1_6'),
      'Totaltrip785D_CR1' => $this->input->post('Totaltrip785D_CR1'),
      'subTotalbcm785D_CR1' => $this->input->post('subTotalbcm785D_CR1'),
      'Totalbcm785D_CR1' => $this->input->post('Totalbcm785D_CR1'),

      'companyName2' => $this->input->post('companyName2'),
      'trip777D_CR1_1' => $this->input->post('trip777D_CR1_1'),
      'trip777D_CR1_2' => $this->input->post('trip777D_CR1_2'),
      'trip777D_CR1_3' => $this->input->post('trip777D_CR1_3'),
      'trip777D_CR1_4' => $this->input->post('trip777D_CR1_4'),
      'trip777D_CR1_5' => $this->input->post('trip777D_CR1_5'),
      'trip777D_CR1_6' => $this->input->post('trip777D_CR1_6'),
      'Totaltrip777D_CR1' => $this->input->post('Totaltrip777D_CR1'),
      'subTotalbcm777D_CR1' => $this->input->post('subTotalbcm777D_CR1'),
      'Totalbcm777D_CR1' => $this->input->post('Totalbcm777D_CR1'),

      'companyName3' => $this->input->post('companyName3'),
      'tripEGAT_CR1_1' => $this->input->post('tripEGAT_CR1_1'),
      'tripEGAT_CR1_2' => $this->input->post('tripEGAT_CR1_2'),
      'tripEGAT_CR1_3' => $this->input->post('tripEGAT_CR1_3'),
      'tripEGAT_CR1_4' => $this->input->post('tripEGAT_CR1_4'),
      'tripEGAT_CR1_5' => $this->input->post('tripEGAT_CR1_5'),
      'tripEGAT_CR1_6' => $this->input->post('tripEGAT_CR1_6'),
      'TotaltripEGAT_CR1' => $this->input->post('TotaltripEGAT_CR1'),
      'subTotalbcmEGAT_CR1' => $this->input->post('subTotalbcmEGAT_CR1'),
      'TotalbcmEGAT_CR1' => $this->input->post('TotalbcmEGAT_CR1'),

      'companyName4' => $this->input->post('companyName4'),
      'trip12T_CR1_1' => $this->input->post('trip12T_CR1_1'),
      'trip12T_CR1_2' => $this->input->post('trip12T_CR1_2'),
      'trip12T_CR1_3' => $this->input->post('trip12T_CR1_3'),
      'trip12T_CR1_4' => $this->input->post('trip12T_CR1_4'),
      'trip12T_CR1_5' => $this->input->post('trip12T_CR1_5'),
      'trip12T_CR1_6' => $this->input->post('trip12T_CR1_6'),
      'Totaltrip12T_CR1' => $this->input->post('Totaltrip12T_CR1'),
      'subTotalbcm12T_CR1' => $this->input->post('subTotalbcm12T_CR1'),
      'Totalbcm12T_CR1' => $this->input->post('Totalbcm12T_CR1'),

      'companyName5' => $this->input->post('companyName5'),
      'trip12T_CR2_1' => $this->input->post('trip12T_CR2_1'),
      'trip12T_CR2_2' => $this->input->post('trip12T_CR2_2'),
      'trip12T_CR2_3' => $this->input->post('trip12T_CR2_3'),
      'trip12T_CR2_4' => $this->input->post('trip12T_CR2_4'),
      'trip12T_CR2_5' => $this->input->post('trip12T_CR2_5'),
      'trip12T_CR2_6' => $this->input->post('trip12T_CR2_6'),
      'Totaltrip12T_CR2' => $this->input->post('Totaltrip12T_CR2'),
      'subTotalbcm12T_CR2' => $this->input->post('subTotalbcm12T_CR2'),
      'Totalbcm12T_CR2' => $this->input->post('Totalbcm12T_CR2'),

      'companyName6' => $this->input->post('companyName6'),
      'trip12T_CR3_1' => $this->input->post('trip12T_CR3_1'),
      'trip12T_CR3_2' => $this->input->post('trip12T_CR3_2'),
      'trip12T_CR3_3' => $this->input->post('trip12T_CR3_3'),
      'trip12T_CR3_4' => $this->input->post('trip12T_CR3_4'),
      'trip12T_CR3_5' => $this->input->post('trip12T_CR3_5'),
      'trip12T_CR3_6' => $this->input->post('trip12T_CR3_6'),
      'Totaltrip12T_CR3' => $this->input->post('Totaltrip12T_CR3'),
      'subTotalbcm12T_CR3' => $this->input->post('subTotalbcm12T_CR3'),
      'Totalbcm12T_CR3' => $this->input->post('Totalbcm12T_CR3'),

      'companyName7' => $this->input->post('companyName7'),
      'trip12T_CR4_1' => $this->input->post('trip12T_CR4_1'),
      'trip12T_CR4_2' => $this->input->post('trip12T_CR4_2'),
      'trip12T_CR4_3' => $this->input->post('trip12T_CR4_3'),
      'trip12T_CR4_4' => $this->input->post('trip12T_CR4_4'),
      'trip12T_CR4_5' => $this->input->post('trip12T_CR4_5'),
      'trip12T_CR4_6' => $this->input->post('trip12T_CR4_6'),
      'Totaltrip12T_CR4' => $this->input->post('Totaltrip12T_CR4'),
      'subTotalbcm12T_CR4' => $this->input->post('subTotalbcm12T_CR4'),
      'Totalbcm12T_CR4' => $this->input->post('Totalbcm12T_CR4'),

      'companyName8' => $this->input->post('companyName8'),
      'trip16T_CR1_1' => $this->input->post('trip16T_CR1_1'),
      'trip16T_CR1_2' => $this->input->post('trip16T_CR1_2'),
      'trip16T_CR1_3' => $this->input->post('trip16T_CR1_3'),
      'trip16T_CR1_4' => $this->input->post('trip16T_CR1_4'),
      'trip16T_CR1_5' => $this->input->post('trip16T_CR1_5'),
      'trip16T_CR1_6' => $this->input->post('trip16T_CR1_6'),
      'Totaltrip16T_CR1' => $this->input->post('Totaltrip16T_CR1'),
      'subTotalbcm16T_CR1' => $this->input->post('subTotalbcm16T_CR1'),
      'Totalbcm16T_CR1' => $this->input->post('Totalbcm16T_CR1'),

      'companyName9' => $this->input->post('companyName9'),
      'trip16T_CR2_1' => $this->input->post('trip16T_CR2_1'),
      'trip16T_CR2_2' => $this->input->post('trip16T_CR2_2'),
      'trip16T_CR2_3' => $this->input->post('trip16T_CR2_3'),
      'trip16T_CR2_4' => $this->input->post('trip16T_CR2_4'),
      'trip16T_CR2_5' => $this->input->post('trip16T_CR2_5'),
      'trip16T_CR2_6' => $this->input->post('trip16T_CR2_6'),
      'Totaltrip16T_CR2' => $this->input->post('Totaltrip16T_CR2'),
      'subTotalbcm16T_CR2' => $this->input->post('subTotalbcm16T_CR2'),
      'Totalbcm16T_CR2' => $this->input->post('Totalbcm16T_CR2'),

      'companyName10' => $this->input->post('companyName10'),
      'trip16T_CR3_1' => $this->input->post('trip16T_CR3_1'),
      'trip16T_CR3_2' => $this->input->post('trip16T_CR3_2'),
      'trip16T_CR3_3' => $this->input->post('trip16T_CR3_3'),
      'trip16T_CR3_4' => $this->input->post('trip16T_CR3_4'),
      'trip16T_CR3_5' => $this->input->post('trip16T_CR3_5'),
      'trip16T_CR3_6' => $this->input->post('trip16T_CR3_6'),
      'Totaltrip16T_CR3' => $this->input->post('Totaltrip16T_CR3'),
      'subTotalbcm16T_CR3' => $this->input->post('subTotalbcm16T_CR3'),
      'Totalbcm16T_CR3' => $this->input->post('Totalbcm16T_CR3'),

      'companyName11' => $this->input->post('companyName11'),
      'trip16T_CR4_1' => $this->input->post('trip16T_CR4_1'),
      'trip16T_CR4_2' => $this->input->post('trip16T_CR4_2'),
      'trip16T_CR4_3' => $this->input->post('trip16T_CR4_3'),
      'trip16T_CR4_4' => $this->input->post('trip16T_CR4_4'),
      'trip16T_CR4_5' => $this->input->post('trip16T_CR4_5'),
      'trip16T_CR4_6' => $this->input->post('trip16T_CR4_6'),
      'Totaltrip16T_CR4' => $this->input->post('Totaltrip16T_CR4'),
      'subTotalbcm16T_CR4' => $this->input->post('subTotalbcm16T_CR4'),
      'Totalbcm16T_CR4' => $this->input->post('Totalbcm16T_CR4'),

      'companyName12' => $this->input->post('companyName12'),
      'trip25T_CR1_1' => $this->input->post('trip25T_CR1_1'),
      'trip25T_CR1_2' => $this->input->post('trip25T_CR1_2'),
      'trip25T_CR1_3' => $this->input->post('trip25T_CR1_3'),
      'trip25T_CR1_4' => $this->input->post('trip25T_CR1_4'),
      'trip25T_CR1_5' => $this->input->post('trip25T_CR1_5'),
      'trip25T_CR1_6' => $this->input->post('trip25T_CR1_6'),
      'Totaltrip25T_CR1' => $this->input->post('Totaltrip25T_CR1'),
      'subTotalbcm25T_CR1' => $this->input->post('subTotalbcm25T_CR1'),
      'Totalbcm25T_CR1' => $this->input->post('Totalbcm25T_CR1'),

      'companyName13' => $this->input->post('companyName13'),
      'trip25T_CR2_1' => $this->input->post('trip25T_CR2_1'),
      'trip25T_CR2_2' => $this->input->post('trip25T_CR2_2'),
      'trip25T_CR2_3' => $this->input->post('trip25T_CR2_3'),
      'trip25T_CR2_4' => $this->input->post('trip25T_CR2_4'),
      'trip25T_CR2_5' => $this->input->post('trip25T_CR2_5'),
      'trip25T_CR2_6' => $this->input->post('trip25T_CR2_6'),
      'Totaltrip25T_CR2' => $this->input->post('Totaltrip25T_CR2'),
      'subTotalbcm25T_CR2' => $this->input->post('subTotalbcm25T_CR2'),
      'Totalbcm25T_CR2' => $this->input->post('Totalbcm25T_CR2'),

      'companyName14' => $this->input->post('companyName14'),
      'trip25T_CR3_1' => $this->input->post('trip25T_CR3_1'),
      'trip25T_CR3_2' => $this->input->post('trip25T_CR3_2'),
      'trip25T_CR3_3' => $this->input->post('trip25T_CR3_3'),
      'trip25T_CR3_4' => $this->input->post('trip25T_CR3_4'),
      'trip25T_CR3_5' => $this->input->post('trip25T_CR3_5'),
      'trip25T_CR3_6' => $this->input->post('trip25T_CR3_6'),
      'Totaltrip25T_CR3' => $this->input->post('Totaltrip25T_CR3'),
      'subTotalbcm25T_CR3' => $this->input->post('subTotalbcm25T_CR3'),
      'Totalbcm25T_CR3' => $this->input->post('Totalbcm25T_CR3'),

      'companyName15' => $this->input->post('companyName15'),
      'trip25T_CR4_1' => $this->input->post('trip25T_CR4_1'),
      'trip25T_CR4_2' => $this->input->post('trip25T_CR4_2'),
      'trip25T_CR4_3' => $this->input->post('trip25T_CR4_3'),
      'trip25T_CR4_4' => $this->input->post('trip25T_CR4_4'),
      'trip25T_CR4_5' => $this->input->post('trip25T_CR4_5'),
      'trip25T_CR4_6' => $this->input->post('trip25T_CR4_6'),
      'Totaltrip25T_CR4' => $this->input->post('Totaltrip25T_CR4'),
      'subTotalbcm25T_CR4' => $this->input->post('subTotalbcm25T_CR4'),
      'Totalbcm25T_CR4' => $this->input->post('Totalbcm25T_CR4'),

      'companyName16' => $this->input->post('companyName16'),
      'trip25T_CR5_1' => $this->input->post('trip25T_CR5_1'),
      'trip25T_CR5_2' => $this->input->post('trip25T_CR5_2'),
      'trip25T_CR5_3' => $this->input->post('trip25T_CR5_3'),
      'trip25T_CR5_4' => $this->input->post('trip25T_CR5_4'),
      'trip25T_CR5_5' => $this->input->post('trip25T_CR5_5'),
      'trip25T_CR5_6' => $this->input->post('trip25T_CR5_6'),
      'Totaltrip25T_CR5' => $this->input->post('Totaltrip25T_CR5'),
      'subTotalbcm25T_CR5' => $this->input->post('subTotalbcm25T_CR5'),
      'Totalbcm25T_CR5' => $this->input->post('Totalbcm25T_CR5'),

      'companyName17' => $this->input->post('companyName17'),
      'trip25T_CR6_1' => $this->input->post('trip25T_CR6_1'),
      'trip25T_CR6_2' => $this->input->post('trip25T_CR6_2'),
      'trip25T_CR6_3' => $this->input->post('trip25T_CR6_3'),
      'trip25T_CR6_4' => $this->input->post('trip25T_CR6_4'),
      'trip25T_CR6_5' => $this->input->post('trip25T_CR6_5'),
      'trip25T_CR6_6' => $this->input->post('trip25T_CR6_6'),
      'Totaltrip25T_CR6' => $this->input->post('Totaltrip25T_CR6'),
      'subTotalbcm25T_CR6' => $this->input->post('subTotalbcm25T_CR6'),
      'Totalbcm25T_CR6' => $this->input->post('Totalbcm25T_CR6'),

      'companyName18' => $this->input->post('companyName18'),
      'trip25T_CR7_1' => $this->input->post('trip25T_CR7_1'),
      'trip25T_CR7_2' => $this->input->post('trip25T_CR7_2'),
      'trip25T_CR7_3' => $this->input->post('trip25T_CR7_3'),
      'trip25T_CR7_4' => $this->input->post('trip25T_CR7_4'),
      'trip25T_CR7_5' => $this->input->post('trip25T_CR7_5'),
      'trip25T_CR7_6' => $this->input->post('trip25T_CR7_6'),
      'Totaltrip25T_CR7' => $this->input->post('Totaltrip25T_CR7'),
      'subTotalbcm25T_CR7' => $this->input->post('subTotalbcm25T_CR7'),
      'Totalbcm25T_CR7' => $this->input->post('Totalbcm25T_CR7'),

      'companyName19' => $this->input->post('companyName19'),
      'trip25T_CR8_1' => $this->input->post('trip25T_CR8_1'),
      'trip25T_CR8_2' => $this->input->post('trip25T_CR8_2'),
      'trip25T_CR8_3' => $this->input->post('trip25T_CR8_3'),
      'trip25T_CR8_4' => $this->input->post('trip25T_CR8_4'),
      'trip25T_CR8_5' => $this->input->post('trip25T_CR8_5'),
      'trip25T_CR8_6' => $this->input->post('trip25T_CR8_6'),
      'Totaltrip25T_CR8' => $this->input->post('Totaltrip25T_CR8'),
      'subTotalbcm25T_CR8' => $this->input->post('subTotalbcm25T_CR8'),
      'Totalbcm25T_CR8' => $this->input->post('Totalbcm25T_CR8'),

      'companyName191' => $this->input->post('companyName191'),
      'trip25T_CR9_1' => $this->input->post('trip25T_CR9_1'),
      'trip25T_CR9_2' => $this->input->post('trip25T_CR9_2'),
      'trip25T_CR9_3' => $this->input->post('trip25T_CR9_3'),
      'trip25T_CR9_4' => $this->input->post('trip25T_CR9_4'),
      'trip25T_CR9_5' => $this->input->post('trip25T_CR9_5'),
      'trip25T_CR9_6' => $this->input->post('trip25T_CR9_6'),
      'Totaltrip25T_CR9' => $this->input->post('Totaltrip25T_CR9'),
      'subTotalbcm25T_CR9' => $this->input->post('subTotalbcm25T_CR9'),
      'Totalbcm25T_CR9' => $this->input->post('Totalbcm25T_CR9'),

      'companyName192' => $this->input->post('companyName192'),
      'trip25T_CR10_1' => $this->input->post('trip25T_CR10_1'),
      'trip25T_CR10_2' => $this->input->post('trip25T_CR10_2'),
      'trip25T_CR10_3' => $this->input->post('trip25T_CR10_3'),
      'trip25T_CR10_4' => $this->input->post('trip25T_CR10_4'),
      'trip25T_CR10_5' => $this->input->post('trip25T_CR10_5'),
      'trip25T_CR10_6' => $this->input->post('trip25T_CR10_6'),
      'Totaltrip25T_CR10' => $this->input->post('Totaltrip25T_CR10'),
      'subTotalbcm25T_CR10' => $this->input->post('subTotalbcm25T_CR10'),
      'Totalbcm25T_CR10' => $this->input->post('Totalbcm25T_CR10'),

      'companyName193' => $this->input->post('companyName193'),
      'trip25T_CR11_1' => $this->input->post('trip25T_CR11_1'),
      'trip25T_CR11_2' => $this->input->post('trip25T_CR11_2'),
      'trip25T_CR11_3' => $this->input->post('trip25T_CR11_3'),
      'trip25T_CR11_4' => $this->input->post('trip25T_CR11_4'),
      'trip25T_CR11_5' => $this->input->post('trip25T_CR11_5'),
      'trip25T_CR11_6' => $this->input->post('trip25T_CR11_6'),
      'Totaltrip25T_CR11' => $this->input->post('Totaltrip25T_CR11'),
      'subTotalbcm25T_CR11' => $this->input->post('subTotalbcm25T_CR11'),
      'Totalbcm25T_CR11' => $this->input->post('Totalbcm25T_CR11'),

      'companyName194' => $this->input->post('companyName194'),
      'trip25T_CR12_1' => $this->input->post('trip25T_CR12_1'),
      'trip25T_CR12_2' => $this->input->post('trip25T_CR12_2'),
      'trip25T_CR12_3' => $this->input->post('trip25T_CR12_3'),
      'trip25T_CR12_4' => $this->input->post('trip25T_CR12_4'),
      'trip25T_CR12_5' => $this->input->post('trip25T_CR12_5'),
      'trip25T_CR12_6' => $this->input->post('trip25T_CR12_6'),
      'Totaltrip25T_CR12' => $this->input->post('Totaltrip25T_CR12'),
      'subTotalbcm25T_CR12' => $this->input->post('subTotalbcm25T_CR12'),
      'Totalbcm25T_CR12' => $this->input->post('Totalbcm25T_CR12'),

      'companyName195' => $this->input->post('companyName195'),
      'trip25T_CR13_1' => $this->input->post('trip25T_CR13_1'),
      'trip25T_CR13_2' => $this->input->post('trip25T_CR13_2'),
      'trip25T_CR13_3' => $this->input->post('trip25T_CR13_3'),
      'trip25T_CR13_4' => $this->input->post('trip25T_CR13_4'),
      'trip25T_CR13_5' => $this->input->post('trip25T_CR13_5'),
      'trip25T_CR13_6' => $this->input->post('trip25T_CR13_6'),
      'Totaltrip25T_CR13' => $this->input->post('Totaltrip25T_CR13'),
      'subTotalbcm25T_CR13' => $this->input->post('subTotalbcm25T_CR13'),
      'Totalbcm25T_CR13' => $this->input->post('Totalbcm25T_CR13'),

      'companyName196' => $this->input->post('companyName196'),
      'trip25T_CR14_1' => $this->input->post('trip25T_CR14_1'),
      'trip25T_CR14_2' => $this->input->post('trip25T_CR14_2'),
      'trip25T_CR14_3' => $this->input->post('trip25T_CR14_3'),
      'trip25T_CR14_4' => $this->input->post('trip25T_CR14_4'),
      'trip25T_CR14_5' => $this->input->post('trip25T_CR14_5'),
      'trip25T_CR14_6' => $this->input->post('trip25T_CR14_6'),
      'Totaltrip25T_CR14' => $this->input->post('Totaltrip25T_CR14'),
      'subTotalbcm25T_CR14' => $this->input->post('subTotalbcm25T_CR14'),
      'Totalbcm25T_CR14' => $this->input->post('Totalbcm25T_CR14'),

      'companyName20' => $this->input->post('companyName20'),
      'trip30T_CR1_1' => $this->input->post('trip30T_CR1_1'),
      'trip30T_CR1_2' => $this->input->post('trip30T_CR1_2'),
      'trip30T_CR1_3' => $this->input->post('trip30T_CR1_3'),
      'trip30T_CR1_4' => $this->input->post('trip30T_CR1_4'),
      'trip30T_CR1_5' => $this->input->post('trip30T_CR1_5'),
      'trip30T_CR1_6' => $this->input->post('trip30T_CR1_6'),
      'Totaltrip30T_CR1' => $this->input->post('Totaltrip30T_CR1'),
      'subTotalbcm30T_CR1' => $this->input->post('subTotalbcm30T_CR1'),
      'Totalbcm30T_CR1' => $this->input->post('Totalbcm30T_CR1'),

      'companyName21' => $this->input->post('companyName21'),
      'trip30T_CR2_1' => $this->input->post('trip30T_CR2_1'),
      'trip30T_CR2_2' => $this->input->post('trip30T_CR2_2'),
      'trip30T_CR2_3' => $this->input->post('trip30T_CR2_3'),
      'trip30T_CR2_4' => $this->input->post('trip30T_CR2_4'),
      'trip30T_CR2_5' => $this->input->post('trip30T_CR2_5'),
      'trip30T_CR2_6' => $this->input->post('trip30T_CR2_6'),
      'Totaltrip30T_CR2' => $this->input->post('Totaltrip30T_CR2'),
      'subTotalbcm30T_CR2' => $this->input->post('subTotalbcm30T_CR2'),
      'Totalbcm30T_CR2' => $this->input->post('Totalbcm30T_CR2'),

      'companyName22' => $this->input->post('companyName22'),
      'trip30T_CR3_1' => $this->input->post('trip30T_CR3_1'),
      'trip30T_CR3_2' => $this->input->post('trip30T_CR3_2'),
      'trip30T_CR3_3' => $this->input->post('trip30T_CR3_3'),
      'trip30T_CR3_4' => $this->input->post('trip30T_CR3_4'),
      'trip30T_CR3_5' => $this->input->post('trip30T_CR3_5'),
      'trip30T_CR3_6' => $this->input->post('trip30T_CR3_6'),
      'Totaltrip30T_CR3' => $this->input->post('Totaltrip30T_CR3'),
      'subTotalbcm30T_CR3' => $this->input->post('subTotalbcm30T_CR3'),
      'Totalbcm30T_CR3' => $this->input->post('Totalbcm30T_CR3'),


      'companyName23' => $this->input->post('companyName23'),
      'trip30T_CR4_1' => $this->input->post('trip30T_CR4_1'),
      'trip30T_CR4_2' => $this->input->post('trip30T_CR4_2'),
      'trip30T_CR4_3' => $this->input->post('trip30T_CR4_3'),
      'trip30T_CR4_4' => $this->input->post('trip30T_CR4_4'),
      'trip30T_CR4_5' => $this->input->post('trip30T_CR4_5'),
      'trip30T_CR4_6' => $this->input->post('trip30T_CR4_6'),
      'Totaltrip30T_CR4' => $this->input->post('Totaltrip30T_CR4'),
      'subTotalbcm30T_CR4' => $this->input->post('subTotalbcm30T_CR4'),
      'Totalbcm30T_CR4' => $this->input->post('Totalbcm30T_CR4'),

      'companyName24' => $this->input->post('companyName24'),
      'trip30T_CR5_1' => $this->input->post('trip30T_CR5_1'),
      'trip30T_CR5_2' => $this->input->post('trip30T_CR5_2'),
      'trip30T_CR5_3' => $this->input->post('trip30T_CR5_3'),
      'trip30T_CR5_4' => $this->input->post('trip30T_CR5_4'),
      'trip30T_CR5_5' => $this->input->post('trip30T_CR5_5'),
      'trip30T_CR5_6' => $this->input->post('trip30T_CR5_6'),
      'Totaltrip30T_CR5' => $this->input->post('Totaltrip30T_CR5'),
      'subTotalbcm30T_CR5' => $this->input->post('subTotalbcm30T_CR5'),
      'Totalbcm30T_CR5' => $this->input->post('Totalbcm30T_CR5'),

      'companyName25' => $this->input->post('companyName25'),
      'trip30T_CR6_1' => $this->input->post('trip30T_CR6_1'),
      'trip30T_CR6_2' => $this->input->post('trip30T_CR6_2'),
      'trip30T_CR6_3' => $this->input->post('trip30T_CR6_3'),
      'trip30T_CR6_4' => $this->input->post('trip30T_CR6_4'),
      'trip30T_CR6_5' => $this->input->post('trip30T_CR6_5'),
      'trip30T_CR6_6' => $this->input->post('trip30T_CR6_6'),
      'Totaltrip30T_CR6' => $this->input->post('Totaltrip30T_CR6'),
      'subTotalbcm30T_CR6' => $this->input->post('subTotalbcm30T_CR6'),
      'Totalbcm30T_CR6' => $this->input->post('Totalbcm30T_CR6'),

      'TotalTripJob1' => $this->input->post('TotalTripJob1'),
      'TotalBcmJob1' => $this->input->post('TotalBcmJob1'),
      'SumTotalBcmJob1' => $this->input->post('SumTotalBcmJob1'),
      'TotalTripJob3' => $this->input->post('TotalTripJob3'),
      'TotalBcmJob3' => $this->input->post('TotalBcmJob3'),
      'SumTotalBcmJob3' => $this->input->post('SumTotalBcmJob3'),
      'TotalTripJob1_3' => $this->input->post('TotalTripJob1_3'),
      'TotalBcmJob1_3' => $this->input->post('TotalBcmJob1_3'),
      'SumTotalBcmJob1_3' => $this->input->post('SumTotalBcmJob1_3'),
      'toptrip' => $toptrip



    );



    $this->db->where('id', $this->input->post('id'));
    $Query = $this->db->update('tb_production', $data);
  }

  public function get_DataProduction()
  {
    $checkNowdate = date("Y-m-d");
    $Nowdatetext = date("d/m/Y");

    //ถ้าข้ามวันและอยู่ในช่วงก่อนถึงเวลาสิ้นสุดช่วงที่สอง ให้ปรับเป็นค่าวันที่เมื่อวาน
    if (time() >= strtotime("00:00") and time() < strtotime("07:30")) {

      $checkNowdate = date("Y-m-d", strtotime("last day"));
    }

    $date_start1 = "$checkNowdate 07:30";
    $date_end1 = date("Y-m-d H:i", strtotime($date_start1 . "+12 hour"));
    $date_end1 . "<br>";
    $date_start2 = "$checkNowdate 19:30";
    $date_end2 = date("Y-m-d H:i", strtotime($date_start2 . "+12 hour"));
    $date_end2 . "<br>";




    if (time() >= strtotime($date_start1) and time() <= strtotime($date_end1)) {
      $W = "tb_production.timeShift >= '$date_start1' AND tb_production.timeShift < '$date_end1'";
      // $notFound="ไม่พบข้อมูลเที่ยว<br> วันที่ $Nowdatetext 07:30-19:00 น.";
    }

    if (time() >= strtotime($date_start2) and time() <= strtotime($date_end2)) {
      $W = "tb_production.timeShift >= '$date_start2' AND tb_production.timeShift < '$date_end2'";
      //$notFound="ไม่พบข้อมูลเที่ยว<br> วันที่ $Nowdatetext 19:30-07:00 น.";
    }
    $this->db->select('*');
    $this->db->from('tb_production');
    $this->db->where($W);
    $this->db->order_by('tb_production.id', 'DESC');
    $this->db->limit(1);
    $Query = $this->db->get();
    if ($Query->num_rows() > 0) {
      $data = $Query->row();
      return $data;
    }
    return FALSE;
    // $Query=$this->db->get();
    // return $Query->result();

  }
  public function get_DataProductionAcc()
  {

    $checkNowdate = date("Y-m-d");
    $Nowdatetext = date("d/m/Y");

    //ถ้าข้ามวันและอยู่ในช่วงก่อนถึงเวลาสิ้นสุดช่วงที่สอง ให้ปรับเป็นค่าวันที่เมื่อวาน
    if (time() >= strtotime("00:00") and time() < strtotime("07:30")) {

      $checkNowdate = date("Y-m-d", strtotime("last day"));
    }

    $date_start1 = "$checkNowdate 07:30";
    $date_end1 = date("Y-m-d H:i", strtotime($date_start1 . "+12 hour"));
    $date_end1 . "<br>";
    $date_start2 = "$checkNowdate 19:30";
    $date_end2 = date("Y-m-d H:i", strtotime($date_start2 . "+12 hour"));
    $date_end2 . "<br>";




    if (time() >= strtotime($date_start1) and time() <= strtotime($date_end1)) {
      $W = "tb_production.timeShift >= '$date_start1' AND tb_production.timeShift < '$date_end1'";
      //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 07:30-19:00 น.";
    }

    if (time() >= strtotime($date_start2) and time() <= strtotime($date_end2)) {
      $W = "tb_production.timeShift >= '$date_start2' AND tb_production.timeShift < '$date_end2'";
      //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 19:30-07:00 น.";
    }

    $this->db->select('*');
    $this->db->select_sum('overSizerCR1');
    $this->db->select_sum('overSizerCR2');
    $this->db->select_sum('overSizerCR3');
    $this->db->select_sum('overSizerCR4');
    $this->db->select_sum('overSizerCR5');
    $this->db->select_sum('overSizerCR6');
    $this->db->select_sum('trip785D_CR1_1');
    $this->db->select_sum('trip785D_CR1_2');
    $this->db->select_sum('trip785D_CR1_3');
    $this->db->select_sum('trip785D_CR1_4');
    $this->db->select_sum('trip785D_CR1_5');
    $this->db->select_sum('trip785D_CR1_6');
    $this->db->select_sum('Totaltrip785D_CR1');
    $this->db->select_sum('subTotalbcm785D_CR1');
    $this->db->select_sum('Totalbcm785D_CR1');
    $this->db->select_sum('trip777D_CR1_1');
    $this->db->select_sum('trip777D_CR1_2');
    $this->db->select_sum('trip777D_CR1_3');
    $this->db->select_sum('trip777D_CR1_4');
    $this->db->select_sum('trip777D_CR1_5');
    $this->db->select_sum('trip777D_CR1_6');
    $this->db->select_sum('Totaltrip777D_CR1');
    $this->db->select_sum('subTotalbcm777D_CR1');
    $this->db->select_sum('Totalbcm777D_CR1');
    $this->db->select_sum('tripEGAT_CR1_1');
    $this->db->select_sum('tripEGAT_CR1_2');
    $this->db->select_sum('tripEGAT_CR1_3');
    $this->db->select_sum('tripEGAT_CR1_4');
    $this->db->select_sum('tripEGAT_CR1_5');
    $this->db->select_sum('tripEGAT_CR1_6');
    $this->db->select_sum('TotaltripEGAT_CR1');
    $this->db->select_sum('subTotalbcmEGAT_CR1');
    $this->db->select_sum('TotalbcmEGAT_CR1');
    $this->db->select_sum('trip12T_CR1_1');
    $this->db->select_sum('trip12T_CR1_2');
    $this->db->select_sum('trip12T_CR1_3');
    $this->db->select_sum('trip12T_CR1_4');
    $this->db->select_sum('trip12T_CR1_5');
    $this->db->select_sum('trip12T_CR1_6');
    $this->db->select_sum('Totaltrip12T_CR1');
    $this->db->select_sum('subTotalbcm12T_CR1');
    $this->db->select_sum('Totalbcm12T_CR1');
    $this->db->select_sum('trip12T_CR2_1');
    $this->db->select_sum('trip12T_CR2_2');
    $this->db->select_sum('trip12T_CR2_3');
    $this->db->select_sum('trip12T_CR2_4');
    $this->db->select_sum('trip12T_CR2_5');
    $this->db->select_sum('trip12T_CR2_6');
    $this->db->select_sum('Totaltrip12T_CR2');
    $this->db->select_sum('subTotalbcm12T_CR2');
    $this->db->select_sum('Totalbcm12T_CR2');
    $this->db->select_sum('trip12T_CR3_1');
    $this->db->select_sum('trip12T_CR3_2');
    $this->db->select_sum('trip12T_CR3_3');
    $this->db->select_sum('trip12T_CR3_4');
    $this->db->select_sum('trip12T_CR3_5');
    $this->db->select_sum('trip12T_CR3_6');
    $this->db->select_sum('Totaltrip12T_CR3');
    $this->db->select_sum('subTotalbcm12T_CR3');
    $this->db->select_sum('Totalbcm12T_CR3');
    $this->db->select_sum('trip12T_CR4_1');
    $this->db->select_sum('trip12T_CR4_2');
    $this->db->select_sum('trip12T_CR4_3');
    $this->db->select_sum('trip12T_CR4_4');
    $this->db->select_sum('trip12T_CR4_5');
    $this->db->select_sum('trip12T_CR4_6');
    $this->db->select_sum('Totaltrip12T_CR4');
    $this->db->select_sum('subTotalbcm12T_CR4');
    $this->db->select_sum('Totalbcm12T_CR4');
    $this->db->select_sum('trip16T_CR1_1');
    $this->db->select_sum('trip16T_CR1_2');
    $this->db->select_sum('trip16T_CR1_3');
    $this->db->select_sum('trip16T_CR1_4');
    $this->db->select_sum('trip16T_CR1_5');
    $this->db->select_sum('trip16T_CR1_6');
    $this->db->select_sum('Totaltrip16T_CR1');
    $this->db->select_sum('subTotalbcm16T_CR1');
    $this->db->select_sum('Totalbcm16T_CR1');
    $this->db->select_sum('trip16T_CR2_1');
    $this->db->select_sum('trip16T_CR2_2');
    $this->db->select_sum('trip16T_CR2_3');
    $this->db->select_sum('trip16T_CR2_4');
    $this->db->select_sum('trip16T_CR2_5');
    $this->db->select_sum('trip16T_CR2_6');
    $this->db->select_sum('Totaltrip16T_CR2');
    $this->db->select_sum('subTotalbcm16T_CR2');
    $this->db->select_sum('Totalbcm16T_CR2');
    $this->db->select_sum('trip16T_CR3_1');
    $this->db->select_sum('trip16T_CR3_2');
    $this->db->select_sum('trip16T_CR3_3');
    $this->db->select_sum('trip16T_CR3_4');
    $this->db->select_sum('trip16T_CR3_5');
    $this->db->select_sum('trip16T_CR3_6');
    $this->db->select_sum('Totaltrip16T_CR3');
    $this->db->select_sum('subTotalbcm16T_CR3');
    $this->db->select_sum('Totalbcm16T_CR3');
    $this->db->select_sum('trip16T_CR4_1');
    $this->db->select_sum('trip16T_CR4_2');
    $this->db->select_sum('trip16T_CR4_3');
    $this->db->select_sum('trip16T_CR4_4');
    $this->db->select_sum('trip16T_CR4_5');
    $this->db->select_sum('trip16T_CR4_6');
    $this->db->select_sum('Totaltrip16T_CR4');
    $this->db->select_sum('subTotalbcm16T_CR4');
    $this->db->select_sum('Totalbcm16T_CR4');
    $this->db->select_sum('trip25T_CR1_1');
    $this->db->select_sum('trip25T_CR1_2');
    $this->db->select_sum('trip25T_CR1_3');
    $this->db->select_sum('trip25T_CR1_4');
    $this->db->select_sum('trip25T_CR1_5');
    $this->db->select_sum('trip25T_CR1_6');
    $this->db->select_sum('Totaltrip25T_CR1');
    $this->db->select_sum('subTotalbcm25T_CR1');
    $this->db->select_sum('Totalbcm25T_CR1');
    $this->db->select_sum('trip25T_CR2_1');
    $this->db->select_sum('trip25T_CR2_2');
    $this->db->select_sum('trip25T_CR2_3');
    $this->db->select_sum('trip25T_CR2_4');
    $this->db->select_sum('trip25T_CR2_5');
    $this->db->select_sum('trip25T_CR2_6');
    $this->db->select_sum('Totaltrip25T_CR2');
    $this->db->select_sum('subTotalbcm25T_CR2');
    $this->db->select_sum('Totalbcm25T_CR2');
    $this->db->select_sum('trip25T_CR3_1');
    $this->db->select_sum('trip25T_CR3_2');
    $this->db->select_sum('trip25T_CR3_3');
    $this->db->select_sum('trip25T_CR3_4');
    $this->db->select_sum('trip25T_CR3_5');
    $this->db->select_sum('trip25T_CR3_6');
    $this->db->select_sum('Totaltrip25T_CR3');
    $this->db->select_sum('subTotalbcm25T_CR3');
    $this->db->select_sum('Totalbcm25T_CR3');
    $this->db->select_sum('trip25T_CR4_1');
    $this->db->select_sum('trip25T_CR4_2');
    $this->db->select_sum('trip25T_CR4_3');
    $this->db->select_sum('trip25T_CR4_4');
    $this->db->select_sum('trip25T_CR4_5');
    $this->db->select_sum('trip25T_CR4_6');
    $this->db->select_sum('Totaltrip25T_CR4');
    $this->db->select_sum('subTotalbcm25T_CR4');
    $this->db->select_sum('Totalbcm25T_CR4');
    $this->db->select_sum('trip25T_CR5_1');
    $this->db->select_sum('trip25T_CR5_2');
    $this->db->select_sum('trip25T_CR5_3');
    $this->db->select_sum('trip25T_CR5_4');
    $this->db->select_sum('trip25T_CR5_5');
    $this->db->select_sum('trip25T_CR5_6');
    $this->db->select_sum('Totaltrip25T_CR5');
    $this->db->select_sum('subTotalbcm25T_CR5');
    $this->db->select_sum('Totalbcm25T_CR5');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR7_1');
    $this->db->select_sum('trip25T_CR7_2');
    $this->db->select_sum('trip25T_CR7_3');
    $this->db->select_sum('trip25T_CR7_4');
    $this->db->select_sum('trip25T_CR7_5');
    $this->db->select_sum('trip25T_CR7_6');
    $this->db->select_sum('Totaltrip25T_CR7');
    $this->db->select_sum('subTotalbcm25T_CR7');
    $this->db->select_sum('Totalbcm25T_CR7');
    $this->db->select_sum('trip25T_CR8_1');
    $this->db->select_sum('trip25T_CR8_2');
    $this->db->select_sum('trip25T_CR8_3');
    $this->db->select_sum('trip25T_CR8_4');
    $this->db->select_sum('trip25T_CR8_5');
    $this->db->select_sum('trip25T_CR8_6');
    $this->db->select_sum('Totaltrip25T_CR8');
    $this->db->select_sum('subTotalbcm25T_CR8');
    $this->db->select_sum('Totalbcm25T_CR8');
    $this->db->select_sum('trip25T_CR9_1');
    $this->db->select_sum('trip25T_CR9_2');
    $this->db->select_sum('trip25T_CR9_3');
    $this->db->select_sum('trip25T_CR9_4');
    $this->db->select_sum('trip25T_CR9_5');
    $this->db->select_sum('trip25T_CR9_6');
    $this->db->select_sum('Totaltrip25T_CR9');
    $this->db->select_sum('subTotalbcm25T_CR9');
    $this->db->select_sum('Totalbcm25T_CR9');
    $this->db->select_sum('trip25T_CR10_1');
    $this->db->select_sum('trip25T_CR10_2');
    $this->db->select_sum('trip25T_CR10_3');
    $this->db->select_sum('trip25T_CR10_4');
    $this->db->select_sum('trip25T_CR10_5');
    $this->db->select_sum('trip25T_CR10_6');
    $this->db->select_sum('Totaltrip25T_CR10');
    $this->db->select_sum('subTotalbcm25T_CR10');
    $this->db->select_sum('Totalbcm25T_CR10');
    $this->db->select_sum('trip25T_CR11_1');
    $this->db->select_sum('trip25T_CR11_2');
    $this->db->select_sum('trip25T_CR11_3');
    $this->db->select_sum('trip25T_CR11_4');
    $this->db->select_sum('trip25T_CR11_5');
    $this->db->select_sum('trip25T_CR11_6');
    $this->db->select_sum('Totaltrip25T_CR11');
    $this->db->select_sum('subTotalbcm25T_CR11');
    $this->db->select_sum('Totalbcm25T_CR11');
    $this->db->select_sum('trip25T_CR12_1');
    $this->db->select_sum('trip25T_CR12_2');
    $this->db->select_sum('trip25T_CR12_3');
    $this->db->select_sum('trip25T_CR12_4');
    $this->db->select_sum('trip25T_CR12_5');
    $this->db->select_sum('trip25T_CR12_6');
    $this->db->select_sum('Totaltrip25T_CR12');
    $this->db->select_sum('subTotalbcm25T_CR12');
    $this->db->select_sum('Totalbcm25T_CR12');
    $this->db->select_sum('trip25T_CR13_1');
    $this->db->select_sum('trip25T_CR13_2');
    $this->db->select_sum('trip25T_CR13_3');
    $this->db->select_sum('trip25T_CR13_4');
    $this->db->select_sum('trip25T_CR13_5');
    $this->db->select_sum('trip25T_CR13_6');
    $this->db->select_sum('Totaltrip25T_CR13');
    $this->db->select_sum('subTotalbcm25T_CR13');
    $this->db->select_sum('Totalbcm25T_CR13');
    $this->db->select_sum('trip25T_CR14_1');
    $this->db->select_sum('trip25T_CR14_2');
    $this->db->select_sum('trip25T_CR14_3');
    $this->db->select_sum('trip25T_CR14_4');
    $this->db->select_sum('trip25T_CR14_5');
    $this->db->select_sum('trip25T_CR14_6');
    $this->db->select_sum('Totaltrip25T_CR14');
    $this->db->select_sum('subTotalbcm25T_CR14');
    $this->db->select_sum('Totalbcm25T_CR14');
    $this->db->select_sum('trip30T_CR1_1');
    $this->db->select_sum('trip30T_CR1_2');
    $this->db->select_sum('trip30T_CR1_3');
    $this->db->select_sum('trip30T_CR1_4');
    $this->db->select_sum('trip30T_CR1_5');
    $this->db->select_sum('trip30T_CR1_6');
    $this->db->select_sum('Totaltrip30T_CR1');
    $this->db->select_sum('subTotalbcm30T_CR1');
    $this->db->select_sum('Totalbcm30T_CR1');
    $this->db->select_sum('trip30T_CR2_1');
    $this->db->select_sum('trip30T_CR2_2');
    $this->db->select_sum('trip30T_CR2_3');
    $this->db->select_sum('trip30T_CR2_4');
    $this->db->select_sum('trip30T_CR2_5');
    $this->db->select_sum('trip30T_CR2_6');
    $this->db->select_sum('Totaltrip30T_CR2');
    $this->db->select_sum('subTotalbcm30T_CR2');
    $this->db->select_sum('Totalbcm30T_CR2');
    $this->db->select_sum('trip30T_CR3_1');
    $this->db->select_sum('trip30T_CR3_2');
    $this->db->select_sum('trip30T_CR3_3');
    $this->db->select_sum('trip30T_CR3_4');
    $this->db->select_sum('trip30T_CR3_5');
    $this->db->select_sum('trip30T_CR3_6');
    $this->db->select_sum('Totaltrip30T_CR3');
    $this->db->select_sum('subTotalbcm30T_CR3');
    $this->db->select_sum('Totalbcm30T_CR3');
    $this->db->select_sum('trip30T_CR4_1');
    $this->db->select_sum('trip30T_CR4_2');
    $this->db->select_sum('trip30T_CR4_3');
    $this->db->select_sum('trip30T_CR4_4');
    $this->db->select_sum('trip30T_CR4_5');
    $this->db->select_sum('trip30T_CR4_6');
    $this->db->select_sum('Totaltrip30T_CR4');
    $this->db->select_sum('subTotalbcm30T_CR4');
    $this->db->select_sum('Totalbcm30T_CR4');
    $this->db->select_sum('trip30T_CR5_1');
    $this->db->select_sum('trip30T_CR5_2');
    $this->db->select_sum('trip30T_CR5_3');
    $this->db->select_sum('trip30T_CR5_4');
    $this->db->select_sum('trip30T_CR5_5');
    $this->db->select_sum('trip30T_CR5_6');
    $this->db->select_sum('Totaltrip30T_CR5');
    $this->db->select_sum('subTotalbcm30T_CR5');
    $this->db->select_sum('Totalbcm30T_CR5');
    $this->db->select_sum('trip30T_CR6_1');
    $this->db->select_sum('trip30T_CR6_2');
    $this->db->select_sum('trip30T_CR6_3');
    $this->db->select_sum('trip30T_CR6_4');
    $this->db->select_sum('trip30T_CR6_5');
    $this->db->select_sum('trip30T_CR6_6');
    $this->db->select_sum('Totaltrip30T_CR6');
    $this->db->select_sum('subTotalbcm30T_CR6');
    $this->db->select_sum('Totalbcm30T_CR6');
    $this->db->select_sum('TotalTripJob1');
    $this->db->select_sum('TotalBcmJob1');
    $this->db->select_sum('SumTotalBcmJob1');
    $this->db->select_sum('TotalTripJob3');
    $this->db->select_sum('TotalBcmJob3');
    $this->db->select_sum('SumTotalBcmJob3');
    $this->db->select_sum('TotalTripJob1_3');
    $this->db->select_sum('TotalBcmJob1_3');
    $this->db->select_sum('SumTotalBcmJob1_3');
    $this->db->select_sum('toptrip');
    $this->db->from('tb_production');
    $this->db->where($W);
    //$this->db->order_by('tbl_material.mat_id','DESC');
    $Query = $this->db->get();
    if ($Query->num_rows() >= 0) {
      $data = $Query->row();
      return $data;
    }
    return FALSE;
  }
  public function get_DataDay()
  {

    $checkNowdate = date("Y-m-d");
    $Nowdatetext = date("d/m/Y");

    //ถ้าข้ามวันและอยู่ในช่วงก่อนถึงเวลาสิ้นสุดช่วงที่สอง ให้ปรับเป็นค่าวันที่เมื่อวาน
    if (time() >= strtotime("00:00") and time() < strtotime("07:30")) {

      $checkNowdate = date("Y-m-d", strtotime("last day"));
    }

    $date_start1 = "$checkNowdate 07:30";
    $date_end1 = date("Y-m-d H:i", strtotime($date_start1 . "+12 hour"));
    $date_end1 . "<br>";
    $date_start2 = "$checkNowdate 19:30";
    $date_end2 = date("Y-m-d H:i", strtotime($date_start2 . "+12 hour"));
    $date_end2 . "<br>";




    if (time() >= strtotime($date_start1) and time() <= strtotime($date_end2)) {
      $W = "tb_production.timeShift >= '$date_start1' AND tb_production.timeShift < '$date_end1'";
      //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 07:30-19:00 น.";
    }

    //  if (time()>=strtotime($date_start2) AND time()<=strtotime($date_end2)) {
    //     $W="tb_production.timeShift >= '$date_start2' AND tb_production.timeShift < '$date_end2'";
    //    //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 19:30-07:00 น.";
    //   }

    $this->db->select('*');
    $this->db->select_sum('overSizerCR1');
    $this->db->select_sum('overSizerCR2');
    $this->db->select_sum('overSizerCR3');
    $this->db->select_sum('overSizerCR4');
    $this->db->select_sum('overSizerCR5');
    $this->db->select_sum('overSizerCR6');
    $this->db->select_sum('trip785D_CR1_1');
    $this->db->select_sum('trip785D_CR1_2');
    $this->db->select_sum('trip785D_CR1_3');
    $this->db->select_sum('trip785D_CR1_4');
    $this->db->select_sum('trip785D_CR1_5');
    $this->db->select_sum('trip785D_CR1_6');
    $this->db->select_sum('Totaltrip785D_CR1');
    $this->db->select_sum('subTotalbcm785D_CR1');
    $this->db->select_sum('Totalbcm785D_CR1');
    $this->db->select_sum('trip777D_CR1_1');
    $this->db->select_sum('trip777D_CR1_2');
    $this->db->select_sum('trip777D_CR1_3');
    $this->db->select_sum('trip777D_CR1_4');
    $this->db->select_sum('trip777D_CR1_5');
    $this->db->select_sum('trip777D_CR1_6');
    $this->db->select_sum('Totaltrip777D_CR1');
    $this->db->select_sum('subTotalbcm777D_CR1');
    $this->db->select_sum('Totalbcm777D_CR1');
    $this->db->select_sum('tripEGAT_CR1_1');
    $this->db->select_sum('tripEGAT_CR1_2');
    $this->db->select_sum('tripEGAT_CR1_3');
    $this->db->select_sum('tripEGAT_CR1_4');
    $this->db->select_sum('tripEGAT_CR1_5');
    $this->db->select_sum('tripEGAT_CR1_6');
    $this->db->select_sum('TotaltripEGAT_CR1');
    $this->db->select_sum('subTotalbcmEGAT_CR1');
    $this->db->select_sum('TotalbcmEGAT_CR1');
    $this->db->select_sum('trip12T_CR1_1');
    $this->db->select_sum('trip12T_CR1_2');
    $this->db->select_sum('trip12T_CR1_3');
    $this->db->select_sum('trip12T_CR1_4');
    $this->db->select_sum('trip12T_CR1_5');
    $this->db->select_sum('trip12T_CR1_6');
    $this->db->select_sum('Totaltrip12T_CR1');
    $this->db->select_sum('subTotalbcm12T_CR1');
    $this->db->select_sum('Totalbcm12T_CR1');
    $this->db->select_sum('trip12T_CR2_1');
    $this->db->select_sum('trip12T_CR2_2');
    $this->db->select_sum('trip12T_CR2_3');
    $this->db->select_sum('trip12T_CR2_4');
    $this->db->select_sum('trip12T_CR2_5');
    $this->db->select_sum('trip12T_CR2_6');
    $this->db->select_sum('Totaltrip12T_CR2');
    $this->db->select_sum('subTotalbcm12T_CR2');
    $this->db->select_sum('Totalbcm12T_CR2');
    $this->db->select_sum('trip12T_CR3_1');
    $this->db->select_sum('trip12T_CR3_2');
    $this->db->select_sum('trip12T_CR3_3');
    $this->db->select_sum('trip12T_CR3_4');
    $this->db->select_sum('trip12T_CR3_5');
    $this->db->select_sum('trip12T_CR3_6');
    $this->db->select_sum('Totaltrip12T_CR3');
    $this->db->select_sum('subTotalbcm12T_CR3');
    $this->db->select_sum('Totalbcm12T_CR3');
    $this->db->select_sum('trip12T_CR4_1');
    $this->db->select_sum('trip12T_CR4_2');
    $this->db->select_sum('trip12T_CR4_3');
    $this->db->select_sum('trip12T_CR4_4');
    $this->db->select_sum('trip12T_CR4_5');
    $this->db->select_sum('trip12T_CR4_6');
    $this->db->select_sum('Totaltrip12T_CR4');
    $this->db->select_sum('subTotalbcm12T_CR4');
    $this->db->select_sum('Totalbcm12T_CR4');
    $this->db->select_sum('trip16T_CR1_1');
    $this->db->select_sum('trip16T_CR1_2');
    $this->db->select_sum('trip16T_CR1_3');
    $this->db->select_sum('trip16T_CR1_4');
    $this->db->select_sum('trip16T_CR1_5');
    $this->db->select_sum('trip16T_CR1_6');
    $this->db->select_sum('Totaltrip16T_CR1');
    $this->db->select_sum('subTotalbcm16T_CR1');
    $this->db->select_sum('Totalbcm16T_CR1');
    $this->db->select_sum('trip16T_CR2_1');
    $this->db->select_sum('trip16T_CR2_2');
    $this->db->select_sum('trip16T_CR2_3');
    $this->db->select_sum('trip16T_CR2_4');
    $this->db->select_sum('trip16T_CR2_5');
    $this->db->select_sum('trip16T_CR2_6');
    $this->db->select_sum('Totaltrip16T_CR2');
    $this->db->select_sum('subTotalbcm16T_CR2');
    $this->db->select_sum('Totalbcm16T_CR2');
    $this->db->select_sum('trip16T_CR3_1');
    $this->db->select_sum('trip16T_CR3_2');
    $this->db->select_sum('trip16T_CR3_3');
    $this->db->select_sum('trip16T_CR3_4');
    $this->db->select_sum('trip16T_CR3_5');
    $this->db->select_sum('trip16T_CR3_6');
    $this->db->select_sum('Totaltrip16T_CR3');
    $this->db->select_sum('subTotalbcm16T_CR3');
    $this->db->select_sum('Totalbcm16T_CR3');
    $this->db->select_sum('trip16T_CR4_1');
    $this->db->select_sum('trip16T_CR4_2');
    $this->db->select_sum('trip16T_CR4_3');
    $this->db->select_sum('trip16T_CR4_4');
    $this->db->select_sum('trip16T_CR4_5');
    $this->db->select_sum('trip16T_CR4_6');
    $this->db->select_sum('Totaltrip16T_CR4');
    $this->db->select_sum('subTotalbcm16T_CR4');
    $this->db->select_sum('Totalbcm16T_CR4');
    $this->db->select_sum('trip25T_CR1_1');
    $this->db->select_sum('trip25T_CR1_2');
    $this->db->select_sum('trip25T_CR1_3');
    $this->db->select_sum('trip25T_CR1_4');
    $this->db->select_sum('trip25T_CR1_5');
    $this->db->select_sum('trip25T_CR1_6');
    $this->db->select_sum('Totaltrip25T_CR1');
    $this->db->select_sum('subTotalbcm25T_CR1');
    $this->db->select_sum('Totalbcm25T_CR1');
    $this->db->select_sum('trip25T_CR2_1');
    $this->db->select_sum('trip25T_CR2_2');
    $this->db->select_sum('trip25T_CR2_3');
    $this->db->select_sum('trip25T_CR2_4');
    $this->db->select_sum('trip25T_CR2_5');
    $this->db->select_sum('trip25T_CR2_6');
    $this->db->select_sum('Totaltrip25T_CR2');
    $this->db->select_sum('subTotalbcm25T_CR2');
    $this->db->select_sum('Totalbcm25T_CR2');
    $this->db->select_sum('trip25T_CR3_1');
    $this->db->select_sum('trip25T_CR3_2');
    $this->db->select_sum('trip25T_CR3_3');
    $this->db->select_sum('trip25T_CR3_4');
    $this->db->select_sum('trip25T_CR3_5');
    $this->db->select_sum('trip25T_CR3_6');
    $this->db->select_sum('Totaltrip25T_CR3');
    $this->db->select_sum('subTotalbcm25T_CR3');
    $this->db->select_sum('Totalbcm25T_CR3');
    $this->db->select_sum('trip25T_CR4_1');
    $this->db->select_sum('trip25T_CR4_2');
    $this->db->select_sum('trip25T_CR4_3');
    $this->db->select_sum('trip25T_CR4_4');
    $this->db->select_sum('trip25T_CR4_5');
    $this->db->select_sum('trip25T_CR4_6');
    $this->db->select_sum('Totaltrip25T_CR4');
    $this->db->select_sum('subTotalbcm25T_CR4');
    $this->db->select_sum('Totalbcm25T_CR4');
    $this->db->select_sum('trip25T_CR5_1');
    $this->db->select_sum('trip25T_CR5_2');
    $this->db->select_sum('trip25T_CR5_3');
    $this->db->select_sum('trip25T_CR5_4');
    $this->db->select_sum('trip25T_CR5_5');
    $this->db->select_sum('trip25T_CR5_6');
    $this->db->select_sum('Totaltrip25T_CR5');
    $this->db->select_sum('subTotalbcm25T_CR5');
    $this->db->select_sum('Totalbcm25T_CR5');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR7_1');
    $this->db->select_sum('trip25T_CR7_2');
    $this->db->select_sum('trip25T_CR7_3');
    $this->db->select_sum('trip25T_CR7_4');
    $this->db->select_sum('trip25T_CR7_5');
    $this->db->select_sum('trip25T_CR7_6');
    $this->db->select_sum('Totaltrip25T_CR7');
    $this->db->select_sum('subTotalbcm25T_CR7');
    $this->db->select_sum('Totalbcm25T_CR7');
    $this->db->select_sum('trip25T_CR8_1');
    $this->db->select_sum('trip25T_CR8_2');
    $this->db->select_sum('trip25T_CR8_3');
    $this->db->select_sum('trip25T_CR8_4');
    $this->db->select_sum('trip25T_CR8_5');
    $this->db->select_sum('trip25T_CR8_6');
    $this->db->select_sum('Totaltrip25T_CR8');
    $this->db->select_sum('subTotalbcm25T_CR8');
    $this->db->select_sum('Totalbcm25T_CR8');
    $this->db->select_sum('trip25T_CR9_1');
    $this->db->select_sum('trip25T_CR9_2');
    $this->db->select_sum('trip25T_CR9_3');
    $this->db->select_sum('trip25T_CR9_4');
    $this->db->select_sum('trip25T_CR9_5');
    $this->db->select_sum('trip25T_CR9_6');
    $this->db->select_sum('Totaltrip25T_CR9');
    $this->db->select_sum('subTotalbcm25T_CR9');
    $this->db->select_sum('Totalbcm25T_CR9');
    $this->db->select_sum('trip25T_CR10_1');
    $this->db->select_sum('trip25T_CR10_2');
    $this->db->select_sum('trip25T_CR10_3');
    $this->db->select_sum('trip25T_CR10_4');
    $this->db->select_sum('trip25T_CR10_5');
    $this->db->select_sum('trip25T_CR10_6');
    $this->db->select_sum('Totaltrip25T_CR10');
    $this->db->select_sum('subTotalbcm25T_CR10');
    $this->db->select_sum('Totalbcm25T_CR10');
    $this->db->select_sum('trip25T_CR11_1');
    $this->db->select_sum('trip25T_CR11_2');
    $this->db->select_sum('trip25T_CR11_3');
    $this->db->select_sum('trip25T_CR11_4');
    $this->db->select_sum('trip25T_CR11_5');
    $this->db->select_sum('trip25T_CR11_6');
    $this->db->select_sum('Totaltrip25T_CR11');
    $this->db->select_sum('subTotalbcm25T_CR11');
    $this->db->select_sum('Totalbcm25T_CR11');
    $this->db->select_sum('trip25T_CR12_1');
    $this->db->select_sum('trip25T_CR12_2');
    $this->db->select_sum('trip25T_CR12_3');
    $this->db->select_sum('trip25T_CR12_4');
    $this->db->select_sum('trip25T_CR12_5');
    $this->db->select_sum('trip25T_CR12_6');
    $this->db->select_sum('Totaltrip25T_CR12');
    $this->db->select_sum('subTotalbcm25T_CR12');
    $this->db->select_sum('Totalbcm25T_CR12');
    $this->db->select_sum('trip25T_CR13_1');
    $this->db->select_sum('trip25T_CR13_2');
    $this->db->select_sum('trip25T_CR13_3');
    $this->db->select_sum('trip25T_CR13_4');
    $this->db->select_sum('trip25T_CR13_5');
    $this->db->select_sum('trip25T_CR13_6');
    $this->db->select_sum('Totaltrip25T_CR13');
    $this->db->select_sum('subTotalbcm25T_CR13');
    $this->db->select_sum('Totalbcm25T_CR13');
    $this->db->select_sum('trip25T_CR14_1');
    $this->db->select_sum('trip25T_CR14_2');
    $this->db->select_sum('trip25T_CR14_3');
    $this->db->select_sum('trip25T_CR14_4');
    $this->db->select_sum('trip25T_CR14_5');
    $this->db->select_sum('trip25T_CR14_6');
    $this->db->select_sum('Totaltrip25T_CR14');
    $this->db->select_sum('subTotalbcm25T_CR14');
    $this->db->select_sum('Totalbcm25T_CR14');
    $this->db->select_sum('trip30T_CR1_1');
    $this->db->select_sum('trip30T_CR1_2');
    $this->db->select_sum('trip30T_CR1_3');
    $this->db->select_sum('trip30T_CR1_4');
    $this->db->select_sum('trip30T_CR1_5');
    $this->db->select_sum('trip30T_CR1_6');
    $this->db->select_sum('Totaltrip30T_CR1');
    $this->db->select_sum('subTotalbcm30T_CR1');
    $this->db->select_sum('Totalbcm30T_CR1');
    $this->db->select_sum('trip30T_CR2_1');
    $this->db->select_sum('trip30T_CR2_2');
    $this->db->select_sum('trip30T_CR2_3');
    $this->db->select_sum('trip30T_CR2_4');
    $this->db->select_sum('trip30T_CR2_5');
    $this->db->select_sum('trip30T_CR2_6');
    $this->db->select_sum('Totaltrip30T_CR2');
    $this->db->select_sum('subTotalbcm30T_CR2');
    $this->db->select_sum('Totalbcm30T_CR2');
    $this->db->select_sum('trip30T_CR3_1');
    $this->db->select_sum('trip30T_CR3_2');
    $this->db->select_sum('trip30T_CR3_3');
    $this->db->select_sum('trip30T_CR3_4');
    $this->db->select_sum('trip30T_CR3_5');
    $this->db->select_sum('trip30T_CR3_6');
    $this->db->select_sum('Totaltrip30T_CR3');
    $this->db->select_sum('subTotalbcm30T_CR3');
    $this->db->select_sum('Totalbcm30T_CR3');
    $this->db->select_sum('trip30T_CR4_1');
    $this->db->select_sum('trip30T_CR4_2');
    $this->db->select_sum('trip30T_CR4_3');
    $this->db->select_sum('trip30T_CR4_4');
    $this->db->select_sum('trip30T_CR4_5');
    $this->db->select_sum('trip30T_CR4_6');
    $this->db->select_sum('Totaltrip30T_CR4');
    $this->db->select_sum('subTotalbcm30T_CR4');
    $this->db->select_sum('Totalbcm30T_CR4');
    $this->db->select_sum('trip30T_CR5_1');
    $this->db->select_sum('trip30T_CR5_2');
    $this->db->select_sum('trip30T_CR5_3');
    $this->db->select_sum('trip30T_CR5_4');
    $this->db->select_sum('trip30T_CR5_5');
    $this->db->select_sum('trip30T_CR5_6');
    $this->db->select_sum('Totaltrip30T_CR5');
    $this->db->select_sum('subTotalbcm30T_CR5');
    $this->db->select_sum('Totalbcm30T_CR5');
    $this->db->select_sum('trip30T_CR6_1');
    $this->db->select_sum('trip30T_CR6_2');
    $this->db->select_sum('trip30T_CR6_3');
    $this->db->select_sum('trip30T_CR6_4');
    $this->db->select_sum('trip30T_CR6_5');
    $this->db->select_sum('trip30T_CR6_6');
    $this->db->select_sum('Totaltrip30T_CR6');
    $this->db->select_sum('subTotalbcm30T_CR6');
    $this->db->select_sum('Totalbcm30T_CR6');
    $this->db->select_sum('TotalTripJob1');
    $this->db->select_sum('TotalBcmJob1');
    $this->db->select_sum('SumTotalBcmJob1');
    $this->db->select_sum('TotalTripJob3');
    $this->db->select_sum('TotalBcmJob3');
    $this->db->select_sum('SumTotalBcmJob3');
    $this->db->select_sum('TotalTripJob1_3');
    $this->db->select_sum('TotalBcmJob1_3');
    $this->db->select_sum('SumTotalBcmJob1_3');
    $this->db->select_sum('toptrip');
    $this->db->from('tb_production');
    $this->db->where($W);
    //$this->db->order_by('tbl_material.mat_id','DESC');
    $Query = $this->db->get();
    if ($Query->num_rows() > 0) {
      $data = $Query->row();
      return $data;
    }
    return FALSE;
  }
  public function get_DataNight()
  {

    $checkNowdate = date("Y-m-d");
    $Nowdatetext = date("d/m/Y");

    //ถ้าข้ามวันและอยู่ในช่วงก่อนถึงเวลาสิ้นสุดช่วงที่สอง ให้ปรับเป็นค่าวันที่เมื่อวาน
    if (time() >= strtotime("00:00") and time() < strtotime("07:30")) {

      $checkNowdate = date("Y-m-d", strtotime("last day"));
    }

    $date_start1 = "$checkNowdate 07:30";
    $date_end1 = date("Y-m-d H:i", strtotime($date_start1 . "+12 hour"));
    $date_end1 . "<br>";
    $date_start2 = "$checkNowdate 19:30";
    $date_end2 = date("Y-m-d H:i", strtotime($date_start2 . "+12 hour"));
    $date_end2 . "<br>";




    // if (time()>=strtotime($date_start1) AND time()<=strtotime($date_end2)) {
    //   $W="tb_production.timeShift >= '$date_start1' AND tb_production.timeShift < '$date_end1'";
    // //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 07:30-19:00 น.";
    // }

    if (time() >= strtotime($date_start1) and time() <= strtotime($date_end2)) {
      $W = "tb_production.timeShift >= '$date_start2' AND tb_production.timeShift < '$date_end2'";
      //$Showtext="ไม่พบข้อมูลเที่ยว วันที่ $Nowdatetext 19:30-07:00 น.";
    }

    $this->db->select('*');
    $this->db->select_sum('overSizerCR1');
    $this->db->select_sum('overSizerCR2');
    $this->db->select_sum('overSizerCR3');
    $this->db->select_sum('overSizerCR4');
    $this->db->select_sum('overSizerCR5');
    $this->db->select_sum('overSizerCR6');
    $this->db->select_sum('trip785D_CR1_1');
    $this->db->select_sum('trip785D_CR1_2');
    $this->db->select_sum('trip785D_CR1_3');
    $this->db->select_sum('trip785D_CR1_4');
    $this->db->select_sum('trip785D_CR1_5');
    $this->db->select_sum('trip785D_CR1_6');
    $this->db->select_sum('Totaltrip785D_CR1');
    $this->db->select_sum('subTotalbcm785D_CR1');
    $this->db->select_sum('Totalbcm785D_CR1');
    $this->db->select_sum('trip777D_CR1_1');
    $this->db->select_sum('trip777D_CR1_2');
    $this->db->select_sum('trip777D_CR1_3');
    $this->db->select_sum('trip777D_CR1_4');
    $this->db->select_sum('trip777D_CR1_5');
    $this->db->select_sum('trip777D_CR1_6');
    $this->db->select_sum('Totaltrip777D_CR1');
    $this->db->select_sum('subTotalbcm777D_CR1');
    $this->db->select_sum('Totalbcm777D_CR1');
    $this->db->select_sum('tripEGAT_CR1_1');
    $this->db->select_sum('tripEGAT_CR1_2');
    $this->db->select_sum('tripEGAT_CR1_3');
    $this->db->select_sum('tripEGAT_CR1_4');
    $this->db->select_sum('tripEGAT_CR1_5');
    $this->db->select_sum('tripEGAT_CR1_6');
    $this->db->select_sum('TotaltripEGAT_CR1');
    $this->db->select_sum('subTotalbcmEGAT_CR1');
    $this->db->select_sum('TotalbcmEGAT_CR1');
    $this->db->select_sum('trip12T_CR1_1');
    $this->db->select_sum('trip12T_CR1_2');
    $this->db->select_sum('trip12T_CR1_3');
    $this->db->select_sum('trip12T_CR1_4');
    $this->db->select_sum('trip12T_CR1_5');
    $this->db->select_sum('trip12T_CR1_6');
    $this->db->select_sum('Totaltrip12T_CR1');
    $this->db->select_sum('subTotalbcm12T_CR1');
    $this->db->select_sum('Totalbcm12T_CR1');
    $this->db->select_sum('trip12T_CR2_1');
    $this->db->select_sum('trip12T_CR2_2');
    $this->db->select_sum('trip12T_CR2_3');
    $this->db->select_sum('trip12T_CR2_4');
    $this->db->select_sum('trip12T_CR2_5');
    $this->db->select_sum('trip12T_CR2_6');
    $this->db->select_sum('Totaltrip12T_CR2');
    $this->db->select_sum('subTotalbcm12T_CR2');
    $this->db->select_sum('Totalbcm12T_CR2');
    $this->db->select_sum('trip12T_CR3_1');
    $this->db->select_sum('trip12T_CR3_2');
    $this->db->select_sum('trip12T_CR3_3');
    $this->db->select_sum('trip12T_CR3_4');
    $this->db->select_sum('trip12T_CR3_5');
    $this->db->select_sum('trip12T_CR3_6');
    $this->db->select_sum('Totaltrip12T_CR3');
    $this->db->select_sum('subTotalbcm12T_CR3');
    $this->db->select_sum('Totalbcm12T_CR3');
    $this->db->select_sum('trip12T_CR4_1');
    $this->db->select_sum('trip12T_CR4_2');
    $this->db->select_sum('trip12T_CR4_3');
    $this->db->select_sum('trip12T_CR4_4');
    $this->db->select_sum('trip12T_CR4_5');
    $this->db->select_sum('trip12T_CR4_6');
    $this->db->select_sum('Totaltrip12T_CR4');
    $this->db->select_sum('subTotalbcm12T_CR4');
    $this->db->select_sum('Totalbcm12T_CR4');
    $this->db->select_sum('trip16T_CR1_1');
    $this->db->select_sum('trip16T_CR1_2');
    $this->db->select_sum('trip16T_CR1_3');
    $this->db->select_sum('trip16T_CR1_4');
    $this->db->select_sum('trip16T_CR1_5');
    $this->db->select_sum('trip16T_CR1_6');
    $this->db->select_sum('Totaltrip16T_CR1');
    $this->db->select_sum('subTotalbcm16T_CR1');
    $this->db->select_sum('Totalbcm16T_CR1');
    $this->db->select_sum('trip16T_CR2_1');
    $this->db->select_sum('trip16T_CR2_2');
    $this->db->select_sum('trip16T_CR2_3');
    $this->db->select_sum('trip16T_CR2_4');
    $this->db->select_sum('trip16T_CR2_5');
    $this->db->select_sum('trip16T_CR2_6');
    $this->db->select_sum('Totaltrip16T_CR2');
    $this->db->select_sum('subTotalbcm16T_CR2');
    $this->db->select_sum('Totalbcm16T_CR2');
    $this->db->select_sum('trip16T_CR3_1');
    $this->db->select_sum('trip16T_CR3_2');
    $this->db->select_sum('trip16T_CR3_3');
    $this->db->select_sum('trip16T_CR3_4');
    $this->db->select_sum('trip16T_CR3_5');
    $this->db->select_sum('trip16T_CR3_6');
    $this->db->select_sum('Totaltrip16T_CR3');
    $this->db->select_sum('subTotalbcm16T_CR3');
    $this->db->select_sum('Totalbcm16T_CR3');
    $this->db->select_sum('trip16T_CR4_1');
    $this->db->select_sum('trip16T_CR4_2');
    $this->db->select_sum('trip16T_CR4_3');
    $this->db->select_sum('trip16T_CR4_4');
    $this->db->select_sum('trip16T_CR4_5');
    $this->db->select_sum('trip16T_CR4_6');
    $this->db->select_sum('Totaltrip16T_CR4');
    $this->db->select_sum('subTotalbcm16T_CR4');
    $this->db->select_sum('Totalbcm16T_CR4');
    $this->db->select_sum('trip25T_CR1_1');
    $this->db->select_sum('trip25T_CR1_2');
    $this->db->select_sum('trip25T_CR1_3');
    $this->db->select_sum('trip25T_CR1_4');
    $this->db->select_sum('trip25T_CR1_5');
    $this->db->select_sum('trip25T_CR1_6');
    $this->db->select_sum('Totaltrip25T_CR1');
    $this->db->select_sum('subTotalbcm25T_CR1');
    $this->db->select_sum('Totalbcm25T_CR1');
    $this->db->select_sum('trip25T_CR2_1');
    $this->db->select_sum('trip25T_CR2_2');
    $this->db->select_sum('trip25T_CR2_3');
    $this->db->select_sum('trip25T_CR2_4');
    $this->db->select_sum('trip25T_CR2_5');
    $this->db->select_sum('trip25T_CR2_6');
    $this->db->select_sum('Totaltrip25T_CR2');
    $this->db->select_sum('subTotalbcm25T_CR2');
    $this->db->select_sum('Totalbcm25T_CR2');
    $this->db->select_sum('trip25T_CR3_1');
    $this->db->select_sum('trip25T_CR3_2');
    $this->db->select_sum('trip25T_CR3_3');
    $this->db->select_sum('trip25T_CR3_4');
    $this->db->select_sum('trip25T_CR3_5');
    $this->db->select_sum('trip25T_CR3_6');
    $this->db->select_sum('Totaltrip25T_CR3');
    $this->db->select_sum('subTotalbcm25T_CR3');
    $this->db->select_sum('Totalbcm25T_CR3');
    $this->db->select_sum('trip25T_CR4_1');
    $this->db->select_sum('trip25T_CR4_2');
    $this->db->select_sum('trip25T_CR4_3');
    $this->db->select_sum('trip25T_CR4_4');
    $this->db->select_sum('trip25T_CR4_5');
    $this->db->select_sum('trip25T_CR4_6');
    $this->db->select_sum('Totaltrip25T_CR4');
    $this->db->select_sum('subTotalbcm25T_CR4');
    $this->db->select_sum('Totalbcm25T_CR4');
    $this->db->select_sum('trip25T_CR5_1');
    $this->db->select_sum('trip25T_CR5_2');
    $this->db->select_sum('trip25T_CR5_3');
    $this->db->select_sum('trip25T_CR5_4');
    $this->db->select_sum('trip25T_CR5_5');
    $this->db->select_sum('trip25T_CR5_6');
    $this->db->select_sum('Totaltrip25T_CR5');
    $this->db->select_sum('subTotalbcm25T_CR5');
    $this->db->select_sum('Totalbcm25T_CR5');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR6_1');
    $this->db->select_sum('trip25T_CR6_2');
    $this->db->select_sum('trip25T_CR6_3');
    $this->db->select_sum('trip25T_CR6_4');
    $this->db->select_sum('trip25T_CR6_5');
    $this->db->select_sum('trip25T_CR6_6');
    $this->db->select_sum('Totaltrip25T_CR6');
    $this->db->select_sum('subTotalbcm25T_CR6');
    $this->db->select_sum('Totalbcm25T_CR6');
    $this->db->select_sum('trip25T_CR7_1');
    $this->db->select_sum('trip25T_CR7_2');
    $this->db->select_sum('trip25T_CR7_3');
    $this->db->select_sum('trip25T_CR7_4');
    $this->db->select_sum('trip25T_CR7_5');
    $this->db->select_sum('trip25T_CR7_6');
    $this->db->select_sum('Totaltrip25T_CR7');
    $this->db->select_sum('subTotalbcm25T_CR7');
    $this->db->select_sum('Totalbcm25T_CR7');
    $this->db->select_sum('trip25T_CR8_1');
    $this->db->select_sum('trip25T_CR8_2');
    $this->db->select_sum('trip25T_CR8_3');
    $this->db->select_sum('trip25T_CR8_4');
    $this->db->select_sum('trip25T_CR8_5');
    $this->db->select_sum('trip25T_CR8_6');
    $this->db->select_sum('Totaltrip25T_CR8');
    $this->db->select_sum('subTotalbcm25T_CR8');
    $this->db->select_sum('Totalbcm25T_CR8');
    $this->db->select_sum('trip25T_CR9_1');
    $this->db->select_sum('trip25T_CR9_2');
    $this->db->select_sum('trip25T_CR9_3');
    $this->db->select_sum('trip25T_CR9_4');
    $this->db->select_sum('trip25T_CR9_5');
    $this->db->select_sum('trip25T_CR9_6');
    $this->db->select_sum('Totaltrip25T_CR9');
    $this->db->select_sum('subTotalbcm25T_CR9');
    $this->db->select_sum('Totalbcm25T_CR9');
    $this->db->select_sum('trip25T_CR10_1');
    $this->db->select_sum('trip25T_CR10_2');
    $this->db->select_sum('trip25T_CR10_3');
    $this->db->select_sum('trip25T_CR10_4');
    $this->db->select_sum('trip25T_CR10_5');
    $this->db->select_sum('trip25T_CR10_6');
    $this->db->select_sum('Totaltrip25T_CR10');
    $this->db->select_sum('subTotalbcm25T_CR10');
    $this->db->select_sum('Totalbcm25T_CR10');
    $this->db->select_sum('trip25T_CR11_1');
    $this->db->select_sum('trip25T_CR11_2');
    $this->db->select_sum('trip25T_CR11_3');
    $this->db->select_sum('trip25T_CR11_4');
    $this->db->select_sum('trip25T_CR11_5');
    $this->db->select_sum('trip25T_CR11_6');
    $this->db->select_sum('Totaltrip25T_CR11');
    $this->db->select_sum('subTotalbcm25T_CR11');
    $this->db->select_sum('Totalbcm25T_CR11');
    $this->db->select_sum('trip25T_CR12_1');
    $this->db->select_sum('trip25T_CR12_2');
    $this->db->select_sum('trip25T_CR12_3');
    $this->db->select_sum('trip25T_CR12_4');
    $this->db->select_sum('trip25T_CR12_5');
    $this->db->select_sum('trip25T_CR12_6');
    $this->db->select_sum('Totaltrip25T_CR12');
    $this->db->select_sum('subTotalbcm25T_CR12');
    $this->db->select_sum('Totalbcm25T_CR12');
    $this->db->select_sum('trip25T_CR13_1');
    $this->db->select_sum('trip25T_CR13_2');
    $this->db->select_sum('trip25T_CR13_3');
    $this->db->select_sum('trip25T_CR13_4');
    $this->db->select_sum('trip25T_CR13_5');
    $this->db->select_sum('trip25T_CR13_6');
    $this->db->select_sum('Totaltrip25T_CR13');
    $this->db->select_sum('subTotalbcm25T_CR13');
    $this->db->select_sum('Totalbcm25T_CR13');
    $this->db->select_sum('trip25T_CR14_1');
    $this->db->select_sum('trip25T_CR14_2');
    $this->db->select_sum('trip25T_CR14_3');
    $this->db->select_sum('trip25T_CR14_4');
    $this->db->select_sum('trip25T_CR14_5');
    $this->db->select_sum('trip25T_CR14_6');
    $this->db->select_sum('Totaltrip25T_CR14');
    $this->db->select_sum('subTotalbcm25T_CR14');
    $this->db->select_sum('Totalbcm25T_CR14');
    $this->db->select_sum('trip30T_CR1_1');
    $this->db->select_sum('trip30T_CR1_2');
    $this->db->select_sum('trip30T_CR1_3');
    $this->db->select_sum('trip30T_CR1_4');
    $this->db->select_sum('trip30T_CR1_5');
    $this->db->select_sum('trip30T_CR1_6');
    $this->db->select_sum('Totaltrip30T_CR1');
    $this->db->select_sum('subTotalbcm30T_CR1');
    $this->db->select_sum('Totalbcm30T_CR1');
    $this->db->select_sum('trip30T_CR2_1');
    $this->db->select_sum('trip30T_CR2_2');
    $this->db->select_sum('trip30T_CR2_3');
    $this->db->select_sum('trip30T_CR2_4');
    $this->db->select_sum('trip30T_CR2_5');
    $this->db->select_sum('trip30T_CR2_6');
    $this->db->select_sum('Totaltrip30T_CR2');
    $this->db->select_sum('subTotalbcm30T_CR2');
    $this->db->select_sum('Totalbcm30T_CR2');
    $this->db->select_sum('trip30T_CR3_1');
    $this->db->select_sum('trip30T_CR3_2');
    $this->db->select_sum('trip30T_CR3_3');
    $this->db->select_sum('trip30T_CR3_4');
    $this->db->select_sum('trip30T_CR3_5');
    $this->db->select_sum('trip30T_CR3_6');
    $this->db->select_sum('Totaltrip30T_CR3');
    $this->db->select_sum('subTotalbcm30T_CR3');
    $this->db->select_sum('Totalbcm30T_CR3');
    $this->db->select_sum('trip30T_CR4_1');
    $this->db->select_sum('trip30T_CR4_2');
    $this->db->select_sum('trip30T_CR4_3');
    $this->db->select_sum('trip30T_CR4_4');
    $this->db->select_sum('trip30T_CR4_5');
    $this->db->select_sum('trip30T_CR4_6');
    $this->db->select_sum('Totaltrip30T_CR4');
    $this->db->select_sum('subTotalbcm30T_CR4');
    $this->db->select_sum('Totalbcm30T_CR4');
    $this->db->select_sum('trip30T_CR5_1');
    $this->db->select_sum('trip30T_CR5_2');
    $this->db->select_sum('trip30T_CR5_3');
    $this->db->select_sum('trip30T_CR5_4');
    $this->db->select_sum('trip30T_CR5_5');
    $this->db->select_sum('trip30T_CR5_6');
    $this->db->select_sum('Totaltrip30T_CR5');
    $this->db->select_sum('subTotalbcm30T_CR5');
    $this->db->select_sum('Totalbcm30T_CR5');
    $this->db->select_sum('trip30T_CR6_1');
    $this->db->select_sum('trip30T_CR6_2');
    $this->db->select_sum('trip30T_CR6_3');
    $this->db->select_sum('trip30T_CR6_4');
    $this->db->select_sum('trip30T_CR6_5');
    $this->db->select_sum('trip30T_CR6_6');
    $this->db->select_sum('Totaltrip30T_CR6');
    $this->db->select_sum('subTotalbcm30T_CR6');
    $this->db->select_sum('Totalbcm30T_CR6');
    $this->db->select_sum('TotalTripJob1');
    $this->db->select_sum('TotalBcmJob1');
    $this->db->select_sum('SumTotalBcmJob1');
    $this->db->select_sum('TotalTripJob3');
    $this->db->select_sum('TotalBcmJob3');
    $this->db->select_sum('SumTotalBcmJob3');
    $this->db->select_sum('TotalTripJob1_3');
    $this->db->select_sum('TotalBcmJob1_3');
    $this->db->select_sum('SumTotalBcmJob1_3');
    $this->db->select_sum('toptrip');
    $this->db->from('tb_production');
    $this->db->where($W);
    //$this->db->order_by('tbl_material.mat_id','DESC');
    // $Query=$this->db->get();
    // if ($Query->num_rows()>=0) {
    //        $data=$Query->row();
    // return $data;  
    // }
    // return FALSE;
    $Query = $this->db->get();
    return $Query->result();
  }
  
  public function insert_Production()
  {
    //target
    if ($this->input->post('SumTotalBcmJob1_3') >= $this->input->post('tarGet')) {
      $toptrip = "1";
    } else {
      $toptrip = "0";
    }

    $StrDate = $this->input->post('dateShift') . " " . $this->input->post('timeShift');

    $data = array(

      'dateShift' => $this->input->post('dateShift'),
      'timeShift' => $StrDate,
      'overSizerCR1' => $this->input->post('overSizerCR1'),
      'overSizerCR2' => $this->input->post('overSizerCR2'),
      'overSizerCR3' => $this->input->post('overSizerCR3'),
      'overSizerCR4' => $this->input->post('overSizerCR4'),
      'overSizerCR5' => $this->input->post('overSizerCR5'),
      'overSizerCR6' => $this->input->post('overSizerCR6'),
      'TotalOverSizer' => $this->input->post('TotalOverSizer'),

      'companyName1' => $this->input->post('companyName1'),
      'trip785D_CR1_1' => $this->input->post('trip785D_CR1_1'),
      'trip785D_CR1_2' => $this->input->post('trip785D_CR1_2'),
      'trip785D_CR1_3' => $this->input->post('trip785D_CR1_3'),
      'trip785D_CR1_4' => $this->input->post('trip785D_CR1_4'),
      'trip785D_CR1_5' => $this->input->post('trip785D_CR1_5'),
      'trip785D_CR1_6' => $this->input->post('trip785D_CR1_6'),
      'Totaltrip785D_CR1' => $this->input->post('Totaltrip785D_CR1'),
      'subTotalbcm785D_CR1' => $this->input->post('subTotalbcm785D_CR1'),
      'Totalbcm785D_CR1' => $this->input->post('Totalbcm785D_CR1'),

      'companyName2' => $this->input->post('companyName2'),
      'trip777D_CR1_1' => $this->input->post('trip777D_CR1_1'),
      'trip777D_CR1_2' => $this->input->post('trip777D_CR1_2'),
      'trip777D_CR1_3' => $this->input->post('trip777D_CR1_3'),
      'trip777D_CR1_4' => $this->input->post('trip777D_CR1_4'),
      'trip777D_CR1_5' => $this->input->post('trip777D_CR1_5'),
      'trip777D_CR1_6' => $this->input->post('trip777D_CR1_6'),
      'Totaltrip777D_CR1' => $this->input->post('Totaltrip777D_CR1'),
      'subTotalbcm777D_CR1' => $this->input->post('subTotalbcm777D_CR1'),
      'Totalbcm777D_CR1' => $this->input->post('Totalbcm777D_CR1'),

      'companyName3' => $this->input->post('companyName3'),
      'tripEGAT_CR1_1' => $this->input->post('tripEGAT_CR1_1'),
      'tripEGAT_CR1_2' => $this->input->post('tripEGAT_CR1_2'),
      'tripEGAT_CR1_3' => $this->input->post('tripEGAT_CR1_3'),
      'tripEGAT_CR1_4' => $this->input->post('tripEGAT_CR1_4'),
      'tripEGAT_CR1_5' => $this->input->post('tripEGAT_CR1_5'),
      'tripEGAT_CR1_6' => $this->input->post('tripEGAT_CR1_6'),
      'TotaltripEGAT_CR1' => $this->input->post('TotaltripEGAT_CR1'),
      'subTotalbcmEGAT_CR1' => $this->input->post('subTotalbcmEGAT_CR1'),
      'TotalbcmEGAT_CR1' => $this->input->post('TotalbcmEGAT_CR1'),

      'companyName4' => $this->input->post('companyName4'),
      'trip12T_CR1_1' => $this->input->post('trip12T_CR1_1'),
      'trip12T_CR1_2' => $this->input->post('trip12T_CR1_2'),
      'trip12T_CR1_3' => $this->input->post('trip12T_CR1_3'),
      'trip12T_CR1_4' => $this->input->post('trip12T_CR1_4'),
      'trip12T_CR1_5' => $this->input->post('trip12T_CR1_5'),
      'trip12T_CR1_6' => $this->input->post('trip12T_CR1_6'),
      'Totaltrip12T_CR1' => $this->input->post('Totaltrip12T_CR1'),
      'subTotalbcm12T_CR1' => $this->input->post('subTotalbcm12T_CR1'),
      'Totalbcm12T_CR1' => $this->input->post('Totalbcm12T_CR1'),

      'companyName5' => $this->input->post('companyName5'),
      'trip12T_CR2_1' => $this->input->post('trip12T_CR2_1'),
      'trip12T_CR2_2' => $this->input->post('trip12T_CR2_2'),
      'trip12T_CR2_3' => $this->input->post('trip12T_CR2_3'),
      'trip12T_CR2_4' => $this->input->post('trip12T_CR2_4'),
      'trip12T_CR2_5' => $this->input->post('trip12T_CR2_5'),
      'trip12T_CR2_6' => $this->input->post('trip12T_CR2_6'),
      'Totaltrip12T_CR2' => $this->input->post('Totaltrip12T_CR2'),
      'subTotalbcm12T_CR2' => $this->input->post('subTotalbcm12T_CR2'),
      'Totalbcm12T_CR2' => $this->input->post('Totalbcm12T_CR2'),

      'companyName6' => $this->input->post('companyName6'),
      'trip12T_CR3_1' => $this->input->post('trip12T_CR3_1'),
      'trip12T_CR3_2' => $this->input->post('trip12T_CR3_2'),
      'trip12T_CR3_3' => $this->input->post('trip12T_CR3_3'),
      'trip12T_CR3_4' => $this->input->post('trip12T_CR3_4'),
      'trip12T_CR3_5' => $this->input->post('trip12T_CR3_5'),
      'trip12T_CR3_6' => $this->input->post('trip12T_CR3_6'),
      'Totaltrip12T_CR3' => $this->input->post('Totaltrip12T_CR3'),
      'subTotalbcm12T_CR3' => $this->input->post('subTotalbcm12T_CR3'),
      'Totalbcm12T_CR3' => $this->input->post('Totalbcm12T_CR3'),

      'companyName7' => $this->input->post('companyName7'),
      'trip12T_CR4_1' => $this->input->post('trip12T_CR4_1'),
      'trip12T_CR4_2' => $this->input->post('trip12T_CR4_2'),
      'trip12T_CR4_3' => $this->input->post('trip12T_CR4_3'),
      'trip12T_CR4_4' => $this->input->post('trip12T_CR4_4'),
      'trip12T_CR4_5' => $this->input->post('trip12T_CR4_5'),
      'trip12T_CR4_6' => $this->input->post('trip12T_CR4_6'),
      'Totaltrip12T_CR4' => $this->input->post('Totaltrip12T_CR4'),
      'subTotalbcm12T_CR4' => $this->input->post('subTotalbcm12T_CR4'),
      'Totalbcm12T_CR4' => $this->input->post('Totalbcm12T_CR4'),

      'companyName8' => $this->input->post('companyName8'),
      'trip16T_CR1_1' => $this->input->post('trip16T_CR1_1'),
      'trip16T_CR1_2' => $this->input->post('trip16T_CR1_2'),
      'trip16T_CR1_3' => $this->input->post('trip16T_CR1_3'),
      'trip16T_CR1_4' => $this->input->post('trip16T_CR1_4'),
      'trip16T_CR1_5' => $this->input->post('trip16T_CR1_5'),
      'trip16T_CR1_6' => $this->input->post('trip16T_CR1_6'),
      'Totaltrip16T_CR1' => $this->input->post('Totaltrip16T_CR1'),
      'subTotalbcm16T_CR1' => $this->input->post('subTotalbcm16T_CR1'),
      'Totalbcm16T_CR1' => $this->input->post('Totalbcm16T_CR1'),

      'companyName9' => $this->input->post('companyName9'),
      'trip16T_CR2_1' => $this->input->post('trip16T_CR2_1'),
      'trip16T_CR2_2' => $this->input->post('trip16T_CR2_2'),
      'trip16T_CR2_3' => $this->input->post('trip16T_CR2_3'),
      'trip16T_CR2_4' => $this->input->post('trip16T_CR2_4'),
      'trip16T_CR2_5' => $this->input->post('trip16T_CR2_5'),
      'trip16T_CR2_6' => $this->input->post('trip16T_CR2_6'),
      'Totaltrip16T_CR2' => $this->input->post('Totaltrip16T_CR2'),
      'subTotalbcm16T_CR2' => $this->input->post('subTotalbcm16T_CR2'),
      'Totalbcm16T_CR2' => $this->input->post('Totalbcm16T_CR2'),

      'companyName10' => $this->input->post('companyName10'),
      'trip16T_CR3_1' => $this->input->post('trip16T_CR3_1'),
      'trip16T_CR3_2' => $this->input->post('trip16T_CR3_2'),
      'trip16T_CR3_3' => $this->input->post('trip16T_CR3_3'),
      'trip16T_CR3_4' => $this->input->post('trip16T_CR3_4'),
      'trip16T_CR3_5' => $this->input->post('trip16T_CR3_5'),
      'trip16T_CR3_6' => $this->input->post('trip16T_CR3_6'),
      'Totaltrip16T_CR3' => $this->input->post('Totaltrip16T_CR3'),
      'subTotalbcm16T_CR3' => $this->input->post('subTotalbcm16T_CR3'),
      'Totalbcm16T_CR3' => $this->input->post('Totalbcm16T_CR3'),

      'companyName11' => $this->input->post('companyName11'),
      'trip16T_CR4_1' => $this->input->post('trip16T_CR4_1'),
      'trip16T_CR4_2' => $this->input->post('trip16T_CR4_2'),
      'trip16T_CR4_3' => $this->input->post('trip16T_CR4_3'),
      'trip16T_CR4_4' => $this->input->post('trip16T_CR4_4'),
      'trip16T_CR4_5' => $this->input->post('trip16T_CR4_5'),
      'trip16T_CR4_6' => $this->input->post('trip16T_CR4_6'),
      'Totaltrip16T_CR4' => $this->input->post('Totaltrip16T_CR4'),
      'subTotalbcm16T_CR4' => $this->input->post('subTotalbcm16T_CR4'),
      'Totalbcm16T_CR4' => $this->input->post('Totalbcm16T_CR4'),

      'companyName12' => $this->input->post('companyName12'),
      'trip25T_CR1_1' => $this->input->post('trip25T_CR1_1'),
      'trip25T_CR1_2' => $this->input->post('trip25T_CR1_2'),
      'trip25T_CR1_3' => $this->input->post('trip25T_CR1_3'),
      'trip25T_CR1_4' => $this->input->post('trip25T_CR1_4'),
      'trip25T_CR1_5' => $this->input->post('trip25T_CR1_5'),
      'trip25T_CR1_6' => $this->input->post('trip25T_CR1_6'),
      'Totaltrip25T_CR1' => $this->input->post('Totaltrip25T_CR1'),
      'subTotalbcm25T_CR1' => $this->input->post('subTotalbcm25T_CR1'),
      'Totalbcm25T_CR1' => $this->input->post('Totalbcm25T_CR1'),

      'companyName13' => $this->input->post('companyName13'),
      'trip25T_CR2_1' => $this->input->post('trip25T_CR2_1'),
      'trip25T_CR2_2' => $this->input->post('trip25T_CR2_2'),
      'trip25T_CR2_3' => $this->input->post('trip25T_CR2_3'),
      'trip25T_CR2_4' => $this->input->post('trip25T_CR2_4'),
      'trip25T_CR2_5' => $this->input->post('trip25T_CR2_5'),
      'trip25T_CR2_6' => $this->input->post('trip25T_CR2_6'),
      'Totaltrip25T_CR2' => $this->input->post('Totaltrip25T_CR2'),
      'subTotalbcm25T_CR2' => $this->input->post('subTotalbcm25T_CR2'),
      'Totalbcm25T_CR2' => $this->input->post('Totalbcm25T_CR2'),

      'companyName14' => $this->input->post('companyName14'),
      'trip25T_CR3_1' => $this->input->post('trip25T_CR3_1'),
      'trip25T_CR3_2' => $this->input->post('trip25T_CR3_2'),
      'trip25T_CR3_3' => $this->input->post('trip25T_CR3_3'),
      'trip25T_CR3_4' => $this->input->post('trip25T_CR3_4'),
      'trip25T_CR3_5' => $this->input->post('trip25T_CR3_5'),
      'trip25T_CR3_6' => $this->input->post('trip25T_CR3_6'),
      'Totaltrip25T_CR3' => $this->input->post('Totaltrip25T_CR3'),
      'subTotalbcm25T_CR3' => $this->input->post('subTotalbcm25T_CR3'),
      'Totalbcm25T_CR3' => $this->input->post('Totalbcm25T_CR3'),

      'companyName15' => $this->input->post('companyName15'),
      'trip25T_CR4_1' => $this->input->post('trip25T_CR4_1'),
      'trip25T_CR4_2' => $this->input->post('trip25T_CR4_2'),
      'trip25T_CR4_3' => $this->input->post('trip25T_CR4_3'),
      'trip25T_CR4_4' => $this->input->post('trip25T_CR4_4'),
      'trip25T_CR4_5' => $this->input->post('trip25T_CR4_5'),
      'trip25T_CR4_6' => $this->input->post('trip25T_CR4_6'),
      'Totaltrip25T_CR4' => $this->input->post('Totaltrip25T_CR4'),
      'subTotalbcm25T_CR4' => $this->input->post('subTotalbcm25T_CR4'),
      'Totalbcm25T_CR4' => $this->input->post('Totalbcm25T_CR4'),

      'companyName16' => $this->input->post('companyName16'),
      'trip25T_CR5_1' => $this->input->post('trip25T_CR5_1'),
      'trip25T_CR5_2' => $this->input->post('trip25T_CR5_2'),
      'trip25T_CR5_3' => $this->input->post('trip25T_CR5_3'),
      'trip25T_CR5_4' => $this->input->post('trip25T_CR5_4'),
      'trip25T_CR5_5' => $this->input->post('trip25T_CR5_5'),
      'trip25T_CR5_6' => $this->input->post('trip25T_CR5_6'),
      'Totaltrip25T_CR5' => $this->input->post('Totaltrip25T_CR5'),
      'subTotalbcm25T_CR5' => $this->input->post('subTotalbcm25T_CR5'),
      'Totalbcm25T_CR5' => $this->input->post('Totalbcm25T_CR5'),

      'companyName17' => $this->input->post('companyName17'),
      'trip25T_CR6_1' => $this->input->post('trip25T_CR6_1'),
      'trip25T_CR6_2' => $this->input->post('trip25T_CR6_2'),
      'trip25T_CR6_3' => $this->input->post('trip25T_CR6_3'),
      'trip25T_CR6_4' => $this->input->post('trip25T_CR6_4'),
      'trip25T_CR6_5' => $this->input->post('trip25T_CR6_5'),
      'trip25T_CR6_6' => $this->input->post('trip25T_CR6_6'),
      'Totaltrip25T_CR6' => $this->input->post('Totaltrip25T_CR6'),
      'subTotalbcm25T_CR6' => $this->input->post('subTotalbcm25T_CR6'),
      'Totalbcm25T_CR6' => $this->input->post('Totalbcm25T_CR6'),

      'companyName18' => $this->input->post('companyName18'),
      'trip25T_CR7_1' => $this->input->post('trip25T_CR7_1'),
      'trip25T_CR7_2' => $this->input->post('trip25T_CR7_2'),
      'trip25T_CR7_3' => $this->input->post('trip25T_CR7_3'),
      'trip25T_CR7_4' => $this->input->post('trip25T_CR7_4'),
      'trip25T_CR7_5' => $this->input->post('trip25T_CR7_5'),
      'trip25T_CR7_6' => $this->input->post('trip25T_CR7_6'),
      'Totaltrip25T_CR7' => $this->input->post('Totaltrip25T_CR7'),
      'subTotalbcm25T_CR7' => $this->input->post('subTotalbcm25T_CR7'),
      'Totalbcm25T_CR7' => $this->input->post('Totalbcm25T_CR7'),

      'companyName19' => $this->input->post('companyName19'),
      'trip25T_CR8_1' => $this->input->post('trip25T_CR8_1'),
      'trip25T_CR8_2' => $this->input->post('trip25T_CR8_2'),
      'trip25T_CR8_3' => $this->input->post('trip25T_CR8_3'),
      'trip25T_CR8_4' => $this->input->post('trip25T_CR8_4'),
      'trip25T_CR8_5' => $this->input->post('trip25T_CR8_5'),
      'trip25T_CR8_6' => $this->input->post('trip25T_CR8_6'),
      'Totaltrip25T_CR8' => $this->input->post('Totaltrip25T_CR8'),
      'subTotalbcm25T_CR8' => $this->input->post('subTotalbcm25T_CR8'),
      'Totalbcm25T_CR8' => $this->input->post('Totalbcm25T_CR8'),

      'companyName191' => $this->input->post('companyName191'),
      'trip25T_CR9_1' => $this->input->post('trip25T_CR9_1'),
      'trip25T_CR9_2' => $this->input->post('trip25T_CR9_2'),
      'trip25T_CR9_3' => $this->input->post('trip25T_CR9_3'),
      'trip25T_CR9_4' => $this->input->post('trip25T_CR9_4'),
      'trip25T_CR9_5' => $this->input->post('trip25T_CR9_5'),
      'trip25T_CR9_6' => $this->input->post('trip25T_CR9_6'),
      'Totaltrip25T_CR9' => $this->input->post('Totaltrip25T_CR9'),
      'subTotalbcm25T_CR9' => $this->input->post('subTotalbcm25T_CR9'),
      'Totalbcm25T_CR9' => $this->input->post('Totalbcm25T_CR9'),

      'companyName192' => $this->input->post('companyName192'),
      'trip25T_CR10_1' => $this->input->post('trip25T_CR10_1'),
      'trip25T_CR10_2' => $this->input->post('trip25T_CR10_2'),
      'trip25T_CR10_3' => $this->input->post('trip25T_CR10_3'),
      'trip25T_CR10_4' => $this->input->post('trip25T_CR10_4'),
      'trip25T_CR10_5' => $this->input->post('trip25T_CR10_5'),
      'trip25T_CR10_6' => $this->input->post('trip25T_CR10_6'),
      'Totaltrip25T_CR10' => $this->input->post('Totaltrip25T_CR10'),
      'subTotalbcm25T_CR10' => $this->input->post('subTotalbcm25T_CR10'),
      'Totalbcm25T_CR10' => $this->input->post('Totalbcm25T_CR10'),

      'companyName193' => $this->input->post('companyName193'),
      'trip25T_CR11_1' => $this->input->post('trip25T_CR11_1'),
      'trip25T_CR11_2' => $this->input->post('trip25T_CR11_2'),
      'trip25T_CR11_3' => $this->input->post('trip25T_CR11_3'),
      'trip25T_CR11_4' => $this->input->post('trip25T_CR11_4'),
      'trip25T_CR11_5' => $this->input->post('trip25T_CR11_5'),
      'trip25T_CR11_6' => $this->input->post('trip25T_CR11_6'),
      'Totaltrip25T_CR11' => $this->input->post('Totaltrip25T_CR11'),
      'subTotalbcm25T_CR11' => $this->input->post('subTotalbcm25T_CR11'),
      'Totalbcm25T_CR11' => $this->input->post('Totalbcm25T_CR11'),

      'companyName194' => $this->input->post('companyName194'),
      'trip25T_CR12_1' => $this->input->post('trip25T_CR12_1'),
      'trip25T_CR12_2' => $this->input->post('trip25T_CR12_2'),
      'trip25T_CR12_3' => $this->input->post('trip25T_CR12_3'),
      'trip25T_CR12_4' => $this->input->post('trip25T_CR12_4'),
      'trip25T_CR12_5' => $this->input->post('trip25T_CR12_5'),
      'trip25T_CR12_6' => $this->input->post('trip25T_CR12_6'),
      'Totaltrip25T_CR12' => $this->input->post('Totaltrip25T_CR12'),
      'subTotalbcm25T_CR12' => $this->input->post('subTotalbcm25T_CR12'),
      'Totalbcm25T_CR12' => $this->input->post('Totalbcm25T_CR12'),

      'companyName195' => $this->input->post('companyName195'),
      'trip25T_CR13_1' => $this->input->post('trip25T_CR13_1'),
      'trip25T_CR13_2' => $this->input->post('trip25T_CR13_2'),
      'trip25T_CR13_3' => $this->input->post('trip25T_CR13_3'),
      'trip25T_CR13_4' => $this->input->post('trip25T_CR13_4'),
      'trip25T_CR13_5' => $this->input->post('trip25T_CR13_5'),
      'trip25T_CR13_6' => $this->input->post('trip25T_CR13_6'),
      'Totaltrip25T_CR13' => $this->input->post('Totaltrip25T_CR13'),
      'subTotalbcm25T_CR13' => $this->input->post('subTotalbcm25T_CR13'),
      'Totalbcm25T_CR13' => $this->input->post('Totalbcm25T_CR13'),

      'companyName196' => $this->input->post('companyName196'),
      'trip25T_CR14_1' => $this->input->post('trip25T_CR14_1'),
      'trip25T_CR14_2' => $this->input->post('trip25T_CR14_2'),
      'trip25T_CR14_3' => $this->input->post('trip25T_CR14_3'),
      'trip25T_CR14_4' => $this->input->post('trip25T_CR14_4'),
      'trip25T_CR14_5' => $this->input->post('trip25T_CR14_5'),
      'trip25T_CR14_6' => $this->input->post('trip25T_CR14_6'),
      'Totaltrip25T_CR14' => $this->input->post('Totaltrip25T_CR14'),
      'subTotalbcm25T_CR14' => $this->input->post('subTotalbcm25T_CR14'),
      'Totalbcm25T_CR14' => $this->input->post('Totalbcm25T_CR14'),

      'companyName20' => $this->input->post('companyName20'),
      'trip30T_CR1_1' => $this->input->post('trip30T_CR1_1'),
      'trip30T_CR1_2' => $this->input->post('trip30T_CR1_2'),
      'trip30T_CR1_3' => $this->input->post('trip30T_CR1_3'),
      'trip30T_CR1_4' => $this->input->post('trip30T_CR1_4'),
      'trip30T_CR1_5' => $this->input->post('trip30T_CR1_5'),
      'trip30T_CR1_6' => $this->input->post('trip30T_CR1_6'),
      'Totaltrip30T_CR1' => $this->input->post('Totaltrip30T_CR1'),
      'subTotalbcm30T_CR1' => $this->input->post('subTotalbcm30T_CR1'),
      'Totalbcm30T_CR1' => $this->input->post('Totalbcm30T_CR1'),

      'companyName21' => $this->input->post('companyName21'),
      'trip30T_CR2_1' => $this->input->post('trip30T_CR2_1'),
      'trip30T_CR2_2' => $this->input->post('trip30T_CR2_2'),
      'trip30T_CR2_3' => $this->input->post('trip30T_CR2_3'),
      'trip30T_CR2_4' => $this->input->post('trip30T_CR2_4'),
      'trip30T_CR2_5' => $this->input->post('trip30T_CR2_5'),
      'trip30T_CR2_6' => $this->input->post('trip30T_CR2_6'),
      'Totaltrip30T_CR2' => $this->input->post('Totaltrip30T_CR2'),
      'subTotalbcm30T_CR2' => $this->input->post('subTotalbcm30T_CR2'),
      'Totalbcm30T_CR2' => $this->input->post('Totalbcm30T_CR2'),

      'companyName22' => $this->input->post('companyName22'),
      'trip30T_CR3_1' => $this->input->post('trip30T_CR3_1'),
      'trip30T_CR3_2' => $this->input->post('trip30T_CR3_2'),
      'trip30T_CR3_3' => $this->input->post('trip30T_CR3_3'),
      'trip30T_CR3_4' => $this->input->post('trip30T_CR3_4'),
      'trip30T_CR3_5' => $this->input->post('trip30T_CR3_5'),
      'trip30T_CR3_6' => $this->input->post('trip30T_CR3_6'),
      'Totaltrip30T_CR3' => $this->input->post('Totaltrip30T_CR3'),
      'subTotalbcm30T_CR3' => $this->input->post('subTotalbcm30T_CR3'),
      'Totalbcm30T_CR3' => $this->input->post('Totalbcm30T_CR3'),


      'companyName23' => $this->input->post('companyName23'),
      'trip30T_CR4_1' => $this->input->post('trip30T_CR4_1'),
      'trip30T_CR4_2' => $this->input->post('trip30T_CR4_2'),
      'trip30T_CR4_3' => $this->input->post('trip30T_CR4_3'),
      'trip30T_CR4_4' => $this->input->post('trip30T_CR4_4'),
      'trip30T_CR4_5' => $this->input->post('trip30T_CR4_5'),
      'trip30T_CR4_6' => $this->input->post('trip30T_CR4_6'),
      'Totaltrip30T_CR4' => $this->input->post('Totaltrip30T_CR4'),
      'subTotalbcm30T_CR4' => $this->input->post('subTotalbcm30T_CR4'),
      'Totalbcm30T_CR4' => $this->input->post('Totalbcm30T_CR4'),

      'companyName24' => $this->input->post('companyName24'),
      'trip30T_CR5_1' => $this->input->post('trip30T_CR5_1'),
      'trip30T_CR5_2' => $this->input->post('trip30T_CR5_2'),
      'trip30T_CR5_3' => $this->input->post('trip30T_CR5_3'),
      'trip30T_CR5_4' => $this->input->post('trip30T_CR5_4'),
      'trip30T_CR5_5' => $this->input->post('trip30T_CR5_5'),
      'trip30T_CR5_6' => $this->input->post('trip30T_CR5_6'),
      'Totaltrip30T_CR5' => $this->input->post('Totaltrip30T_CR5'),
      'subTotalbcm30T_CR5' => $this->input->post('subTotalbcm30T_CR5'),
      'Totalbcm30T_CR5' => $this->input->post('Totalbcm30T_CR5'),

      'companyName25' => $this->input->post('companyName25'),
      'trip30T_CR6_1' => $this->input->post('trip30T_CR6_1'),
      'trip30T_CR6_2' => $this->input->post('trip30T_CR6_2'),
      'trip30T_CR6_3' => $this->input->post('trip30T_CR6_3'),
      'trip30T_CR6_4' => $this->input->post('trip30T_CR6_4'),
      'trip30T_CR6_5' => $this->input->post('trip30T_CR6_5'),
      'trip30T_CR6_6' => $this->input->post('trip30T_CR6_6'),
      'Totaltrip30T_CR6' => $this->input->post('Totaltrip30T_CR6'),
      'subTotalbcm30T_CR6' => $this->input->post('subTotalbcm30T_CR6'),
      'Totalbcm30T_CR6' => $this->input->post('Totalbcm30T_CR6'),

      'bcmBWE1' => $this->input->post('bcmBWE1'),
      'bcmBWE2' => $this->input->post('bcmBWE2'),
      'subTotalbcmBWE' => $this->input->post('subTotalbcmBWE'),
      'TotalbcmBWE' => $this->input->post('TotalbcmBWE'),


      'TotalTripJob1' => $this->input->post('TotalTripJob1'),
      'TotalBcmJob1' => $this->input->post('TotalBcmJob1'),
      'SumTotalBcmJob1' => $this->input->post('SumTotalBcmJob1'),
      'TotalTripJob3' => $this->input->post('TotalTripJob3'),
      'TotalBcmJob3' => $this->input->post('TotalBcmJob3'),
      'SumTotalBcmJob3' => $this->input->post('SumTotalBcmJob3'),
      'TotalTripJob1_3' => $this->input->post('TotalTripJob1_3'),
      'TotalBcmJob1_3' => $this->input->post('TotalBcmJob1_3'),
      'SumTotalBcmJob1_3' => $this->input->post('SumTotalBcmJob1_3'),
      'toptrip' => $toptrip



    );

    $Query = $this->db->insert('tb_production', $data);
        //insert log
        $log = "Insert->tbProduction : " . json_encode($data);
        $dataLog = array(
    
          'activity' => $log
    
        );
    
        $Query = $this->db->insert('tb_log', $dataLog);
  }

  public function delete_Production($id)
  {

    $this->db->delete('tb_production', array('id' => $id));
  }
}
