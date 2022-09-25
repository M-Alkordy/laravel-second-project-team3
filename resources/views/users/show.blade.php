@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
        </div>
    </div>

    <div class="row mt-5 pb-2" style="background-color:#C5E4DF; display: flex;justify-content: center;align-items: center;flex-direction: column; width:50%;padding-left: 14%; gap:20px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address:</strong>
                {{ $user->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone number:</strong>
                {{ $user->phone_number }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary mt-5" href="{{ route('users.index') }}" style="color:white;"> Back</a>
    </div>
@endsection
