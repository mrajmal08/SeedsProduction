@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row" style="width: 100%;">
                    <div style="height: 90px; background-color: #84b94d; border: 0px; border-radius: 15px;">
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Forcast</h4>
                    </div>
                </div>
            <div style="color: green;">
                <br/>
                <h3>Forcast Entry:</h3>
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

            <form method="post" action="{{ route('save-forcast') }}">
                @csrf
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-6">
                        <div class="form-group pb-2">
                            <label>Customer No</label>
                            <input type="number" style="border-radius: 15px" name="customer_no" class="form-control" required placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Items No</label>
                            <input type="number" style="border-radius: 15px" name="item_no" required class="form-control" placeholder=""/>
                        </div>

                        <div class="form-group pb-2">
                            <label>Items Name</label>
                            <input type="text" style="border-radius: 15px" name="item_name" required class="form-control" placeholder=""/>
                        </div>

                        <div class="form-group pb-2">
                            <label>Description</label>
                            <input type="text" style="border-radius: 15px" name="description" required class="form-control" placeholder=""/>
                        </div>

                        <div class="form-group pb-2">
                            <label>Genus Code</label>
                            <input type="text" style="border-radius: 15px" name="genus_code" required class="form-control" placeholder=""/>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group pb-2">
                            <label>Supplier</label>
                            <input type="text" style="border-radius: 15px" name="supplier" required class="form-control" placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Featured Value</label>
                            <input type="number" style="border-radius: 15px" name="featured_value" required class="form-control" placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Request Qty</label>
                            <input type="number" style="border-radius: 15px" name="requested_quantity" required class="form-control"
                                   placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Current Qty</label>
                            <input type="number" style="border-radius: 15px" name="current_quantity" required class="form-control" placeholder=""/>
                        </div>

                        <div class="form-group pb-2">
                            <label>Grow Location</label>
                            <select class="form-select" style="background-color:#e4e4e4;width:40;border-radius: 15px;" name="grow_id" aria-label="Default select example">
                                <option selected disabled>--Select One--</option>
                                @foreach($grow_locations as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-success btn-lg" style="width: 20%; height: 60px; background: linear-gradient(to right, #92c955 0%, #365b20 100%); color: white; border: 0px; border-radius: 15px;">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>

@endsection
