@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3>Ajout de contact</h3>
        <hr>

        <div class="row" style="padding: 1em;">
            <div class="col-sm-12">
                <form action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nom de l'Agence</label>
                                <input type="text" class="form-control" placeholder="ex. kôkôty agency" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Ville / Commune</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Selectionnez une commune ...</option>
                                    <option value="">Yopougon</option>
                                    <option value="">Abobo</option>
                                    <option value="">Marcory</option>
                                    <option value="">Atte-Coube</option>
                                    <option value="">Plateau</option>
                                    <option value="">Koumassi</option>
                                    <option value="">Port-Bouet</option>
                                    <option value="">Treichville</option>
                                    <option value="">Adjame</option>
                                    <option value="">Cocody</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Numero de l'Agence</label>
                                <input type="text" class="form-control" placeholder="ex. 49 07 07 07" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email de l'Agence</label>
                                <input type="text" class="form-control" placeholder="ex. exemple@gmail.com" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="" id="" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Logo de l'Agence</label>
                                <input type="file" class="btn btn-default btn-block" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><br><br>
                                <button role="button" type="submit" class="btn btn-md btn-block btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </div>
    </div>
@endsection