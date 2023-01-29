@extends('layouts.app')
@section('content')

<!-- form itself end-->
        
                <h3>Resistration</h3>


                <div>
                    @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
                
                    <form method="POST" action="{{ route('saveUser') }}">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="text" name="firstname" placeholder="Entrer nom">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" name="lastname" placeholder="Entrer prénom">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected>Sélectionner sexe</option>
                                <option >Masculin</option>
                                <option>Féminin</option>
                            </select>          
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="text" name="contact" placeholder="Entrer contact">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <select class="form-select" name="id_fac" aria-label="Default select example">
                                <option selected>Sélectionner Fac</option>
                                @foreach($facultes as $faculte)
                                <option value="{{ $faculte->id }}">{{ $faculte->fac_name }}</option> 
                                @endforeach
                            </select>          
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="email" name="email" placeholder="Entrer email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name="password" placeholder="Entrer mot de passe">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">S'inscrire</button>
                        </div>
                    </div>
                </form>

                </div>

           
    <!-- form itself end -->

    <script src="{{ asset('js/contact.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('js/jquery.form.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/mail-script.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>

@stop