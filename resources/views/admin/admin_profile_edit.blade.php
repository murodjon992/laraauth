@extends('admin.admin_master')
@section('admin')
    <section class="content">

        <!-- Basic Forms -->
        <div class="col-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Tahrirlash</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" enctype="multipart/form-data" action="{{route('admin.profile.store')}}">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Ismi: <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" value="{{ $editData->name }}"
                                                    class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <h5>Email: <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" value="{{ $editData->email }}" name="email"
                                                    class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>File Input Field <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="profile_photo_path" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <img id="showImage" width="150" class="rounded"
                                                src="{{ !empty($adminData->profile_photo_path) ? url('upload/admin_images/' . $adminData->profile_photo_path) : url('upload/admin_images/image.png') }}"
                                                alt="">
                                        </div>

                                        <button type="submit" class="btn btn-rounded btn-info">Yangilash</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                console.log('sasa');
            })
        })
    </script>
@endsection
