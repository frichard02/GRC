@extends('adminlte::page')

@section('title', 'Tableau de bord')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')
    <section class="content">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Entrer votre article</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('article') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text"  class="form-control {{ $errors->has('titre') ? 'is-invalid' : '' }}"  name="titre" id="titre" value="{{ old('text') }}">
                            {!! $errors->first('text', '<div class="alert alert-danger">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea rows="10" type="text"  class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}" value="{{ old('message') }}" name="message" id="message">
                        {!! $errors->first('message', '<div class="alert alert-danger">:message</div>') !!}
                        </textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    @if(!empty($sendMessage))
                    <div class="alert alert-success">{{$sendMessage}}</div>
                    @endif
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>

                </form>
            </div>
        </div>
            <h1>Votre article</h1>
            <p>

            @if(!empty($articles))

                @foreach($articles as $article)
                    {{$article['id']}}
                        Atricle : {{$article['titre']}}
                        <br>
                       Contenu : {{$article['message']}}
                        <a class="alert alert-danger" href="{{ route('article/delete', $article['id']) }}">supprimer</a>
                    <br>
                    <br>
                    <br>
                    @endforeach
            @endif
            </p>

        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop