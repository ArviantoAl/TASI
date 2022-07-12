@extends('layouts.nowa',[
    'titlePage' => __('Reset')
])

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main py-4 justify-content-center mx-auto">
                    <div class="card-sigin">
                        <!-- Demo content-->
                        <div class="main-card-signin d-md-flex">
                            <div class="wd-100p">
                                <div class="mb-3 d-flex"> <a href="index.html"><img src="{{ asset('nowa_assets') }}/img/brand/favicon.png" class="sign-favicon ht-40" alt="logo"></a></div>
                                <div class="main-card-signin d-md-flex bg-white">
                                    <div class="wd-100p">
                                        <div class="main-signin-header">
                                            <h2>Forgot Password!</h2>
                                            <h4>Please Enter Your Email</h4>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="email">{{ __('Email Address') }}</label>
                                                    <input id="email" type="email" placeholder="Your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Send</button>
                                            </form>
                                        </div>
                                        <div class="main-signup-footer mg-t-20 text-center">
                                            <p>Forget it, <a href="{{ route('login') }}"> Send me back</a> to the sign in screen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
