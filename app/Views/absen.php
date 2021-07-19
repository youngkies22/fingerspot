<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
          <?php if(!empty(session()->getFlashdata('error'))) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Kembali Entri Form</h4>
                    <hr/>
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                      <span aria-hidden="true">&times;</sapn>
                    </button>
                  
                  </div>

                  <?php elseif(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo session()->getFlashdata('success'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="close">
                      <span aria-hidden="true">&times;</sapn>
                    </button>
                    </div>
                  <?php else : ?>
                  <?php endif; ?>
            <!-- SELECT2 EXAMPLE  collapsed-card-->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Absensi Masuk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <form action="<?= base_url("home/saveAbsenMasuk"); ?>" method="post">
                      <?= csrf_field(); ?>
                      <div class="form-group">
                        <label>NAMA PEGAWAI</label>
                        <select name="nama" class="form-control select2" style="width: 100%;"  >
                          <option value="">Pilih Pegawai</option>
                          <?php 
                            foreach($data_pegawai as $data){
                              echo "<option value='".$data->pegawai_pin."' >".$data->pegawai_nama."</option>";
                            }
                          ?>
                        </select>
                      </div>
                      <!-- jam -->
                      <div class="form-group">
                        <?php
                          $input = array("06:30","06:35","06:40","06:45","06:50","06:55","06:56","06:57","06:58");
                          $rand_keys = array_rand($input, 2);
                        ?>
                        <label>JAM</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input  name="jam" value="<?= $input[$rand_keys[0]] ?>:<?= $val1 = rand( 10, 59 ); ?>"  type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                              </div>
                          </div>
                      </div>
                      <!-- Date -->
                      <div class="form-group">
                        <label>TANGGAL</label>
                        <input  name="tanggal" class="form-control " value="<?= date('d-m-Y') ?>" />
                      </div>
                    
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div>
                
                </div>
                <!-- /.row -->

            
              </div>
              
            </div>
            <!-- /.card -->
            <!-- --------------------------------------------------------------------------------------------------------------- -->
            <!-- SELECT2 EXAMPLE collapsed-card-->
            <div class="card card-default ">
              <div class="card-header">
                <h3 class="card-title">Absensi Pulang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <form action="<?= base_url("home/saveAbsenPulang"); ?>" method="post">
                    <div class="form-group">
                      <label>NAMA PEGAWAI</label>
                      <select name="nama1" class="form-control select2" style="width: 100%;"  >
                        <option value="">Pilih Pegawai</option>
                        <?php 
                          foreach($data_pegawai as $data){
                            echo "<option value='".$data->pegawai_pin."' >".$data->pegawai_nama."</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <!-- jam -->
                    <div class="form-group">
                      <?php
                        $input2 = array(
                          "16:00","16:01","16:02","16:03","16:04","16:05","16:06","16:07","16:08","16:09","16:10",
                          "16:11","16:12","16:13","16:14","16:15","16:16","16:17","16:18","16:19","16:20",
                          "16:21","16:22","16:23","16:24","16:25","16:26","16:27","16:28","16:29","16:30",
                          "16:31","16:32","16:33","16:34","16:35","16:36","16:37","16:38","16:39","16:40",
                          "16:41","16:42","16:43","16:44","16:45","16:46","16:47","16:48","16:49","16:50",
                          "16:51","16:52","16:53","16:54","16:55","16:56","16:57","16:58","16:59",
                        );
                        $rand_keys2 = array_rand($input2, 2);
                       
                      ?>
                      <label>JAM</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input  name="jam1" value="<?= $input2[$rand_keys2[0]] ?>:<?= $val1 = rand( 10, 59 ); ?>"  type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                      <label>TANGGAL</label>
                      <input  name="tanggal1" class="form-control " value="<?= date('d-m-Y') ?>" />
                    </div>
                   
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                      
                    </div>
                  </form>
                  
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->