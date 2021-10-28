@extends('layouts.app')
@section('content')

    @include('layouts.navbar')
    <div class="row p-0 m-0">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="row">
                <div style="height: 90px; background-color: #00a300;">
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form method="get" action="{{ route('labour') }}">
                <div class="row">
                    <div class="col-md-6 pt-2">
                        <select class="form-select" name="search" aria-label="Default select example">
                            <option disabled selected>----</option>
                            <option value="7">Last 7 Days</option>
                            <option value="14">Last 14 Days</option>
                            <option value="30">Last Month</option>
                        </select>
                    </div>
                    <div class="col-md-6 pt-2 pr-4 text-right">
                        <a href="{{ route('labour-add') }}" type="button" class="btn btn-success">Add Labour</a>
                    </div>
                </div>
                <div class="pt-2">
                    <button type="submit" class="btn btn-info">Search</button>
                    <button type="submit">refresh</button>
                </div>
            </form>
                <div class="row">
                    <table id="example" class="table table-striped table-bordered table-responsive" style="display: inline-table !important;">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Labour Name</th>
                            <th scope="col">Labour Email</th>
                            <th scope="col">Labour Contact</th>
                            <th scope="col">Grow Location</th>
                            <th scope="col">Work</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($labours as $labour)
                            @php
                                $labour_work = \App\Models\LabourWork::where('labour_id',$labour->id)->latest()->first();
                                if($labour_work){
                                $grow_name = \App\Models\GrowLocation::where('id', $labour_work->grow_id)->pluck('name')->first();
                                }
                            @endphp
                            <tr>
                                <th scope="row">{{ $labour->date }}</th>
                                <td>{{ $labour->name }}</td>
                                <td>{{ $labour->email }}</td>
                                <td>{{ $labour->contact }}</td>
                                <td>{{ $grow_name }}</td>
                                <td>{{ $labour->today_work }}</td>
                                <td>
                                    <a href="{{ route('delete-labour', ['id' => $labour->id]) }}">
                                        <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd"
                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </a>

                                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#lab{{ $labour->id }}">
                                    assign work
                                    </button>

                                </td>
                            </tr>

                            <div class="modal fade" id="lab{{ $labour->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="{{ route('labour-edit') }}">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Assign Today Work</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Assign Work</label>
                                                    <input type="hidden" name="labour_id" value="{{ isset($labour_work->labour_id)? $labour_work->labour_id: ''  }}">
                                                    <input type="text" name="work" class="form-control"
                                                           value="{{ empty($labour_work->work) ? '' : $labour_work->work }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Grow Location</label>
                                                    <select class="form-select" name="grow_id"
                                                            aria-label="Default select example">
                                                        <option
                                                            value="{{ empty($labour_work->grow_id) ? 'selected' : $labour_work->grow_id }}">{{ empty($grow_name) ? '' : $grow_name }}</option>
                                                        @foreach($grow_locations as $value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
