@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
  <div class="columns is-mobile is-centered">
    <div class="column is-half" style="max-width: 500px;">
      <div class="box">
        <div class="media-content">
          <div class="content" style="text-align: center; padding: 20px 0px 0px 0px;">
            <img src="{{asset('img/logo-kanggo.png')}}" style="width: 150px;" />
            <h3 style='margin: 30px 0px 30px 0px;' class="title is-6">Apakah anda yakin untuk logout?</h3>
            <div style="text-align: left; margin-top: 80px;"> 
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <div class="level">
                    <div class="level-left">
                      <a href="{{ url('home') }}"> Back to dashboard </a>
                    </div>
                    <div class="level-right">
                      <div class="field">
                          <div class="control">
                              <button type="submit" class="button is-danger">
                                  {{ __('Logout') }}
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