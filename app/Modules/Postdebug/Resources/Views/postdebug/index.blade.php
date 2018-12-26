<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->
    </head>
    <body>
        <div class="container">
              <div class="form-group">
                <label for="reqParam">reqParam</label>
                <input type="text" class="form-control" id="request" placeholder="jsonData">
              </div>
              <div class="form-group">
                <label for="reqUrl">reqUrl</label>
                <input type="text" class="form-control" id="url" placeholder="request url">
              </div>
              <button type="submit" id="submit" class="btn btn-default">Submit</button>
        </div>
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('js/postdebug/main.js?v=')}}@php echo rand(1000,9999)@endphp"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
