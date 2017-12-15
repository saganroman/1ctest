@extends('app')
@section('content')

        <div class="row">
            <div class="col-md-12 ">
                <h1 class="page-header text-center">Edit country</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="{{url('/updateCountry')}}" method="get">
            <input type="hidden" value="{{$country->id}}" name="id">
            <div class="form-group">
                <label for="countryName">Country name</label>
                <input type="text" class="form-control" id="countryName" name="countryName" value="{{$country->name}}" placeholder="Country name">
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <button type="submit" class="btn btn-primary pull-right">Edit</button>
                </div>
            </div>
        </form>
@endsection