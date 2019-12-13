<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PURI BUNDA - SIPAS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/assets/images/favicon.png')}}" />
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper" style="border-radius:0;padding-top:10px;">
                <div class="text-center">
                  <img class="img-fluid" src="{{asset('images/logo.png')}}" style="max-width:100px;">
                </div>
                <h3 class="text-center" style="margin-top:10px;"> SIPAS </h3>
                <p class="text-center text-grey"> SISTEM INFORMASI PENGELOLAAN ARSIP SURAT </p>
                <form action="{{ route('auth') }}" style="margin-top:20px;" method="POST">
                    @if ( count( $errors ) > 0 )
                        <div class="alert alert-danger col-md-12" role="alert">
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </div>
                    @endif
                  @csrf
                  <div class="form-group">
                    <label class="label">Email or Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email or Username" name="email" value="{{ old('email') }}">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="*********" name="password" value="{{ old('password') }}">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                    <button class="btn btn-danger submit-btn btn-block">Forgot Password</button>
                  </div>
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
    <script src="{{asset('assets/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src=".{{asset('assets/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('assets/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('assets/assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
  </body>
</html>
