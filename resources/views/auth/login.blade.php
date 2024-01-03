
@extends('Auth.layout')

@section('content')
  @if($errors->any())
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif

  @if(Session::has('error'))
    <p>{{Session::get('error')}}</p>
  @endif
<h1>LOG IN</h1>
  <form class="row g-3" method="post" action="{{route('userlogin')}}">
    @csrf
    

      <input type="email"   placeholder="Email" name='email' class="forminput">

   
      <input type="password" placeholder="Password" name="password" class="forminput">

   
      <button type="submit" class="btn btn-primary mb-3">LOG IN</button>
    
  </form>
  <div class="promptfoot">
    <p>Not Registered?<a href="/register" class="footlink">Create an account</a> </p>
  </div>
@endsection