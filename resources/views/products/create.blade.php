@extends('layouts.admin')
@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <form action="{{ url('admin/products/create') }}" method="post" files="true" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">产品名</label>
                        <input type="text" name="name" class="form-control" placeholder="产品名" >
                    </div>
                    <div class="form-group">
                        <label for="description">描述</label>
                        <input type="text" name="description" class="form-control" placeholder="描述" >
                    </div>
                    <div class="form-group">
                        <label for="avatar">产品图片</label>
                        <input type="file" name="avatar" class="form-control" placeholder="产品图片" >
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="is_hidden"  value="F" checked="checked"> 上架
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_hidden" value="T"> 暂不上架
                        </label>
                    </div>
                    <button class="btn btn-success pull-right" type="submit">发布商品</button>
                </form>
            </div>
        </div>
    </div>

@endsection