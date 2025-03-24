<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Envie-nos uma mensagem</span>
                <div class="section-title-shape">
                    <img
                        src="assets/images/shapes/section-title-shape.png"
                        alt="" />
                </div>
            </div>
            <h2 class="section-title__title">Entre em contato conosco</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form action="{{ url('/lead') }}" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Seu nome" name="name" required />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Seu Email" name="email" required />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Seu telefone" name="phone" required />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Assunto" name="subject" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Descreva mais sobre" required></textarea>
                                </div>
                                <div class="comment-form__btn-box">
                                    <button type="submit" class="thm-btn comment-form__btn">
                                        Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>