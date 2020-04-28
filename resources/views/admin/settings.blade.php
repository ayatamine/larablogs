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

                
                    <h2>Site settings</h2>
                    <form action="/action_page.php">
                        <div class="form-group">
                          <label for="title">Site Name:</label>
                          <input type="text" class="form-control" id="site_name">
                        </div>
                        <div class="form-group">
                          <label for="address">Address:</label>
                          <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                          <label for="email">Contact Email:</label>
                          <input type="email" class="form-control" id="contact_email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection