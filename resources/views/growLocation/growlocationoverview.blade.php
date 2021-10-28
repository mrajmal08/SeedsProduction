@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
           <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location Overview</h4>
                    </div>
                </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
<br><br><br>
            <div class="pt-2">
                <button type="button" class="btn btn-info" data-toggle="modal"
                        data-target="#add" style="width: 20%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">
                    Add New Grow Location
                </button>
            </div>
            <div class="modal fade" id="add">
                <div class="modal-dialog">
                    <div class="modal-content" style="width: 500px;">
                        <form method="post" action="{{ route('add-grow-location') }}">
                        @csrf
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Release Production Order</h4>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">

                                    <div class="form-group">
                                        <label>Grow Name</label>
                                        <input style="border-radius: 15px" type="text" name="name" class="form-control"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label>Grow Location</label>
                                        <inpu style="border-radius: 15px"t type="text" name="location"
                                               class="form-control" required>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Sumbit</button>
                                </div>
                            </div>
                        </form>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--

            <div class="row pr-2" style="margin-top: 50px;  height: 150px; text-align: center;">
                @foreach($grow_location as $value)
                    <div class="col-md-4 mb-2">

                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button"
                           style="height: 100px; width: 100%;background-color:#7cac48;border:0px"
                           class="btn btn-success">
                            <span>{{ $value->name }}</span><br>
                            <span>{{ $value->location }}</span>
                        </a>

                    </div>
                @endforeach

            </div>
            -->
             <div class="row" style="margin-top: 50px; margin-left: 0px; height: 150px; text-align: center;">
                 @foreach($grow_location as $value)
                 @if( $value->name =="Grow 1")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; background-color: #93cb56; border: 0px; border-radius: 15px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                    @endif
                    @if( $value->name =="Grow 2")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                     @endif
                    @if( $value->name =="Grow 3")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                     @endif
                    @if( $value->name =="Grow 4")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; margin-top: 70px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                     @endif
                    @if( $value->name =="Grow 5")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; margin-top: 70px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                     @endif
                    @if( $value->name =="Grow 6")
                    <div class="col-md-4">
                        <a href="{{route('grow-location-parameter',['id'=>$value->id])}}" type="button" style="height: 100px; width: 100%; margin-top: 70px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </a>
                    </div>
                     @endif
                     @endforeach
                </div>
        </div>
    </div>
    </div>

@endsection
