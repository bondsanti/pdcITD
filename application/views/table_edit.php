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
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">กรอกข้อมูล</h3>
          </div>
          <!-- Modal -->
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

          <form class="form-horizontal" name="form" id="form" action="<?php echo site_url('Table/updateData'); ?>" method="post">
            <input type="hidden" class="form-control" id="" style="color: red" name="id" value="<?php echo $QueryEdit->id; ?>" placeholder="">

            <div class="card-body">

              <div class="row">
                <label class="col-2 text-center mt-2">ระบบสายพาน <h5><span class="badge badge-info"><?php echo $Query->nameSystem; ?></span></h5></label>
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2  text-right mt-2">วันที่:</label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  has-error">
                  <input type="text" name="dateShift" id="datepicker" class="form-control" placeholder="วันที่" style="color:red;text-align:center;" value="<?php echo $QueryEdit->dateShift; ?>" required>
                </div>
                <label class="col-lg-1 col-md-2 col-sm-2 col-xs-2 text-right mt-2">เวลา:</label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                  <select class="form-control select2" name="timeShift" required>
                    <?php
                    $Strtime = date("H:i", strtotime($QueryEdit->timeShift));

                    ?>
                    <option value="<?php echo $Strtime; ?>"><?php echo $Strtime; ?></option>
                    <option value="">เลือกเวลา</option>
                    <option value="07:30">07:30</option>
                    <option value="08:00">08:00</option>
                    <option value="08:30">08:30</option>
                    <option value="09:00">09:00</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>

                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                    <option value="20:30">20:30</option>
                    <option value="21:00">21:00</option>
                    <option value="21:30">21:30</option>
                    <option value="22:00">22:00</option>
                    <option value="22:30">22:30</option>
                    <option value="23:00">23:00</option>
                    <option value="23:30">23:30</option>
                    <option value="00:00">00:00 (เที่ยงคืน)</option>
                    <option value="00:30">00:30</option>
                    <option value="01:00">01:00</option>
                    <option value="01:30">01:30</option>
                    <option value="02:00">02:00</option>
                    <option value="02:30">02:30</option>
                    <option value="03:00">03:00</option>
                    <option value="03:30">03:30</option>
                    <option value="04:00">04:00</option>
                    <option value="04:30">04:30</option>
                    <option value="05:00">05:00</option>
                    <option value="05:30">05:30</option>
                    <option value="06:00">06:00</option>
                    <option value="06:30">06:30</option>
                    <option value="07:00">07:00</option>

                  </select>
                </div>
              </div>
              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 ">

                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  รวม
                </div>

              </div>
              <div class="row mt-3">
                <label class="col-sm-3 text-right">บันทึกดินก้อนใหญ่</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="overSizerCR1" name="overSizerCR1" value="<?php echo $QueryEdit->overSizerCR1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="overSizerCR2" name="overSizerCR2" value="<?php echo $QueryEdit->overSizerCR2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="overSizerCR3" name="overSizerCR3" value="<?php echo $QueryEdit->overSizerCR3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="overSizerCR4" name="overSizerCR4" value="<?php echo $QueryEdit->overSizerCR4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="overSizerCR5" name="overSizerCR5" value="<?php echo $QueryEdit->overSizerCR5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:green;text-align:center;border: none; border-bottom: 3px navy double;background:none;" id="TotalOverSizer" name="TotalOverSizer" value="<?php echo $QueryEdit->TotalOverSizer; ?>" readonly="TotalOverSizer">
                </div>
              </div>
              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 text-center">
                  BCM/Trip
                </div>
                <div class="col-sm-1 text-center">
                  บริษัท
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  เที่ยวได้
                </div>
                <div class="col-sm-1 text-center">
                  คิด(CAT)
                </div>
                <div class="col-sm-1 text-center">
                  คิด(BCM)
                </div>

              </div>
              <hr>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2">รถ 785D</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="cat785D" name="cat785D" style="color:red;text-align:center;" value="<?php echo $Query->cat785D; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->cat785D; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName1" name="companyName1" value="ITD" readonly="ITD" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip785D_CR1_1" name="trip785D_CR1_1" value="<?php echo $QueryEdit->trip785D_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip785D_CR1_2" name="trip785D_CR1_2" value="<?php echo $QueryEdit->trip785D_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip785D_CR1_3" name="trip785D_CR1_3" value="<?php echo $QueryEdit->trip785D_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip785D_CR1_4" name="trip785D_CR1_4" value="<?php echo $QueryEdit->trip785D_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip785D_CR1_5" name="trip785D_CR1_5" value="<?php echo $QueryEdit->trip785D_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="total40trip" name="Totaltrip785D_CR1" value="<?php echo $QueryEdit->Totaltrip785D_CR1; ?>" readonly="Totaltrip785D_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="total40bcmST" name="subTotalbcm785D_CR1" value="<?php echo $QueryEdit->subTotalbcm785D_CR1; ?>" readonly="subTotalbcm785D_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm785D_CR1" name="Totalbcm785D_CR1" value="<?php echo $QueryEdit->Totalbcm785D_CR1; ?>" readonly="Totalbcm785D_CR1">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2">รถ 777D</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="cat777D" name="cat777D" style="color:red;text-align:center;" value="<?php echo $Query->cat777D; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->cat777D; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName2" name="companyName2" value="ITD" readonly="ITD" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip777D_CR1_1" name="trip777D_CR1_1" value="<?php echo $QueryEdit->trip777D_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip777D_CR1_2" name="trip777D_CR1_2" value="<?php echo $QueryEdit->trip777D_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip777D_CR1_3" name="trip777D_CR1_3" value="<?php echo $QueryEdit->trip777D_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip777D_CR1_4" name="trip777D_CR1_4" value="<?php echo $QueryEdit->trip777D_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip777D_CR1_5" name="trip777D_CR1_5" value="<?php echo $QueryEdit->trip777D_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip777D_CR1" name="Totaltrip777D_CR1" value="<?php echo $QueryEdit->Totaltrip777D_CR1; ?>" readonly="Totaltrip777D_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm777D_CR1" name="subTotalbcm777D_CR1" value="<?php echo $QueryEdit->subTotalbcm777D_CR1; ?>" readonly="subTotalbcm777D_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm777D_CR1" name="Totalbcm777D_CR1" value="<?php echo $QueryEdit->Totalbcm777D_CR1; ?>" readonly="Totalbcm777D_CR1">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2">รถ EGAT</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="EGAT" name="EGAT" style="color:red;text-align:center;" value="<?php echo $Query->EGAT; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->EGAT; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName3" name="companyName3" value="EGAT" readonly="EGAT" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="tripEGAT_CR1_1" name="tripEGAT_CR1_1" value="<?php echo $QueryEdit->tripEGAT_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="tripEGAT_CR1_2" name="tripEGAT_CR1_2" value="<?php echo $QueryEdit->tripEGAT_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="tripEGAT_CR1_3" name="tripEGAT_CR1_3" value="<?php echo $QueryEdit->tripEGAT_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="tripEGAT_CR1_4" name="tripEGAT_CR1_4" value="<?php echo $QueryEdit->tripEGAT_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="tripEGAT_CR1_5" name="tripEGAT_CR1_5" value="<?php echo $QueryEdit->tripEGAT_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotaltripEGAT_CR1" name="TotaltripEGAT_CR1" value="<?php echo $QueryEdit->TotaltripEGAT_CR1; ?>" readonly="TotaltripEGAT_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcmEGAT_CR1" name="subTotalbcmEGAT_CR1" value="<?php echo $QueryEdit->subTotalbcmEGAT_CR1; ?>" readonly="subTotalbcmEGAT_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalbcmEGAT_CR1" name="TotalbcmEGAT_CR1" value="<?php echo $QueryEdit->TotalbcmEGAT_CR1; ?>" readonly="TotalbcmEGAT_CR1">
                </div>
              </div>














              <!--------------------- 12T--------------------------------->










              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 text-center">
                  BCM/Trip
                </div>
                <div class="col-sm-1 text-center">
                  บริษัท
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  เที่ยวได้
                </div>
                <div class="col-sm-1 text-center">
                  คิด(CAT)
                </div>
                <div class="col-sm-1 text-center">
                  คิด(BCM)
                </div>
              </div>
              <hr>
              <div class="row mt-3">

                <label for="" class="col-sm-1 control-label mt-2">รถ 12T.</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="dum12T" name="dum12T" style="color:red;text-align:center;" value="<?php echo $Query->dum12T; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->dum12T; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName4" name="companyName4" value="<?php if (!empty($QueryProd->companyName4)) echo $QueryProd->companyName4; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR1_1" name="trip12T_CR1_1" value="<?php echo $QueryEdit->trip12T_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR1_2" name="trip12T_CR1_2" value="<?php echo $QueryEdit->trip12T_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR1_3" name="trip12T_CR1_3" value="<?php echo $QueryEdit->trip12T_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR1_4" name="trip12T_CR1_4" value="<?php echo $QueryEdit->trip12T_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR1_5" name="trip12T_CR1_5" value="<?php echo $QueryEdit->trip12T_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip12T_CR1" name="Totaltrip12T_CR1" value="<?php echo $QueryEdit->Totaltrip12T_CR1; ?>" readonly="Totaltrip12T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm12T_CR1" name="subTotalbcm12T_CR1" value="<?php echo $QueryEdit->subTotalbcm12T_CR1; ?>" readonly="subTotalbcm12T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm12T_CR1" name="Totalbcm12T_CR1" value="<?php echo $QueryEdit->Totalbcm12T_CR1; ?>" readonly="Totalbcm12T_CR1">
                </div>

              </div>

              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName5" name="companyName5" value="<?php if (!empty($QueryProd->companyName5)) echo $QueryProd->companyName5; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR2_1" name="trip12T_CR2_1" value="<?php echo $QueryEdit->trip12T_CR2_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR2_2" name="trip12T_CR2_2" value="<?php echo $QueryEdit->trip12T_CR2_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR2_3" name="trip12T_CR2_3" value="<?php echo $QueryEdit->trip12T_CR2_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR2_4" name="trip12T_CR2_4" value="<?php echo $QueryEdit->trip12T_CR2_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR2_5" name="trip12T_CR2_5" value="<?php echo $QueryEdit->trip12T_CR2_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip12T_CR2" name="Totaltrip12T_CR2" value="<?php echo $QueryEdit->Totaltrip12T_CR2; ?>" readonly="Totaltrip12T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm12T_CR2" name="subTotalbcm12T_CR2" value="<?php echo $QueryEdit->subTotalbcm12T_CR2; ?>" readonly="subTotalbcm12T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm12T_CR2" name="Totalbcm12T_CR2" value="<?php echo $QueryEdit->Totalbcm12T_CR2; ?>" readonly="subTotalbcm12T_CR2">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName6" name="companyName6" value="<?php if (!empty($QueryProd->companyName6)) echo $QueryProd->companyName6; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR3_1" name="trip12T_CR3_1" value="<?php echo $QueryEdit->trip12T_CR3_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR3_2" name="trip12T_CR3_2" value="<?php echo $QueryEdit->trip12T_CR3_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR3_3" name="trip12T_CR3_3" value="<?php echo $QueryEdit->trip12T_CR3_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR3_4" name="trip12T_CR3_4" value="<?php echo $QueryEdit->trip12T_CR3_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR3_5" name="trip12T_CR3_5" value="<?php echo $QueryEdit->trip12T_CR3_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip12T_CR3" name="Totaltrip12T_CR3" value="<?php echo $QueryEdit->Totaltrip12T_CR3; ?>" readonly="Totaltrip12T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm12T_CR3" name="subTotalbcm12T_CR3" value="<?php echo $QueryEdit->subTotalbcm12T_CR3; ?>" readonly="subTotalbcm12T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm12T_CR3" name="Totalbcm12T_CR3" value="<?php echo $QueryEdit->Totalbcm12T_CR3; ?>" readonly="Totalbcm12T_CR3">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName7" name="companyName7" value="<?php if (!empty($QueryProd->companyName7)) echo $QueryProd->companyName7; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR4_1" name="trip12T_CR4_1" value="<?php echo $QueryEdit->trip12T_CR4_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR4_2" name="trip12T_CR4_2" value="<?php echo $QueryEdit->trip12T_CR4_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR4_3" name="trip12T_CR4_3" value="<?php echo $QueryEdit->trip12T_CR4_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR4_4" name="trip12T_CR4_4" value="<?php echo $QueryEdit->trip12T_CR4_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip12T_CR4_5" name="trip12T_CR4_5" value="<?php echo $QueryEdit->trip12T_CR4_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip12T_CR4" name="Totaltrip12T_CR4" value="<?php echo $QueryEdit->Totaltrip12T_CR4; ?>" readonly="Totaltrip12T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm12T_CR4" name="subTotalbcm12T_CR4" value="<?php echo $QueryEdit->subTotalbcm12T_CR4; ?>" readonly="subTotalbcm12T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm12T_CR4" name="Totalbcm12T_CR4" value="<?php echo $QueryEdit->Totalbcm12T_CR4; ?>" readonly="Totalbcm12T_CR4">
                </div>
              </div>


              <!--------------------- 16T--------------------------------->










              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 text-center">
                  BCM/Trip
                </div>
                <div class="col-sm-1 text-center">
                  บริษัท
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  เที่ยวได้
                </div>
                <div class="col-sm-1 text-center">
                  คิด(CAT)
                </div>
                <div class="col-sm-1 text-center">
                  คิด(BCM)
                </div>
              </div>
              <hr>
              <div class="row mt-3">

                <label for="" class="col-sm-1 control-label mt-2">รถ 16T.</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="dum16T" name="dum16T" style="color:red;text-align:center;" value="<?php echo $Query->dum16T; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->dum16T; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName8" name="companyName8" value="<?php if (!empty($QueryProd->companyName8)) echo $QueryProd->companyName8; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR1_1" name="trip16T_CR1_1" value="<?php echo $QueryEdit->trip16T_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR1_2" name="trip16T_CR1_2" value="<?php echo $QueryEdit->trip16T_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR1_3" name="trip16T_CR1_3" value="<?php echo $QueryEdit->trip16T_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR1_4" name="trip16T_CR1_4" value="<?php echo $QueryEdit->trip16T_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR1_5" name="trip16T_CR1_5" value="<?php echo $QueryEdit->trip16T_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip16T_CR1" name="Totaltrip16T_CR1" value="<?php echo $QueryEdit->Totaltrip16T_CR1; ?>" readonly="Totaltrip16T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm16T_CR1" name="subTotalbcm16T_CR1" value="<?php echo $QueryEdit->subTotalbcm16T_CR1; ?>" readonly="subTotalbcm16T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm16T_CR1" name="Totalbcm16T_CR1" value="<?php echo $QueryEdit->Totalbcm16T_CR1; ?>" readonly="Totalbcm16T_CR1">
                </div>

              </div>

              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName9" name="companyName9" value="<?php if (!empty($QueryProd->companyName9)) echo $QueryProd->companyName9; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR2_1" name="trip16T_CR2_1" value="<?php echo $QueryEdit->trip16T_CR2_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR2_2" name="trip16T_CR2_2" value="<?php echo $QueryEdit->trip16T_CR2_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR2_3" name="trip16T_CR2_3" value="<?php echo $QueryEdit->trip16T_CR2_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR2_4" name="trip16T_CR2_4" value="<?php echo $QueryEdit->trip16T_CR2_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR2_5" name="trip16T_CR2_5" value="<?php echo $QueryEdit->trip16T_CR2_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip16T_CR2" name="Totaltrip16T_CR2" value="<?php echo $QueryEdit->Totaltrip16T_CR2; ?>" readonly="Totaltrip16T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm16T_CR2" name="subTotalbcm16T_CR2" value="<?php echo $QueryEdit->subTotalbcm16T_CR2; ?>" readonly="subTotalbcm16T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm16T_CR2" name="Totalbcm16T_CR2" value="<?php echo $QueryEdit->Totalbcm16T_CR2; ?>" readonly="Totalbcm16T_CR2">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName10" name="companyName10" value="<?php if (!empty($QueryProd->companyName10)) echo $QueryProd->companyName10; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR3_1" name="trip16T_CR3_1" value="<?php echo $QueryEdit->trip16T_CR3_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR3_2" name="trip16T_CR3_2" value="<?php echo $QueryEdit->trip16T_CR3_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR3_3" name="trip16T_CR3_3" value="<?php echo $QueryEdit->trip16T_CR3_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR3_4" name="trip16T_CR3_4" value="<?php echo $QueryEdit->trip16T_CR3_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR3_5" name="trip16T_CR3_5" value="<?php echo $QueryEdit->trip16T_CR3_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip16T_CR3" name="Totaltrip16T_CR3" value="<?php echo $QueryEdit->Totaltrip16T_CR3; ?>" readonly="Totaltrip16T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm16T_CR3" name="subTotalbcm16T_CR3" value="<?php echo $QueryEdit->subTotalbcm16T_CR3; ?>" readonly="subTotalbcm16T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm16T_CR3" name="Totalbcm16T_CR3" value="<?php echo $QueryEdit->Totalbcm16T_CR3; ?>" readonly="Totalbcm16T_CR3">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName11" name="companyName11" value="<?php if (!empty($QueryProd->companyName11)) echo $QueryProd->companyName11; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR4_1" name="trip16T_CR4_1" value="<?php echo $QueryEdit->trip16T_CR4_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR4_2" name="trip16T_CR4_2" value="<?php echo $QueryEdit->trip16T_CR4_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR4_3" name="trip16T_CR4_3" value="<?php echo $QueryEdit->trip16T_CR4_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR4_4" name="trip16T_CR4_4" value="<?php echo $QueryEdit->trip16T_CR4_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip16T_CR4_5" name="trip16T_CR4_5" value="<?php echo $QueryEdit->trip16T_CR4_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip16T_CR4" name="Totaltrip16T_CR4" value="<?php echo $QueryEdit->Totaltrip16T_CR4; ?>" readonly="Totaltrip16T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm16T_CR4" name="subTotalbcm16T_CR4" value="<?php echo $QueryEdit->subTotalbcm16T_CR4; ?>" readonly="subTotalbcm16T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm16T_CR4" name="Totalbcm16T_CR4" value="<?php echo $QueryEdit->Totalbcm16T_CR4; ?>" readonly="Totalbcm16T_CR4">
                </div>
              </div>



              <!--------------------- 25T--------------------------------->

              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 text-center">
                  BCM/Trip
                </div>
                <div class="col-sm-1 text-center">
                  บริษัท
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  เที่ยวได้
                </div>
                <div class="col-sm-1 text-center">
                  คิด(CAT)
                </div>
                <div class="col-sm-1 text-center">
                  คิด(BCM)
                </div>
              </div>


              <hr>
              <div class="row mt-3">

                <label for="" class="col-sm-1 control-label mt-2">รถ 25T.</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="dum25T" name="dum25T" style="color:red;text-align:center;" value="<?php echo $Query->dum25T; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->dum25T; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName12" name="companyName12" value="<?php if (!empty($QueryProd->companyName12)) echo $QueryProd->companyName12; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR1_1" name="trip25T_CR1_1" value="<?php echo $QueryEdit->trip25T_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR1_2" name="trip25T_CR1_2" value="<?php echo $QueryEdit->trip25T_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR1_3" name="trip25T_CR1_3" value="<?php echo $QueryEdit->trip25T_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR1_4" name="trip25T_CR1_4" value="<?php echo $QueryEdit->trip25T_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR1_5" name="trip25T_CR1_5" value="<?php echo $QueryEdit->trip25T_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR1" name="Totaltrip25T_CR1" value="<?php echo $QueryEdit->Totaltrip25T_CR1; ?>" readonly="Totaltrip25T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR1" name="subTotalbcm25T_CR1" value="<?php echo $QueryEdit->subTotalbcm25T_CR1; ?>" readonly="subTotalbcm25T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR1" name="Totalbcm25T_CR1" value="<?php echo $QueryEdit->Totalbcm25T_CR1; ?>" readonly="Totalbcm25T_CR1">
                </div>

              </div>

              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName13" name="companyName13" value="<?php if (!empty($QueryProd->companyName13)) echo $QueryProd->companyName13; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR2_1" name="trip25T_CR2_1" value="<?php echo $QueryEdit->trip25T_CR2_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR2_2" name="trip25T_CR2_2" value="<?php echo $QueryEdit->trip25T_CR2_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR2_3" name="trip25T_CR2_3" value="<?php echo $QueryEdit->trip25T_CR2_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR2_4" name="trip25T_CR2_4" value="<?php echo $QueryEdit->trip25T_CR2_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR2_5" name="trip25T_CR2_5" value="<?php echo $QueryEdit->trip25T_CR2_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR2" name="Totaltrip25T_CR2" value="<?php echo $QueryEdit->Totaltrip25T_CR2; ?>" readonly="Totaltrip25T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR2" name="subTotalbcm25T_CR2" value="<?php echo $QueryEdit->subTotalbcm25T_CR2; ?>" readonly="subTotalbcm25T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR2" name="Totalbcm25T_CR2" value="<?php echo $QueryEdit->Totalbcm25T_CR2; ?>" readonly="Totalbcm25T_CR2">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName14" name="companyName14" value="<?php if (!empty($QueryProd->companyName14)) echo $QueryProd->companyName14; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR3_1" name="trip25T_CR3_1" value="<?php echo $QueryEdit->trip25T_CR3_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR3_2" name="trip25T_CR3_2" value="<?php echo $QueryEdit->trip25T_CR3_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR3_3" name="trip25T_CR3_3" value="<?php echo $QueryEdit->trip25T_CR3_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR3_4" name="trip25T_CR3_4" value="<?php echo $QueryEdit->trip25T_CR3_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR3_5" name="trip25T_CR3_5" value="<?php echo $QueryEdit->trip25T_CR3_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR3" name="Totaltrip25T_CR3" value="<?php echo $QueryEdit->Totaltrip25T_CR3; ?>" readonly="Totaltrip25T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR3" name="subTotalbcm25T_CR3" value="<?php echo $QueryEdit->subTotalbcm25T_CR3; ?>" readonly="subTotalbcm25T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR3" name="Totalbcm25T_CR3" value="<?php echo $QueryEdit->Totalbcm25T_CR3; ?>" readonly="Totalbcm25T_CR3">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName15" name="companyName15" value="<?php if (!empty($QueryProd->companyName15)) echo $QueryProd->companyName15; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR4_1" name="trip25T_CR4_1" value="<?php echo $QueryEdit->trip25T_CR4_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR4_2" name="trip25T_CR4_2" value="<?php echo $QueryEdit->trip25T_CR4_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR4_3" name="trip25T_CR4_3" value="<?php echo $QueryEdit->trip25T_CR4_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR4_4" name="trip25T_CR4_4" value="<?php echo $QueryEdit->trip25T_CR4_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR4_5" name="trip25T_CR4_5" value="<?php echo $QueryEdit->trip25T_CR4_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR4" name="Totaltrip25T_CR4" value="<?php echo $QueryEdit->Totaltrip25T_CR4; ?>" readonly="Totaltrip25T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR4" name="subTotalbcm25T_CR4" value="<?php echo $QueryEdit->subTotalbcm25T_CR4; ?>" readonly="subTotalbcm25T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR4" name="Totalbcm25T_CR4" value="<?php echo $QueryEdit->Totalbcm25T_CR4; ?>" readonly="Totalbcm25T_CR4">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName16" name="companyName16" value="<?php if (!empty($QueryProd->companyName16)) echo $QueryProd->companyName16; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR5_1" name="trip25T_CR5_1" value="<?php echo $QueryEdit->trip25T_CR5_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR5_2" name="trip25T_CR5_2" value="<?php echo $QueryEdit->trip25T_CR5_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR5_3" name="trip25T_CR5_3" value="<?php echo $QueryEdit->trip25T_CR5_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR5_4" name="trip25T_CR5_4" value="<?php echo $QueryEdit->trip25T_CR5_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR5_5" name="trip25T_CR5_5" value="<?php echo $QueryEdit->trip25T_CR5_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR5" name="Totaltrip25T_CR5" value="<?php echo $QueryEdit->Totaltrip25T_CR5; ?>" readonly="Totaltrip25T_CR5">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR5" name="subTotalbcm25T_CR5" value="<?php echo $QueryEdit->subTotalbcm25T_CR5; ?>" readonly="subTotalbcm25T_CR5">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR5" name="Totalbcm25T_CR5" value="<?php echo $QueryEdit->Totalbcm25T_CR5; ?>" readonly="Totalbcm25T_CR5">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName17" name="companyName17" value="<?php if (!empty($QueryProd->companyName17)) echo $QueryProd->companyName17; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR6_1" name="trip25T_CR6_1" value="<?php echo $QueryEdit->trip25T_CR6_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR6_2" name="trip25T_CR6_2" value="<?php echo $QueryEdit->trip25T_CR6_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR6_3" name="trip25T_CR6_3" value="<?php echo $QueryEdit->trip25T_CR6_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR6_4" name="trip25T_CR6_4" value="<?php echo $QueryEdit->trip25T_CR6_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR6_5" name="trip25T_CR6_5" value="<?php echo $QueryEdit->trip25T_CR6_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR6" name="Totaltrip25T_CR6" value="<?php echo $QueryEdit->Totaltrip25T_CR6; ?>" readonly="Totaltrip25T_CR6">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR6" name="subTotalbcm25T_CR6" value="<?php echo $QueryEdit->subTotalbcm25T_CR6; ?>" readonly="subTotalbcm25T_CR6">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR6" name="Totalbcm25T_CR6" value="<?php echo $QueryEdit->Totalbcm25T_CR6; ?>" readonly="Totalbcm25T_CR6">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName18" name="companyName18" value="<?php if (!empty($QueryProd->companyName18)) echo $QueryProd->companyName18; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR7_1" name="trip25T_CR7_1" value="<?php echo $QueryEdit->trip25T_CR7_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR7_2" name="trip25T_CR7_2" value="<?php echo $QueryEdit->trip25T_CR7_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR7_3" name="trip25T_CR7_3" value="<?php echo $QueryEdit->trip25T_CR7_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR7_4" name="trip25T_CR7_4" value="<?php echo $QueryEdit->trip25T_CR7_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR7_5" name="trip25T_CR7_5" value="<?php echo $QueryEdit->trip25T_CR7_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR7" name="Totaltrip25T_CR7" value="<?php echo $QueryEdit->Totaltrip25T_CR7; ?>" readonly="Totaltrip25T_CR7">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR7" name="subTotalbcm25T_CR7" value="<?php echo $QueryEdit->subTotalbcm25T_CR7; ?>" readonly="subTotalbcm25T_CR7">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR7" name="Totalbcm25T_CR7" value="<?php echo $QueryEdit->Totalbcm25T_CR7; ?>" readonly="Totalbcm25T_CR7">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName19" name="companyName19" value="<?php if (!empty($QueryProd->companyName19)) echo $QueryProd->companyName19; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR8_1" name="trip25T_CR8_1" value="<?php echo $QueryEdit->trip25T_CR8_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR8_2" name="trip25T_CR8_2" value="<?php echo $QueryEdit->trip25T_CR8_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR8_3" name="trip25T_CR8_3" value="<?php echo $QueryEdit->trip25T_CR8_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR8_4" name="trip25T_CR8_4" value="<?php echo $QueryEdit->trip25T_CR8_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR8_5" name="trip25T_CR8_5" value="<?php echo $QueryEdit->trip25T_CR8_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR8" name="Totaltrip25T_CR8" value="<?php echo $QueryEdit->Totaltrip25T_CR8; ?>" readonly="Totaltrip25T_CR8">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR8" name="subTotalbcm25T_CR8" value="<?php echo $QueryEdit->subTotalbcm25T_CR8; ?>" readonly="subTotalbcm25T_CR8">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR8" name="Totalbcm25T_CR8" value="<?php echo $QueryEdit->Totalbcm25T_CR8; ?>" readonly="Totalbcm25T_CR8">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName191" name="companyName191" value="<?php if (!empty($QueryProd->companyName191)) echo $QueryProd->companyName191; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR9_1" name="trip25T_CR9_1" value="<?php echo $QueryEdit->trip25T_CR9_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR9_2" name="trip25T_CR9_2" value="<?php echo $QueryEdit->trip25T_CR9_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR9_3" name="trip25T_CR9_3" value="<?php echo $QueryEdit->trip25T_CR9_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR9_4" name="trip25T_CR9_4" value="<?php echo $QueryEdit->trip25T_CR9_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR9_5" name="trip25T_CR9_5" value="<?php echo $QueryEdit->trip25T_CR9_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR9" name="Totaltrip25T_CR9" value="<?php echo $QueryEdit->Totaltrip25T_CR9; ?>" readonly="Totaltrip25T_CR9">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR9" name="subTotalbcm25T_CR9" value="<?php echo $QueryEdit->subTotalbcm25T_CR9; ?>" readonly="subTotalbcm25T_CR9">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR9" name="Totalbcm25T_CR9" value="<?php echo $QueryEdit->Totalbcm25T_CR9; ?>" readonly="Totalbcm25T_CR9">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName192" name="companyName192" value="<?php if (!empty($QueryProd->companyName192)) echo $QueryProd->companyName192; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR10_1" name="trip25T_CR10_1" value="<?php echo $QueryEdit->trip25T_CR10_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR10_2" name="trip25T_CR10_2" value="<?php echo $QueryEdit->trip25T_CR10_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR10_3" name="trip25T_CR10_3" value="<?php echo $QueryEdit->trip25T_CR10_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR10_4" name="trip25T_CR10_4" value="<?php echo $QueryEdit->trip25T_CR10_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR10_5" name="trip25T_CR10_5" value="<?php echo $QueryEdit->trip25T_CR10_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR10" name="Totaltrip25T_CR10" value="<?php echo $QueryEdit->Totaltrip25T_CR10; ?>" readonly="Totaltrip25T_CR10">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR10" name="subTotalbcm25T_CR10" value="<?php echo $QueryEdit->subTotalbcm25T_CR10; ?>" readonly="subTotalbcm25T_CR10">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR10" name="Totalbcm25T_CR10" value="<?php echo $QueryEdit->Totalbcm25T_CR10; ?>" readonly="Totalbcm25T_CR10">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName193" name="companyName193" value="<?php if (!empty($QueryProd->companyName193)) echo $QueryProd->companyName193; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR11_1" name="trip25T_CR11_1" value="<?php echo $QueryEdit->trip25T_CR11_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR11_2" name="trip25T_CR11_2" value="<?php echo $QueryEdit->trip25T_CR11_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR11_3" name="trip25T_CR11_3" value="<?php echo $QueryEdit->trip25T_CR11_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR11_4" name="trip25T_CR11_4" value="<?php echo $QueryEdit->trip25T_CR11_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR11_5" name="trip25T_CR11_5" value="<?php echo $QueryEdit->trip25T_CR11_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR11" name="Totaltrip25T_CR11" value="<?php echo $QueryEdit->Totaltrip25T_CR11; ?>" readonly="Totaltrip25T_CR11">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR11" name="subTotalbcm25T_CR11" value="<?php echo $QueryEdit->subTotalbcm25T_CR11; ?>" readonly="subTotalbcm25T_CR11">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR11" name="Totalbcm25T_CR11" value="<?php echo $QueryEdit->Totalbcm25T_CR11; ?>" readonly="Totalbcm25T_CR11">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName194" name="companyName194" value="<?php if (!empty($QueryProd->companyName194)) echo $QueryProd->companyName194; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR12_1" name="trip25T_CR12_1" value="<?php echo $QueryEdit->trip25T_CR12_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR12_2" name="trip25T_CR12_2" value="<?php echo $QueryEdit->trip25T_CR12_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR12_3" name="trip25T_CR12_3" value="<?php echo $QueryEdit->trip25T_CR12_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR12_4" name="trip25T_CR12_4" value="<?php echo $QueryEdit->trip25T_CR12_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR12_5" name="trip25T_CR12_5" value="<?php echo $QueryEdit->trip25T_CR12_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR12" name="Totaltrip25T_CR12" value="<?php echo $QueryEdit->Totaltrip25T_CR12; ?>" readonly="Totaltrip25T_CR12">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR12" name="subTotalbcm25T_CR12" value="<?php echo $QueryEdit->subTotalbcm25T_CR12; ?>" readonly="subTotalbcm25T_CR12">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR12" name="Totalbcm25T_CR12" value="<?php echo $QueryEdit->Totalbcm25T_CR12; ?>" readonly="Totalbcm25T_CR12">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName195" name="companyName195" value="<?php if (!empty($QueryProd->companyName195)) echo $QueryProd->companyName195; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR13_1" name="trip25T_CR13_1" value="<?php echo $QueryEdit->trip25T_CR13_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR13_2" name="trip25T_CR13_2" value="<?php echo $QueryEdit->trip25T_CR13_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR13_3" name="trip25T_CR13_3" value="<?php echo $QueryEdit->trip25T_CR13_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR13_4" name="trip25T_CR13_4" value="<?php echo $QueryEdit->trip25T_CR13_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR13_5" name="trip25T_CR13_5" value="<?php echo $QueryEdit->trip25T_CR13_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR13" name="Totaltrip25T_CR13" value="<?php echo $QueryEdit->Totaltrip25T_CR13; ?>" readonly="Totaltrip25T_CR13">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR13" name="subTotalbcm25T_CR13" value="<?php echo $QueryEdit->subTotalbcm25T_CR13; ?>" readonly="subTotalbcm25T_CR13">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR13" name="Totalbcm25T_CR13" value="<?php echo $QueryEdit->Totalbcm25T_CR13; ?>" readonly="Totalbcm25T_CR13">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName196" name="companyName196" value="<?php if (!empty($QueryProd->companyName196)) echo $QueryProd->companyName196; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR14_1" name="trip25T_CR14_1" value="<?php echo $QueryEdit->trip25T_CR14_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR14_2" name="trip25T_CR14_2" value="<?php echo $QueryEdit->trip25T_CR14_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR14_3" name="trip25T_CR14_3" value="<?php echo $QueryEdit->trip25T_CR14_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR14_4" name="trip25T_CR14_4" value="<?php echo $QueryEdit->trip25T_CR14_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip25T_CR14_5" name="trip25T_CR14_5" value="<?php echo $QueryEdit->trip25T_CR14_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip25T_CR14" name="Totaltrip25T_CR14" value="<?php echo $QueryEdit->Totaltrip25T_CR14; ?>" readonly="Totaltrip25T_CR14">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm25T_CR14" name="subTotalbcm25T_CR14" value="<?php echo $QueryEdit->subTotalbcm25T_CR14; ?>" readonly="subTotalbcm25T_CR14">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm25T_CR14" name="Totalbcm25T_CR14" value="<?php echo $QueryEdit->Totalbcm25T_CR14; ?>" readonly="Totalbcm25T_CR14">
                </div>
              </div>
              <!------------------------ 30T--------------------------------->









              <div class="row mt-3">
                <label for="inputEmail3" class="col-sm-1 control-label"></label>

                <div class="col-sm-1 text-center">
                  BCM/Trip
                </div>
                <div class="col-sm-1 text-center">
                  บริษัท
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName1; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName2; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName3; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName4; ?>
                </div>
                <div class="col-sm-1 text-center">
                  <?php echo $Query->crName5; ?>
                </div>
                <div class="col-sm-1 text-center">
                  เที่ยวได้
                </div>
                <div class="col-sm-1 text-center">
                  คิด(CAT)
                </div>
                <div class="col-sm-1 text-center">
                  คิด(BCM)
                </div>
              </div>

              <hr>
              <div class="row mt-3">

                <label for="" class="col-sm-1 control-label mt-2">รถ 30T.</label>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="dum30T" name="dum30T" style="color:red;text-align:center;" value="<?php echo $Query->dum30T; ?>" onKeyup="sumValue(this.form)" readonly="<?php echo $Query->dum30T; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName20" name="companyName20" value="<?php if (!empty($QueryProd->companyName20)) echo $QueryProd->companyName20; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR1_1" name="trip30T_CR1_1" value="<?php echo $QueryEdit->trip30T_CR1_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR1_2" name="trip30T_CR1_2" value="<?php echo $QueryEdit->trip30T_CR1_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR1_3" name="trip30T_CR1_3" value="<?php echo $QueryEdit->trip30T_CR1_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR1_4" name="trip30T_CR1_4" value="<?php echo $QueryEdit->trip30T_CR1_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR1_5" name="trip30T_CR1_5" value="<?php echo $QueryEdit->trip30T_CR1_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR1" name="Totaltrip30T_CR1" value="<?php echo $QueryEdit->Totaltrip30T_CR1; ?>" readonly="Totaltrip30T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm30T_CR1" name="subTotalbcm30T_CR1" value="<?php echo $QueryEdit->subTotalbcm30T_CR1; ?>" readonly="subTotalbcm30T_CR1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR1" name="Totalbcm30T_CR1" value="<?php echo $QueryEdit->Totalbcm30T_CR1; ?>" readonly="Totalbcm30T_CR1">
                </div>

              </div>

              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName21" name="companyName21" value="<?php if (!empty($QueryProd->companyName21)) echo $QueryProd->companyName21; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR2_1" name="trip30T_CR2_1" value="<?php echo $QueryEdit->trip30T_CR2_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR2_2" name="trip30T_CR2_2" value="<?php echo $QueryEdit->trip30T_CR2_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR2_3" name="trip30T_CR2_3" value="<?php echo $QueryEdit->trip30T_CR2_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR2_4" name="trip30T_CR2_4" value="<?php echo $QueryEdit->trip30T_CR2_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR2_5" name="trip30T_CR2_5" value="<?php echo $QueryEdit->trip30T_CR2_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR2" name="Totaltrip30T_CR2" value="<?php echo $QueryEdit->Totaltrip30T_CR2; ?>" readonly="Totaltrip30T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm30T_CR2" name="subTotalbcm30T_CR2" value="<?php echo $QueryEdit->subTotalbcm30T_CR2; ?>" readonly="subTotalbcm30T_CR2">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR2" name="Totalbcm30T_CR2" value="<?php echo $QueryEdit->Totalbcm30T_CR2; ?>" readonly="Totalbcm30T_CR2">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName22" name="companyName22" value="<?php if (!empty($QueryProd->companyName22)) echo $QueryProd->companyName22; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR3_1" name="trip30T_CR3_1" value="<?php echo $QueryEdit->trip30T_CR3_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR3_2" name="trip30T_CR3_2" value="<?php echo $QueryEdit->trip30T_CR3_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR3_3" name="trip30T_CR3_3" value="<?php echo $QueryEdit->trip30T_CR3_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR3_4" name="trip30T_CR3_4" value="<?php echo $QueryEdit->trip30T_CR3_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR3_5" name="trip30T_CR3_5" value="<?php echo $QueryEdit->trip30T_CR3_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR3" name="Totaltrip30T_CR3" value="<?php echo $QueryEdit->Totaltrip30T_CR3; ?>" readonly="Totaltrip30T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm30T_CR3" name="subTotalbcm30T_CR3" value="<?php echo $QueryEdit->subTotalbcm30T_CR3; ?>" readonly="subTotalbcm30T_CR3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR3" name="Totalbcm30T_CR3" value="<?php echo $QueryEdit->Totalbcm30T_CR3; ?>" readonly="Totalbcm30T_CR3">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName23" name="companyName23" value="<?php if (!empty($QueryProd->companyName23)) echo $QueryProd->companyName23; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR4_1" name="trip30T_CR4_1" value="<?php echo $QueryEdit->trip30T_CR4_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR4_2" name="trip30T_CR4_2" value="<?php echo $QueryEdit->trip30T_CR4_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR4_3" name="trip30T_CR4_3" value="<?php echo $QueryEdit->trip30T_CR4_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR4_4" name="trip30T_CR4_4" value="<?php echo $QueryEdit->trip30T_CR4_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR4_5" name="trip30T_CR4_5" value="<?php echo $QueryEdit->trip30T_CR4_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR4" name="Totaltrip30T_CR4" value="<?php echo $QueryEdit->Totaltrip30T_CR4; ?>" readonly="Totaltrip30T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm30T_CR4" name="subTotalbcm30T_CR4" value="<?php echo $QueryEdit->subTotalbcm30T_CR4; ?>" readonly="subTotalbcm30T_CR4">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR4" name="Totalbcm30T_CR4" value="<?php echo $QueryEdit->Totalbcm30T_CR4; ?>" readonly="Totalbcm30T_CR4">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName24" name="companyName24" value="<?php if (!empty($QueryProd->companyName24)) echo $QueryProd->companyName24; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR5_1" name="trip30T_CR5_1" value="<?php echo $QueryEdit->trip30T_CR5_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR5_2" name="trip30T_CR5_2" value="<?php echo $QueryEdit->trip30T_CR5_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR5_3" name="trip30T_CR5_3" value="<?php echo $QueryEdit->trip30T_CR5_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR5_4" name="trip30T_CR5_4" value="<?php echo $QueryEdit->trip30T_CR5_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR5_5" name="trip30T_CR5_5" value="<?php echo $QueryEdit->trip30T_CR5_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR5" name="Totaltrip30T_CR5" value="<?php echo $QueryEdit->Totaltrip30T_CR5; ?>" readonly="Totaltrip30T_CR5">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;
  " id="subTotalbcm30T_CR5" name="subTotalbcm30T_CR5" value="<?php echo $QueryEdit->subTotalbcm30T_CR5; ?>" readonly="subTotalbcm30T_CR5">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR5" name="Totalbcm30T_CR5" value="<?php echo $QueryEdit->Totalbcm30T_CR5; ?>" readonly="Totalbcm30T_CR5">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-1 control-label mt-2"></label>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control" id="companyName25" name="companyName25" value="<?php if (!empty($QueryProd->companyName25)) echo $QueryProd->companyName25; ?>" style="color:red;text-align:center;">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR6_1" name="trip30T_CR6_1" value="<?php echo $QueryEdit->trip30T_CR6_1; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR6_2" name="trip30T_CR6_2" value="<?php echo $QueryEdit->trip30T_CR6_2; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR6_3" name="trip30T_CR6_3" value="<?php echo $QueryEdit->trip30T_CR6_3; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR6_4" name="trip30T_CR6_4" value="<?php echo $QueryEdit->trip30T_CR6_4; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" autocomplete="off" style="color:red;text-align:center;background:#FFFFE0;" onKeyup="sumValue(this.form)" maxlength="2" id="trip30T_CR6_5" name="trip30T_CR6_5" value="<?php echo $QueryEdit->trip30T_CR6_5; ?>">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totaltrip30T_CR6" name="Totaltrip30T_CR6" value="<?php echo $QueryEdit->Totaltrip30T_CR6; ?>" readonly="Totaltrip30T_CR6">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="subTotalbcm30T_CR6" name="subTotalbcm30T_CR6" value="<?php echo $QueryEdit->subTotalbcm30T_CR6; ?>" readonly="subTotalbcm30T_CR6">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="Totalbcm30T_CR6" name="Totalbcm30T_CR6" value="<?php echo $QueryEdit->Totalbcm30T_CR6; ?>" readonly="Totalbcm30T_CR6">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-8 control-label mt-2 text-right">ผลรวม Job1</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalTripJob1" name="TotalTripJob1" value="<?php echo $QueryEdit->TotalTripJob1; ?>" readonly="TotalTripJob1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalBcmJob1" name="TotalBcmJob1" value="<?php echo $QueryEdit->TotalBcmJob1; ?>" readonly="TotalBcmJob1">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="SumTotalBcmJob1" name="SumTotalBcmJob1" value="<?php echo $QueryEdit->SumTotalBcmJob1; ?>" readonly="SumTotalBcmJob1">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-8 control-label mt-2 text-right">ผลรวม Job3</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalTripJob3" name="TotalTripJob3" value="<?php echo $QueryEdit->TotalTripJob3; ?>" readonly="TotalTripJob3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalBcmJob3" name="TotalBcmJob3" value="<?php echo $QueryEdit->TotalBcmJob3; ?>" readonly="TotalBcmJob3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="SumTotalBcmJob3" name="SumTotalBcmJob3" value="<?php echo $QueryEdit->SumTotalBcmJob3; ?>" readonly="SumTotalBcmJob3">
                </div>
              </div>
              <div class="row mt-3">
                <label for="" class="col-sm-8 control-label mt-2 text-right">ผลรวม Job1+3</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalTripJob1_3" name="TotalTripJob1_3" value="<?php echo $QueryEdit->TotalTripJob1_3; ?>" readonly="TotalTripJob1_3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="TotalBcmJob1_3" name="TotalBcmJob1_3" value="<?php echo $QueryEdit->TotalBcmJob1_3; ?>" readonly="TotalBcmJob1_3">
                </div>
                <div class="col-sm-1">
                  <input type="text" class="form-control input-lg" style="color:green;text-align:center;font-family:digital;border: none; border-bottom: 3px navy double;background:none;" id="SumTotalBcmJob1_3" name="SumTotalBcmJob1_3" value="<?php echo $QueryEdit->SumTotalBcmJob1_3; ?>" readonly="SumTotalBcmJob1_3">
                </div>
              </div>

            </div>

            <div class="col-12 text-center card-footer clearfix">
              <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> บันทึก</button>
              <a href="<?php echo site_url('table'); ?>" class="btn btn-danger btn-lg"><i class="fa fa-times-circle"></i> ยกเลิก</a>
            </div>

          </form>
        </div>
      </div>


    </div>
    <!-- /.row -->

  </div><!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->