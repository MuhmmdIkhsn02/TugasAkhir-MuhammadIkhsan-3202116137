<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register & Signup | Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico">

		<!-- App css -->

		<link href="{{asset('/')}}assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-8">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="{{asset('/')}}assets/images/logo-dark.png" alt="" height="22" class="mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Register</h4>
                                </div>
                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="uuid" class="form-label">NISN</label>
                                        <input class="form-control @error('uuid') is-invalid @enderror" type="text" id="uuid" name="uuid" placeholder="Masukan NISN" value="{{old('uuid')}}">
                                        @error('uuid')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Masukan Nama Lengkap" value="{{old('name')}}">
                                        @error('name')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Mail</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Masukan E-mail" value="{{old('email')}}">
                                        @error('email')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Masukan Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password Confirm</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password_confirmation" placeholder="Masukan Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Kontak</label>
                                        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Masukan Nomor Hp" value="{{old('phone')}}">
                                        @error('phone')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea name="address" id="address" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror">{{old('address')}}</textarea>
                                        @error('address')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                                    </div>
                                    <div class="mb-3 text-center d-grid">
                                        <a href="{{route('firstpage')}}" class="btn btn-secondary">Login</a>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('/')}}assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{asset('/')}}assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('/')}}assets/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="{{asset('/')}}assets/js/app.min.js"></script>
        
    </body>
</html>