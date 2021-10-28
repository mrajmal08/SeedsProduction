@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <!--
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location</h4>
                </div>
            </div>
-->
 <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location</h4>
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

            <div style="color: green;">
                <br/>
                <h3>Parameters:</h3>
            </div>
            <form method="post" action="{{ route('save-grow-parameters') }}">
                @csrf
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4">
                        <div class="form-group pb-2">
                            <label>Seeds</label>
                            <input type="number" style="border-radius: 15px" name="seeds" class="form-control" value="{{ empty($data->seeds) ? '' : $data->seeds }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Flowers</label>
                            <input type="number" style="border-radius: 15px" name="flowers" class="form-control" value="{{ empty($data->flowers) ? '' : $data->flowers }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Cut</label>
                            <input type="number" style="border-radius: 15px" name="cut" class="form-control" value="{{ empty($data->cut) ? '' : $data->cut }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Packaging</label>
                            <input type="number" style="border-radius: 15px" name="packaging" class="form-control" value="{{ empty($data->packaging) ? '' : $data->packaging }}">
                        </div>
                        <div class="form-group">
                            <label>Prune</label>
                            <input type="number" style="border-radius: 15px" name="prune" class="form-control" value="{{ empty($data->prune) ? '' : $data->prune }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pb-2">
                            <label>Plant URC</label>
                            <input type="number" style="border-radius: 15px" name="plant_urc" class="form-control" value="{{ empty($data->plant_urc) ? '' : $data->plant_urc }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Cultivation</label>
                            <input type="number" style="border-radius: 15px" name="cultivation" class="form-control" value="{{ empty($data->cultivation) ? '' : $data->cultivation }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Trim</label>
                            <input type="number" style="border-radius: 15px" name="trim" class="form-control" value="{{ empty($data->trim) ? '' : $data->trim }}">
                        </div>
                        <div class="form-group">
                            <label>Transfer Transport</label>
                            <input type="number" style="border-radius: 15px" name="transfer_and_transport" class="form-control" value="{{ empty($data->transfer_and_transport) ? '' : $data->transfer_and_transport }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pb-2">
                            <label>Harvest</label>
                            <input type="number" style="border-radius: 15px" name="harvest" class="form-control" value="{{ empty($data->harvest) ? '' : $data->harvest }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Dry</label>
                            <input type="number" style="border-radius: 15px" name="dry" class="form-control" value="{{ empty($data->dry) ? '' : $data->dry }}">
                        </div>
                        <div class="form-group pb-2">
                            <label>Label</label>
                            <input type="number" style="border-radius: 15px" name="label" class="form-control" value="{{ empty($data->label) ? '' : $data->label }}">
                        </div>
                        <div class="form-group">
                            <label>Check</label>
                            <input type="number" style="border-radius: 15px" name="check" class="form-control" value="{{ empty($data->check) ? '' : $data->check }}">
                        </div>
                        <input type="hidden" name="grow_id" value="{{ empty($id) ? '' : $id }}">
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-success btn-lg" style="width:20%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
