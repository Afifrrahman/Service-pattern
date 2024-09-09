<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Register</title>
</head>

<body>
    <div id="logreg-forms">
        <form method="POST" action="{{ route('register') }}" class="form-signin">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Sign Up</h1>

            <!-- Display Success Message -->
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="text" name="name" id="user-name" class="form-control" placeholder="Full name" value="{{ old('name') }}" required autofocus>
            <input type="email" name="email" id="user-email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
            <input type="password" name="password" id="user-pass" class="form-control" placeholder="Password" required>
            <input type="password" name="password_confirmation" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required>

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            <a href="{{ route('login') }}" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i> Login</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/script.js"></script>
</body>

</html>
