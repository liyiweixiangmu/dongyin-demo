@extends('layouts.app')

@section('content')
    {{--轮播图--}}
<div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/BANNER1.jpg') }}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/BANNER2.jpg') }}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/BANNER3.jpg') }}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    {{--介绍--}}
<div class="index_about">
    <div class="inner">
        <h3 class="index_title">
			<span>
				关于我们
				<p></p>
			</span>
        </h3>
        <div class="tem_index_about_cont ">
            <div class="tem_index_about_txt ">
                <div class="met_editor">
                    <div style="color: rgb(51, 51, 51); font-size: 12px; line-height: 24px; padding-top: 10px;"><span style="font-size: 14px;"></span><p>杭州东银网络科技有限公司由一批具有国内著名网络公司服务背景的网络精英所组成，年轻、富有活力，注定一开始就是一家成熟的网络科技公司，是一家专业从事电子商务领域的互联网公司,全心致力于电子商务的应用及推广。我们从市场的角度和客户的需求出发，为顾客提供优质的丰富的商品选择以及无与伦比的购物体验，让顾客的生活更便捷。&nbsp;</p><p>公司依托强大的物流基础设施网络和供应链整合能力，大幅提升了行业运营效率，降低了社会成本。在品质电商的理念下，优化电商模式，精耕细作反哺实体经济，进一步助力供给侧改革。以社会和环境为抓手整合内外资源，与政府、媒体和公益组织协同创新，为用户、为合作伙伴、为员工、为环境、为社会创造共享价值。</p><div><br></div></div><p><br></p><div class="met_clear"></div>
                    <h4 class="tem_index_about_more"><a href="message/" title="了解更多" target="_self">了解更多</a></h4>
                </div>
            </div>
            <div class="tem_index_about_img">
                <ul>
                    <li><img src="upload/201501/1422258315.jpg"></li>
                    <li><img src="upload/201501/1422258414.jpg"></li>
                    <li><img src="upload/201501/1422258511.jpg"></li>
                </ul>
            </div>

            <div class="met_clear"></div>
        </div>
    </div>
</div>


{{--商品--}}
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
        <h4 class="tem_index_more"><a href="product/" title="浏览更多产品" target="_self">浏览更多产品</a></h4>
    </div>
</section>
{{--商品展示--}}
@endsection
