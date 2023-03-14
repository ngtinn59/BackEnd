@extends('front.layout.master')

@section('title','Shop')

@section('body')
<!-- Breadcrumb Section Begin-->
<div class="breadcrumb-section">
    <div class="container">
        <div class="room">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i></a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End-->

<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 product-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li ><a href="">Men</a></li>
                        <li ><a href="">Women</a></li>
                        <li ><a href="">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label>
                                Calvinklein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                Calvinklein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                Calvinklein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                Calvinklein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range vi-slider vi-corner-all vi-slider-horizontal vi-widget vi-widgett-content" data-min="33" data-max="98">
                            <div class="vi-slider-range vi-corner-all vi-widget-header"></div>
                            <span tabindex="0" class="vi-slider-handle vi-corner-all vi-state-default"></span>
                            <span tabindex="0" class="vi-slider-handle vi-corner-all vi-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label for="cs-black" class="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label for="cs-violet" class="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label for="cs-blue" class="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label for="cs-yellow" class="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label for="cs-green" class="cs-green">Green</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label for="cs-red" class="cs-red">red</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">S</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">M</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">L</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">XS</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="select-option">
                                <select name="" id="" class="sorting">
                                    <option value="latest">Sorting: Latest</option>
                                </select>
                                <select name="" id="" class="p-show">
                                    <option value="">Show: </option>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="product-list">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">

                                    @if($product->discount != null)
                                        <div class="sale pp-sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <div class="icon_heart_alt"></div>
                                    </div>
                                    <ul>
                                        <li class="w-icon active">
                                            <a href="" class="icon_bag_alt"></a>
                                        </li>
                                        <li class="quick-view"><a href="shop/product/{{$product->id}}" class="">+ Quick View</a></li>
                                        <li class="w-icon">
                                            <a href="" class="fa fa-random"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catogory-name">{{$product->tag}}</div>
                                    <a href="shop/product/{{$product->id}}">
                                        <h5>{{$product->name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        @if($product->discount != null)
                                            ${{$product->discount}}
                                            <span>${{$product->price}}</span>
                                        @else
                                            ${{$product->price}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

               {{$products->links()}}
            </div>
        </div>
    </div>
</section>
@endsection
