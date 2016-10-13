<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<!-- Datatables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>

<!-- select2 -->
<script src="{{ asset('/plugins/select2/select2.min.js') }}" type="text/javascript"></script>

<!-- Vue.js -->
<script src="{{ asset('/js/vue.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('.datatable').DataTable({
            responsive: true
        });

        //fade out flash message after 3 seconds
        $('.flash-message').delay(5000).fadeOut(1000);
    });
</script>

@yield('page-scripts')