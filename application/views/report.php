<?php
defined('BASEPATH') or exit('No direct script access allowed');
// //date_default_timezone_set("Asia/Bangkok"); // ป้องกันกรณีเวลา server ไม่ตรง
// echo $date_now = date("Y-m-d") . "<br>";

// $date_start1 = "2021-08-07";
// $date_end1 = date("Y-m-d", strtotime($date_start1 . " +1 month"));
// echo $date_end1 . "<br>";

// if ($date_now = $date_start1) {
//     echo "หมดอายุ";
// } else {
//     echo "ใช้งานได้";
// }
$NowDate = date("Y-m-d");
if (empty($QueryReportDay)) {
  $strDate_Show="";
}else{
foreach ($QueryReportDay as $rs) {
  $strDate_Show = date("d/m/Y", strtotime($rs['dateShift']));
}
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    
      <div class="row mb-2">

        <div class="col-12 text-center bg-info color-palette py-3">

          <h1>ใบรายงานสรุปเที่ยว <?php echo $Query->nameSystem; ?> ประจำวันที่ <?php echo $strDate_Show; ?></h1>

        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
                <!-- Modal Report -->
           <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="">ออกรายงานประจำวัน</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="form-horizontal" name="form" id="form" action="<?php echo site_url('report'); ?>" method="post">
                  <div class="modal-body">
                    <div class="col-12 text-center bg-info color-palette">
                      <hr>
                      <h5>เลือกวันที่</h5>
                      <hr>
                    </div>

                    <div class="row">

                      <div class="col-12 text-center">
                        <input type="date" name="dateShift" class="form-control input-lg" autocomplete="off" placeholder="วันที่" style="color:red;text-align:center;" value="<?php echo $NowDate; ?>" required>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">ตกลง</button>

                  </div>
                </form>
              </div>
            </div>
           </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">

            <h3 class="card-title">สรุปเที่ยวครึ่งชั่วโมง (กลางวัน)</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm text-center">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>เวลา</th>
                  <th>785D</th>
                  <th>777D</th>
                  <th>EGAT</th>
                  <th>12T</th>
                  <th>16T</th>
                  <th>25T</th>
                  <th>30T</th>
                  <th>รวมเที่ยว(รถCAT)</th>
                  <th>รวมเที่ยว(รถสิบล้อ)</th>
                  <th>รวมเที่ยว(Trip)</th>
                  <th>รวม(ฺBCM)</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if (empty($QueryReportDay)) {
                  echo $Notfound = "
                    <tr>
                    <td colspan='13'>
                    ไม่พบข้อมูล
                    </td>
                    </tr>
                  ";
                } else {
                  $total785SumDay = 0;
                  $total777SumDay = 0;
                  $totalEGATSumDay = 0;
                  $total12SumDay = 0;
                  $total16SumDay = 0;
                  $total25SumDay = 0;
                  $total30SumDay = 0;
                  $totalCatSumDay = 0;
                  $totalDtSumDay = 0;
                  $totalTripSumDay = 0;
                  $totalBCMSumDay = 0;
                  $i = 1;
                  foreach ($QueryReportDay as $rows) {

                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $strDate = date("H:i", strtotime($rows['timeShift'])); ?></td>
                      <td><?php echo (int)$rows['Totaltrip785D_CR1']; ?></td>
                      <td><?php echo (int)$rows['Totaltrip777D_CR1']; ?></td>
                      <td><?php echo (int)$rows['TotaltripEGAT_CR1']; ?></td>
                      <td><?php echo $total12t = ((int)$rows['Totaltrip12T_CR1'] + (int)$rows['Totaltrip12T_CR2'] + (int)$rows['Totaltrip12T_CR3'] + (int)$rows['Totaltrip12T_CR4']); ?></td>
                      <td><?php echo $total16t = ((int)$rows['Totaltrip16T_CR1'] + (int)$rows['Totaltrip16T_CR2'] + (int)$rows['Totaltrip16T_CR3'] + (int)$rows['Totaltrip16T_CR4']); ?></td>
                      <td><?php echo $total25t = ((int)$rows['Totaltrip25T_CR1'] + (int)$rows['Totaltrip25T_CR2'] + (int)$rows['Totaltrip25T_CR3'] + (int)$rows['Totaltrip25T_CR4'] + (int)$rows['Totaltrip25T_CR5'] + (int)$rows['Totaltrip25T_CR6'] + (int)$rows['Totaltrip25T_CR7'] + (int)$rows['Totaltrip25T_CR8'] + (int)$rows['Totaltrip25T_CR9'] + (int)$rows['Totaltrip25T_CR10'] + (int)$rows['Totaltrip25T_CR11'] + (int)$rows['Totaltrip25T_CR12'] + (int)$rows['Totaltrip25T_CR13'] + (int)$rows['Totaltrip25T_CR14']); ?></td>
                      <td><?php echo $total30t = ((int)$rows['Totaltrip30T_CR1'] + (int)$rows['Totaltrip30T_CR2'] + (int)$rows['Totaltrip30T_CR3'] + (int)$rows['Totaltrip30T_CR4'] + (int)$rows['Totaltrip30T_CR5'] + (int)$rows['Totaltrip30T_CR6']); ?></td>
                      <td><?php echo $sumCat = ((int)$rows['Totaltrip785D_CR1'] + (int)$rows['Totaltrip777D_CR1'] + (int)$rows['TotaltripEGAT_CR1']); ?></td>
                      <td><?php echo $sumDt = $total12t + $total16t + $total25t + $total30t; ?></td>
                      <td><?php echo $sumTrip = $sumCat + $sumDt; ?></td>
                      <td><?php echo number_format((float)$rows['SumTotalBcmJob1_3'], 2); ?></td>
                    </tr>
                <?php

                    $total785SumDay += (int)$rows['Totaltrip785D_CR1'];
                    $total777SumDay += (int)$rows['Totaltrip777D_CR1'];
                    $totalEGATSumDay += (int)$rows['TotaltripEGAT_CR1'];
                    $total12SumDay += (int)$total12t;
                    $total16SumDay += (int)$total16t;
                    $total25SumDay += (int)$total25t;
                    $total30SumDay += (int)$total30t;
                    $totalCatSumDay += (int)$sumCat;
                    $totalDtSumDay += (int)$sumDt;
                    $totalTripSumDay += (int)$sumTrip;
                    $totalBCMSumDay += (float)$rows['SumTotalBcmJob1_3'];

                    $i++;
                  }
                 ?>

                <tr>
                  <th colspan='2'>Total</th>
                  <td><?php echo number_format($total785SumDay); ?></td>
                  <td><?php echo number_format($total777SumDay); ?></td>
                  <td><?php echo number_format($totalEGATSumDay); ?></td>
                  <td><?php echo number_format($total12SumDay); ?></td>
                  <td><?php echo number_format($total16SumDay); ?></td>
                  <td><?php echo number_format($total25SumDay); ?></td>
                  <td><?php echo number_format($total30SumDay); ?></td>
                  <th><?php echo number_format($totalCatSumDay); ?></th>
                  <th><?php echo number_format($totalDtSumDay); ?></th>
                  <th><?php echo number_format($totalTripSumDay); ?></th>
                  <th><?php echo number_format($totalBCMSumDay, 2); ?></th>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">

            <h3 class="card-title">สรุปเที่ยวครึ่งชั่วโมง (กลางคืน)</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm text-center">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>เวลา</th>
                  <th>785D</th>
                  <th>777D</th>
                  <th>EGAT</th>
                  <th>12T</th>
                  <th>16T</th>
                  <th>25T</th>
                  <th>30T</th>
                  <th>รวมเที่ยว(รถCAT)</th>
                  <th>รวมเที่ยว(รถสิบล้อ)</th>
                  <th>รวมเที่ยว(Trip)</th>
                  <th>รวม(ฺBCM)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $total785SumNight = 0;
                $total777SumNight = 0;
                $totalEGATSumNight = 0;
                $total12SumNight = 0;
                $total16SumNight = 0;
                $total25SumNight = 0;
                $total30SumNight = 0;
                $totalCatSumNight = 0;
                $totalDtSumNight = 0;
                $totalTripSumNight = 0;
                $totalBCMSumNight = 0;
                $i = 1;
                if (empty($QueryReportNight)) {
                  echo $Notfound = "
                    <tr>
                    <td colspan='13'>
                    ไม่พบข้อมูล
                    </td>
                    </tr>
                  ";
                } else {
                  foreach ($QueryReportNight as $rows1) {
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $strDate = date("H:i", strtotime($rows1['timeShift'])); ?></td>
                      <td><?php echo (int)$rows1['Totaltrip785D_CR1']; ?></td>
                      <td><?php echo (int)$rows1['Totaltrip777D_CR1']; ?></td>
                      <td><?php echo (int)$rows1['TotaltripEGAT_CR1']; ?></td>
                      <td><?php echo $total12t = ((int)$rows1['Totaltrip12T_CR1'] + (int)$rows1['Totaltrip12T_CR2'] + (int)$rows1['Totaltrip12T_CR3'] + (int)$rows1['Totaltrip12T_CR4']); ?></td>
                      <td><?php echo $total16t = ((int)$rows1['Totaltrip16T_CR1'] + (int)$rows1['Totaltrip16T_CR2'] + (int)$rows1['Totaltrip16T_CR3'] + (int)$rows1['Totaltrip16T_CR4']); ?></td>
                      <td><?php echo $total25t = ((int)$rows1['Totaltrip25T_CR1'] + (int)$rows1['Totaltrip25T_CR2'] + (int)$rows1['Totaltrip25T_CR3'] + (int)$rows1['Totaltrip25T_CR4'] + (int)$rows1['Totaltrip25T_CR5'] + (int)$rows1['Totaltrip25T_CR6'] + (int)$rows1['Totaltrip25T_CR7'] + (int)$rows1['Totaltrip25T_CR8'] + (int)$rows1['Totaltrip25T_CR9'] + (int)$rows1['Totaltrip25T_CR10'] + (int)$rows1['Totaltrip25T_CR11'] + (int)$rows1['Totaltrip25T_CR12'] + (int)$rows1['Totaltrip25T_CR13'] + (int)$rows1['Totaltrip25T_CR14']); ?></td>
                      <td><?php echo $total30t = ((int)$rows1['Totaltrip30T_CR1'] + (int)$rows1['Totaltrip30T_CR2'] + (int)$rows1['Totaltrip30T_CR3'] + (int)$rows1['Totaltrip30T_CR4'] + (int)$rows1['Totaltrip30T_CR5'] + (int)$rows1['Totaltrip30T_CR6']); ?></td>
                      <td><?php echo $sumCat = ((int)$rows1['Totaltrip785D_CR1'] + (int)$rows1['Totaltrip777D_CR1'] + (int)$rows1['TotaltripEGAT_CR1']); ?></td>
                      <td><?php echo $sumDt = $total12t + $total16t + $total25t + $total30t; ?></td>
                      <td><?php echo $sumTrip = $sumCat + $sumDt; ?></td>
                      <td><?php echo number_format((float)$rows1['SumTotalBcmJob1_3'], 2); ?></td>
                    </tr>
                <?php
                    $total785SumNight += (int)$rows1['Totaltrip785D_CR1'];
                    $total777SumNight += (int)$rows1['Totaltrip777D_CR1'];
                    $totalEGATSumNight += (int)$rows1['TotaltripEGAT_CR1'];
                    $total12SumNight += (int)$total12t;
                    $total16SumNight += (int)$total16t;
                    $total25SumNight += (int)$total25t;
                    $total30SumNight += (int)$total30t;
                    $totalCatSumNight += (int)$sumCat;
                    $totalDtSumNight += (int)$sumDt;
                    $totalTripSumNight += (int)$sumTrip;
                    $totalBCMSumNight += (float)$rows1['SumTotalBcmJob1_3'];

                    $i++;
                  }
                 ?>
                <tr>
                  <th colspan='2'>Total</th>
                  <td><?php echo number_format($total785SumNight); ?></td>
                  <td><?php echo number_format($total777SumNight); ?></td>
                  <td><?php echo number_format($totalEGATSumNight); ?></td>
                  <td><?php echo number_format($total12SumNight); ?></td>
                  <td><?php echo number_format($total16SumNight); ?></td>
                  <td><?php echo number_format($total25SumNight); ?></td>
                  <td><?php echo number_format($total30SumNight); ?></td>
                  <th><?php echo number_format($totalCatSumNight); ?></th>
                  <th><?php echo number_format($totalDtSumNight); ?></th>
                  <th><?php echo number_format($totalTripSumNight); ?></th>
                  <th><?php echo number_format($totalBCMSumNight, 2); ?></th>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->