@extends('admin.auth')

@section('login')

<form class="pt-3" action="{{ route('login') }}" method="POST">
@csrf
    <div class="form-group">
        <input name="email" type="email" class="form-control form-control-user"
            aria-describedby="emailHelp"
            placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control form-control-user"
            placeholder="Password">
    </div>
    <button class="btn btn-primary btn-user btn-block" type="submit">
        Login
    </button>
</form>

@endsection