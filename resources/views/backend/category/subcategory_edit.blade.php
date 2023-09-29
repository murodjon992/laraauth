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
                    <h4 class="box-title">Yordamchi Kategoriya tahrirlash</h4>
                </div>
                <div class="box-body">
                    <form action="{{route('subcategory.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$subcategory->id}}">
                        <div class="form-group">
                            <h5>Kategoriya turi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="category_id" id="select" required class="form-control">
                                    <option value="">Kategoriya tanlang</option>
                                    @foreach($categories as $category)
                                    <option {{$category->id == $subcategory->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->category_name_en}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Kategoriya Ingliz nomi: </label>
                            <input type="text"  name="subcategory_name_en" value="{{$subcategory->subcategory_name_en}}" class="form-control unicase-form-control text-input">
                            @error('category_name_en')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">kategoriya O'zbek nomi: </label>
                            <input type="text"  name="subcategory_name_uz" value="{{$subcategory->subcategory_name_uz}}" class="form-control unicase-form-control text-input">
                            @error('category_name_uz')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <button class="btn  btn-primary">Kategoriya yangilash</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
      </section>
    </div>
  


@endsection