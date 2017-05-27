@extends('layouts.admin')

@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>created_at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            <th scope="row">{{ $admin->id }}</th>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->created_at }}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
