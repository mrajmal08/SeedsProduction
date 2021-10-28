@extends('layouts.app')

@section('content')


  <body style="background-image: url('icons/Group 2554.png'); background-repeat: repeat-y; background-size: 100%;">
        <div class="container">
            <div class="row" style="height: 200px;">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    
                </div>
            </div>
            <div class="row" style="height: 400px;">
                <div class="col-md-6">
                    <h1 style="color: white;">
                        <b>
                            Welcome to the seed to sale<br />
                            Cannabin system
                        </b>
                    </h1>
                    <p style="color: white;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="card border-success mb-3" style="height: 35rem;border: 0px ; border-radius: 15px;">
                        <div class="card-header bg-transparent border-black" style="text-align: center;height:60px">
                        <div style="margin-top:11px">
                        <b>Login or Register</b>
</div>
                    </div>
                        <div class="card-body text-success" style="padding: 20px;">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <b style="color: black;">Welcome To The Software</b>
                                <br />
                                <br />
                                <div class="mb-3">
                                <i class="fa fa-user icon"></i>
                                    <input type="email"  class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required style="height: 60px; border-radius: 15px" aria-describedby="emailHelp" placeholder="Username / Email"  />
                                     @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                    <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required id="exampleInputPassword1" style="height: 60px;border-radius: 15px; border-top: 0px" placeholder="Password" />
                                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                    <br />
                                    <br />
                                    <button  type="submit" style="width: 100%; height: 50px;border:0px;background: linear-gradient(to right, #92c955 0%, #365b20 100%);border-radius: 15px;" class="btn btn-success">
                                    <div style="margin-top:9px;">
                                    
                                    Continue
                                    </div>
                                </button>

                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-transparent border-light" style="color:#385d22;height: 100px; text-align: center; padding: 30px;">
                      
                       COMPANY LOGO
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    --></body>

@endsection
