<header class="active2">
    <div class="header-area " id="headderscroll">
        <div id="sticky-header " class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <img class="logo-aesit" src="{{asset('img/logo-aesit.jpg')}}" alt="">
                        </div>
                    </div>        
                    <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ URL('/') }}">Accueil</a></li>
                                        <li><a href="#">FSM <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ URL('fsm/licence1') }}">Licence 1</a></li>
                                                <li><a href="{{ URL('fsm/licence2') }}">Licence 2</a></li>
                                                <li><a href="{{ URL('fsm/licence3') }}">Licence 3</a></li>
                                                <li><a href="{{ URL('fsm/master1') }}">Master 1</a></li>
                                                <li><a href="{{ URL('fsm/master2') }}">Master 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ENIM <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ URL('enim/ing1') }}">Ing 1ère Année</a></li>
                                                <li><a href="{{ URL('enim/ing2') }}">Ing 2è Année</a></li>    
                                                <li><a href="{{ URL('enim/master1') }}">Master 1</a></li>
                                                <li><a href="{{ URL('enim/master2') }}">Master 2</a></li>                    
                                            </ul>
                                        </li>
                                        <li><a href="#">ESPRIM <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                            <li><a href="{{ URL('esprim/prepa1') }}">Prepa 1</a></li>
                                                <li><a href="{{ URL('esprim/prepa2') }}">Prepa 2</a></li>
                                                <li><a href="{{ URL('esprim/ing1') }}">Ing 1ère Année</a></li>
                                                <li><a href="{{ URL('esprim/ing2') }}">Ing 2è Année</a></li>
                                                <li><a href="{{ URL('esprim/ing3') }}">Ing 3è Année </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @if(Auth::check())    
                        <div class="ui compact menu float-right">
                            <div class="ui simple dropdown item">
                                <i class="user icon log_chat_area"></i>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                <div class="item"><a  href="{{ URL('profil/show') }}">Profil</a></div>
                                @if(auth()->user()->isAdmin == 'true')
                                    <div class="item"><a  href="{{ URL('dashboard/index') }}">Admin</a></div>
                                @endif
                                <div class="item"><a href="{{ route('deconnectUser') }}">Déconnexion</a></div>
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                            <div class="live_chat_btn">
                                <a class="boxed_btn_orange login popup-with-form" href="#test-form">
                                <span>Intranet</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<form id="test-form" class="white-popup-block mfp-hide" method="POST" action="{{ route('connectUser') }}">
    @csrf
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <h3>Connectez-vous</h3>
                </div>
                <form>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" name="email" placeholder="Entrer email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name="password" placeholder="Entrer mot de passe">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Connexion</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc"><a class="dont-hav-acc" href="#test-form2">Pas encore inscrit?</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide" method="POST" action="{{ route('saveUser') }}">
        @csrf
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <h3>Inscription</h3>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="firstname" placeholder="Entrer nom">
                        </div>
                        <div class="col">
                            <input type="text" name="lastname" placeholder="Entrer prénom">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" name="contact" placeholder="Entrer contact">
                        </div>
                        <div class="col">
                            <input type="email" name="email" placeholder="Entrer email">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-select"  name="gender">
                            <option selected>Sélectionner sexe</option>
                            <option >Masculin</option>
                            <option>Féminin</option>
                        </select>          
                    </div>
                    <div class="form-group">
                        <select class="form-select" name="id_fac">
                            <option selected>Sélectionner faculté</option>
                            <option value="1">FSM</option> 
                            <option value="2">ENIM</option> 
                            <option value="3">ESPRIM</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="password" placeholder="Entrer mot de passe">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="boxed_btn_orange">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <script src="{{ asset('js/contact.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('js/jquery.form.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/mail-script.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>
