@extends('frontend.main_master')
@section('content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img style="width: 150px; height:150px; border-radius:50%; margin: 15px 0;"
                        src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/admin_images/image.png') }}"
                        alt="">
                    <ul class="">
                        <li style="margin-bottom: 10px;"><a href="{{ url('/') }}"
                                class="btn btn-primary btn-sm btn-block">Bosh sahifa</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ url('user.profile') }}"
                                class="btn btn-primary btn-sm btn-block">Profil ynagilash</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{}}" class="btn btn-primary btn-sm btn-block">Parol
                                yangilash</a></li>
                        <li style="margin-bottom: 10px;"><a href="{{ route('user.logout') }}"
                                class="btn btn-danger btn-sm btn-block">Chiqish</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center"><span class="text-danger">Salom</span> <strong>{{ Auth::user()->name }}</strong>
                        profililni yangilash</h3>
                    <div class="card-body py-4">
                        <form action="{{route('user.profile.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="">Ismi: </label>
                                <input type="text" name="name" value="{{ $user->name }}"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="">Email: </label>
                                <input type="email" name="email" value="{{ $user->email }}"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="">Telefon: </label>
                                <input type="text" name="phone" value="{{ $user->phone }}"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <label class="info-title" for="">Rasmi: </label>
                                    <input type="file" id="image" name="profile_photo_path" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="showImage" width="150" class="rounded"
                                    src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/admin_images/image.png') }}"
                                    alt="">
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection
