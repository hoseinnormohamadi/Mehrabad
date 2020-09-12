@extends('layouts.Front')
@section('content')
    <main class="search-page amazing-search default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-amazing-search"></div>
                </div>
                <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-1">
                    <div class="sidebar-title-amazing">
                        <img src="assets/img/svg/9284f8d1.svg" alt="">
                    </div>

                </aside>
                <div class="amazing-content col-12 col-sm-12 col-md-12 col-lg-12 order-2">
                    <div class="listing default">
                        <div class="listing-counter">{{$Items->count()}} کالا</div>
                        <div class="tab-content default text-center">
                            <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        @foreach($Items as $amazing)
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            @if($amazing->Count < 0) <div class="label-check">موجود نیست</div> @endif
                                            <div class="product-box">

                                                <a class="product-box-img" href="{{route('Product' , $amazing->id)}}">
                                                    <img src="{{json_decode($amazing->Images)[0]}}" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="{{route('Product' , $amazing->id)}}">
                                                                {{$amazing->Name}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    {{number_format($amazing->Price, 0, ',', ',')}} <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pager default text-center">
                            {!! $Items->Links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
