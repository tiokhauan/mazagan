<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="product-details__img">
                    <!-- Imagem do produto -->
                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" />
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="product-details__quantity">
                    <h3 class="product-details__quantity-title">Quantity</h3>
                    <div class="quantity-box">
                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                        <input type="number" id="1" value="1" />
                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                    </div>
                </div>

                <div class="product-details__buttons">
                    <div class="product-details__buttons-1">
                        <!-- Adicionar à lista de desejos (isso pode ser uma funcionalidade adicional) -->
                        <a href="{{ route('wishlist.add', $product->id) }}" class="thm-btn">Add to wishlist</a>
                    </div>

                    <div class="product-details__buttons-2">
                        <!-- Adicionar ao carrinho -->
                        <a href="{{ route('cart.add', $product->id) }}" class="thm-btn">Add to cart</a>
                    </div>
                </div>
                <div class="product-details__social">
                    <div class="title">
                        <h3>Share with friends</h3>
                    </div>
                    <div class="product-details__social-link">
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-facebook"></span></a>
                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
