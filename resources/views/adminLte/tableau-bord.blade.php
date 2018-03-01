@extends('adminlte::page')

@section('title', 'Tableau de bord')

@section('content_header')
    <h1>Tableau de bord</h1>
@stop

@section('content')

    @if(!empty($articles))
        <div class="row">
        @foreach($articles as $article)
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-text-width"></i>

                            <h3 class="box-title">{{$article['titre']}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <blockquote>
                                <p>{{$article['message']}}</p>
                                @foreach($users as $user)
                                    @if($user['id'] == $article['user_id'])
                                        <small>Rédigé par <cite title="Source Title"> {{$user['name']}}</cite></small>
                                    @endif
                                @endforeach
                            </blockquote>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
        @endforeach
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
