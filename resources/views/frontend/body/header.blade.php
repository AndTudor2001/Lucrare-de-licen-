<!-- Header  -->
<header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Bine ati <strong>venit</strong> pe site-ul nostru.</span>
        </div>
        
        @php
$setting = App\Models\SiteSetting::find(1);
        @endphp
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ url('/') }}"><img src="{{ asset($setting->logo)   }}" alt="logo" /></a>
                    </div>
    <div class="header-right">
        <div class="search-style-2">
            
            <form action="{{ route('product.search') }}" method="post">
                @csrf
                
                <input onfocus="search_result_show()" onblur="search_result_hide()" name="search" id="search" placeholder="Search for items..." />
                <div id="searchProducts"></div>
            </form>
        </div>
        <div class="header-action-right">
            <div class="header-action-2">
               
               
     <div class="header-action-icon-2">
        <a href="{{ route('compare') }}">
            <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-compare.svg')}}" />
        </a>
        <a href="{{ route('compare') }}"><span class="lable ml-0">Compare</span></a>
    </div>
                <div class="header-action-icon-2">
                    <a href="{{ route('wishlist') }}">
                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                        <span class="pro-count blue" id="wishQty">0 </span>
                    </a>
                    <a href="{{ route('wishlist') }}"><span class="lable">Wishlist</span></a>
                </div>
                <div class="header-action-icon-2">
                    <a class="mini-cart-icon" href="shop-cart.html">
                        <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                        <span class="pro-count blue" id="cartQty">0</span>
                    </a>
                    <a href="{{ route('mycart') }}"><span class="lable">Cart</span></a>
                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                        
         <!--   // mini cart start with ajax -->
         <div id="miniCart">
         </div>
          <!--   // End mini cart start with ajax -->
           
                        <div class="shopping-cart-footer">
                            <div class="shopping-cart-total">
                                <h4>Total <span id="cartSubTotal"> </span></h4>
                            </div>
                            <div class="shopping-cart-button">
                                <a href="{{ route('mycart') }}" class="outline">View cart</a>
                                
                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="{{ route('dashboard') }}">
                                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-user.svg') }}" />
                                    </a>
    @auth
    <a href="{{ route('dashboard') }}"><span class="lable ml-0">Account</span></a>
                                    
    @else
  <a href="{{ route('login') }}"><span class="lable ml-0">Login</span></a>
  <span class="lable" style="margin-left: 2px; margin-right: 2px;" > | </span>
 <a href="{{ route('register') }}"><span class="lable ml-0">Register</span></a>
    
    @endauth                        
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
        @endphp
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo.svg') }}" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span>   All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
<div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
    <div class="d-flex categori-dropdown-inner">
        <ul>
            @foreach($categories as $item)
                @if($loop->index < 5)
            <li>
            <a href="{{ url('product/category/'.$item->id.'/'.$item->category_slug) }}"> <img src="{{ asset( $item->category_image ) }}" alt="" /> {{ $item->category_name }} </a>
            </li>
            @endif
           @endforeach
        </ul>
        <ul class="end">
             @foreach($categories as $item)
             @if($loop->index > 4)
            <li>
            <a href="{{ url('product/category/'.$item->id.'/'.$item->category_slug) }}"> <img src="{{ asset( $item->category_image ) }}" alt="" /> {{ $item->category_name }} </a>
            </li>
              @endif
           @endforeach

        </ul>
                               
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                    <ul>
                        
                        <li>
                            <a class="active" href="{{ url('/') }}">Home  </a>
                            
                        </li>
    
        @php
    $categories = App\Models\Category::orderBy('category_name','ASC')->limit(6)->get();
        @endphp
       @foreach($categories as $category)    
        <li>
            <a href="{{ url('product/category/'.$category->id.'/'.$category->category_slug) }}">{{ $category->category_name }} <i class="fi-rs-angle-down"></i></a>
   @php 
    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();
        @endphp
            <ul class="sub-menu">
                @foreach($subcategories as $subcategory)   
                <li><a href="{{ url('product/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name }}</a></li>
                @endforeach
            </ul>
        </li>
        @endforeach
                         
               <li>
                    <a href="{{ route('home.blog') }}">Blog</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="hotline d-none d-lg-flex">
    <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-headphone.svg') }}" alt="hotline" />
    <p>{{ $setting->support_phone }}<span>24/7 Support Center</span></p>
</div>

    </header>
   <!-- End Header  -->
<style>
    #searchProducts{
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>
<script>
    function search_result_show(){
        $("#searchProducts").slideDown();
    }
    function search_result_hide(){
        $("#searchProducts").slideUp();
    }
</script>
    