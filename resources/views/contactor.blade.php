@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <h1 class="page-header text-center">Contactor {{$contactor[0]['name']}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">


        <div id="exTab3" class="col-md-12 ">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#1b" data-toggle="tab">Main</a>
                </li>
                <li><a href="#2b" data-toggle="tab">Employee</a>
                </li>

            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1b">

                    <table class="table-striped">
                        <tr>
                            <th class="col-md-3">Notion</th>
                            <th class="col-md-3">Code</th>
                            <th class="col-md-3">Oficial name</th>
                            <th class="col-md-3">Registration number</th>

                        </tr>
                        <tbody>
                        <tr>
                            <td>{{$contactor[0]['name']}}</td>
                            <td>{{$contactor[0]['id']}}</td>
                            <td>{{$contactor[0]['oficial_name']}}</td>
                            <td>{{$contactor[0]['reg_number']}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    other adresses: <a href="{{url('/addCAddress')}}"> <i
                                class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a> <br><br>


                    <table class="table-bordered">
                        <tr>
                            <th class="col-md-1">type</th>
                            <th class="col-md-2">address</th>
                            <th class="col-md-2">zip code</th>
                            <th class="col-md-2">city</th>
                            <th class="col-md-2">country</th>
                            <th class="col-md-1">delete</th>
                        </tr>
                        <tbody>

                        @foreach($cAddress as $item)
                            <tr>
                                <td>{{$item->addressType->name}}</td>
                                <td>{{$item['address']}}</td>
                                <td>{{$item['zip']}}</td>
                                <td>{{$item->city->name}}</td>
                                <td>{{$item->country->name}}</td>
                                <td><a href="{{url("deleteCAddress").'/'.$item->id}}"><span
                                                class="glyphicon glyphicon-trash"></span> </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    contact information: <a href="{{url('/addCContact')}}"> <i
                                class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a> <br><br>


                    <table class="table-bordered">
                        <tr>
                            <th class="col-md-6">type</th>
                            <th class="col-md-5">contact</th>
                            <th class="col-md-1">delete</th>
                        </tr>
                        <tbody>

                        @foreach($cContact as $item)
                            <tr>
                                <td>{{$item->contactType->name}}</td>
                                <td>{{$item['value']}}</td>

                                <td><a href="{{url("deleteCContact").'/'.$item->id}}"><span
                                                class="glyphicon glyphicon-trash"></span> </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane" id="2b">
                    <table class="table-striped">
                        <tr>
                            <th class="col-md-3">Notion</th>
                            <th class="col-md-3">Code</th>
                            <th class="col-md-3">Oficial name</th>
                            <th class="col-md-3">Registration number</th>

                        </tr>
                        <tbody>
                        <tr>
                            <td>{{$contactor[0]['name']}}</td>
                            <td>{{$contactor[0]['id']}}</td>
                            <td>{{$contactor[0]['oficial_name']}}</td>
                            <td>{{$contactor[0]['reg_number']}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    employee: <a href="{{url('/addEmployee')}}"> <i
                                class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a> <br><br>

                    <div class="row">
                        <div class="col-md-12 ">
                            <table class="table-bordered table-hover" id="employee">
                                <tr>
                                    <th class="col-md-3">last name</th>
                                    <th class="col-md-3">first name</th>
                                    <th class="col-md-3">middle name</th>
                                    <th class="col-md-2">position</th>
                                    <th class="col-md-1">delete</th>
                                </tr>
                                <tbody>

                                @foreach($employees as $item)
                                    <tr data-id="{{$item->id}}" class="employee">
                                        <td>{{$item->first_name}}</td>
                                        <td>{{$item->middle_name}}</td>
                                        <td>{{$item->last_name}}</td>
                                        <td>{{$item->position}}</td>


                                        <td><a href="{{url("deleteCContact").'/'.$item->id}}"><span
                                                        class="glyphicon glyphicon-trash"></span> </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12 ">
                            <table class="table-bordered" id="employeeContact">
                                <tr>
                                    <th class="col-md-5">type</th>
                                    <th class="col-md-5">contact</th>
                                   {{-- <th class="col-md-2">delete</th>--}}
                                </tr>
                                <tbody>

                                @foreach($eContact as $item)
                                    <tr>
                                        <td>{{$item->contactType->name}}</td>
                                        <td>{{$item->value}}</td>
                                        {{--<td><a href="{{url("deleteEContact").'/'.$item->id}}"><span
                                                        class="glyphicon glyphicon-trash"></span> </a></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection