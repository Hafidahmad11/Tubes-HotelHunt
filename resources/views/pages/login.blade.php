@extends('layouts.layout')
@section('content')
<section class="vh-80">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="img/traveling.jpeg"
          alt="Login image" class="bg-image-vertical w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <img class="me-3 pt-5 mt-xl-4" src="img/logo_biru.png" alt="">
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form action="/login" method="POST" style="width: 23rem;">
            @csrf
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-3">
              <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" required/>
            </div>

            <div class="form-outline mb-3">
              <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required/>

            </div>

            <div class="d-grid gap-2 col-6 mx-auto pb-3">
                <button class="btn btn-primary" type="submit" style="background: #0A9CDF;border:0px">LOGIN NOW</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      
    </div>
  </div>
</section>
@endsection