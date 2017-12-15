@extends('app')
@section('content')

        <div class="row">
            <div class="col-md-12 ">
                <h1 class="page-header text-center">Add country</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="{{url('/storeCountry')}}" method="get">
            <div class="form-group">
                <label for="countryName">Country name</label>
                <input type="text" class="form-control" id="countryName" name="countryName" placeholder="Country name">
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                </div>
            </div>
        </form>
@endsection