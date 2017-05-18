<!-- jQuery 2.2.3 -->
<script src="{!! asset('plugins/jQuery/jquery-2.2.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! asset('plugins/iCheck/icheck.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('plugins/fastclick/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('dist/js/app.min.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('dist/js/demo.js') !!}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>