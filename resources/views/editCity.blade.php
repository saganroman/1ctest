@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <h1 class="page-header text-center">Edit city</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form action="{{url('/updateCity')}}" method="get">
        <input type="hidden" value="{{$city->id}}" name="id">
        <div class="form-group">
            <label for="cityName">City name</label>
            <input type="text" class="form-control" id="cityName" name="cityName" value="{{$city->name}}"
                   placeholder="City name">
        </div>
        <div class="checkbox"> @if($city->isHidden)
                <label><input type="checkbox" value="0" name="isHidden" >  Unhide </label>
            @else
                <label><input type="checkbox" value="1" name="isHidden" > Hide </label>
            @endif
        </div>
        <div class="row">
            <div class='col-md-12'>
                <button type="submit" class="btn btn-primary pull-right">Edit</button>
            </div>
        </div>
    </form>
@endsection