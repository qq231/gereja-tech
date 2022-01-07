@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  <div class="container" style="margin-top: 20px;">
    <div class="columns is-mobile is-centered">
      <div class="column is-half" style="max-width: 500px;">
        <div class="box">
          <div class="media-content">
            <div class="content" style="text-align: center; padding: 20px 0px 0px 0px;">
              <img src="{{asset('img/logo-kanggo.png')}}" style="width: 150px;" />
              <h3 class="title is-4">Login</h3>
              <h5 style="padding-top: 10px;" class="subtitle is-6">Sistem Informasi Gereja</h5>

              <div> 
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="columns is-centered" style="margin-top: 20px;">
                    <div class="column" style="max-width: 300px;">
                      <div class="field">
                        <div class="control">
                          <input placeholder="Alamat email" id="email" type="email" class="input is-info @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="columns is-centered">
                    <div class="column" style="max-width: 300px;">
                      <div class="field">
                        <div class="control">
                          <input placeholder="Password" id="password" type="password" 
                            class="input is-info @error('password') is-invalid @enderror" 
                            name="password" value="{{ old('password') }}" 
                            required autocomplete="password">
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="columns is-centered" style="margin-top: 20px;">
                    <div class="column" style="max-width: 300px;">
                      <div class="level">
                        <div class="level-left">
                        </div>
                        <div class="level-right">
                          <button type="submit" class="button is-light">
                            {{ __('Login') }}
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
</div>

@endsection