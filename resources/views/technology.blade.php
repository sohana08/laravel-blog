<!DOCTYPE html>
<html>
<head><title>Technology</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	 <link href="/css/blog.css" rel="stylesheet">
</head>
<body>
<div class="container">
	 @include ('layout.nav')
	 
</div>
<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
		
		<div class="blog-post>
		  @include ('layout.blog')
		 </div>
		
       </div>
           @include ('layout.sidebar')
		  </div>
		  </main>



 @include ('layout.footer')
</body>
</html>