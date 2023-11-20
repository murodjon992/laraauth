@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Data Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-4">
            <div class="box">
                <div class="box-header">						
                    <h4 class="box-title">Brand Qo'shish</h4>
                </div>
                <div class="box-body">
                    <form action="{{route('slider-update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$slider->id}}">
                        <div class="form-group">
                            <label class="info-title" for="">Slider Sarlavha: </label>
                            <input type="text" id="current_password" value="{{$slider->title}}" name="slider_title" class="form-control unicase-form-control text-input">
                            @error('slider_title')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Slider Izoh: </label>
                            <input type="text" id="current_password" value="{{$slider->description}}" name="slider_description" class="form-control unicase-form-control text-input">
                            @error('slider_description')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <img src="{{asset($slider->slider_img)}}" alt="">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Slider Rasmi: </label>
                            <input type="file" id="current_password" name="slider_img" class="form-control unicase-form-control text-input">
                            @error('slider_img')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn  btn-primary">Slider qo'shish</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
      </section>
    </div>
  


@endsection