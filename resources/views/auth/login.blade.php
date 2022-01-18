<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NS Game Shop </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('logins/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('logins/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('logins/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('logins/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('logins/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('logins/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('logins/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('login/images/favicon.pngs')}}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('logins/images/logo_200x200.png')}}" alt="logo">
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
              <h4>ยินดีต้อนรับ</h4>
              <h6 class="fw-light">Log in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                </div>
                @error('username')

                  <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                  </span>

                @enderror
                <div class="form-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me logged in
                    </label>
                  </div>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?
                  </a>
                  @endif
                </div>

        

                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="{{route('register')}}" class="text-primary">Register</a>
                </div>
              </form>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('logins/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('logins/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('logins/js/off-canvas.js')}}"></script>
  <script src="{{asset('logins/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('logins/js/template.js')}}"></script>
  <script src="{{asset('logins/js/settings.js')}}"></script>
  <script src="{{asset('logins/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
