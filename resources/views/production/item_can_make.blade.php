@extends('layouts.app')
@section('content')

   @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
{{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
             <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Items can make</h4>
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
            <div class="pt-2">
                <!--
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    Add item
                </button>
                -->
                 <div class="row" style="margin-top: 20px;text-align: right;">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="width:100%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">
                        <div style="margin-top:10px;"> Add Items </div>
                     </button>
                    </div>
                    
                    
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="{{ route('save-item-can-make') }}">
                                @csrf
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New Item</h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input type="hidden" name="pro_id" value="{{ empty($id) ? '' : $id }}">
                                    <div class="form-group">
                                        <label>Enter Item Number</label>
                                        <input type="number" style="border-radius: 15px" name="item_no" class="form-control"
                                               placeholder="123..." required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Item Name</label>
                                        <input type="text" style="border-radius: 15px" name="item_name" class="form-control" placeholder="abc..." required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                @foreach($items_can_make as $value)
                <!--
                    <div class="col-md-4 mb-2">
                        <a href="" type="button" style="height: 100px; width: 300px;" class="btn btn-success">
                            <span class="float-left"><b>Item Name</b>: {{ $value->item_name }}</span>
                            <span class="float-left"><b>Item No</b>: {{ $value->item_no }}</span><br>
                        </a>
                    </div>
                    -->
                     <div class="col-md-4">
                        <a href="" type="button" style="height: 130px;margin-top:20px; width: 100%; background-color: #385d22; border: 0px;border-radius: 15px" class="btn btn-success">
                            <h6 style="text-align: left; margin-left: 30px; margin-top: 15px;margin-top:30px;">Items Name : {{ $value->item_name }}</h6>
                            <h6 style="text-align: left; margin-left: 30px; margin-top: 15px;">Items No. : {{ $value->item_no }}</h6>
                        </a>
                    </div>
                   
                @endforeach
            </div>
        </div>
    </div>
    </div>

@endsection
