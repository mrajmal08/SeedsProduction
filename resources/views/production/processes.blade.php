@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Processes</h4>
                    </div>
                </div>
            <div class="pt-2 pb-2">
                <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>Stages</b></h4>
                    
            </div>
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
                        <a href="prcessesgrow" type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $seeds }}</h3>

                          
                            <br />
                            <br />
                            <h4>Seed</h4>
                         </a>
                    </div>

                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $plant_urc }}</h3>

                            <img src="../icons\ic_format_color_fill_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            
                            <h4>Plant URC</h4>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" style="height: 170px; width: 170px;border:0px;background-color:#385d22;border:0px;border-radius: 15px" class="btn btn-success">
                            <h3 style="text-align: right;">{{ $harvest }}</h3>

                            <img src="../icons\ic_toys_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
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

                            <img src="../icons\Icon material-content-cut.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
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

                            <img src="../icons\ic_local_offer_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
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
                            <img src="../icons\ic_directions_subway_24px.png"  style="height:2rem;width:2rem;margin-top:0px;">
                       
                            
                            <br />
                            <h4>Transfer & Transport</h4>
                        </button>
                    </div>
        </div>
    </div>

@endsection
