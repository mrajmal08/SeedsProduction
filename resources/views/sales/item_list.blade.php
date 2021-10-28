@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
             <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Items list</h4>
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
            <div class="pt-3">
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
                @foreach($items as $item)

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
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                // searching: false,
            });
        });
    </script>


@endsection
