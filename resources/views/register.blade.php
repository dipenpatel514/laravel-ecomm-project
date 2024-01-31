@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1>New User Registration </h1>
  </div>
<div class="container custom-login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name : </label>
                    <input type="text" name='name' placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address : </label>
                <input type="email" name='email'placeholder="Email Address"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password : </label>
                <input type="password" name="password" placeholder="Your Password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
       

@endsection


