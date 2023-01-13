@extends('layouts.app')

@section('content')

<body class="overflow-hidden">
    <div class="container my-5">
        <h2 class="text-center my-5 fw-bold">About Us</h2>
        <div class="d-flex justify-content-center w-100 vh-100">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{asset('asset/img/logo.png')}}" alt="" class="w-75 float-end">
                </div>
                <div class="col-sm-6">
                    <h2 class="fw-bold display-6">Gift.co</h2>
                    <p class="w-75 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur molestiae, repudiandae
                        maiores necessitatibus alias vitae. Quam praesentium delectus necessitatibus facilis ex quaerat
                        doloribus itaque blanditiis eum illum maxime, quod quia.</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
