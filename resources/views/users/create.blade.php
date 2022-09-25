@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
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

<form action="{{ route('users.store') }}" method="POST" style="background-color: #B7D49A;">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style=" width:40vw; margin: 2% 25%;">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group" style=" width:40vw; margin: 2% 25%;">
                <strong>email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group" style=" width:40vw; margin: 2% 25%;">
                <strong>phone number:</strong>
                <input type="tel" name="phone_number" class="form-control" placeholder="000000000000">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group" style=" width:40vw; margin: 2% 25%;">
                <strong>address:</strong>
                <input type="text" name="address" class="form-control" placeholder="adress">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn" style="background-color: #207A34; color:white;">Add now</button>
        </div>
    </div>

</form>

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('users.index') }}" style="margin-top: 10%; background-color: #207A34; border:none;"> Back</a>
</div>
@endsection
