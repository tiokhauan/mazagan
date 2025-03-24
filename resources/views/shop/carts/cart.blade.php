<section class="page-header">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Shop</li>
            </ul>
            <h2>Cart</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Cart Page-->
<section class="cart-page">
    <div class="container">
        <div class="table-responsive">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="assets/images/shop/cart-page-img-1.jpg" alt="">
                                </div>
                                <h3><a href="product-details.html">Comfy chair</a></h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-1" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td>
                            $10.99
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="far fa-times"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-box">
                                <div class="img-box">
                                    <img src="assets/images/shop/cart-page-img-2.jpg" alt="">
                                </div>
                                <h3><a href="product-details.html">Classic chair</a></h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="product-2" value="1" />
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td>
                            $10.99
                        </td>
                        <td>
                            <div class="cross-icon">
                                <i class="far fa-times"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <form action="#" class="default-form cart-cupon__form">
                    <input type="text" placeholder="Enter coupon code" class="cart-cupon__input">
                    <button class="thm-btn" type="submit">
                        <span>Apply coupon</span>
                    </button>
                </form>
            </div>
            <div class="col-xl-4 col-lg-5">
                <ul class="cart-total list-unstyled">
                    <li>
                        <span>Subtotal</span>
                        <span>$20.98 USD </span>
                    </li>
                    <li>
                        <span>Shipping cost</span>
                        <span>$0.00 USD</span>
                    </li>
                    <li>
                        <span>Total</span>
                        <span class="cart-total-amount">$20.98 USD</span>
                    </li>
                </ul>
                <div class="cart-page__buttons">
                    <div class="cart-page__buttons-1">
                        <a href="#" class="thm-btn">Update</a>
                    </div>
                    <div class="cart-page__buttons-2">
                        <a href="checkout.html" class="thm-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Cart Page-->