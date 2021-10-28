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
                    <h4 style="margin-top: 30px;  color: white;">Work Order</h4>
                </div>
            </div>
            <div class="pt-2 pb-2">
                <span>Stages</span>
            </div>
            <div class="row" style="height: 150px; text-align: center;">
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Plant URC</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Label</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Transformer & Transport</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Trim</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Cut</span>
                    </a>
                </div>
            </div>
            <div class="row" style="height: 150px; text-align: center;">
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Check</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Prune</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Harvest</span>
                    </a>
                </div>
                </div>
            <div class="pt-2 pb-2">
                <span>Employees</span>
            </div>
            <div class="row" style="height: 150px; text-align: center;">
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Utilized</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Not Utilized</span>
                    </a>
                </div>
            </div>

            <div class="pt-2 pb-2">
                <span>Work Orders</span>
            </div>
            <div class="row" style="height: 150px; text-align: center;">
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Completed</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Posted With Errors</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Posted</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span></span>
                        <br/>
                        <span>Planned</span>
                    </a>
                </div>
            </div>
            -->
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Work Order</h4>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px; margin-left: -50px; height: auto; text-align: center;">
                    <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>Stages</b></h4>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #32551f; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $plant_urc }}</h3>

                            <img src="icons\ic_format_color_fill_24px.png" style="height: 2rem; width: 2rem;" />

                            <br />
                            <h4>PlanURC</h4>
                        </button>
                    </div>

                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $label }}</h3>

                            <img src="icons\ic_local_offer_24px.png" style="height: 2rem; width: 2rem;" />

                            <h4>Label</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $transfer_and_transport }}</h3>

                            <img src="icons\ic_directions_subway_24px.png" style="height: 2rem; width: 2rem;" />

                            <h4>Transfer & Transport</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $trim }}</h3>

                            <img src="icons\Icon material-content-cut.png" style="height: 2rem; width: 2rem;" />

                            <h4>Trim</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $cut }}</h3>

                            <img src="icons\Icon material-content-cut.png" style="height: 2rem; width: 2rem;" />

                            <h4>Cut</h4>
                        </button>
                    </div>
                    <br />
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px; border: 0px; border-radius: 15px; background-color: #32551f; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $check }}</h3>

                            <img src="icons\Icon feather-search.png" style="height: 2rem; width: 2rem;" />

                            <h4>Check</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $prune }}</h3>

                            <img src="icons\Icon material-content-cut.png" style="height: 2rem; width: 2rem;" />

                            <h4>Prune</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px; border: 0px; border-radius: 15px; background-color: #32551f;" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $harvest }}</h3>

                            <img src="icons\ic_toys_24px.png" style="height: 2rem; width: 2rem;" />

                            <h4>Harvest</h4>
                        </button>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-left: -50px; height: auto; text-align: center;">
                    <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>Employees</b></h4>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #7cac48; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $utilized }}</h3>

                            <img src="icons\Icon ionic-ios-man.png" style="height: 3rem; width: 2rem;" />

                            <h4>Complete</h4>
                        </button>
                    </div>

                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #7cac48; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $not_utilized }}</h3>

                            <img src="icons\ic_directions_walk_24px.png" style="height: 3rem; width: 2rem;" />

                            <h4>Not Utilized</h4>
                        </button>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-left: -50px; height: auto; text-align: center;">
                    <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>WorK Orders</b></h4>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #32551f; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $completed }}</h3>

                            <img src="icons\ic_check_24px.png" style="height: 2rem; width: 2rem;" />

                            <h4>Completed</h4>
                        </button>
                    </div>

                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #32551f; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $rejected }}</h3>

                            <img src="icons\Icon awesome-bell.png" style="height: 2rem; width: 2rem;" />

                            <h4>Posted with Error</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #32551f; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $posted }}</h3>

                            <img src="icons\ic_check_24px.png" style="height: 2rem; width: 2rem;" />

                            <h4>Posted</h4>
                        </button>
                    </div>
                     <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; background-color: #32551f; border: 0px; color: white; border-radius: 15px;">
                            <h3 style="text-align: right;">{{ $planned }}</h3>

                               <img src="icons\Icon awesome-bell.png" style="height: 2rem; width: 2rem;" />

                            <h4>Planned</h4>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    </div>

@endsection
