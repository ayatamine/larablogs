@extends('layouts.app')

@section('content')

  <!-- Page Content -->
  <div class="container intro-container">

    <div class="">
      <div class="col-sm-8 form-container p-5 border mb-2" >
        <h2 class="mb-3" style="    text-decoration: underline;">Our Contact information :</h2>
        <h6>Address: <strong> address example</strong></h6>
        <h6>Email: <strong> example@email.com</strong></h6>
      </div>
      <div class="col-sm-8 form-container p-5 border mb-2" >

          
          <h2 style="    text-decoration: underline;">Contact us</h2>
          <form action="/action_page.php">
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="Email">Name :</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="Email">Subject :</label>
                <input type="subject" class="form-control" id="subject">
              </div>
              <div class="form-group">
                <label for="msg">Message:</label>
                <textarea name="content" cols="30" rows="10" id="message" 
                class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
      </div>
  </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
