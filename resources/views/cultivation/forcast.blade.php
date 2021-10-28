@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        {{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">ForeCast</h4>
                    </div>
                </div>
            <form method="get" action="{{ route('cultivation-forcast') }}">
                <div class="row pr-3" style="margin-top: 50px; height: 150px; text-align: center;">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="plangroup" class="col-sm-5 col-form-label">Plan Group</label>
                            <div class="col-sm-7">
                                <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius:15px" name="plan_group" aria-label="Default select example">
                                    <option disabled selected>---</option>
                                    <option value="7">Last 7 Days</option>
                                    <option value="30">Last Month</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="supplier" class="col-sm-5 col-form-label">Supplier</label>
                            <div class="col-sm-7">
                                <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius:15px" name="supplier" aria-label="Default select example">
                                    <option selected disabled>----</option>
                                    @foreach($forcast as $value)
                                        <option value="{{ $value->supplier }}">{{ $value->supplier }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="item_no" class="col-sm-5 col-form-label">Item No</label>
                            <div class="col-sm-7">
                                <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius:15px" name="item_no" aria-label="Default select example">
                                    <option selected disabled>----</option>
                                    @foreach($forcast as $value)
                                        <option value="{{ $value->item_no }}">{{ $value->item_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="customer" class="col-sm-5 col-form-label">Customer</label>
                            <div class="col-sm-7">
                                <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius:15px" name="customer_no" aria-label="Default select example">
                                    <option selected disabled>----</option>
                                    @foreach($forcast as $value)
                                        <option value="{{ $value->customer_no }}">{{ $value->customer_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="date" class="col-sm-5 col-form-label">Date</label>
                            <div class="col-sm-7">
                                <input type="date" name="date" style="border-radius:15px" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="grow_location" class="col-sm-5 col-form-label">Grow Location</label>
                            <div class="col-sm-7">
                                <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius:15px" name="grow_id" aria-label="Default select example">
                                    <option selected disabled>----</option>
                                    @foreach($forcast as $value)
                                        @php
                                            $grow_name = \App\Models\GrowLocation::where('id', $value->grow_id)->pluck('name')->first();
                                        @endphp

                                        <option value="{{ $value->grow_id }}">{{ $grow_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-left pl-4 pb-5">
                        <button type="submit" class="btn btn-info w-75" style="width: 20%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;" >Search</button>
                        <input type="submit" value="refresh" style="width: 20%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">
                    </div>
                </div>
            </form>
<br>
            <div class="pr-2">
                <table id="example" class="table table-striped table-bordered table-responsive" style="display: inline-table !important;">
                    <thead>
                    <tr>
                        <th scope="col">Item No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Customer No.</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Grow Loc.</th>
                        <th scope="col">Requested Qnt.</th>
                        <th scope="col">Current Qnt.</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forcast as $value)

                        @php
                            $grow_name = \App\Models\GrowLocation::where('id', $value->grow_id)->pluck('name')->first();

                        @endphp

                        <tr>
                            <th scope="row">{{ $value->item_no }}</th>
                            <td>{{ $value->item_name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->customer_no }}</td>
                            <td>{{ $value->supplier }}</td>
                            <td>{{ $grow_name }}</td>
                            <td>{{ $value->requested_quantity }}</td>
                            <td>{{ $value->current_quantity }}</td>
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
