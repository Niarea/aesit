@extends('layouts.app')
@section('content')
        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Prepa 2</h3>
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
                            dont un étudiant en prepa 2 à ESPRIM doit avoir besoin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <a href="{{ URL('sujets/cours') }}"><h3>Cours</h3></a>
                        <p>
                            Vous trouverez ici tous les cours <br> 
                            de prepa 2 classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <a href="{{ URL('sujets/td') }}"><h3>Sujets TD</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets TD<br> 
                            de prepa 2 classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <a href="{{ URL('sujets/tp') }}"><h3>Sujets TP</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets TP<br> 
                            de prepa 2 classés par matière.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <a href="{{ URL('sujets/ds') }}"><h3>Sujets DS</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets DS<br> 
                            de prepa 2 <br> classés par matière.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <a href="{{ URL('sujets/examen') }}"><h3>Examens</h3></a>
                        <p>
                            Vous trouverez ici tous les sujets d'examens <br> 
                            de prepa 2 classés par matière.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

   @stop