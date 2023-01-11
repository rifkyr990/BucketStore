@extends('layouts.app')

<body class="bg-cream">
    <div class="container">
        <div class="d-flex justify-content-center flex-column vh-100">
            <di class="row" style="height: 400px;">
                <div class="col-6 d-block my-auto">
                    <h2 class="display-4">WELCOME TO Gifttt.co</h2>
                    <div class="button my-4">
                        <a href="{{ route('login') }}" class="css-button-rounded--green text-center text-decoration-none me-3 w-25">Login</a>
                        <a href="{{ route('register') }}" class="css-button-rounded--brown text-center text-decoration-none me-3 w-25">Register</a>
                    </div>
                </div>
                <div class="col-6"
                    style="background-image: url(asset/img/logo.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                </div>
            </di>
        </div>
    </div>
</body>
@section('content')
@endsection
