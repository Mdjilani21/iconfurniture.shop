@extends('auth.layout.app')

@section('auth-body')

    <body
        class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column register-bg   blank-page blank-page"
        data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div id="register-page" class="row">
                        
                        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
                            <form class="login-form" action="{{ route('register-user') }}" method="post">
                                @csrf
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-success">{{ Session::get('fail') }}</div>
                                @endif
                                <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">Register</h5>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">person_outline</i>
                                        <input id="username" type="text" name="name" value="{{ old('name') }}">
                                        <span class="text-danger">@error('name')
                                            {{ $message }}
                                        @enderror</span>
                                        <label for="name" class="center-align">Username</label>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">mail_outline</i>
                                        <input id="email" type="email" name="email"  value="{{ old('email') }}">
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
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">lock_outline</i>
                                        <input id="passwordAgain" type="password" name="password">
                                        <label for="passwordAgain">Password again</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        {{-- <a href="" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</a> --}}
                                        <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button>
                                    </div>
                                </div>
                            </form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p class="margin medium-small">
                                            <a href="{{ route('login') }}">Already have an account? Login</a>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </body>
@endsection
