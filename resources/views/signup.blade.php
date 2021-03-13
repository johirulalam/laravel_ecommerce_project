<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
    	<h1>Crete post</h1>
    	@if(session()->has('msg'))
    	  {{ session('msg')}}
        @endif
    
      <form action="{{route('reg')}}" method="post" enctype="multipart/form-data"> 
      	@csrf
      	@if ($errors->any())
      	  <div class="alert alert-danger">
      	  	<ul>
    	     @foreach ($errors->all() as $error)
    	      <li>{{ $error }}</li>
    	     @endforeach
    	    </ul>
    	   </div>
    	@endif
      	Email
      	<input type="te" value="{{ old('email')}}" name="email"><br>Password
      	<input type="password" name="password"><br>
      	<input type="file" name="photo"><br><br>
      	<button type="submit"> signUp</button>
      </form>
    </body>
</html>
