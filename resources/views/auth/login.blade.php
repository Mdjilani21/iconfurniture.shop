@extends('auth.layout.app')

@section('auth-body')

    <body
        class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page"
        data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div id="login-page" class="row">
                        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                            <form class="login-form" action="{{ route('login-user') }}" method="post">
                                @csrf
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-success">{{ Session::get('fail') }}</div>
                                @endif
                                <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">Sign in</h5>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">mail_outline</i>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}">
                                        <span class="text-danger">@error('email')
                                            {{ $message }}
                                        @enderror</span>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">lock_outline</i>
                                        <input id="password" type="password" name="password" value="{{ old('password') }}">
                                        <span class="text-danger">@error('password')
                                            {{ $message }}
                                        @enderror</span>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12 ml-2 mt-1">
                                        <p>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Remember Me</span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        {{-- <a href="{{ route('admin') }}"
                                            class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a> --}}
                                            <input type="submit" value="Login" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"/>
                                    </div>
                                </div>
                                @if (Route::has('register'))
                                <div class="row">
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
                                    </div>
                                @endif
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin right-align medium-small"><a
                                                href="{{ route('forgetPassword') }}">Forgot password ?</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    @endsection
