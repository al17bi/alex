<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ elixir('/js/app.js') }}" type="text/javascript"></script>
<script src="../../plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../../plugins/datepicker/locales/bootstrap-datepicker.ru.js" charset="UTF-8"
        type="text/javascript"></script>

<script src="/js/lobi.js" type="text/javascript"></script>
<script src="/js/lobi_custom.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
/*        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
*/        $('#todo').lobiList({
            actions:{
                load: 'load.json'
            }
        });
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
