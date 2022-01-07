@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
  <div class="columns is-mobile is-centered">
    <div class="column is-half" style="max-width: 500px;">
      <div class="box">
        <div class="media-content">
          <div class="content" style="text-align: center; padding: 20px 0px 0px 0px;">
            <img src="{{asset('img/logo-kanggo.png')}}" style="width: 200px;" />
            <h3 style='margin-top: 5px;' class="title is-5">Registrasi User</h3>
            <div style="text-align: left; margin-top: 30px;"> 
              <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="field">
                      <label class="label">{{ __('Name') }}</label>
                      <div class="control">
                          <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      </div>
                      @error('name')
                          <span class="help is-danger">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="field">
                    <label class="label">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    @error('email')
                        <span class="help is-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  
                  <div class="field">
                    <label class="label">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
                    </div>
                    @error('password')
                        <span class="help is-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="field">
                    <label class="label">{{ __('Confirm Password') }}</label>
                    <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                    </div>
                  </div>

                  <div class="level">
                    <div class="level-left">
                      <a href="{{ route('login') }}"> Login Page </a>
                    </div>
                    <div class="level-right">
                      <div class="field">
                          <div class="control">
                              <button type="submit" class="button is-link">
                                  {{ __('Register') }}
                              </button>
                          </div>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
@endsection