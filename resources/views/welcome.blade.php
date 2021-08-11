<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Import</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/js/app.css')}}" rel="stylesheet">
</head>

<body class="antialiased">

    <div class="container">
        <form action="{{ route('upload')}}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Пример ввода файла</label>
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" multiple>
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </form>
    </div>
</body>

</html>