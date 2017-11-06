<head>
    <meta charset="UTF-8">
    <title> Salud Mental - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link href="{{ url('public/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/adminlte/bower_components/font-awesome/css/font-awesome.min.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/adminlte/bower_components/Ionicons/css/ionicons.min.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/adminlte/dist/css/AdminLTE.min.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/adminlte/dist/css/skins/_all-skins.min.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/css/style.css?'.uniqid()) }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <script>
        var url_base = '{{ url('/') }}';
    </script>
</head>
