@extends('adminlte::page')

@section('title', 'Tableau de bord')

@section('content_header')
    <h1>Formulaire de test laravel</h1>
@stop

@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Entrer vos coordonnées</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ url('form-test') }}" enctype="multipart/form-data">>
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="adresse">Votre address</label>
                        <input type="text"  class="form-control {{ $errors->has('adress') ? 'is-invalid' : '' }}"  name="adress" id="adress" placeholder="4 rue ..." value="{{ old('adress') }}">
                        {!! $errors->first('adress', '<div class="alert alert-danger">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Numero de téléphone</label>
                        <input type="tel"  class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}" value="{{ old('tel') }}" name="tel" id="tel" placeholder="067512...">
                        {!! $errors->first('tel', '<div class="alert alert-danger">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <label for="image">Votre image profil</label>
                        <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image"  value="{{ old('image') }}">
                        {!! $errors->first('image', '<div class="alert alert-danger">:message</div>') !!}
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop