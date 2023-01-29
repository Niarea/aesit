@extends('layouts.app')
@section('content')

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Licence 3</h3>
        </div>
        <!-- bradcam_area_end -->

    
    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                    <h3>Faites votre choix de sujets</h3>
                        <p>Vous trouverez ici toutes les ressources <br>
                            dont un étudiant en 2è année licence à FSM doit avoir besoin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="{{ URL('sujets/cours') }}"><h3>Cours</h3></a>
                        <p>
                        Vous trouverez ici tous les cours <br> de la licence 3 <br>
                            classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="fa fa-file-excel-o"></i>
                        </div>
                        <a href="{{ URL('sujets/td') }}"><h3>Sujets TD</h3></a>
                        <p>
                        Vous trouverez ici tous les sujets TD<br> de la licence 3 <br>
                            classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="fa fa-file-word-o"></i>
                        </div>
                        <a href="{{ URL('sujets/tp') }}"><h3>Sujets TP</h3></a>
                        <p>
                        Vous trouverez ici tous les sujets TP<br> de la licence 3 <br>
                            classés par matière.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <a href="{{ URL('sujets/ds') }}"><h3>Sujets DS</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets DS<br> de la licence 3 <br>
                            classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="fa fa-check"></i>
                        </div>
                        <a href="{{ URL('sujets/examen') }}"><h3>Examens</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets d'examens de la licence 3 <br>
                            classés par matière.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

   @stop