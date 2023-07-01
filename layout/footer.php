<!-- Footer Bawah -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
<!-- Footer Bawah -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../admin/plugins/moment/moment.min.js"></script>
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="../../admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../admin/plugins/toastr/toastr.min.js"></script>
<!-- Fungsi JS Untuk Menampilkan Alert -->
<script src="notifikasi.js"></script>
<!-- Plugin Select2 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="admin/plugins/select2/js/select2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../admin/plugins/jszip/jszip.min.js"></script>
<script src="../../admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "paging": true,
            "searching": true,
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>

</html>