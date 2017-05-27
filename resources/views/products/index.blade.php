@extends('layouts.admin')

@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                商品列表
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>

            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>avatar</th>
                        <th>is_hidden</th>
                        <th>created_at</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ $product->avatar }}"  width="75" class="img-thumbnail" alt=""></td>
                            <td>{{ $product->is_hidden }}</td>
                            <td>{{ substr($product->created_at,0,10)  }}</td>
                            <td>
                                <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" class="btn btn-success">编辑</a>
                                <a href="{{ url('/admin/products/'.$product->id.'/delete') }}" class="btn btn-danger">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

