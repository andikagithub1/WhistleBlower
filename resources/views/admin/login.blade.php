<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin WhistleBlower Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Agar tidak bisa scroll */
    html, body {
      height: 100%;
      overflow: hidden;
    }

    /* Section full screen */
    section.vh-100 {
      height: 100vh;
    }

    .bg-image-vertical {
      position: relative;
      overflow: hidden;
      background-repeat: no-repeat;
      background-position: right center;
      background-size: auto 100%;
    }

    @media (min-width: 1025px) {
      .h-custom-2 {
        height: 100%;
      }
    }
  </style>
</head>
<body>
  <section class="vh-100">
    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-sm-6 text-black d-flex flex-column">

        <div class="px-5 ms-xl-4 d-flex align-items-center">
    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4"></i>
    <img src="{{ asset('images/logo.png') }}" alt="Logo Image" class="me-3 pt-4 mt-xl-3" style="height: 50px; width: 50px; object-fit: contain;" />
    <span class="h1 fw-bold mb-0 pt-4 mt-xl-3">Admin WhistleBlower</span>
  </a>
</div>


          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 flex-grow-1">

            <!-- Form login admin -->
            <form style="width: 23rem;" method="POST" action="{{ route('admin.login.submit') }}">
              @csrf

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Admin</h3>

              <!-- Tampilkan error kalau ada -->
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach($errors->all() as $e)
                      <li>{{ $e }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Enter your username" required />
                <label class="form-label" for="username">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required />
                <label class="form-label" for="password">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button type="submit" class="btn btn-info btn-lg btn-block">Login</button>
              </div>

            <br><br><br><br><br><br>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img
            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
            alt="Login image"
            class="w-100 vh-100"
            style="object-fit: cover; object-position: left;"
          />
        </div>
      </div>
    </div>
  </section>

  <!-- FontAwesome untuk ikon -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
