@extends('layouts.app')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="{{ asset('img/banner/edu_ilastration.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Bienvenue Sur Le Site
                                De L'association Des Etudiants
                                Et Stagiaires Ivoiriens de Tunisie
                                Section Monastir</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="about">
        <div class="container">
        <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="info">
                    <h1>Qui Sommes-Nous ?</h1>
                    <p> 
                        Notre association est dénommée l'Association des Etudiants et Stagiaires Ivoiriens en Tunisie (AESIT).
                    </p>
            
                    <p>
                        Elle rassemble tous les étudiantset stagiaires de nationalité Ivoirienne résidant en Tunisie,
                        sans distintion de sexe, ni d'appartenance religieuse ou tribale. Ceux-ci constituent les
                        membres de l'AESIT. <br>
                        A qualité d'étudiant, toute personnes détentrices d'une attestation prouvant son inscription de 
                        l'année en cours dans un établissement d'enseignement supérieur ou un centre de formation
                        professionnel.
                    </p>
                    <p>
                        L'AESIT est une association à but non lucratif, laique et apolitique. <br>
                        Son fondement apolitique exclus à sa tête tout représentant de structure à caractère politique.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Plateforme Educative</h3>
                        <p>Cette plateforme a été mise en place par l'association des étudiants 
                            et stagiaires ivoiriens en Tunisie dans le but d'aider chaque 
                            étudiants de valider son année universitaire. En effet, vous avec à votre
                        disposition tous les cours, les sujets TD, TP devoirs surveillés (DS) et examens des différentes écoles de 
                    Monastir.</p>
                        <p>De plus, vous pourrez également ajouter des sujets afin de permettre à vos 
                            camarades d'en bénéficier.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>20+</span>
                                    <p> Cours</p>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>7638</span>
                                    <p> TP</p>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <span>230+</span>
                                    <p> TD</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <div class="our_team_member">
        <div class="container">
            <div class="row member2">
                <div class="col-xl-3">
                </div>
                <div class="membre col-xl">
                    <h2>Membres du bureau actuel</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/66999999999.jpg" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Niaré Adama</h3>
                            <p>Développeur</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/2.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Dan Jacky</h3>
                            <p>Mens Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/3.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Luka Luka</h3>
                            <p>Mens Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/4.png" alt="">
                            <div class="social_link">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Rona Dana</h3>
                            <p>Ladies Cut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_team_member_end -->


    
    <!-- form itself end -->

    <script src="{{ asset('js/contact.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('js/jquery.form.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/mail-script.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>

@stop


