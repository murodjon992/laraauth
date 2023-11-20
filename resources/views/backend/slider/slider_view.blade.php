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
            
          <div class="col-8">
              <div class="box">
                  <div class="box-body">
                      <div class="table-responsive">

                          <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>№</th>
                                      <th>Slider Rasmi</th>
                                      <th>Slider Sarlavha</th>
                                      <th>Holat</th>
                                      <th>Slider Izoh</th>
                                      <th>Xarakatlar</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    @php
                                    $raqam = 1
                                    @endphp
                                  @foreach($sliders as $item)
                                  <tr>
                                    <td>{{$raqam}}</td>
                                    <td ><img width="200" height="80" src="{{asset($item->slider_img)}}" alt=""></td>
                                    <td>{{ $item->title}}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge badge-pill badge-success">Mavjud</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Mavjud emas</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->description}}</td>
                                    <td>
                                        <a href="{{route('slider-edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a id="delete" href="{{route('slider-delete',$item->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        @if ($item->status == 1)
                                        <a id="delete" href="{{ route('slider.inactive', $item->id) }}"
                                            class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                        <a id="delete" href="{{ route('slider.active', $item->id) }}"
                                            class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>
                                    @endif
                                    </td>
                                </tr>
                                    {{$raqam++}}
                                    @endforeach
                              </tbody>
                              
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-4">
            <div class="box">
                <div class="box-header">						
                    <h4 class="box-title">Brand Qo'shish</h4>
                </div>
                <div class="box-body">
                    <form action="{{route('add-slider')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="">Slider Sarlavha: </label>
                            <input type="text" id="current_password" name="slider_title" class="form-control unicase-form-control text-input">
                            @error('slider_title')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Slider Izoh: </label>
                            <input type="text" id="current_password" name="slider_description" class="form-control unicase-form-control text-input">
                            @error('slider_description')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
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