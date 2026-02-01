<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('tema/assets/images/favicon.ico')}}">
    <!-- Theme Config Js -->
    <script src="{{asset('tema/assets/js/config.js')}}"></script>
    <!-- Vendor css -->
    <link href="{{asset('tema/assets/css/vendors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{asset('tema/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-4 col-sm-8">
                    <div class="card p-4 rounded-4">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Masukan Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" id="userEmail" placeholder="angga@example.com" required>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" name="password" placeholder="••••••••" required>
                                </div>
                            </div>
    
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold py-2">Masuk</button>
                            </div>
                        </form>
                    </div>
    
                    <p class="text-center text-muted mt-4 mb-0">
                        © 2014 - <script>document.write(new Date().getFullYear())</script> portoapp — by <span class="fw-semibold">kokitindo</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="{{asset('tema/assets/js/vendors.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('tema/assets/js/app.js')}}"></script>

</body>

</html>