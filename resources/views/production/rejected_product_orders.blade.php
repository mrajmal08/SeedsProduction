@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <!--
            <div class="row" >
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Rejected Production Order</h4>
                </div>
            </div>
            -->
             <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Rejected Production Order</h4>
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

            <div class="row pt-2 pr-2 ">
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rejected_product_orders as $item)

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
