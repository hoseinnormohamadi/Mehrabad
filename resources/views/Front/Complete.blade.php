@extends('layouts.Shoping')
@section('content')
    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-12 order-1">
                    <section class="page-content default">
                        <div class="success-checkout text-center default">
                            <div class="icon-success">
                                <i class="fa fa-check"></i>
                            </div>
                            <h1>سفارش با موفقیت در سیستم ثبت شد.</h1>
                            <p>سفارش نهایتا تا یک روز آماده تحویل خواهد شد.</p>
                        </div>
                        <div class="order-info default">
                            <h3>کد سفارش: <span>{{$Order->id}}</span></h3>
                            <button type="button" class="btn-primary" onclick="window.print()">
                                پرینت فاکتور
                            </button>
                            <div class="table-responsive default mt-3 mb-3">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">نام تحویل گیرنده : {{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' . \Illuminate\Support\Facades\Auth::user()->LastName}}</th>
                                        <th scope="col">کد ملی : {{\Illuminate\Support\Facades\Auth::user()->CodeMeli}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>مبلغ کل : {{$Order->Price}}</td>
                                    </tr>
                                    <tr>
                                        <td>وضعیت سفارش: در انتظار تحویل</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
