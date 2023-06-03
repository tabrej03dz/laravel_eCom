@extends('master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="text-center">Login Form</h3>
        </div>
        <div class="card-body">
            <form>
                @csrf
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
    </div>
</div>

@endsection