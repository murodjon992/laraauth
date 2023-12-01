@php
    $tags_en = App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();
    $tags_uz = App\Models\Product::groupBy('product_tags_uz')->select('product_tags_uz')->get();
@endphp
{{ dd($tags_en) }}