@extends('app')
@section('content')

        <div class="row">
            <div class="col-md-12 ">
                <h1 class="page-header text-center">Add city</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="{{url('/storeCity')}}" method="get">
            <input type="hidden" name="country_id" value="{{$country_id}}">
            <div class="form-group">
                <label for="countryName">City name</label>
                <input type="text" class="form-control" id="cityName" name="cityName" placeholder="City name">
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                </div>
            </div>
        </form>
@endsection