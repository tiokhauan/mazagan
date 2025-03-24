<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="product__sidebar">
                    <div class="shop-search product__sidebar-single">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                    <div class="product__price-ranger product__sidebar-single">
                        <h3 class="product__sidebar-title">Price</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="text" readonly class="min">
                                <span>-</span>
                                <input type="text" readonly class="max">
                                <input type="submit" value="Filter">
                            </div>
                        </div>
                    </div>
                    <div class="shop-category product__sidebar-single">
                        <h3 class="product__sidebar-title">Categories</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Technology</a></li>
                            <li class="active"><a href="#">Software</a></li>
                            <li><a href="#">Innovations</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Showing {{ $products->count() }} products</p>
                                </div>
                                <div class="product__showing-sort">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__all">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__all-single">
                                    <div class="product__all-img">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                                    </div>
                                    <div class="product__all-content">
                                        <div class="product__all-review">
                                            @for($i = 0; $i < 5; $i++)
                                                <i class="fa fa-star"></i>
                                                @endfor
                                        </div>
                                        <h4 class="product__all-title"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                        <p class="product__all-price">R$ {{ number_format($product->price / 1, 2, ',', '.') }}</p>
                                        <div class="product__all-btn-box">
                                            <a href="{{ route('cart.add', $product->id) }}" class="thm-btn product__all-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>