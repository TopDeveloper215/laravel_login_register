@extends('layout')
@section('content')
<main>
  <div class="col-md-12 col-lg-12">
    <div class="wrap d-md-flex">
        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
          <div class="text w-100">
            <h2>Welcome to login</h2>
            <p>Don't have an account?</p>
            <a href="#" class="btn btn-white btn-outline-white">Sign Up</a>
          </div>
        </div>
      <div class="login-wrap p-4 p-lg-5">
        <div class="d-flex">
          <div class="w-100" align="center">
            <h3 class="mb-4" >Sign In</h3>
          </div>
        </div>
        <form action="{{ route('login.post') }}" class="signin-form" method="POST">
            @csrf
            <div class="form-group mb-3">
              <label class="label" for="name">Username</label>                              
                  <input type="text" name="name" id="name"  class="form-control" placeholder="Username" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
            <div class="form-group mb-3">
              <label class="label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
            </div>
            <div class="form-group">
              <button type="submit" class="form-control  submit px-3" style="background-color:#f75959;border:1px solid gray; ">Sign In</button>
            </div>
            <!-- <p align="center">Don't have an account?<a href="{{ route('register') }}" class="btn">Sign Up</a></p> -->
        </form>        
      </div>
    </div>
</div>
</main>
@endsection