<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- REQUIRED!!! Before any other tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', "Laravel Photo Gallery")}}</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        .seq {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .pic {
            flex: 0 33.33%;
            padding: 5px;
        }
    </style>
</head>

<body>
    @include('inc.topbar')
    <br>
    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>
</body>
</html>
