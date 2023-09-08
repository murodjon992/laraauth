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
                                      <th rowspan="2">Brend Rasmi</th>
                                      <th rowspan="2">Brend En</th>
                                      <th colspan="2">Bren Uz</th>
                                      <th colspan="3">Xarakatlar</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach($brands as $item)
                                <tr>
                                    <td rowspan="2"><img src="{{asset($item->brand_image)}}" alt=""></td>
                                    <td rowspan="2">{{ $item->brand_name_en}}</td>
                                    <td colspan="2">{{ $item->brand_name_uz}}</td>
                                    <td colspan="2">
                                        <a href="" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
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
                    <form action="{{route('add_brand')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="">Brend Ingliz nomi: </label>
                            <input type="text" id="current_password" name="brand_name_en" class="form-control unicase-form-control text-input">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Brend O'zbek nomi: </label>
                            <input type="text" id="current_password" name="brand_name_uz" class="form-control unicase-form-control text-input">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Brend Rasmi: </label>
                            <input type="file" id="current_password" name="brand_image" class="form-control unicase-form-control text-input">
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