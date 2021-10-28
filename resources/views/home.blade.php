@extends('layouts.app')
@section('content')

   @include('layouts.navbar')

    <div class="row p-0 m-0">
       @include('layouts.sidebar')
{{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d;border:0px;border-radius: 15px">
              
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Department</h4>
                    </div>
                </div>
            <div class="row" style="margin-top: 50px;  height: auto; text-align: center;">
                <!--
                <div class="col-md-4">
                    <a href="{{ route('cultivation-planning') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Cultivation
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('production-setup') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Production
                    </a>
                </div>
                <div class="col-md-4">
                    <button type="button" style="height: 100px; width: 250px;" class="btn btn-success">Customer
                        <br/>
                        Services
                    </button>
                </div>

                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('sales') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Sales
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('delivery') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Delivery
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('purchases') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Purchases
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('item-list') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Items Recall List
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('growlocation') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Grow Location
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('labour') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Labour
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 50px;">
                    <a href="{{ route('forcast-entry') }}" type="button" style="height: 100px; width: 250px;" class="btn btn-success">
                        <br/>
                        Forcast Entry
                    </a>
                </div>
                -->
                <div class="col-md-4">
                        <a href="{{ route('cultivation-planning') }}" type="button" style="height: 120px; width: 250px; color: white; background-color: #93cb56; border: 0px; border-radius: 15px;">
                            <img src="icons\ic_account_balance_wallet_24px.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />

                            <div style="padding-top: 10px;">Cultivation</div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('production-setup') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_equalizer_24px.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Production
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a  type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_accessibility_-1.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />

                            <div style="padding-top: 10px;">Customer Services</div>
                        </a>
                    </div>

                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('sales') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_shopping_basket_-1.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Sales
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('delivery') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_local_shipping_24px.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Delivery
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('purchases') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_style_24px.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Purchases
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('item-list') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\ic_shopping_basket_-1.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Items Recall List
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('growlocation') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\Icon awesome-house-damage.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Grow Location
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('labour') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\Path 2133.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Labour
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-top: 50px;">
                        <a href="{{ route('forcast-entry') }}" type="button" style="height: 120px; width: 250px; background-color: #93cb56; border: 0px; border-radius: 15px;" class="btn btn-success">
                            <img src="icons\Subtraction 1.png" style="height: 2rem; width: 2rem; margin-top: 30px;" />
                            <br />
                            Forcast Entry
                        </a>
                    </div>
            </div>
        </div>
    </div>


@endsection
