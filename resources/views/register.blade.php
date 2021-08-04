@extends('master')
@section('content')
<style>
body {
  background-image: url('https://cdn.trendhunterstatic.com/thumbs/cool-backgrounds.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br><br><br><br>
<div class='container'>
 <div class='row'>
  <div class='col-sm-4 col-sm-offset-4'>
   <form class="form-inline" action='register' method='POST'>
    <h3>ＷＥＬＣＯＭＥ! </h3>
    @csrf

      <div class="form-group">
    <br><br><p>Create New Username</p>
    <label class="sr-only" for="exampleInputEmail3">Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail3" placeholder="Username">
  </div><br><br>


  <div class="form-group">
    <p>Enter E-mail</p>
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <br><br>
  <div class="form-group">
    <p>Create New Password</p>
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <br><br>
  <div class="checkbox">
   
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <br><br>
  <button type="submit" class="btn btn-default">Sign Up</button>
</form>
<p>Already have an account? <a href="/login" class="buttonhome">Log In</a></p>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection 