<head>
    <meta charset="UTF-8">
    <title> @yield('htmlheader_title', 'Ваш title') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ elixir('/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="/css/lobilist.css">
    <link rel="stylesheet" href="/css/lobibox.css">
    <link rel="stylesheet" href="/css/lobipanel.css">
     <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
