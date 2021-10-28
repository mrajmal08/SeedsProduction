@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <!--
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Released Production Order</h4>
                </div>
            </div>
            -->
             <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Released Production Order</h4>
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

            <div class="row pt-2">
                <table class="table table-striped table-bordered table-responsive"   id="example">
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
                    @foreach($released_product_orders as $item)

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
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#change" style="width:100%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">
                                    Move to Deliver
                                </button>
                            </td>
                            <div class="modal fade" id="change">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 800px;">
                                        <form method="post" action="{{ route('add-to-delivered') }}">
                                        @csrf
                                        <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Release Production Order</h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <input type="hidden" name="order_id" value="{{ $item->order_no }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Item No</label>
                                                            <input style="border-radius: 15px" type="number" name="item_no" class="form-control"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Item Name</label>
                                                            <input style="border-radius: 15px" type="text" name="item_name" class="form-control"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Customer Name</label>
                                                            <input style="border-radius: 15px" type="text" name="customer_name" class="form-control"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Customer Email</label>
                                                            <input style="border-radius: 15px" type="email" name="customer_email"
                                                                   class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Customer Contact</label>
                                                            <input style="border-radius: 15px" type="number" name="customer_contact"
                                                                   class="form-control" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Customer Location</label>
                                                            <input style="border-radius: 15px" type="text" name="customer_location"
                                                                   class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Driver Number</label>
                                                            <input style="border-radius: 15px" type="text" name="driver_contact"
                                                                   class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount</label>
                                                            <input style="border-radius: 15px" type="text" name="amount" class="form-control"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Change status</label>
                                                            <select style="border-radius: 15px" class="form-select" name="status"
                                                                    aria-label="Default select example">
                                                                <option selected disabled>----</option>
                                                                <option value="completed" >Completed</option>
                                                                <option value="posted">Posted</option>
                                                                <option value="rejected">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Close
                                            </button>
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
