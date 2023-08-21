@extends('admin.admin_master')
@section('admin')
    <section class="content">

        <!-- Basic Forms -->
        <div class="col-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Parol yangilash</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" enctype="multipart/form-data" action="{{route('update.change.password')}}">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Oldingi Parol: <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input id="current_password" type="password" name="oldpassword" value=""
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <h5>Yangi parol: <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input id="password" type="password" name="password"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Parol tasdiqlang: <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" id="password_confirmation" name="password_confirmation"
                                                    class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>
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


@endsection
