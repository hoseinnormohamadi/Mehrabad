@extends('layouts.Front')
@section('content')
    <main class="search-page default">
        <div class="container">
            <div class="row">
                <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-1">
                    <div class="box">
                        <div class="box-header">دسته بندی نتایج</div>
                        <div class="box-content category-result">
                            <ul>
                                @foreach(\App\ShopCategory::all() as $category)
                                    <li><a href="{{route('Category' , $category->id)}}">{{$category->Name}}</a>
                                        @if(\App\SubCategory::where('Parent' , $category->id)->count() > 0)
                                            <ul>
                                            @foreach(\App\SubCategory::where('Parent' , $category->id)->get() as $SubCat)
                                            <li><a href="{{route('SubCat' , [$category->id,$SubCat->id])}}">{{$SubCat->Name}}</a></li>
                                            @endforeach
                                            </ul>
                                            @endif
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">جستجو در نتایج:</div>
                        <div class="box-content">
                            <div class="ui-input ui-input--quick-search">
                                <form action="{{route('Search')}}" method="get">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       placeholder="نام محصول مورد نظر را بنویسید…" name="SearchTerm" value="@if(isset($_GET['SearchTerm'])){{$_GET['SearchTerm']}}@endif">
                                <span class="ui-input-cleaner"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-2">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="#">
                                    <span>{{\App\Site::Name()}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="listing default">
                        <div class="listing-counter">{{$Items->Count()}} کالا</div>

                        <div class="tab-content default text-center">
                            <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        @if($Items->Count() <= 0)
                                            کالایی موجود نیست
                                            @endif
                                        @foreach($Items as $item)
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <a class="product-box-img" href="{{route('Product' , $item->id)}}">
                                                    <img src="{{json_decode($item->Images)[0]}}" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="{{route('Product' , $item->id)}}">
                                                                {{$item->Name}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    {{  number_format($item->Price, 0, ',', ',')}} <span
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
