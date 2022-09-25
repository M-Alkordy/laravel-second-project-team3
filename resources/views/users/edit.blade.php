@extends('users.layout')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update',$user->id) }}" method="POST" style="background-color: #F9D98E;">
        @csrf
        @method('PUT')

         <div class="row pb-3">
            <div class="col-xs-12 col-sm-12 col-md-12" style="width:40vw; margin: 2% 25%;">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="width:40vw; margin: 2% 25%;">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="width:40vw; margin: 2% 25%;">
                <div class="form-group">
                    <strong>address:</strong>
                    <input type="text" name="address" value="{{ $user->address }}" class="form-control" placeholder="address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="width:40vw; margin: 2% 25%;">
                <div class="form-group">
                    <strong>phone number:</strong>
                    <input type="tel" name="phone_number" value="{{ $user->phone_number }}" class="form-control" placeholder="000000000000">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary" style="background-color: #F5BF29; border:none;">save</button>
            </div>
        </div>

    </form>
    <div class="pull-right">
        <a class="btn mt-3" href="{{ route('users.index') }}" style="background-color: #F5BF29; color:white;"> Back</a>
    </div>
@endsection
