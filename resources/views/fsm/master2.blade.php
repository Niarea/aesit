@extends('layouts.app')
@section('content')

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Master 2</h3>
        </div>
        <!-- bradcam_area_end -->

    
    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                    <h3>Choisissez votre spécialité</h3>
                        <p>Cette section concerne les étudiants inscrits en<br>
                            2è année de Master à FSM.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <a href="{{ URL('master/mpro') }}"><h3>Master Pro</h3></a>
                        <p>
                            Cette partie concerne les étudiants<br>
                                en master pro.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <a href="{{ URL('master/mrecherche') }}"><h3>Master Recherche</h3></a>
                        <p>
                            Cette partie concerne les étudiants<br>
                                en master recherche.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->
@stop