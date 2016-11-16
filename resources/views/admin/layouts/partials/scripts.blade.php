<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ elixir('/js/app.js') }}" type="text/javascript"></script>
<script src="../../plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../plugins/datepicker/locales/bootstrap-datepicker.ru.js" charset="UTF-8"></script>

<script src="/js/lobibox.js"></script>
<script src="/js/lobipanel.js"></script>
<script src="/js/lobilist.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        language: 'ru',
        todayHighlight: 'true'
    });
</script>
<script>
    $(function () {
        $('.lobipanel').lobiPanel();
        $('#lobipanel-1').lobiPanel();
        $('#lobipanel-2').lobiPanel();
    });
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
