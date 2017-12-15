<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    {{--JS--}}
    <script type="text/javascript" src="{{ URL::asset('jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dataTable/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" />
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dataTable/datatables.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">

</head>
<body>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <nav class="navbar navbar-default">
          <div class="container-fluid">

              <div class="navbar-header  ">

                  <button type="button" class="btn" title="Contactors" > <a href="{{url('/contactors')}}"><i class="fa fa-users fa-fw fa-2x" aria-hidden="true"></i></a></button>
                  <button type="button" class="btn" title="Countries" > <a href="{{url('/countries')}}"><i class="fa fa-flag fa-fw fa-2x" aria-hidden="true"></i></a></button>
                  <button type="button" class="btn" title="Contact's type"> <a href="{{url('/contacts')}}"><i class="fa fa-fax fa-fw fa-2x" aria-hidden="true"></i> </a></button>
                  <button type="button" class="btn" title="Address's type"> <a href="{{url('/addresses')}}"><i class="fa fa-book  fa-fw fa-2x" aria-hidden="true"></i> </a></button>
              </div>

          </div>
      </nav>
  </div>


</div>
<div class="wraper col-md-8 col-md-offset-2">
@yield('content')
</div>
</body>
</html>
