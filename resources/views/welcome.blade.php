<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex vw-100 vh-100 justify-content-center align-items-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('fileupload.store')}}">
            @csrf
                <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" name="uploadedfile" id="exampleFormControlFile1">
                </div>
                <div class="form-group"><button class="btn btn-success">Upload the file</button></div>
              </form>
        </div>
    </body>
</html>
