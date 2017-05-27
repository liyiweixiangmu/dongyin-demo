@extends('layouts.admin')

@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                {!! $trees !!}
            </div>
        </div>
    </div>
@endsection
