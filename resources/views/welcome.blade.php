<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Import</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/js/app.css')}}" rel="stylesheet">
</head>

<body class="text-center">

    <div class="container-fluid">
      <header class="masthead justify-content-center">
      <h3 class="mt-5">File Storage</h3>
      
      </header>

      <main role="main" class="inner cover">
    <div class="container">
    <table class="table">
  <thead class="lead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Link</th>
      <th scope="col">Size,kb</th>
      <th scope="col">Create</th>
    </tr>
  </thead>
  <tbody class="lead">
    @foreach($files as $file)
    <tr>
      <th scope="row">{{$file->id}}</th>
      <td>{{$file->link}}</td>
      <td>{{$file->size}}</td>
      <td>{{$file->created_at}}</td>
      
    </tr>
  @endforeach
  </tbody>
</table>

        <form action="{{ route('upload')}}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
          
                <label for="exampleFormControlFile1">Example File</label>
                <div class="form-buttons-download">
                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" multiple>
                <button type="submit" class="btn btn-success">Send</button>
                </div>
            </div>
        </form>
   
    </div>
    </main>

<footer class="mastfoot mt-auto">
  <div class="inner">
    <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  </div>
</footer>
</div>
</body>

</html>