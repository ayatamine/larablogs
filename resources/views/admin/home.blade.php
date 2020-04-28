@extends('admin.layouts.app')
@section('content')
<!-- Page Content -->
<div id="content" class="w-100">

    <nav class="">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>
            <div class="border mt-2 text-center p-3">
                <div class="form-container p-5 statistic" >

                
                    <h2>statistic</h2>
                    <div class="row">
                      <div class="col-sm-4 bg-primary text-weight">
                        <h4><strong>25</strong></h4>
                        blog
                      </div>
                      <div class="col-sm-4 bg-success text-weight">
                        <h4><strong>22</strong></h4>
                        comments
                      </div>
                      <div class="col-sm-4 bg-warning text-weight">
                        <h4><strong>10</strong></h4>
                        Users
                      </div>
                    </div>
                    <div class="bg-primary text-weigth">

                    </div>
                </div>
                <div class="form-container  pt-2 pb-2 pl-5 pr-5">
                  <h2 class="text-dard text-left">Latest blog</h2>
                  <div class="media simple-post">
                    <img class="mr-3" src="/img/p1.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h4 class="mt-0"><a href="blog-post.html">title</a></h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      <ul class="list-inline list-unstyled d-flex post-info">
                            <li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                            <li>|</li>
                            <span><i class="fa fa-comment"></i> 2 comments</span>
                            
                      </ul>
                    </div>
                  </div>
                  <div class="media simple-post">
                    <img class="mr-3" src="/img/p1.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <h4 class="mt-0"><a href="blog-post.html">title</a></h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      <ul class="list-inline list-unstyled d-flex post-info">
                            <li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
                            <li>|</li>
                            <span><i class="fa fa-comment"></i> 2 comments</span>
                            
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection