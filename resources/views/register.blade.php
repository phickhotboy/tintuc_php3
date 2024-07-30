<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhap</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mt-5">Create New Account</h2>
    @if(session('message'))
            <p class="text-danger text-center">{{ session('message') }}</p>
    @endif
        <form action="{{ route('postRegister') }}" method="POST" class="tg-formtheme tg-formlogin">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-dark" type="submit">Register Now</button>
                </div>
                <div class="tg-notebox">
                    <p>Already Have Account? <a href="{{route('login')}}">Login Now</a></p>
                </div>
            </fieldset>
        </form>
    </div>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>