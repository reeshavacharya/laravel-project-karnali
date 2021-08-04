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
   <form class="form-inline" action='login' method='POST'>
    <h3>ＷＥＬＣＯＭＥ!</h3>
  <div class="form-group">
    <br><br><p>E-mail</p>
    @csrf
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <br><br>
  <div class="form-group">
    <p>Password</p>
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
  <button type="submit" class="btn btn-default">Log In</button>
</form>
<p>Don't have an account? <a href="/register" class="buttonhome">Sign Up</a></p>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection 