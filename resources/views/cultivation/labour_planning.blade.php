@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        {{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            
<div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d;border:0px;border-radius:15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Labor Planning</h4>
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
            <form method="get" action="{{ route('cultivation-labor-planning') }}">
                <div class="row">
                    <div class="col-md-4">
                        <label for="" class="col-form-label">From Date</label>
                        <input type="date"  style="border-radius:15px" class="form-control" name="from_date" required>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="col-form-label">To Date</label>
                        <input type="date" style="border-radius:15px" name="to_date" class="form-control" required>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <label for="supplier" class="col-form-label">Location</label>--}}
{{--                        <select class="form-select" required name="grow_id" aria-label="Default select example">--}}
{{--                            <option selected disabled>----</option>--}}
{{--                            @foreach($grow_location as $item)--}}
{{--                                <option value="{{ $item->id }}">{{ $item->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                </div>
                <div class="pt-2">
                    <button type="submit" id="show" class="btn btn-success" style="width:20%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Show</button>
                </div>
            </form>
            <form method="get" class="pt-2" >
                <button type="submit" style="width:20%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">refresh</button>
            </form>
            <div class="pt-4 pb-2">
                <b><h4>Total Work done in these days:</h4></b>
            </div>

            <table id="example" class="table table-striped table-bordered table-responsive">
                <thead>
                <tr>
                    <th scope="row">No.</th>
                    @foreach($result as $dates)
                        <th scope="col">{{ $dates }}</th>
                    @endforeach
{{--                    <th scope="row">Grow location</th>--}}

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Total Labours Working</th>

                        @foreach ($result as $date)
                        @php
                            $final = \App\Models\LabourWork::whereDate('created_at', $date)->count();
                        @endphp
                        <th scope="row">{{ $final }}</th>
                    @endforeach
{{--                    <th scope="row">Grow</th>--}}
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#show').mouseover(function () {--}}
{{--                $('#example').removeClass("d-none");--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
