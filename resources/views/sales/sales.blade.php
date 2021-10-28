@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Sales</h4>
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
                <div class="col-md-6 col-md-4 pt-3">
                    <form method="get" action="{{ route('sales') }}">
                        <div class="form-group">
                            <select class="form-select" name="search"
                                     style="width: 50%; background-color: #e4e4e4; border-radius:15px" aria-label="Default select example">
                                <option selected disabled>----</option>
                                <option value="7">Last 7 Days</option>
                                <option value="14">Last 14 Days</option>
                                <option value="30">Last Month</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info w-25"  style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Filter</button>
                            <button type="submit"  style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">refresh</button>
                            
                            <br>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 pt-3 pr-4 text-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"  style="width: 30%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">
                        Add Sales
                    </button>
                </div>
            </div>
            <div class="pt-2 float-right pr-2">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 800px;">
                            <form method="post" action="{{ route('save-sales') }}">
                            @csrf
                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sales</h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Item No.</label>
                                                <input type="number" style="border-radius:15px" name="item_no" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input type="text" style="border-radius:15px" name="item_name" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" style="border-radius:15px" name="customer_name" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Customer Contact</label>
                                                <input type="number" style="border-radius:15px" name="customer_contact" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Customer Email</label>
                                                <input type="email" style="border-radius:15px" name="customer_email" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" style="border-radius:15px" name="quantity" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" style="border-radius:15px" name="start_date" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date" style="border-radius:15px" name="end_date" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" style="border-radius:15px" name="amount" class="form-control"
                                                       placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" style="width:20%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px" >Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-striped table-bordered table-responsive" style="display: inline-table !important;" id="example">
                <thead>
                <tr>
                    <th scope="col">Item No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Customer Contact</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sales as $item)

                    <tr>
                        <th scope="row">{{ $item->item_no }}</th>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->customer_contact }}</td>
                        <td>{{ $item->customer_email }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>{{ $item->end_date }}</td>
                        <td>{{ $item->amount }}</td>
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
