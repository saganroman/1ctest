@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <h1 class="page-header text-center">List of contactors </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="page-header text-right ">Add contactor <a href="{{url('/addContactor')}}"> <i
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
                    <th class="col-md-4 ">Notion</th>
                    <th class="col-md-4 ">Registration number</th>
                    <th class="col-md-2 ">Delete</th>

                </tr>
                </thead>
                <tbody>

                @foreach($contactors as $item)
                  <tr>
                        <td><h4>{{$loop->iteration}}</h4></td>
                        <td><h4> <a href="{{url('/contactor').'/'.$item->id}}">{{$item['name']}}</a></h4></td>
                        <td>
                            <h4> {{$item['reg_number']}}</h4>

                        </td>
                      <td><a href="{{url("deleteContactor").'/'.$item->id}}"><span class="glyphicon glyphicon-trash"></span> </a></td>
                    </tr>
                @endforeach

                </tbody>

            </table>


        </div>
    </div>

@endsection