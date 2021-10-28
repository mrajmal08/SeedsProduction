@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        {{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            <!--
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px;  color: white;">Cultivation Planning</h4>
                </div>
            </div>
            <div class="row" style="margin-top: 50px; height: 150px; text-align: center;">
                <div class="col-md-4">
                    <a href="{{ route('cultivation-forcast') }}" type="button" style="height: 100px; width: 220px;" class="btn btn-success">
                        <br/>
                        Forcast
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('cultivation-work-order') }}" type="button" style="height: 100px; width: 220px;" class="btn btn-success">
                        <br/>
                        Work Order
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('cultivation-labor-planning') }}" type="button" style="height: 100px; width: 220px;" class="btn btn-success">
                        <br>
                        Labor Planning</a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('cultivation-grow-location') }}" type="button" style="height: 100px; width: 220px;margin-top: 50px;"
                       class="btn btn-success">
                        <br/>
                        Grow Location Overview
                    </a>
                </div>

            </div>
            -->
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Cultivation Planning</h4>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-left: 0px; height: 150px; text-align: center;">
                    <div class="col-md-4">
                        <a href="{{ route('cultivation-forcast') }}" type="button" style="height: 150px; width: 250px; background-color: #385d22; color: white; border: 0px; border-radius: 15px;" class="btn">
                            <br />
                            <br />
                            <img src="icons\ic_backup_24px.png" style="height: 2rem; width: 3rem;" />
                            <br />
                            <br />
                            Forcast
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('cultivation-work-order') }}" type="button" style="height: 150px; width: 250px; background-color: #385d22; color: white; border: 0px; border: 0px; border-radius: 15px;" class="btn">
                            <br />

                            <img src="icons\ic_card_giftcard_24px.png" style="height: 3rem; width: 3rem;" />
                            <br />
                            <br />
                            Work Order
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('cultivation-labor-planning') }}" type="button" style="height: 150px; width: 250px; background-color: #385d22; color: white; border: 0px; border: 0px; border-radius: 15px;" class="btn">
                            <br />

                            <img src="icons\ic_accessibility_24px.png" style="height: 3rem; width: 3rem;" />
                            <br />
                            <br />
                            Labor Planning
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="{{ route('cultivation-grow-location') }}" type="button" style="height: 150px; width: 250px; margin-top: 50px; background-color: #385d22; color: white; border: 0px; border: 0px; border-radius: 15px;" class="btn">
                            <br />

                            <img src="icons\Icon ionic-ios-home.png" style="height: 3rem; width: 3rem;" />
                            <br />
                            <br />
                            Grow Location Overview
                        </a>
                    </div>
                </div>
        </div>
    </div>

    </div>

@endsection
