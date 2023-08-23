@extends('layout')
  
@section('content')
<main >
    <div class="col-lg-12">
        <div class="login-wrap">
            <h3 class="text-center mb-4">Create Your Account</h3>
            <form action="{{ route('register.post') }}" method="POST" class="signup-form">
                @csrf
                <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>  
                    <input type="text" id="name" class="form-control" name="name" placeholder="john doe" required autofocus>
                    <span class="icon fa fa-user-o"></span>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif               
                </div>
                <!-- <div class="form-group mb-3">
                    <label class="label" for="email">Email Address</label>       
                        <input type="text" id="email_address" class="form-control" name="email" placeholder="johndoe@gmail.com" required >
                        <span class="icon fa fa-paper-plane-o"></span>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif      
                </div> -->
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="icon fa fa-lock"></span>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                </div>
            </form>
            <!-- <div align="center">
                <p>I'm already a member! <a data-toggle="tab" href="{{ route('login') }}">Sign In</a></p>
            </div> -->
        </div>
    </div>
</main>
@endsection