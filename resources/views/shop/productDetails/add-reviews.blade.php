<section class="review-form-one">
    <div class="container">
        <div class="review-form-one__inner">
            <h3 class="review-form-one__title">Add a review</h3>
            <div class="review-form-one__rate-box">
                <p class="review-form-one__rate-text">Rate this product?</p>
                <div class="review-form-one__rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <form action="assets/inc/sendemail.php" class="review-form-one__form contact-form-validated"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="review-form-one__input-box text-message-box">
                            <textarea name="message" placeholder="Write comment"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="review-form-one__input-box">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="review-form-one__input-box">
                            <input type="email" placeholder="Email address" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <button type="submit" class="thm-btn review-form-one__btn">Submit review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>