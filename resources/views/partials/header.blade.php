<header class="main-header main-header-two clearfix">
    <div class="main-header__top">
        <div class="main-header__top-inner clearfix">
            <div class="main-header__top-left">
                <ul class="list-unstyled main-header__top-address">
                    <li>
                        <div class="icon">
                            <span class="icon-pin"></span>
                        </div>
                        <div class="text">
                            <p>R. Rio Grande do Sul, 1985 - Órfãs, Ponta Grossa - PR, 84015-020</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="text">
                            <p><a href="mailto:contato@mazaganinfo.com.br">contato@mazaganinfo.com.br</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-header__top-right">
                <div class="main-header__top-right-content">
                    <div class="pt-2">
                        <a href="https://wa.me/5542998353547?text=Olá!%20Vim%20pelo%20site%20e%20gostaria%20de%20falar%20com%20um%20atendente." target="_blank"><i class="fab fa-whatsapp ms-2"></i></a>
                        <a href="#"><i class="fab fa-instagram ms-2"></i></a>
                        <a href="#"><i class="fab fa-facebook ms-2"></i></a>
                        <a href="#"><i class="fab fa-youtube ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-two clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="main-menu__left main-menu__left--two">
                <div class="main-menu__logo">
                    <a href="/">
                        <img class="logo-dark" src="{{ asset('assets/images/logo-mazagan.png') }}" alt="">
                        <img class="logo-light" src="{{ asset('assets/images/logo-mazagan.png') }}" alt="">
                    </a>
                </div>
                <div class="main-menu__main-menu-box main-menu__main-menu-box--two">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown {{ Request::is('/') ? 'current' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class="dropdown {{ Request::is('sobre-nos') ? 'current' : '' }}">
                            <a href="/sobre-nos">Sobre nós</a>
                        </li>
                        <li class="dropdown {{ Request::is('macloud') ? 'current' : '' }}">
                            <a href="/macloud">Serviços</a>
                        </li>
                        <li class="dropdown {{ Request::is('contato') ? 'current' : '' }}">
                            <a href="/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-menu__right">
                <div class="main-menu__search-call">
                    <div class="main-menu__call">
                        <div class="main-menu__call-number">
                            <p>Tem Alguma pergunta?</p>
                            <h5><a href="https://api.whatsapp.com/send/?phone=5542998353547&text&type=phone_number&app_absent=0" target="_blank">+55 (42) 9 9835-3547</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset('assets/images/logo-mazagan.png') }}" width="155" alt=""></a>
            </div>
            <div>
                <ul class="main-menu__list">
                    <li class="dropdown {{ Request::is('/') ? 'current' : '' }}">
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown {{ Request::is('sobre-nos') ? 'current' : '' }}">
                        <a href="/sobre-nos">Sobre nós</a>
                    </li>
                    <li class="dropdown {{ Request::is('macloud') ? 'current' : '' }}">
                        <a href="/macloud">Serviços</a>
                    </li>
                    <li class="dropdown {{ Request::is('contato') ? 'current' : '' }}">
                        <a href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:contato@mazaganinfo.com.br">contato@mazaganinfo.com.br</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+5542998353547">+55 (42) 9 9835-3547</a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
            </div>
        </div>
    </div>
</header>