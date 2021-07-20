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
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SCAN DATE</th>
                    <th>PIN</th>
                    <th>NAMA</th>
                    <th>JENIS FINGER</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                 // dd($data);
                  $no=1; foreach($data as $val){ 
                  ?> 
                  <tr>
                    <td><?= $val->scan_date; ?></td>
                    <td><?= $val->pin; ?></td>
                    <td><?= $val->pegawai_nama; ?></td>
                    <td><?php 
                      if($val->inoutmode ==1 ){
                        echo'<span class="badge bg-primary">Masuk</span>';
                      }
                      elseif($val->inoutmode ==2){
                        echo'<span class="badge bg-success">Pulang</span>';
                      }
                      else{

                      }
                    ?></td>
                    <td>
                    <button data-id="<?= $val->id; ?>" type="button" class="hapus btn btn-outline-danger btn-block">
                      <i class="fa fa-trash"></i> Hapus</button>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>PIN</th>
                    <th>PASSWORD</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

          
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  