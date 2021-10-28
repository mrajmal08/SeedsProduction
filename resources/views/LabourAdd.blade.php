@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
{{--        <div class="col-md-2"></div>--}}
        <div class="col-md-9">
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
                    <h4 style="margin-top: 30px; margin-left: 30px; color: white;">Labour Planning</h4>
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div style="color: green;">
                <br/>
                <h3>Add Labour:</h3>
            </div>
            <form method="post" action="{{ route('save-labour') }}">
                @csrf
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-6">
                        <div class="form-group pb-2">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" required placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Labour Name</label>
                            <input type="text" name="name" class="form-control" required placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Labour Email</label>
                            <input type="email" name="email" class="form-control" placeholder=""/>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Labour Contact</label>
                            <input type="number" maxlength="15" class="form-control" name="contact" placeholder=""/>
                        </div>
                        <div class="form-group pb-2">
                            <label>Grow Location</label>
                            <select class="form-select" name="grow_id" aria-label="Default select example">
                                <option selected disabled>--Select One--</option>
                                @foreach($grow_locations as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Work</label>
                            <input type="text" name="work" class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
