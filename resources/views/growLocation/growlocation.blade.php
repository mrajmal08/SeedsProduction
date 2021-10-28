@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <!--
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location Overview</h4>
                </div>
            </div>
            -->
            <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Grow Location Overview</h4>
                    </div>
                </div>
            <div class="col-md-6 col-md-4 pt-3">
                <form method="get" action="{{ route('grow-location-overview') }}">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $id }}">
                       <input style="border-radius:15px" type="date" name="search" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info w-25" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">Filter</button>
                        <button type="submit" style="width:30%;height:60px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);;color:white;
                       border:0px;border-radius: 15px">refresh</button>
                    </div>
                </form>
            </div>

            <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>Processes</b></h4>
                    
            </h4>
            <div class="row">
                <!--
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px" class="btn btn-success">
                            <h3 style="text-align: right;"></h3>
                            icon
                            <br/>
                            <h4>Seeds</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px" class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Plant URC</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px" class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Harvest</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px" class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Flowers</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px" class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Cultivation</h4>
                        </button>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                                class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Dry</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                                class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Cut</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                                class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Trim</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                                class="btn btn-success">
                            <h3 style="text-align: right;"></h3>

                            icon
                            <br/>
                            <h4>Label</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                    <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                            class="btn btn-success">
                        <h3 style="text-align: right;"></h3>

                        icon
                        <br/>
                        <h4>Packaging</h4>
                    </button>
                </div>

            </div>
            <div class="row pb-2">
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px"
                                class="btn btn-success">
                            <h3 style="text-align: right;"></h3>
                            icon
                            <br/>
                            <h4>Transfer and Transport </h4>
                        </button>
                    </div>
            </div>
            -->
            <div class="col-md-2">
                        <button  type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $seeds }}</h3>

                          
                            <br />
                            <br />
                            <h4>Seed</h4>
                         </button>
                    </div>

                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $plant_urc }}</h3>

                            <img src="icons\ic_format_color_fill_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            
                            <h4>Plant URC</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $harvest }}</h3>

                            <img src="icons\ic_toys_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            <br />
                            <h4>Harvest</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $flowers }}</h3>

                          
                            <br />
                            <h4>Flowers</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $cultivation }}</h3>

                          
                            <br />
                            <h4>Cultivation</h4>
                        </button>
                    </div>
                    <br />
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $dry }}</h3>

                          
                            <br />
                            <h4>Dry</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $cut }}</h3>

                            <img src="icons\Icon material-content-cut.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            <br />
                            <h4>Cut</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button"style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $trim }}</h3>

                          
                            <br />
                            <h4>Trim</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button"style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $label }}</h3>

                            <img src="icons\ic_local_offer_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            <br />
                            <h4>Label</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button"style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $packaging }}</h3>

                          
                            <br />
                            <h4>Packaging</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-2">
                        <button type="button"style="height: 170px; width: 170px; margin-top: 20px;border:0px;background-color:#385d22;;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $transfer_and_transport }}</h3>
                            <img src="icons\ic_directions_subway_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            
                            <br />
                            <h4>Transfer & Transport</h4>
                        </button>
                    </div>
        </div>
    </div>

@endsection
