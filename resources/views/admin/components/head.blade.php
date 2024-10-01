<head>
    <base href="{{config("app.url")}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($title))
        <title>{{$title}}</title>
    @endif

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="admin/css/animate.css" rel="stylesheet">

    @if(isset($configs["css"]) && is_array($configs['css']))
        @foreach($configs['css'] as $css)
            <link href="{{ $css }}" rel="stylesheet">
        @endforeach
    @endif

    <link href="admin/css/style.css" rel="stylesheet">
    vi

    <link href="admin/css/custom.css" rel="stylesheet">

    <script src="admin/js/jquery-3.1.1.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
