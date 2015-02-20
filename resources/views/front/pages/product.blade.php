@extends('front.master')


@section('title')
    <title>Produtos | FM Group</title>
@endsection

@section('header')
    <style>
        .square{
            height: 20px;
            width: 20px;
            margin: 2px;
            display: inline-block;
            background: gray;
        }
        .details-item {
            background: #eee;
            padding: 10px;
            bottom: 0;
            position: absolute;
            width: 100%;
            text-align: center;
        }
    </style>
@endsection

@section('content')


    <div class="column">
        <div class="ui special cards">
            <div class="card">
                <div class="dimmable image">
                    <div class="ui inverted dimmer">
                        <div class="content">
                            <div class="center">
                                <div class="ui primary button">Ver Detalhes</div>
                                <div class="details-item">
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="http://semantic-ui.com/images/home-avatar.png">
                </div>
                <div class="content">
                    <a class="header">Perfume</a>
                    <div class="meta">
                        <span class="price">15,50 €</span>
                    </div>
                </div>
                <div class="extra content">
                    <i class="shop icon"></i>
                    15,50 €
                    <div class="ui green basic button right floated"><i class="shop icon"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui special cards">
            <div class="card">
                <div class="dimmable image">
                    <div class="ui inverted dimmer">
                        <div class="content">
                            <div class="center">
                                <div class="ui primary button">Ver Detalhes</div>
                                <div class="ui green button"><i class="shop icon"></i></div>
                                <div class="details-item">
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="http://semantic-ui.com/images/home-avatar.png">
                </div>
                <div class="content">
                    <a class="header">Perfume</a>
                    <div class="meta">
                        <span class="price">15,50 €</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui special cards">
            <div class="card">
                <div class="dimmable image">
                    <div class="ui inverted dimmer">
                        <div class="content">
                            <div class="center">
                                <div class="ui primary button">Ver Detalhes</div>
                                <div class="details-item">
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                    <span class="square"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="http://semantic-ui.com/images/home-avatar.png">
                </div>
                <div class="content">
                    <div class="floated left">
                        <a class="header">Perfume</a>
                        <div class="meta">
                            <span class="price">15,50 €</span>
                        </div>
                    </div>
                    <div class="ui green basic button right floated"><i class="shop icon"></i></div>
                </div>
            </div>
        </div>
    </div>

@endsection