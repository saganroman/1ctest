@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <h1 class="page-header text-center">List of countries</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="page-header text-right ">Add country <a href="{{url('/addCountry')}}"> <i
                            class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped " id="dataTableShort">
                <thead>
                <tr>
                    <th class="col-md-2 ">#</th>
                    <th class="col-md-5 ">Name</th>
                    <th class="col-md-1 ">Edit</th>
                    <th class="col-md-1 ">Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($countries as $item)
                    <tr>
                        <td><h4>{{$loop->iteration}}</h4></td>
                        <td><h4><a href="{{url("/showCountry").'/'.$item->id}}"> {{$item['name']}}</a></h4></td>
                        <td>
                            <div class="actionButtons">
                                <a title="Edit" href="{{url('/editCountry').'/'.$item->id}}"><i
                                            class="fa fa-pencil-square-o  fa-2x " aria-hidden="true"></i> </a></div>
                        </td>
                        <td>
                            <div>
                                <a title="Delete" href="{{url('/deleteCountry').'/'.$item->id}}"><i
                                            class="fa fa-minus-square fa-2x actionButtons" aria-hidden="true"></i> </a>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>


        </div>
    </div>

@endsection