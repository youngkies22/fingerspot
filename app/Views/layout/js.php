<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url(); ?>/adminlte/plugins/select2/js/select2.full.min.js"></script>




<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/adminlte/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
   //Initialize Select2 Elements
   $('.select2').select2();

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  });
</script>
<script>
      $(document).on('click', '.hapus', function() {
        var id = $(this).data('id');
        var answer = window.confirm("Yakin Data Absensi Akan Di Hapus ?");
        if (answer) {
          $.ajax({
            type: 'POST',
            url: '<?= base_url("home/hapusLogAbsen"); ?>',
            data: 'id=' + id,
          
            success: function(response) {
              location.reload();
            }
				  });
        }
        else {
            //some code
        }
        

      });

  </script>
</body>
</html>
