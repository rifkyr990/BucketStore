@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="method-payment py-2 mt-5">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card-body text-start text-black p-4">
                <h5 class="card-title text-uppercase mb-5" id="examplecardLabel">{{ Auth::user()->name }}</h5>
                <h4 class="mb-5" style="color: #35558a;">Thanks for your order</h4>
                <p class="mb-0" style="color: #35558a;">Payment summary</p>
                <hr class="mt-2 mb-4"
                    style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                <div class="d-flex justify-content-between">
                    <p class="fw-bold mb-0">Ether Chair(Qty:1)</p>
                    <p class="text-muted mb-0">$1750.00</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="small mb-0">Shipping</p>
                    <p class="small mb-0">$175.00</p>
                </div>

                <div class="d-flex justify-content-between pb-1">
                    <p class="small">Tax</p>
                    <p class="small">$200.00</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Total</p>
                    <p class="fw-bold" style="color: #35558a;">{{ number_format($reservasi->total_cost)}}</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="fw-bold"></p>
                    <a type="button" class="btn btn-primary btn-md mb-1 text-decoration-none border-0" style="background-color: #311B04; width: 230px;" href="{{url('myorder')}}">
                        Track your order
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>
@endsection
