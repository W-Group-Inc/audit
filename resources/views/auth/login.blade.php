@extends('layouts.app')

@section('content')

{{-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 col-lg-4 rounded" style='background: rgba(0, 0, 0, .5)'>
                <div class="login-wrap p-0">
                    
            <div class="login100-form-avatar text-center" >
                <img src="{{asset('login_css/images/icon.png')}}" alt="AVATAR" style='width:350px;'>
            </div>
              <h3 class="mb-4 text-center ">AUDIT PORTAL BPD</h3>
              
              <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group ">
                <input id="email" type="email" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

            </div>
            <div class="form-group">
                <input id="password-field" type="password" class="form-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

               
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50">
                </div>
                <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff">Forgot Password</a>
                </div>
            </div>
          </form>
          
          </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="ftco-section">
    <div class="container">
        @if($errors->any())
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="form-group alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{{$errors->first()}}</strong>
                </div>
            </div>
        </div>
    @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(login_css/images/APS.png);">
              </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                      </div>
                  </div>
                        <form action="#" class="signin-form">
                      <div class="form-group mb-3">
                          <label class="label" for="name">Email</label>
                         <input id="email" type="email" class="form-control " placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                      </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
