@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-5 mb-5">
                <h1>Users table</h1>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered text-center mb-0">
        <tr style="background-color: #B7D49A;">
            <th>ID</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>
                <form action="{{ route('users.destroy',$user) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show',$user) }}"><i class="fa-solid fa-eye"></i></a>

                    <a class="btn btn-warning" href="{{ route('users.edit',$user) }}"><i class="fa-regular fa-pen-to-square"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right" style="position: relative; width: 100vw;">
        <a class="btn btn-success " href="{{ route('users.create') }}" style="position: absolute; left: 52px;top: 0;"> <i class="fa-solid fa-plus"></i></a>
    </div>

@endsection
