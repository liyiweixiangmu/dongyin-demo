@inject('sidebar','App\Sidebar')

<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-body ">
            {{--<ul class="list-unstyled">--}}
                {{--<li><a href="{{ url('admin') }}">管理员</a></li>--}}
                {{--<li>--}}
                    {{--<a href="{{ url('admin/products') }}">--}}

                    {{--<button class="btn btn-pro btn-default">商品</button>--}}
                    {{--</a>--}}
                    {{--<ul class="list-group">--}}
                        {{--<li class="list-group-item"><a href="{{ url('admin/products') }}">所有商品</a></li>--}}
                        {{--<li class="list-group-item"><a href="{{ url('admin/products/create') }}">添加商品</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><button class="btn btn-pro btn-default">商品</button></li>--}}
                {{--<li><button class="btn btn-pro btn-default">商品</button></li>--}}
                {{--<li><button class="btn btn-pro btn-default">商品</button><ul class="list-group">--}}
                            {{--<li class="list-group-item">Cras justo odio</li>--}}
                            {{--<li class="list-group-item">Dapibus ac facilisis in</li>--}}
                            {{--<li class="list-group-item">Morbi leo risus</li>--}}
                            {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
                            {{--<li class="list-group-item">Vestibulum at eros</li>--}}
                        {{--</ul></li>--}}
            {{--</ul>--}}


            {!! Menu::get('MyNavBar')->asUl([ 'class' => 'nav nav-list'],[ 'class' => 'nav nav-list tree']) !!}
        </div>
    </div>
</div>