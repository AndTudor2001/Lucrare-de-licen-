@php
$setting = App\Models\SiteSetting::find(1);
        @endphp

 <footer class="main">
        
        <section class="featured section-padding">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                            <a href="index.html" class="mb-15"><img src="{{ asset($setting->logo ) }}" alt="logo" /></a>
                                <p class="font-lg text-heading">Awesome Ecommerce  website</p>
                            </div>
                            <ul class="contact-infor">
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Address: </strong> <span> {{ $setting->company_address }} </span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Call Us:</strong><span>{{ $setting->phone_one }}</span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-email-2.svg') }}" alt="" /><strong>Email:</strong><span>{{ $setting->email }}</span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-clock.svg') }}" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
</ul>
                        </div>
                    </div>
                    
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                           
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="{{ route('become.vendor') }}">Become a Vendor</a></li>
                            
                        </ul>
                    </div>
                    
                  
                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                <p class="font-sm mb-0">&copy; 2022, <strong class="text-brand">Ecommerce</strong> -  {{ $setting->copyright }}</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">

                    <div class="hotline d-lg-inline-flex">
                        <img src="{{ asset('frontend/assets/imgs/theme/icons/phone-call.svg') }}" alt="hotline" />
                        <p>{{ $setting->support_phone }}<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                    
</div>
                    
                </div>
            </div>
        </div>
    </footer>