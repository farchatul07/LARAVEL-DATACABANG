<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center"><b>Login</b></h2>
                        <hr>
                        @if ($errorMessage = Session::get('error'))
                        <div class="alert alert-danger">
                            {{$errorMessage}}
                        </div>
                        @endif

                        @if ($successMessage = Session::get('success'))
                        <div class="alert alert-success">
                            {{$successMessage}}
                        </div>
                        @endif

                        @if ($successMessage = Session::get('message'))
                        <div class="alert alert-success">
                            {{$successMessage}}
                        </div>
                        @endif

                        <form action="{{ route('login.proses')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <i class="bi bi-envelope-fill"></i>
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                           
                            <div class="form-group">
                                <i class="bi bi-lock-fill"></i>
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="remember_token" id="remember_token">
                                <label for="">Ingat Saya</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                            <hr>
                            <p class="text-center">Belum punya Akun? <a href="{{url('register')}}">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("togglePassword");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.name = "eye-off-outline";
            } else {
                passwordInput.type = "password";
                toggleIcon.name = "eye-outline";
            }
        }
    </script>
</body>

</html>