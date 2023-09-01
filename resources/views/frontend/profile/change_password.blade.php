@extends('frontend.main_master')
@section('content')

@php
    $user = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img style="width: 150px; height:150px; border-radius:50%; margin: 15px 0; object-fit:cover;"
                        src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/admin_images/image.png') }}"
                        alt="">
                    <ul class="">
                        <li style="margin-bottom: 10px;"><a href="{{ url('/') }}"
                                class="btn btn-primary btn-sm btn-block">Bosh sahifa</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ url('user.profile') }}"
                                class="btn btn-primary btn-sm btn-block">Profil ynagilash</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Parol
                                yangilash</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('user.logout') }}"
                                class="btn btn-danger btn-sm btn-block">Chiqish</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center"><span class="text-danger">Parol yangilash</h3>
                    <div class="card-body py-4">
                        <form action="{{route('update.password')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="">Avvalgi parol: </label>
                                <input type="password" id="current_password" name="oldpassword" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="">Yangi parol: </label>
                                <input type="password" name="password" id="password" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="">Parolni tasdiqlang: </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control unicase-form-control text-input">
                            </div>
                          
                            <div class="form-group py-3">

                                <button class="btn btn-primary" type="submit">Yangilash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
@endsection
