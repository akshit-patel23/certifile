@extends('auth.layout')

@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
<h1>SIGN UP</h1>
<form class="row g-3" method="post" action="{{route('userregister')}}">
    @csrf
   
        <input type="text" class="forminput" name='name' placeholder="Name">
    
        <input type="email" class="forminput"  name='email' placeholder="E-mail">
   
        <input type="password" class="forminput"  name="password" placeholder="Password">
    
  
        <button type="submit" class="btn btn-primary mb-3">SIGN UP</button>
    
</form>
<div class="promptfoot">
    <p>Already Registered?<a href="/login" class="footlink">Log in to your account</a> </p>
  </div>

@if(Session::has('success'))
<p>{{Session::get('success')}}</p>
@endif
@endsection