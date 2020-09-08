@extends('layouts.Front')
@section('content')
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-gallery default">
                                    <img class="zoom-img" id="img-product-zoom" src="{{json_decode($Product->Images)[0]}}"
                                         data-zoom-image="{{json_decode($Product->Images)[0]}}" width="411" />

                                    <div id="gallery_01f" style="width:500px;float:left;">
                                        <ul class="gallery-items owl-carousel owl-theme" id="gallery-slider">

                                            @foreach(json_decode($Product->Images) as $image)
                                            <li class="item">
                                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                                   data-image="{{$image}}"
                                                   data-zoom-image="{{$image}}">
                                                    <img src="{{$image}}" width="100" /></a>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-title default">
                                    <h1>

                                        {{$Product->Name}}
                                        <span>{{$Product->Name}}</span></h1>
                                </div>
                                <div class="product-directory default">
                                    <ul>
                                       {{-- <li>
                                            <span>برند</span> :
                                            <span class="product-brand-title">متفرقه</span>
                                        </li>--}}
                                        <li>
                                            <span>دسته‌بندی</span> :
                                            <a  class="btn-link-border">
                                                {{$Product->Categorys->Name}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {{--<div class="product-variants default">
                                    <span>انتخاب رنگ: </span>
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio1" value="option1">
                                        <label for="radio1">
                                            خاکستری
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                                        <label for="radio2">
                                            نقره ای
                                        </label>
                                    </div>

                                </div>--}}
                                <div class="product-guarantee default">
                                    <i class="fa fa-check-circle"></i>
                                    <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                </div>
                                <div class="price-product defualt">
                                    <div class="price-value">
                                        <span> {{  number_format($Product->Price, 0, ',', ',')}} </span>
                                        <span class="price-currency">تومان</span>
                                    </div>
                                    {{--<div class="price-discount" data-title="تخفیف">
                                            <span>
                                                ۰
                                            </span>
                                        <span>%</span>
                                    </div>--}}
                                </div>
                                <div class="product-add default">
                                    <div class="parent-btn ">
                                        @if($Product->Count <= 0)
                                            <a class="dk-btn dk-btn-danger">
                                                اتمام موجودی
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        @else
                                            <a href="{{route('Buy.WishList' , $Product->id)}}" class="dk-btn dk-btn-info">
                                                افزودن به سبد خرید
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">

                                <div class="product-params default">
                                    {!! $Product->Description !!}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            {{--<div class="row">
                <div class="container">
                    <div class="col-12 default no-padding">
                        <div class="product-tabs default">
                            <div class="box-tabs default">
                                <ul class="nav" role="tablist">
                                    <li class="box-tabs-tab">
                                        <a class="active" data-toggle="tab" href="#desc" role="tab"
                                           aria-expanded="true">
                                            <i class="now-ui-icons education_glasses"></i> نقد و بررسی
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                            <i class="now-ui-icons design_bullet-list-67"></i> مشخصات
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                            <i class="now-ui-icons ui-2_chat-round"></i> نظرات کاربران
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#questions" role="tab" aria-expanded="false">
                                            <i class="now-ui-icons travel_info"></i> پرسش و پاسخ
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body default">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="desc" role="tabpanel" aria-expanded="true">
                                            <article>
                                                <h2 class="param-title">
                                                    نقد و بررسی تخصصی
                                                    <span>گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت</span>
                                                </h2>
                                                <div class="parent-expert default">
                                                    <div class="content-expert">
                                                        <p>
                                                            اپل پس از شایعات فراوان از جدیدترین آیپد خود رونمایی کرد
                                                            تا
                                                            به پرسش‌های فراوان علاقه‌مندان به محصولاتش
                                                            پاسخ دهد. این آیپد با شباهت‌های فراوان به نسخه قبلی
                                                            تولید
                                                            شده، اما از نظر برخی مشخصات فنی در رده
                                                            پایین‌تری قرار گرفته تا کاهش قیمتش توجیه منطقی داشته
                                                            باشد.
                                                            اندازه و دقت نمایشگر آیپد جدید کاملا مشابه با
                                                            نمایشگر نسخه قبلی این محصول است. اما در همین ابتدای کار
                                                            لازم
                                                            می‌دانیم که بگوییم این دو تبلت هیچ ارتباطی
                                                            با یکدیگر ندارند و از دو خانواده‌ی متفاوت و با قیمت‌های
                                                            مختلف هستند. صفحه‌نمایش آیپد جدید 9.7 اینچی
                                                            دارای وضوح تصویر 1536 × 2048 پیکسل است و تراکم پیکسلی
                                                            266
                                                            پیکسل را ارائه می‌دهد. این تبلت به تراشه به
                                                            روزتر A9 و پردازنده‌ی کمکی M9 مجهز است. اما میزان
                                                            حافظه‌ی رم
                                                            آن از آیپد پروی 12.9 کمتر است. پردازنده‌ی
                                                            دو هسته‌ای این تبلت سرعتی برابر با 1.84گیگاهرتز دارد و
                                                            دو
                                                            گیگابایت حافظه‌ی رم این پردازنده را همراهی
                                                            می‌کند. در زمینه‌ی دوربین، آیپد جدید 9.7 اینچی نه‌تنها
                                                            پیشرفتی نداشته بلکه به سنسورهای ضعیف‌تری هم مجهز
                                                            است. اپل، یک حسگر 8 مگاپیکسلی برای دوربین اصلی تبلت 9.7
                                                            اینچی به کار برده که می‌تواند با حداکثر کیفیت
                                                            FullHD فیلم‌برداری کند. شاید بد نباشد بدانید که هیچ‌گونه
                                                            فلشی این سنسور را همراهی نمی‌کند و عکاسی در
                                                            محیط‌های بسته توسط این سنسور چندان رضایت‌بخش نخواهد بود.
                                                            دوربین دوم این تبلت را یک حسگر 1.2 مگاپیکسلی
                                                            تشکیل می‌دهد که از ویژگی قابلیت تشخیص چهره (Face
                                                            Detection)
                                                            بهره می‌برد. پرو 9.7 علاوه بر حافظه‌ی داخلی
                                                            128 گیگابایتی، در نسخه‌ی 32 گیگابایتی هم عرضه شده است.
                                                            همچنین این تبلت در دو نسخه‌ی LTE و WiFi تولید شده
                                                            که مجموعا چهار انتخاب پیش روی کاربران قرار خواهد داشت.
                                                            اما
                                                            مهم‌ترین تغییر ظاهری آیپد 9.7 اینچی مربوط به
                                                            حذف رنگ صورتی از رنگ‌های آن است. بنابراین، آیپد جدید 9.7
                                                            اینچی در سه رنگ نقره‌ای، خاکستری و طلایی عرضه
                                                            خواهد شد. درنهایت باید بگوییم که اپل تغییرات انقلابی و
                                                            رادیکال محوری در جدیدترین تبلت خود ایجاد نکرده
                                                            است. اما بااین‌وجود باید گفت که آیپد 9.7 اینچی
                                                            ارزان‌ترین
                                                            تبلت 10 اینچی تولیدشده‌ی تاریخ اپل تاکنون است.
                                                            آیپد 9.7 بهترین تبلت برای افرادی است که می‌خواهند درازای
                                                            پرداخت هزینه‌ی کمتر صاحب یک آیپد از شرکت مطرح
                                                            اپل شوند.
                                                        </p>
                                                    </div>
                                                    <div class="sum-more">
                                                            <span class="show-more btn-link-border">
                                                                نمایش بیشتر
                                                            </span>
                                                        <span class="show-less btn-link-border">
                                                                بستن
                                                            </span>
                                                    </div>
                                                    <div class="shadow-box"></div>
                                                </div>

                                                <div class="accordion default" id="accordionExample">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link" type="button"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                    Face ID (کسی به‌غیراز تو را نمی‌شناسم)
                                                                </button>
                                                            </h5>
                                                        </div>

                                                        <div id="collapseOne" class="collapse show"
                                                             aria-labelledby="headingOne"
                                                             data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <img src="assets/img/single-product/1406986.jpg"
                                                                     alt="">
                                                                <p>
                                                                    در فناوری تشخیص چهره‌ی اپل، یک دوربین و
                                                                    فرستنده‌ی مادون‌قرمز در بالای نمایشگر قرار داده
                                                                    ‌شده‌ است؛ هنگامی‌که آیفون
                                                                    می‌خواهد چهره‌ی شما را تشخیص دهد، فرستنده‌ی نوری
                                                                    نامرئی را به ‌صورت شما می‌تاباند. دوربین
                                                                    مادون‌قرمز، این نور را تشخیص
                                                                    داده و با الگویی که قبلا از صورت شما ثبت کرده،
                                                                    مطابقت می‌دهد و در صورت یکی‌بودن، قفل گوشی را
                                                                    باز می‌کند. اپل ادعا کرده،
                                                                    الگوی صورت را با استفاده از سی هزار نقطه ذخیره
                                                                    می‌کند که دورزدن آن اصلا کار ساده‌ای نیست.
                                                                    استفاده از ماسک، عکس یا موارد
                                                                    مشابه نمی‌تواند امنیت اطلاعات شما را به خطر
                                                                    اندازد؛ اما اگر برادر یا خواهر دوقلو دارید، باید
                                                                    برای امنیت اطلاعاتتان نگران
                                                                    باشید.
                                                                </p>
                                                                <img src="assets/img/single-product/1431842.jpg"
                                                                     alt="">
                                                                <p>
                                                                    فقط یک نکته‌ی مثبت در مورد Face ID وجود ندارد؛
                                                                    بلکه موارد زیادی هستند که دانستن آن‌ها ضروری به
                                                                    نظر می‌رسد. آیفون 10 فقط
                                                                    چهره‌ی یک نفر را می‌شناسد و نمی‌توانید مثل
                                                                    اثرانگشت، چند چهره را به آیفون معرفی کنید تا از
                                                                    آن‌ها برای بازکردنش استفاده
                                                                    کنید. اگر آیفون در تلاش اول، صورت شما را نشناسد،
                                                                    باید نمایشگر را برای شناختن مجدد خاموش و روشن
                                                                    کنید یا اینکه آن را پایین
                                                                    ببرید و دوباره روبه‌روی صورتتان قرار دهید. این
                                                                    تمام ماجرا نیست؛ اگر آیفون 10 بین افراد زیادی که
                                                                    چهره‌شان را نمی‌شناسد
                                                                    دست‌به‌دست شود، دیگر به شناخت چهره عکس‌العمل
                                                                    نشان نمی‌دهد و حتما باید از پین یا پسوورد برای
                                                                    بازکردن آن استفاده کنید تا
                                                                    دوباره صورتتان را بشناسد.
                                                                </p>
                                                                <img src="assets/img/single-product/1439653.jpg"
                                                                     alt="">
                                                                <p>
                                                                    اپل سعی کرده نهایت استفاده را از این فناوری جدید
                                                                    بکند؛ استفاده از آن برای ثبت تصاویر پرتره با
                                                                    دوربین سلفی، استفاده برای
                                                                    ساختن شکلک‌های بامزه که آن‌ها را Animoji نامیده
                                                                    است و همچنین استفاده برای روشن نگه‌داشتن گوشی
                                                                    زمانی که کاربر به آن نگاه
                                                                    می‌کند، مواردی هستند که iPhone X به کمک حسگر
                                                                    اینفرارد، بدون نقص آن‌ها را انجام می‌دهد.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseTwo" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                    نمایش‌گر (رنگی‌تر از همیشه)
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                             aria-labelledby="headingTwo"
                                                             data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <img src="assets/img/single-product/1429172.jpg"
                                                                     alt="">
                                                                <p>
                                                                    اولین تجربه‌ی استفاده از پنل‌های اولد سامسونگ
                                                                    روی گوشی‌های اپل، نتیجه‌ای جذاب برای همه به
                                                                    همراه آورده است. مهندسی
                                                                    افزوده‌ی اپل روی این پنل‌ها باعث شده تا غلظت
                                                                    رنگ‌ها کاملا متعادل باشد، نه مثل آیفون 8 کم باشد
                                                                    و نه مثل گلکسی S8 اشباع
                                                                    باشد تا از حد تعادل خارج شود. اپل این نمایشگر را
                                                                    Super Retina نامیده تا ثابت کند، بهترین نمایشگر
                                                                    موجود در دنیا را طراحی
                                                                    کرده و از آن روی iPhone X استفاده کرده است.
                                                                </p>
                                                                <img src="assets/img/single-product/1436228.jpg"
                                                                     alt="">
                                                                <p>
                                                                    این نمایشگر در مقایسه با پنل‌های معمولی، مصرف
                                                                    انرژی کمتری دارد و این به خاطر استفاده از
                                                                    پنل‌های اولد است؛ اما این مشخصه
                                                                    باعث نشده تا نور نمایشگر مثل محصولات دیگری که
                                                                    پنل اولد دارند کم باشد؛ بلکه این پنل در هر
                                                                    شرایطی بهترین بازده‌ی ممکن را
                                                                    دارد. استفاده زیر نور شدید خورشید یا تاریکی مطلق
                                                                    فرقی ندارد، آیفون 10 خود را با شرایط تطبیق
                                                                    می‌دهد. این تمام ماجرا نیست.
                                                                    در نمایشگر آیفون 10 نقطه‌ی حساس به تراز سفیدی
                                                                    نور محیط قرار داده ‌شده‌اند تا آیفون 10 را با
                                                                    شرایط نوری محیطی که از آن
                                                                    استفاده می‌کنید، هماهنگ کند و تراز سفیدی نمایشگر
                                                                    را به‌صورت خودکار تغییر دهد. این فناوری که با
                                                                    نام True-Tone نام‌گذاری
                                                                    شده، کمک می‌کند رنگ‌های نمایشگر در هر نوری
                                                                    نزدیک‌ترین غلظت و تراز سفیدی ممکن را به رنگ‌های
                                                                    طبیعی داشته باشد.
                                                                </p>
                                                                <img src="assets/img/single-product/1406339.jpg"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                    طراحی و ساخت (قربانی کردن سنت برای امروزی شدن)
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                             aria-labelledby="headingThree"
                                                             data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <img src="assets/img/single-product/1398679.jpg"
                                                                     alt="">
                                                                <p>
                                                                    اپل پا جای پای سامسونگ گذاشته و برای داشتن ظاهری
                                                                    امروزی و استفاده از جدیدترین فناوری‌های روز، سنت
                                                                    ده‌ساله‌ی طراحی
                                                                    گوشی‌هایش را شکسته است. دیگر کلید خانه‌ای وجود
                                                                    ندارد و تمام قاب جلویی را نمایشگر پر کرده است.
                                                                    حتی نمایشگر هم برای
                                                                    استفاده از فناوری تشخیص چهره قربانی شده و قسمت
                                                                    بالایی آن بریده ‌شده است و لبه‌ی بالایی آن در
                                                                    مقایسه با هر گوشی دیگری که
                                                                    تا به امروز دیده بودیم، حالت متفاوتی دارد. ابعاد
                                                                    iPhone X کمی بزرگ‌تر از ابعاد آیفون 6 است؛ اما
                                                                    نمایشگرش حدود یک اینچ
                                                                    بزرگ‌تر از آیفون 6 است. این نشان می‌دهد، فاصله‌ی
                                                                    لبه‌ها تا نمایشگر تا جای ممکن از طراحی جدیدترین
                                                                    آیفون اپل حذف‌ شده‌
                                                                    است.
                                                                </p>
                                                                <img src="assets/img/single-product/1441226.jpg"
                                                                     alt="">
                                                                <p>
                                                                    زبان طراحی جدید، آیفون 10 را به‌طور عجیبی به سمت
                                                                    تبدیل‌شدنش به یک کالای لوکس پیش برده است. نگاه
                                                                    کلی به طراحی این گوشی
                                                                    نشان می‌دهد، اپل سنت‌شکنی کرده و کالایی تولید
                                                                    کرده تا از هر نظر با نسخه‌های قبلی آیفون متفاوت
                                                                    باشد. استفاده از شیشه برای
                                                                    قاب پشتی، فلزی براق برای قاب اصلی، حذف کلید خانه
                                                                    و در انتها استفاده از نمایشگری بزرگ مواردی هستند
                                                                    که نشان‌دهنده‌ی تفاوت
                                                                    iPhone X با نسخه‌های قبلی آیفون است. تمام سطوح
                                                                    آیفون براق و صیقلی طراحی ‌شده‌اند و تنها برآمدگی
                                                                    آیفون جدید مربوط به
                                                                    مجموعه‌ی دوربین آن می‌شود که حدود یک میلی‌متری
                                                                    از قاب پشتی بیرون زده است. برخلاف آیفون 8پلاس،
                                                                    دوربین‌های روی قاب پشتی به
                                                                    حالت عمودی روی قاب پشتی قرار گرفته‌اند.
                                                                </p>
                                                                <img src="assets/img/single-product/1418947.jpg"
                                                                     alt="">
                                                                <p>
                                                                    آیفون جدید در دو رنگ خاکستری و نقره‌ای راهی
                                                                    بازار شده که در هر دو مدل قاب جلویی به رنگ مشکی
                                                                    است و این بابت استفاده از
                                                                    سنسورهای متعدد در بخش بالایی نمایشگر است. برخلاف
                                                                    تمام آیفون‌های فلزی که تا امروز ساخته‌ شده‌اند،
                                                                    قاب اصلی از فلزی براق
                                                                    ساخته ‌شده تا زیر نور خودنمایی کند.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </article>
                                        </div>
                                        <div class="tab-pane fade params" id="params" role="tabpanel"
                                             aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    مشخصات فنی
                                                    <span>Apple iPhone X 256GB Mobile Phone</span>
                                                </h2>
                                                <section>
                                                    <h3 class="params-title">مشخصات کلی</h3>
                                                    <ul class="params-list">
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">ابعاد</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        7.7 × 70.9 × 143.6 میلی‌متر
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">توضیحات سیم کارت</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        سایز نانو (8.8 × 12.3 میلی‌متر)
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">وزن</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        174 گرم
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">ویژگی‌های خاص</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        مقاوم در برابر آب , مناسب عکاسی , مناسب عکاسی
                                                                        سلفی , مناسب بازی , مجهز به حس‌گر تشخیص چهره
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">تعداد سیم کارت</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        تک سیم کارت
                                                                    </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section>
                                                    <h3 class="params-title">پردازنده</h3>
                                                    <ul class="params-list">
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">تراشه</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        Apple A11 Bionic Chipset
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">نوع پردازنده</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        64 بیت
                                                                    </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </article>
                                        </div>
                                        <div class="tab-pane fade" id="comments" role="tabpanel"
                                             aria-expanded="false">
                                            <article>
                                                <h2 class="comments-headline">امتیاز کاربران به:
                                                    <span>
                                                            <span>
                                                                ماشین لباسشویی سامسونگ مدل J1466 ظرفیت 7 کیلوگرم
                                                            </span>
                                                            <span> |</span>
                                                            <span>۴</span>
                                                            <span> / ۵</span>
                                                            <span>(۱۵ نفر)
                                                            </span>
                                                        </span>
                                                </h2>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <ul class="content-expert-rating">
                                                            <li>
                                                                <div class="cell">طراحی</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 70%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">ارزش خرید</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 20%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">کیفیت ساخت</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">صدای مزاحم</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">مصرف انرژی و آب</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">امکانات و قابلیت ها</div>
                                                                <div class="cell">
                                                                    <div class="rating rating--general"
                                                                         data-rate-digit="عالی">
                                                                        <div class="rating-rate"
                                                                             data-rate-value="100%"
                                                                             style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="comments-summary-note">
                                                                <span>شما هم می‌توانید در مورد این کالا نظر
                                                                    بدهید.</span>
                                                            <p>برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود
                                                                شوید. اگر این محصول را قبلا از دیجی‌کالا خریده
                                                                باشید، نظر
                                                                شما به عنوان مالک محصول ثبت خواهد شد.
                                                            </p>
                                                            <div class="parent-btn">
                                                                <a href="#" class="dk-btn dk-btn-grey" data-toggle="modal" data-target="#loginModal">
                                                                    افزودن نظر جدید
                                                                    <i class="now-ui-icons ui-2_chat-round"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="param-title mt-5">
                                                    نظرات کاربران
                                                    <span>۱۲۳ نظر</span>
                                                </h2>
                                                <div class="comments-area default">
                                                    <ol class="comment-list">
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول</div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:</div>
                                                                                <div class="cell color-cell">
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:</div>
                                                                                <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="message-light message-light--opinion-positive">
                                                                            خرید این محصول را توصیه می‌کنم</div>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            لباسشویی سامسونگ
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                        </div>

                                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                                        <div class="footer">
                                                                            <div class="comments-likes">
                                                                                آیا این نظر برایتان مفید بود؟
                                                                                <button class="btn-like"
                                                                                        data-counter="۱۱">بله
                                                                                </button>
                                                                                <button class="btn-like"
                                                                                        data-counter="۶">خیر
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول</div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:</div>
                                                                                <div class="cell color-cell">
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:</div>
                                                                                <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="message-light message-light--opinion-positive">
                                                                            خرید این محصول را توصیه می‌کنم</div>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            لباسشویی سامسونگ
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-6 col-12">
                                                                                <div
                                                                                    class="content-expert-evaluation-positive">
                                                                                    <span>نقاط قوت</span>
                                                                                    <ul>
                                                                                        <li>دوربین‌های 4گانه پرقدرت
                                                                                        </li>
                                                                                        <li>باتری باظرفیت بالا</li>
                                                                                        <li>حسگر اثرانگشت زیر قاب
                                                                                            جلویی</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 col-sm-6 col-12">
                                                                                <div
                                                                                    class="content-expert-evaluation-negative">
                                                                                    <span>نقاط ضعف</span>
                                                                                    <ul>
                                                                                        <li>نرم‌افزار دوربین</li>
                                                                                        <li>نبودن Nano SD در بازار
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>
                                                                            بعد از چندین هفته بررسی تصمیم به خرید
                                                                            این مدل از ماشین لباسشویی گرفتم ولی
                                                                            متاسفانه نتونست انتظارات منو برآورده کنه
                                                                            .
                                                                            دو تا ایراد داره یکی اینکه حدودا تا 20
                                                                            دقیقه اول شستشو یه صدایی شبیه به صدای
                                                                            پمپ تخلیه همش به گوش میاد که رو مخه یکی
                                                                            هم با اینکه خشک کنش تا 1400 دور در دقیقه
                                                                            میچرخه، ولی اون طوری که دوستان تعریف
                                                                            میکردن لباسها رو خشک نمیکنه .ضمنا برای
                                                                            این صدایی که گفتم زنگ زدم نمایندگی اومدن
                                                                            دیدن، وتعمیرکار گفتش که این صدا طبیعیه و
                                                                            تا چند دقیقه اول شستشو عادیه.بدجوری خورد
                                                                            تو ذوقم. اگه بیشتر پول میذاشتم میتونستم
                                                                            یه مدل میان رده از مارکهای بوش یا آ ا گ
                                                                            میخریدم که خیلی بهتر از جنس مونتاژی کره
                                                                            ای هستش.
                                                                        </p>

                                                                        <div class="footer">
                                                                            <div class="comments-likes">
                                                                                آیا این نظر برایتان مفید بود؟
                                                                                <button class="btn-like"
                                                                                        data-counter="۱۱">بله
                                                                                </button>
                                                                                <button class="btn-like"
                                                                                        data-counter="۶">خیر
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول</div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:</div>
                                                                                <div class="cell color-cell">
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:</div>
                                                                                <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="message-light message-light--opinion-positive">
                                                                            خرید این محصول را توصیه می‌کنم</div>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            لباسشویی سامسونگ
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                        </div>

                                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                                        <div class="footer">
                                                                            <div class="comments-likes">
                                                                                آیا این نظر برایتان مفید بود؟
                                                                                <button class="btn-like"
                                                                                        data-counter="۱۱">بله
                                                                                </button>
                                                                                <button class="btn-like"
                                                                                        data-counter="۶">خیر
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول</div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:</div>
                                                                                <div class="cell color-cell">
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:</div>
                                                                                <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="message-light message-light--opinion-positive">
                                                                            خرید این محصول را توصیه می‌کنم</div>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            لباسشویی سامسونگ
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                        </div>

                                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                                        <div class="footer">
                                                                            <div class="comments-likes">
                                                                                آیا این نظر برایتان مفید بود؟
                                                                                <button class="btn-like"
                                                                                        data-counter="۱۱">بله
                                                                                </button>
                                                                                <button class="btn-like"
                                                                                        data-counter="۶">خیر
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول</div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:</div>
                                                                                <div class="cell color-cell">
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:</div>
                                                                                <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="message-light message-light--opinion-positive">
                                                                            خرید این محصول را توصیه می‌کنم</div>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            لباسشویی سامسونگ
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                        </div>

                                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                                        <div class="footer">
                                                                            <div class="comments-likes">
                                                                                آیا این نظر برایتان مفید بود؟
                                                                                <button class="btn-like"
                                                                                        data-counter="۱۱">بله
                                                                                </button>
                                                                                <button class="btn-like"
                                                                                        data-counter="۶">خیر
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="tab-pane fade form-comment" id="questions" role="tabpanel"
                                             aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    افزودن نظر
                                                    <span>نظر خود را در مورد محصول مطرح نمایید</span>
                                                </h2>
                                                <form action="" class="comment">
                                                        <textarea class="form-control" placeholder="نظر"
                                                                  rows="5"></textarea>
                                                    <button class="btn btn-default">ارسال نظر</button>
                                                </form>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </main>
@endsection
@section('js')
    <script src="{{asset('assets/js/plugins/jquery.ez-plus.js')}}" type="text/javascript"></script>

@endsection