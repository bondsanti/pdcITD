<?php
defined('BASEPATH') or exit('No direct script access allowed');
$NowDate = date("Y-m-d");
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">

  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-yellow">
          <div class="card-header">
            <h3 class="card-title">ตารางข้อมูลเที่ยว(ทั้งหมด)</h3>
          </div>
          <!-- Modal Setting -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="">ตั้งค่าระบบสายพาน</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="form-horizontal" name="form" id="form" action="<?php echo site_url('Main/editNameSystem'); ?>" method="post">
                  <div class="modal-body">
                    <div class="col-12 text-center bg-info color-palette">
                      <hr>
                      <h5>ตั้งค่าระบบ</h5>
                      <hr>
                    </div>

                    <div class="row">
                      <div class="col-6 text-center">
                        <label class="text-center">ชื่อระบบ:</label>
                        <input type="hidden" name="id" class="form-control" style="color:red;text-align:center;" value="<?php echo $Query->id; ?>" required>
                        <input type="text" name="nameSystem" class="form-control" placeholder="ชื่อระบบ" style="color:red;text-align:center;" value="<?php echo $Query->nameSystem; ?>" required>
                      </div>
                      <div class="col-6 text-center">
                        <label>เป้าหมายBCM/30นาที</label>
                        <input type="text" name="tarGet" class="form-control" placeholder="เป้าหมาย" style="color:red;text-align:center;" value="<?php echo $Query->tarGet; ?>" required>
                      </div>
                    </div>

                    <div class="col-12 text-center bg-danger color-palette">
                      <hr>
                      <h5>ตั้งค่าเฉลี่ยรถ</h5>
                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-4 text-center">
                        <label>785D</label>

                        <input type="text" name="cat785D" class="form-control" placeholder="785D" style="color:red;text-align:center;" value="<?php echo $Query->cat785D; ?>" required>
                      </div>
                      <div class="col-4 text-center">
                        <label>777D</label>

                        <input type="text" name="cat777D" class="form-control" placeholder="777D" style="color:red;text-align:center;" value="<?php echo $Query->cat777D; ?>" required>
                      </div>
                      <div class="col-4 text-center">
                        <label>EGAT</label>

                        <input type="text" name="EGAT" class="form-control" placeholder="EGAT" style="color:red;text-align:center;" value="<?php echo $Query->EGAT; ?>" required>
                      </div>
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-3 text-center">
                        <label>12T</label>

                        <input type="text" name="dum12T" class="form-control" placeholder="12T" style="color:red;text-align:center;" value="<?php echo $Query->dum12T; ?>" required>
                      </div>
                      <div class="col-3 text-center">
                        <label>16T</label>

                        <input type="text" name="dum16T" class="form-control" placeholder="16T" style="color:red;text-align:center;" value="<?php echo $Query->dum16T; ?>" required>
                      </div>
                      <div class="col-3 text-center">
                        <label>25T</label>

                        <input type="text" name="dum25T" class="form-control" placeholder="25T" style="color:red;text-align:center;" value="<?php echo $Query->dum25T; ?>" required>
                      </div>
                      <div class="col-3 text-center">
                        <label>30T</label>

                        <input type="text" name="dum30T" class="form-control" placeholder="30T" style="color:red;text-align:center;" value="<?php echo $Query->dum30T; ?>" required>
                      </div>
                    </div><!-- row -->
                    <div class="col-12 text-center bg-warning color-palette">
                      <hr>
                      <h5>ตั้งค่าเครื่องโม่</h5>
                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#1</label>

                        <input type="text" name="crName1" class="form-control" placeholder="เครื่องโม่#1" style="color:red;text-align:center;" value="<?php echo $Query->crName1; ?>">
                      </div>
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#2</label>

                        <input type="text" name="crName2" class="form-control" placeholder="เครื่องโม่#2" style="color:red;text-align:center;" value="<?php echo $Query->crName2; ?>">
                      </div>
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#3</label>

                        <input type="text" name="crName3" class="form-control" placeholder="เครื่องโม่#3" style="color:red;text-align:center;" value="<?php echo $Query->crName3; ?>">
                      </div>
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#4</label>

                        <input type="text" name="crName4" class="form-control" placeholder="เครื่องโม่#4" style="color:red;text-align:center;" value="<?php echo $Query->crName4; ?>">
                      </div>
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#5</label>

                        <input type="text" name="crName5" class="form-control" placeholder="เครื่องโม่#5" style="color:red;text-align:center;" value="<?php echo $Query->crName5; ?>">
                      </div>
                      <div class="col-4 text-center">
                        <label>เครื่องโม่#6</label>

                        <input type="text" name="crName6" class="form-control" placeholder="เครื่องโม่#6" style="color:red;text-align:center;" value="<?php echo $Query->crName6; ?>">
                      </div>
                    </div><!-- row -->

                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>

                  </div>
                </form>
              </div>
            </div>
          </div>

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

          <div class="card-body">

            <table id="listData" class="table table-bordered table-hover table-sm text-center">
              <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>วันที่</th>
                  <th>เวลา</th>
                  <th>785D</th>
                  <th>777D</th>
                  <th>EGAT</th>
                  <th>12T</th>
                  <th>16T</th>
                  <th>25T</th>
                  <th>30T</th>
                  <th>รวม(รถCAT)</th>
                  <th>รวม(รถสิบล้อ)</th>
                  <th>รวม(ฺBCM)</th>
                  <th>เครื่องมือ</th>
                </tr>
              </thead>
            </table>

          </div>

        </div>
        <!--card-card-->
      </div>

    </div> <!-- /.row -->

  </div><!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->