@extends('layouts.admin')
@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <form action="{{ url('admin/cates/create') }}" method="post" >
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="pid">上级栏目</label>
                        <select class="form-control" name="pid">
                            <option value="0">顶级栏目</option>
                            @foreach($cates as $cate)
                                <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">栏目名称名</label>
                        <input type="text" name="name" class="form-control" placeholder="产品名" >
                    </div>
                    <button class="btn btn-success pull-right" type="submit">添加栏目</button>
                </form>
            </div>
        </div>
    </div>

@endsection