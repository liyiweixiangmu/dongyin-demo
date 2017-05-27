@extends('layouts.admin')
@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                 @foreach($cates as $cate)
                    <p><a href="/admin/cates/{{ $cate['id'] }}/delete">{{ $cate['name'] }}</a></p>
                @endforeach
            </div>
        </div>
    </div>

@endsection