@extends('layouts.app')

@section('content')
@include('layouts.banner')
    <div class="panel-body">
        <section class="tem_index_product tem_index_to">
            <div class="tem_inner">
                <h3 class="tem_index_title">
			<span>
				推荐产品
				<p></p>
			</span>
                </h3>
                <ul data-product_x="220">
                    @foreach($products as $product)
                        <li class="" style="width: 20%;">
                            <a href="product/showproduct.php?lang=cn&amp;id=14" title="示例产品六" target="_self" style="width: 220px;">
                                <img src="{{ $product->avatar }}" title="示例产品六" alt="示例产品六" width="220" height="200">
                                <h2 style="height: 38px;">{{ $product->name }}</h2>
                            </a>
                        </li>
                    @endforeach


                </ul>

                <div class="met_clear"></div>


            </div>
        </section> 
        <div style="margin:0 auto;width: 10%;">
            {{ $products->links() }}
        </div>

    </div>
@endsection
