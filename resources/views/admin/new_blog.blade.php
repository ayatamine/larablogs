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
                <div class="col-sm-8 form-container p-5" >

                
                    <h2>Create new blog</h2>
                    <form action="/action_page.php">
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <input type="text" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                          <label for="blog-content">Content:</label>
                          <textarea name="content" cols="30" rows="10" id="blog-content" 
                          class="form-control"></textarea>
                        </div>
                         <div class="form-group">
                          <label for="image">Image:</label>
                          <input type="file" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection