@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit User</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-user',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input value="{{ $user->name }}" id="add-name" type="text" class="form-control" name="name">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="role">Role</label>
                        <br>
                        <input type="radio" name="role" id="admin" value="admin" @if ($user->role=='admin') @checked(true) @endif><label for="admin">Admin</label><br>
                        <input type="radio" name="role" id="provider" value="provider" @if ($user->role=='provider') @checked(true) @endif><label for="provider">Provider</label><br>
                        <input type="radio" name="role" id="user" value="user" @if ($user->role=='user') @checked(true) @endif><label for="user">User</label>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Old Email</label>
                        <input id="add-email" type="email" class="form-control" name="email">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">New Email</label>
                        <input type="email" class="form-control" name="remail">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Password</label>
                        <input id="text" type="password" class="form-control" name="password">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Repeat Password</label>
                        <input id="add-rpassword" type="password" class="form-control" name="rpassword">
                        <hr>
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-primary">Edit User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection