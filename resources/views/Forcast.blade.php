@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
        <div class="row p-0 m-0">
        @include('layouts.sidebar')
            <div class="col-md-9">
               <div class="row">
                    <div>
                        <h4 style="margin-top: 30px; margin-left: 30px; color: white;">ForeCast</h4>
                    </div>
                </div>
                <div style="color: green;">
                    <br />
                    <h3>Parameters:</h3>
                </div>
                <div class="row" style="margin-top: 0px; height: 150px; text-align: center;">
                    <table>
                        <tr>
                            <td>
                                <b> Plan Group </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                            <td>
                                <b> Supplier </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>

                            <td>
                                <b> Items No. </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b> Customer </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                            <td>
                                <b> Date </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>

                            <td>
                                <b> Grow Location </b>
                            </td>

                            <td></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Items No.</th>
                            <th scope="col">Items Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Genus Code</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="Forcastmoredetail">MoreDetail</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><a href="Forcastmoredetail">MoreDetail</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>

                            <td><a href="Forcastmoredetail">MoreDetail</a></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

@endsection
