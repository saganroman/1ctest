@extends('app')
@section('content')

    <div class="row">
        <div class="col-md-12 ">
            <h1 class="page-header text-center">Addresses</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <table class="table table-striped " >
                <tr>
                    <th class="col-md-1 ">#</th>
                    <th class="col-md-2 ">Name</th>
                    <th class="col-md-2 ">Type</th>
                    <th class="col-md-1 ">Delete</th>
                </tr>

                    @foreach($criteries as $criteria)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$criteria->name}}</td>
                            <td>{{$criteria->type}}</td>
                            <td><a href="{{url("deleteAddress").'/'.$criteria->id}}"><span class="glyphicon glyphicon-trash"></span> </a></td>

                        </tr>
                    @endforeach

            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 "><h2>Add </h2></div>
    </div>
    <form action="storeAddress" method="get">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="form-group col-lg-6">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="url">Url</option>
                    <option value="e-mail">E-mail</option>
                    <option value="phone">Phone</option>
                    <option value="chat">Chat</option>
                    <option value="fax">Fax</option>

                </select>
            </div>

        </div>
        <button type="submit" class="btn btn-primary pull-right">Add</button>
    </form>

@endsection