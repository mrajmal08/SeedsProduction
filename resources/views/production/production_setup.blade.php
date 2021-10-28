@extends('layouts.app')
@section('content')

    @include('layouts.navbar')

    <div class="row p-0 m-0">
        @include('layouts.sidebar')
{{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            <!--
            <div class="row" >
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Production</h4>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;  height: auto; text-align: center;">
                
               @foreach($production as $value)
                <div class="col-md-3 mb-2">
                    <a href="{{ route('production-stage', ['id' => $value->id]) }}" type="button" style="height: 100px; width: 150px;" class="btn btn-success">
                        <span>{{ $value->item_no }}</span><br>
                        <span>{{ $value->item_name }}</span>
                    </a>
                </div>
                @endforeach
            </div>
            -->
            <div class="row" style="width: 100%;">
                <!--
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;"></h4>
                    </div>
                </div>
-->
 <div class="row" style="width: 100%;">
                    <div style="height: 90px;  background-color: #84b94d;border:0px;border-radius: 15px">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Production</h4>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px; margin-left: -50px; height: auto; text-align: center;">
                    <h4 style="margin-top: 10px; margin-left: 20px; text-align: left; color: green;"><b>Stages</b></h4>
                     @foreach($production as $value)
                     @if("Item Can Make"==$value->item_name)
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}" type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\ic_local_grocery_store_24px.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                    @endif
                    @if("Item To Make"==$value->item_name)
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}"  type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\ic_warning_24px.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                    @endif
                    @if("Processes"==$value->item_name)
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}"  type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\ic_credit_card_24px.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                    @endif
                    
                     @if("Planned Product Orders"==$value->item_name)
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}"  type="button" style="height: 170px; width: 170px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\Icon ionic-md-paper-plane.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                     @endif
                      @if("Released Product Orders"==$value->item_name)
                    <div class="col-md-2"></div>
                    <br />
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}"  type="button" style="height: 170px; width: 170px; margin-top: 20px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\Icon ionic-md-paper-plane.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                     @endif
                      @if("Rejected Product Orders"==$value->item_name)
                   
                    <div class="col-md-2">
                        <a href="{{ route('production-stage', ['id' => $value->id]) }}"  type="button" style="height: 170px; width: 170px; margin-top: 20px; border: 0px; border-radius: 15px; background-color: #385d22;" class="btn btn-success">
                            <h4 style="text-align: right;">{{ $value->item_no }}</h4>

                            <img src="icons\Icon ionic-md-paper-plane.png" style="height: 3rem; width: 3rem;" />

                            <br />
                            <br />
                            <h6 style="text-align: center;">{{ $value->item_name }}</h6>
                        </a>
                    </div>
                     @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
