<template>
   <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ayat Amine</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <router-link class="nav-link" to="/admin">admin
              <span class="sr-only">(current)</span>
            </router-link>
          </li>
          <li class="nav-item active">
            <router-link class="nav-link" to="/">Home
              <span class="sr-only">(current)</span>
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>

          <li class="nav-item register-btn reg-login-btn" data-toggle="modal" data-target="#register-modal">
            <a class="btn btn-info nav-link" href="" data-toggle="modal" data-target="#register-modal">Register</a>
          </li>
          <li class="nav-item reg-login-btn" data-toggle="modal" data-target="#login-modal">
            <a class="btn btn-primary text-weight nav-link" href="#">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <router-view></router-view>
   </div>

</template>

<script>
export default {

}
</script>
