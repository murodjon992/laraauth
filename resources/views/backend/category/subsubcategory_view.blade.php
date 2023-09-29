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
                                      <th>Id</th>
                                      <th>Yordamchi Kategoriya En</th>
                                      <th>Yordamchi Kategoriya Uz</th>
                                      <th>Xarakatlar</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($subsubcategory as $item)
                                  <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{ $item['category']['category_name_en']}}</td>
                                    <td>{{ $item['category']['category_name_uz']}}</td>
                                    <td>
                                        <a href="{{route('subcategory.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a id="delete" href="{{route('subcategory.delete',$item->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                    <h4 class="box-title">Ichki Kategoriya Qo'shish</h4>
                </div>
                <div class="box-body">
                    <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5>Kategoriya turi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="category_id" id="select" required class="form-control">
                                    <option value="">Kategoriya tanlang</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name_en}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Yordamchi Kategoriya turi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="subcategory_id" id="select" required class="form-control">
                                    <option value="">Kategoriya tanlang</option>
                                    @foreach($categories as $category)
                                    <option value=""></option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Ichki kategoriya Ingliz: </label>
                            <input type="text"  name="subsubcategory_name_en" class="form-control unicase-form-control text-input">
                            @error('category_name_en')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="">Ichki kategoriya O'zbek: </label>
                            <input type="text"  name="subsubcategory_name_uz" class="form-control unicase-form-control text-input">
                            @error('category_name_uz')
                            <span class="text-danger">{{ $message}}</span>
                            @enderror
                        </div>
                     
                        <div class="form-group">
                            <button class="btn  btn-primary">Kategoriya qo'shish</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
      </section>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script text="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function(){
                var cat_id = $(this).val()
                if(cat_id){
                    $.ajax({
                        url: "{{url('/category/subcategory/ajax')}}/"+cat_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            var d = $('select[name="subcategory_id"]').empty()
                            $.each(data,function(key,value){
                                $('select[name="subcategory_id"]').append('<option value="' + value.id + '"> ' + value.subcategory_name_en + '</option>')
                            })
                        }
                    })
                }
            })
        })
    </script>

@endsection