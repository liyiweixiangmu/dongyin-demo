@extends('layouts.admin')

@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <img src="{{ Auth::guard('admin')->user()->avatar }}" width="50"  class="img-circle"  alt="">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/avatar') }}" files="true" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="avatar" class="col-md-4 control-label">上传头像</label>
                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control" name="avatar"  >
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                上传
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
