<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__left">
                    <div class="service-details__service">
                        <h3 class="service-details__title">Serviços</h3>
                        <ul class="service-details__service-list list-unstyled">
                            <li class="{{ Route::is('macloud') ? 'active' : '' }}"><a href="{{ route('macloud') }}">MA Cloud<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('gestaodeativos') ? 'active' : '' }}"><a href="{{ route('gestaodeativos') }}">Gestão de Ativos<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('suportetecnico') ? 'active' : '' }}"><a href="{{ route('suportetecnico') }}">Suporte técnico<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('consultoria') ? 'active' : '' }}"><a href="{{ route('consultoria') }}">Consultoria e TI<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('terceirizacao') ? 'active' : '' }}"><a href="{{ route('terceirizacao') }}">Terceirização TI<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('criacaodesites') ? 'active' : '' }}"><a href="{{ route('criacaodesites') }}">Criação de Sites<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('emailcorporativo') ? 'active' : '' }}"><a href="{{ route('emailcorporativo') }}">E-mail Corporativo<span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="{{ Route::is('segurancadedados') ? 'active' : '' }}"><a href="{{ route('segurancadedados') }}">Segurança de dados<span class="fa fa-long-arrow-alt-right"></span></a></li>
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-bg" style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                        </div>
                        <div class="service-details__need-help-icon">
                            <img src="assets/images/icon/service-details-need-help-icon.png" alt="">
                        </div>
                        <h2 class="service-details__need-help-title">Soluções de e-mail profissional <br> para sua empresa</h2>
                        <div class="service-details__need-help-contact">
                            <p>Tem alguma dúvida?</p>
                            <a href="https://wa.me/5542998353547?text=Olá!%20Vim%20pelo%20site%20e%20gostaria%20de%20falar%20com%20um%20atendente." target="_blank"> <span>WhatsApp</span> (42) 9 9835-3547</a>
                        </div>
                    </div>             
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="assets/images/services/service-details-img-1.jpg" alt="E-mail Corporativo">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__content-title">E-mail Corporativo</h3>
                        <p class="service-details__text-1">Um e-mail corporativo oferece mais profissionalismo e credibilidade para sua empresa. Ele permite que você utilize seu próprio domínio, aumentando a confiança dos seus clientes e parceiros comerciais. Nossa solução oferece e-mails seguros e configuráveis de acordo com as necessidades do seu negócio, seja para pequenos empreendedores ou grandes empresas.</p>
                        <p class="service-details__text-2">Você pode criar várias contas para diferentes departamentos, garantindo que todos na sua empresa se comuniquem de forma eficiente e organizada.</p>
                        <p class="service-details__text-3">Com nosso sistema de e-mail corporativo, você terá acesso a recursos avançados, como filtros de spam, capacidade de personalizar suas configurações de e-mail e suporte técnico especializado para garantir que tudo funcione corretamente.</p>
                    </div>
                    <ul class="list-unstyled service-details__points">
                        <li>
                            <div class="service-details__points-icon">
                                <span class="icon-customer-service"></span>
                            </div>
                            <h4 class="service-details__points-title">Suporte dedicado</h4>
                            <p class="service-details__points-text">Oferecemos suporte completo para a configuração e manutenção de seu e-mail corporativo.</p>
                        </li>
                        <li>
                            <div class="service-details__points-icon">
                                <span class="icon-market-analysis"></span>
                            </div>
                            <h4 class="service-details__points-title">Segurança de ponta</h4>
                            <p class="service-details__points-text">Garantimos que seu e-mail seja protegido contra ataques cibernéticos e malwares.</p>
                        </li>
                        <li>
                            <div class="service-details__points-icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h4 class="service-details__points-title">Escalabilidade</h4>
                            <p class="service-details__points-text">Adicione ou remova contas de e-mail facilmente conforme a sua empresa cresce.</p>
                        </li>
                    </ul>
                    <div class="service-details__benefits">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__benefits-img">
                                    <img src="assets/images/services/service-details-benefits-img.jpg" alt="Benefícios do E-mail Corporativo">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service-details__benefits-right">
                                    <h3 class="service-details__benefits-title">Benefícios do E-mail Corporativo</h3>
                                    <p class="service-betails__benefits-text-1">Aumente a credibilidade e a segurança com um e-mail corporativo profissional.</p>
                                    <ul class="list-unstyled service-details__benefits-points">
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="text">
                                                <p>Domínio personalizado para sua empresa.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="text">
                                                <p>Controle completo sobre as configurações de e-mail.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-check"></i>
                                            </div>
                                            <div class="text">
                                                <p>Suporte técnico contínuo para resolver qualquer problema.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-details__faq">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>O que é um e-mail corporativo?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>O e-mail corporativo é uma conta de e-mail com domínio próprio (ex: nome@empresa.com). Ele oferece mais credibilidade e facilita a comunicação profissional da sua empresa.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Quais são os benefícios do e-mail corporativo?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>O e-mail corporativo melhora a imagem da empresa, garante maior segurança nas comunicações e facilita a gestão das contas de e-mail da sua equipe.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Posso adicionar várias contas de e-mail?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Sim, podemos criar quantas contas de e-mail forem necessárias para a sua equipe, garantindo que todos os departamentos tenham suas próprias contas de e-mail.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
