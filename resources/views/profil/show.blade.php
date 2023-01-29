@extends('layouts.app')
@section('content')

<!-- Main content -->
<section class="content profil">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                    src="{{ asset('img/dist/img/user4-128x128.jpg')}}"
                    alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>

                <p class="text-muted text-center">Etudiant en Master 1</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Sexe</b> <a class="float-right">{{Auth::user()->gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Faculté</b> <a class="float-right">{{Auth::user()->id_fac}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{Auth::user()->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact</b> <a class="float-right">{{Auth::user()->contact}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Filière</b> <a class="float-right">SRA</a>
                  </li>
                </ul>
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modal-xl">
                  Modifier
                </button>
              </div>
            </div>
          </div>
          <!-- /.col -->

          <div class="col">
          <div class="col-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
              <a class="btn btn-primary float-right mr-2 mb-3"  data-toggle="modal" data-target="#modal-xl2"> Ajouter
                    <i class="fas fa-plus-square"></i> 
                  </a>
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Cours</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">DS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">TD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">TP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Examens</a>
                  </li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div>
                      <div class="filter-container p-0 row">
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <h5>cours</h5>
                        </div>
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <h5>cours</h5>
                        </div>
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <h5>cours</h5>
                        </div>
                        <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                          </a>
                          <h5>cours</h5>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                      <div>
                        <div class="filter-container p-0 row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>DS</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>DS</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>DS</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>DS</h5>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                      <div>
                        <div class="filter-container p-0 row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TD</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TD</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TD</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TD</h5>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                      <div>
                        <div class="filter-container p-0 row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TP</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TP</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TP</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>TP</h5>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                      <div>
                        <div class="filter-container p-0 row">
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>Examens</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>Examens</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>Examens</h5>
                          </div>
                          <div class="filtr-item col-sm-3" data-category="3, 4" data-sort="red sample">
                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                              <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                            </a>
                            <h5>Examens</h5>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="modal fade" id="modal-xl">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Modifier infos compte</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @if (session()->has('message'))
                      <div class="alert alert-success" role="alert">
                          {{ session('message') }}
                      </div>
                    @endif
                    <div class="modal-body">
                        <form method="POST" action="{{route('update-profil')}}">
                            @csrf
                            <div class="form-group form-row">
                                <div class="col">
                                    <label for="firstname">Nom</label>
                                    <input type="text" name="firstname" class="form-control" value="{{ auth()->user()->firstname }}" placeholder="Entrer nom">
                                </div>
                                <div class="col">
                                    <label for="lastname">Prénom</label>
                                    <input type="text" name="lastname" class="form-control" value="{{ auth()->user()->lastname }}" placeholder="Entrer prénom">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{ auth()->user()->contact }}" placeholder="Entrer Contact">
                                </div>
                                <div class="col">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email  }}" placeholder="Entrer Email">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="gender">Sexe</label>
                                <select class="form-control" name="gender">
                                <option selected>Sélectionner votre sexe</option>
                                    <option value="Masculin" @if (old('gender') == "Masculin") {{ 'selected' }} @endif>Masculin</option>
                                    <option value="Féminin" @if (old('gender') == "Féminin") {{ 'selected' }} @endif>Féminin</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="id_fac">Faculté</label>
                                <select id="id_fac" class="form-control" name="id_fac">
                                    <option>Choisir votre faculté</option>
                                    <option value="FSM" @if (old('fac_name') == "FSM") {{ 'selected' }} @endif>FSM</option>
                                    <option value="ENIM" @if (old('fac_name') == "ENIM") {{ 'selected' }} @endif>ENIM</option>
                                    <option value="ESPRIM" @if (old('fac_name') == "ESPRIM") {{ 'selected' }} @endif>ESPRIM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Entrer mot de passe">
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </form>   
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>

        


                <div class="modal fade" id="modal-xl2">
                    <div class="modal-dialog modal-xl2">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Ajouter nouveau document</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <div class="card card-primary">
                        <!-- form start -->
                        <form method="POST" action="{{ route('addFichier') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Type sujet</label>
                                <select class="form-control" id="type_fichier" name="type_fichier">
                                  <option>Cours</option>
                                  <option>Devoir</option>
                                  <option>TP</option>
                                  <option>TD</option>
                                  <option>Examen</option>
                                </select>
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Matière</label>
                                  <input type="text" class="form-control" id="matiere" placeholder="Entrez nom de la matière" name="matiere">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Description</label>
                                  <input type="text" class="form-control" id="description" name="description" placeholder="Entrez une description du cours">
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlSelect1">Faculté</label>
                                  <select class="form-control" id="id_fac" name="id_fac">
                                    <option selected>Sélectionner faculté</option>
                                    @foreach($facultes as $faculte)
                                    <option value="{{ $faculte->id }}">{{ $faculte->fac_name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlSelect1">Niveau</label>
                                  <select class="form-control" id="id_fac" name="id_fac">
                                    <option selected>Sélectionner niveau</option>
                                    @foreach($niveau as $niveau)
                                    <option value="{{ $niveau->id }}">{{ $niveau->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Ajouter fichier</label>
                                  <input type="file" class="form-control-file" id="fichiers" name="fichiers">
                                </div>
                            </div>
                            <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
              </div>
              <!-- /.card -->

                        </div>
                        
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->




                      </div><!-- /.container-fluid -->
    </section>
    @stop