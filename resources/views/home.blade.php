@extends('layouts.app')

@section('content')
<!-- Page Content -->
  <div class="container intro-container">

    <div class="row">
      <home></home>
      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <div class="media simple-post">
          <img class="mr-3" src="img/p1.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0"><a href="blog-post.html">title</a></h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">Ayat amine</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>
                  
            </ul>
          </div>
        </div>
        <div class="media simple-post">
          <img class="mr-3" src="img/p2.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0"><a href="blog-post.html">title</a></h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">Ayat amine</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>
                  
            </ul>
          </div>
        </div>
        <div class="media simple-post">
          <img class="mr-3" src="img/p3.jpg" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0"><a href="blog-post.html">title</a> </h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">Ayat amine</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>
                  
            </ul>
          </div>
        </div>
      

        <!-- Pagination -->
        <nav aria-label="...">
          <ul class="pagination float-right">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <span class="page-link">
                2
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design </a>
                  </li>
                  <li>
                    <a href="#">HTML and CSS</a>
                  </li>
                  <li>
                    <a href="#">Freebies </a>
                  </li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">Laravel tutorial</a>
                  </li>
                  <li>
                    <a href="#">bootstrap</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
