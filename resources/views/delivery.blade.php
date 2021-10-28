@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Delivery</h4>
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

            <div class="row">
                <div class="col-md-6 pt-3">
                    <form method="get" action="{{ route('delivery') }}">
                        <div class="form-group">
                            <select style="background-color:#e4e4e4;width: 50%;border-radius: 15px"  class="form-select" name="search"
                                    aria-label="Default select example">
                                <option selected disabled>----</option>
                                <option value="7">Last 7 Days</option>
                                <option value="14">Last 14 Days</option>
                                <option value="30">Last Month</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info w-25" style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Filter</button>
                            <button type="submit" style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">refresh</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 pt-3 pr-4 text-right">
                </div>
            </div>
            <div class="pt-2 pr-3">
                <table class="table table-striped table-bordered table-responsive" id="example">
                    <thead>
                        <tr>
                        <th>Item No.</th>
                        <th>Item Name</th>
                        <th>Customer Name</th>
                        <th>Customer Contact</th>
                        <th>Customer Email</th>
                        <th>Quantity</th>
                        <th>Grow Location</th>
                        <th>Customer Location</th>
                        <th>Driver Contact</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($delivery as $item)
                        @php
                            $grow_location = \App\Models\GrowLocation::where('id', $item->grow_id)->pluck('name')->first();
                        @endphp
                        <tr>
                            <th scope="row">{{ $item->item_no }}</th>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->customer_name }}</td>
                            <td>{{ $item->customer_contact }}</td>
                            <td>{{ $item->customer_email }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $grow_location }}</td>
                            <td>{{ $item->customer_location }}</td>
                            <td>{{ $item->driver_contact }}</td>
                            <td>{{ $item->amount }}</td>

                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#change" style="width: 100%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">
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
                                                <h4 class="modal-title">Delivery Order</h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <input type="hidden" name="order_id" value="{{ $item->order_no }}">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label>Change status</label>
                                                        <select style="border-radius: 15px" class="form-select" name="status"
                                                                aria-label="Default select example">
                                                            <option selected disabled>----</option>
                                                            <option value="released">Released</option>
                                                            <option value="delivered">Delivered</option>
                                                            <option value="rejected">Rejected</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
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
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                // searching: false,
            });
        });
    </script>
@endsection
