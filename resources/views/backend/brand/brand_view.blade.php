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
                  <div class="box-header">						
                      <h4 class="box-title">Complex headers (rowspan and colspan)</h4>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>№</th>
                                      <th>Brend Rasmi</th>
                                      <th>Brend En</th>
                                      <th>Bren Uz</th>
                                      <th>Xarakatlar</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    @php
                                    $raqam = 1
                                    @endphp
                                  @foreach($brands as $item)
                                  <tr>
                                    <td>{{$raqam}}</td>
                                    <td ><img width="200" height="80" src="{{asset($item->brand_image)}}" alt=""></td>
                                    <td>{{ $item->brand_name_en}}</td>
                                    <td>{{ $item->brand_name_uz}}</td>
                                    <td>
                                        <a href="{{route('brand.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a id="delete" href="{{route('brand.delete',$item->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                    <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="">Brend Ingliz nomi: </label>
                            <input type="text" id="current_password" name="brand_name_en" class="form-control unicase-form-control text-input">
                            @error('brand_name_en')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Brend O'zbek nomi: </label>
                            <input type="text" id="current_password" name="brand_name_uz" class="form-control unicase-form-control text-input">
                            @error('brand_name_uz')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Brend Rasmi: </label>
                            <input type="file" id="current_password" name="brand_image" class="form-control unicase-form-control text-input">
                            @error('brand_image')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn  btn-primary">Brend qo'shish</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
      </section>
    </div>
  


@endsection