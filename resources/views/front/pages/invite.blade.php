@extends('front.master')

@section('title')
    <title>Convite de {{ $seller->name }} | FM Group</title>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="box">
                    <div class="box-icon">
                        <span class="fa fa-4x fa-html5"></span>
                    </div>
                    <div class="info">
                        <h4 class="text-center">Convite</h4>
                        <p>Convite enviado para (ver convite na tabela) pelo {{ $seller->name }} ({{ $seller->username }}).</p>
                        <p>Com este convite, você poderá fazer as suas compras, sendo mais fácil para o seu distribuidor como para si, sendo que poderá receber as últimas promoções, encomendar o que quiser, e sem ter de falar com o distribuidor.</p>

                        <button class="btn btn-success">Aceitar</button>
                        <button class="btn btn-danger">Recusar convite</button>
                    </div>
                </div>
            </div>
    </div>
@endsection