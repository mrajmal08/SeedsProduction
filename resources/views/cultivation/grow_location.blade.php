@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location Overview</h4>
                    </div>
                </div>
            <div class="row pt-4 pr-3 pb-2" style="height: 150px; text-align: center;">
                @foreach($grow_location as $value)
                <!--
                    <div class="col-md-4 mb-2">
                        <form method="get" action="{{ route('grow-location-overview') }}">
                            <input type="hidden" name="id" value="{{ $value->id }}">
                            <button type="submit" style="height: 100px; width: 100%;background-color:#7cac48;border:0px" class="btn btn-success">
                                <span>{{ $value->name }}</span><br>
                                <span>{{ $value->location }}</span>
                            </button>
                        </form>
                    </div>
                -->
                <div class="col-md-4">
                    <form method="get" action="{{ route('grow-location-overview') }}">
                            <input type="hidden" name="id" value="{{ $value->id }}">
                        <button type="submit" style="height: 100px; width: 100%; margin-top: 70px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <h4 style="text-align: left; margin-left: 30px; margin-top: 15px;">{{ $value->name }}</h4>

                            <p style="text-align: left; margin-left: 30px;">{{ $value->location }}</p>
                        </button>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>

@endsection
