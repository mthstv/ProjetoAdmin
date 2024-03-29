@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<body class="hold-transition @yield('body_class')" 
style=" background-image: url('{{asset('img/background-login.jpg')}}'); 
no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover; ">

        <div class="container">
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Registre-se</div>
            <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <div class="form-label-group">
                        <input type="text" id="firstName" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" required="required" name="name" value="{{ old('name') }}" autocomplete="name" autofocus="autofocus">
                        <label for="firstName">Nome</label>
                         @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    
                   {{--  <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                        <label for="lastName">Last name</label>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-mail" autocomplete="email">
                    <label for="inputEmail">E-mail</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Senha" autocomplete="new-password">
                        <label for="inputPassword">Senha</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="password" id="confirmPassword" class="form-control" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password">
                        <label for="confirmPassword">Confirme sua senha</label>
                      </div>
                    </div>
                  </div>
                </div>
                <p><button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                </button></p>
              </form>
              <div class="text-center">
                <a class="btn btn-outline-secondary btn-block" href="{{route('login')}}">Login</a>
                {{-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> --}}
              </div>
            </div>
          </div>
        </div>
        
      </body>
@endsection
