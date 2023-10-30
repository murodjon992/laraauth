@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Mahsulotlar ro'yxati</h3>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Complex headers (rowspan and colspan)</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-striped table-bordered display"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Rasm</th>
                                            <th>Mahsulot nomi En</th>
                                            <th>Mahsulot narxi </th>
                                            <th>Mahsulot CHEGIRMA narxi </th>
                                            <th>Mahsulot SONI </th>
                                            <th>Mahsulot holati </th>
                                            <th>Xarakatlar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr>
                                                <td> <img width="100" height="70"
                                                        src="{{ asset($item->product_thambnail) }}" alt=""> </td>
                                                <td>{{ $item->product_name_en }}</td>
                                                <td>{{ $item->selling_price }}</td>

                                                <td>
                                                    @if ($item->discount_price == null)
                                                        <span class="badge badge-pill badge-danger">Chegirma yo'q</span>
                                                    @else
                                                        @php
                                                            $amount = $item->selling_price - $item->discount_price;
                                                            $discount = ($amount / $item->selling_price) * 100;
                                                        @endphp
                                                        <span class="badge badge-pill badge-success">{{ round($discount) }}
                                                            %</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->product_qty }}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <span class="badge badge-pill badge-success">Mavjud</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Mavjud emas</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit-product', $item->id) }}"
                                                        class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('subcategory.delete', $item->id) }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    @if ($item->status == 1)
                                                        <a id="delete" href="{{ route('product.inactive', $item->id) }}"
                                                            class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a id="delete" href="{{ route('product.active', $item->id) }}"
                                                            class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>
@endsection
