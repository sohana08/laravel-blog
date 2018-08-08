<!DOCTYPE html>
<html>
<head><title>Sign Up Form</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	 <link href="/css/blog.css" rel="stylesheet">
</head>

<body>


<div class="container">
 <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Login</a>
          </div>
        </div>
      </header>

  
</div>
   <div class="container">
   <form method="POST" action="/">
   {{ csrf_field() }}
	 <div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" required>
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  @if (count($errors))
  <div class="alert alert-danger" role="alert">
		<ul>
		@foreach($errors->all() as $error)
		
		<li> {{ $error }} </li>
		
		@endforeach
		</ul>
</div>
@endif
</form>


 @include ('layout.footer')
</div>
 
</body>
</html>