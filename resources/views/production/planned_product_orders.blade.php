@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <!--
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Planned Production Order</h4>
                </div>
            </div>
            -->
             <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Planned Production Order</h4>
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
            <div class="pt-2 float-right pr-2">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="width:100%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">
                    Add New
                </button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 800px;">
                            <form method="post" action="{{ route('save-planned-product-orders') }}">
                            @csrf
                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Planned Production Order</h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input type="hidden" name="pro_id" value="{{ empty($id) ? '' : $id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Order No.</label>
                                                <input style="border-radius: 15px" type="number" name="order_no" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input style="border-radius: 15px" type="text" name="description" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Source Type</label>
                                                <input style="border-radius: 15px" type="text" name="source_type" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Source No</label>
                                                <input style="border-radius: 15px" type="number" name="source_no" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Grow Location</label>
                                                <select style="border-radius: 15px" class="form-select" name="grow_id"
                                                        aria-label="Default select example">
                                                    <option selected disabled>--Select One--</option>
                                                    @foreach($grow_locations as $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input style="border-radius: 15px" type="number" name="quantity" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Due Date</label>
                                                <input style="border-radius: 15px" type="date" name="due_date" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input style="border-radius: 15px" type="date" name="end_date" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Routing No</label>
                                                <input style="border-radius: 15px" type="number" name="routing_no" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 pr-2">
                <table class="table table-striped table-bordered table-responsive" style="display: inline-table !important;" id="example">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Description</th>
                        <th scope="col">Source Type</th>
                        <th scope="col">Source No</th>
                        <th scope="col">Grow Loc.</th>
                        <th scope="col">Routing No</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($planned_product_orders as $item)

                        @php
                            $grow_location = \App\Models\GrowLocation::where('id', $item->grow_id)->pluck('name')->first();
                        @endphp
                        <tr>
                            <th scope="row">{{ $item->order_no }}</th>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->source_type }}</td>
                            <td>{{ $item->source_no }}</td>
                            <td>{{ $grow_location }}</td>
                            <td>{{ $item->routing_no }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->due_date }}</td>
                            <td>{{ $item->end_date }}</td>

                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#change">
                                    Change Status
                                </button>
                            </td>
                            <div class="modal fade" id="change">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 500px;">
                                        <form method="post" action="{{ route('save-released-product-orders') }}">
                                        @csrf
                                        <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Planned Production Order</h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <input type="hidden" name="order_id" value="{{ $item->order_no }}">
                                                <div class="row">

                                                        <div class="form-group">
                                                            <label>Change status</label>
                                                            <select class="form-select" name="status"
                                                                    aria-label="Default select example">
                                                                <option selected disabled>----</option>
                                                                <option value="completed" >Completed</option>
                                                                <option value="posted">Posted</option>
                                                                <option value="rejected">Rejected</option>

                                                            </select>
                                                        </div>

                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Update</button>
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

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                // searching: false,
            });
        });
    </script>
@endsection
