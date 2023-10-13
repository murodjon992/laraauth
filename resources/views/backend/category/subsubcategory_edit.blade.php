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
                            <h4 class="box-title">Ichki Kategoriya Tahrirlash</h4>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('subsubcategory.update',$subsubcategories->id) }}" method="post">
                                @csrf
                                <input type="hidden" value="{{$subsubcategories->id}}">
                                <div class="form-group">
                                    <h5>Turkumni tanlang</h5>
                                    <div class="controls">
                                        <select name="category_id" class="form-control" id="select">
                                            <option value="">Tanlang</option>
                                            @foreach ($categories as $category)
                                                <option {{$category->id == $subsubcategories->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->category_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                                <div class="form-group">
                                    <h5>yordamchi Turkumni tanlang</h5>
                                    <div class="controls">
                                        <select name="subcategory_id" class="form-control" id="select">
                                            @foreach ($subcategories as $subsub)
                                            <option {{$subsub->id == $subsubcategories->subcategory_id ? 'selected' : ''}} value="{{$subsub->id}}">{{$subsub->subcategory_name_en}}</option>
                                            @endforeach
                                        </select>
                                        @error('subcategory_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                                <div class="form-group">
                                    <h5>Turkum english <span class="text-danger">*</span></h5>
                                    <input type="text" value="{{$subsubcategories->subsubcategory_name_en}}" name="subsubcategory_name_en" class="form-control">
                                    @error('subsubcategory_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <h5>Turkum uzbek <span class="text-danger">*</span></h5>
                                    <input type="text" value="{{$subsubcategories->subsubcategory_name_uz}}" name="subsubcategory_name_uz" class="form-control">
                                    @error('subsubcategory_name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit"> Yangilash</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script text="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val()
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/" + category_id,
                        type: 'GET',
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_name_en + '</option>')
                            });
                        },
                    });
                } else {
                    alert('xato')
                }
            })
        })
    </script>
@endsection
