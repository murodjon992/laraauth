@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h3 class="page-title">Mahsulot qo'shish</h3>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Yangi mahsulot</h4>
                    </div>
                    <div class="box-body">
                        <form action="{{route('product-store')}}" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Brand <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="brand_id" id="select" required class="form-control">
                                                <option value="">Brand tanlang</option>
                                                @foreach ($brands as $brand)
                                                    <option
                                                        
                                                        value="{{ $brand->id }}">{{ $brand->brand_name_en }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Turkum <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="select" required class="form-control">
                                                <option value="">Turkum tanlang</option>
                                                @foreach ($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}">{{ $category->category_name_en }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Yordamchi turkumi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subcategory_id" id="select" required class="form-control">
                                                <option value="">Yordamchi turkum tanlang</option>
                                            </select>
                                            @error('subcategory_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Ichi Turkum <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subsubcategory_id" id="select" required class="form-control">
                                                <option value="">Ichi turkum tanlang</option>
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot nomi (en) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_en"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot nomi (uz) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_uz"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_name_uz')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot soni <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_qty"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_qty')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot turi (en) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" name="product_tags_en" value=""
                                                    data-role="tagsinput" placeholder="turkum qo'shing">
                                            </div>
                                            @error('product_tags_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot turi (uz) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" name="product_tags_uz" value=""
                                                    data-role="tagsinput" placeholder="turkum qo'shing">
                                            </div>
                                            @error('product_tags_uz')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot razmeri (en) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_en"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_size_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot razmeri (uz) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_uz"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_size_uz')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot rangi (en) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" name="product_color_en" value=""
                                                    data-role="tagsinput" placeholder="ranglar qo'shing">
                                            </div>
                                            @error('product_color_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot rangi (uz) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" name="product_color_uz" value=""
                                                    data-role="tagsinput" placeholder="ranglar qo'shing">
                                            </div>
                                            @error('product_color_uz')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot Sotuv narxi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="selling_price"
                                                class="form-control unicase-form-control text-input">
                                            @error('selling_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot chegirma narxi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="discount_price"
                                                class="form-control unicase-form-control text-input">
                                            @error('discount_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot rasmi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="custom-file">
                                                <input name="product_thambnail" type="file" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">rasm tanlang</label>
                                            </div>
                                            @error('product_thambnail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Xarxil rasmlar <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="multi_img[]"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">rasmlar tanlang</label>
                                            </div>
                                            @error('multi_img')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <h5>Mahsulot codi <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_code"
                                                class="form-control unicase-form-control text-input">
                                            @error('product_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5>Qisqa izoh (en) <span class="text-danger">*</span></h5>
                                    <textarea class="form-control" placeholder="izoh kiriting" name="short_descp_en" id="" cols="30"
                                        rows="5"></textarea>
                                    @error('short_descp_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <h5>Qisqa izoh (uz) <span class="text-danger">*</span></h5>
                                    <textarea class="form-control" placeholder="izoh kiriting" name="short_descp_uz" id="" cols="30"
                                        rows="5"></textarea>
                                    @error('short_descp_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                <h5>To'liq izoh (en) <span class="text-danger">*</span></h5>
               
                    <textarea id="editor1" name="long_descp_en" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
                    @error('long_descp_en')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
               
            </div>
            <div class="col-6">
                <h5>To'liq izoh (uz) <span class="text-danger">*</span></h5>
                    <textarea id="editor2" name="long_descp_uz" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
                    @error('long_descp_uz')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
               
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-3">
                <div class="form-group">
                    <div class="demo-checkbox">
                        <input name="hot_deal" type="checkbox" id="basic_checkbox_2" checked />
                        <label for="basic_checkbox_2">Qaynoq bitim</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="demo-checkbox">
                        <input name="special_offer" type="checkbox" id="basic_checkbox_3" checked />
                        <label for="basic_checkbox_3">Maxsus takliflar</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <div class="demo-checkbox">
                        <input type="checkbox" name="special_deal" id="basic_checkbox_4" checked />
                        <label for="basic_checkbox_4">Maxsus bitim</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">

                    <div class="demo-checkbox">
                        <input name="featured" type="checkbox" id="basic_checkbox_5" checked />
                        <label for="basic_checkbox_5">Xususiyat</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Mahsulot qo'shish</button>
        </div>
        </form>
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
        $(document).ready(function() {
            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val()
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/category/sub-subcategory/ajax') }}/" + subcategory_id,
                        type: 'GET',
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subsubcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subsubcategory_name_en + '</option>')
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
