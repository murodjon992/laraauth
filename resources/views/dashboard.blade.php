@extends('frontend.main_master')
@section('content')
@php
    $user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img style="width: 150px; height:150px; border-radius:50%; margin: 15px 0;" src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/admin_images/image.png') }}" alt="">
          <ul class="">
            <li style="margin-bottom: 10px;"><a href="{{ url('/')}}" class="btn btn-primary btn-sm btn-block">Bosh sahifa</a></li>
            <li style="margin-bottom: 10px;"><a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profil ynagilash</a></li>
            <li style="margin-bottom: 10px;"><a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Parol yangilash</a></li>
            <li style="margin-bottom: 10px;"><a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Chiqish</a></li>
          </ul>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
          <h3 class="text-center"><span class="text-danger">Salom</span> <strong>{{Auth::user()->name }}</strong> profilingingizga xush kelibsiz</h3>
        </div>
      </div>
    </div>
  </div>


@endsection
