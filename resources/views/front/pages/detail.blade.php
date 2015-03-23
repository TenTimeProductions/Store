@extends('front.master')

@section('header')
    <style>
        .column-addon{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .margin-top{
            margin-top:30px;
        }
        .img-product-detail{
            text-align: center;
        }
        .ui.top.right.attached.label{
            border: none;
            background: transparent;
        }
        .title-product-detail{
            font-weight: 700;
        }
        .product-description b{
            color: rgb(147, 147, 147);
            font-weight: 500;
            font-size: 16px;
        }


        .title-product-detail {
            color: rgb(10, 77, 109);
            display: block;
            font-size: 26px;
            margin: 0 0 12px;
            padding: 0;
            text-decoration: none;
            font-weight: 400 !important;
        }
        .price-details{
            margin-bottom: 12px;
        }
        .money-details-client{
            color: rgb(85, 85, 85);
            display: inline-block;
            font-size: 20px;
            font-weight: 400;
            margin-right: 20px;
        }

        .money-details-seller{
            color: rgb(146, 146, 146);
            display: inline-block;
            font-size: 14px;
            font-style: normal;
            font-weight: 300;
        }
        .product-availability {
            color: rgb(146, 146, 146);
            display: block;
            font-size: 13px;
            font-style: normal;
            font-weight: 300;
            margin: 0 0 12px;
            padding: 0;
        }
        .product-availability span {
            height: 25px;
            display: block;
        }












        .modifiers {
            border-top: 1px solid #cfcfcf;
            max-height: 9999px;
            margin: 15px 0 0;
        }
        .modifiers:last-of-type {
            border-bottom: 1px solid #cfcfcf;
        }
        .modifiers.closed>div:first-of-type {
            cursor: pointer;
            -webkit-transition: all 0.25s ease;
            -moz-transition: all 0.25s ease;
            -ms-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
            color: #cfcfcf;
        }
        .modifiers.closed>div:first-of-type:hover {
            background-color: #fff;
            color: #929292;
        }
        .modifiers.disabled label.text {
            opacity: 0.3;
        }
        .modifiers.disabled input {
            opacity: 0.5;
        }
        .modifiers.disabled input:focus {
            border-color: #cfcfcf;
        }
        .modifiers.disabled .increase:hover, .modifiers.disabled .decrease:hover {
            border: 1px solid #cfcfcf;
        }
        .modifiers.disabled .increase:hover .h, .modifiers.disabled .increase:hover .v, .modifiers.disabled .decrease:hover .h, .modifiers.disabled .decrease:hover .v {
            background-color: #cfcfcf;
        }
        .modifiers>div {
            height: 60px;
            padding: 0 10px;
            line-height: 60px;
            border-bottom: 1px solid #cfcfcf;
        }
        .modifiers>div:last-of-type {
            border-bottom: 0;
        }
        .modifiers label.text {
            display: block;
            height: 60px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 0.16em;
            line-height: 60px;
            text-transform: uppercase;
            color: #797979;
        }
        .modifiers label.text span {
            display: inline-block;
            margin-left: 10px;
            font-family: "museo-sans", "Museo Sans", sans-serif;
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 0.04em;
            text-transform: none;
            color: #929292;
        }
        .modifiers input {
            padding: 5px;
            font-size: 13px;
            text-align: left;
        }
        .modifiers select {
            padding: 5px 10px;
            padding-right: 35px;
            font-size: 13px;
            background-position: right 10px top 13px;
            background-size: 10px;
            background-color: white;
        }
        .modifiers .colors .color {
            display: inline-block;
        }
        .modifiers .colors .color.last-of-type label {
            margin-right: 0;
        }
        .modifiers .colors .color label {
            vertical-align: -5px;
            position: relative;
            width: 25px;
            height: 25px;
            margin: 0 3px;
            cursor: pointer;
        }
        .modifiers .colors .color input[type="radio"]:checked ~ label {
            box-shadow: 0 0 0 3px #f7f7f7, 0 0 0 4px #cfcfcf;
        }
        .modifiers .quantity input {
            width: 40px;
            text-align: center;
        }

        .modifiers .soft-product-selector input[type="radio"]:checked ~ label.text {
            color: #797979;
        }
        .modifiers .soft-product-selector input[type="radio"]:checked ~ label.text:hover {
            color: #797979;
        }
        .modifiers .soft-product-selector input[type="radio"]:checked ~ label.radio {
            box-shadow: inset 0 0 0 2px white;
        }





        .colors span, .colors label {
            display: inline-block;
            position: relative;
            width: 15px;
            height: 15px;
            border-radius: 100%;
            border-width: 1px;
            border-style: solid;
            border-color: transparent;
            margin: 2px;
            -webkit-transition: all 0.25s ease;
            -moz-transition: all 0.25s ease;
            -ms-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }
        .colors span:hover, .colors label:hover {
            opacity: 0.7;
        }
        .colors .top {
            display: block;
            margin: 0;
            position: absolute;
            bottom: 50%;
            left: 0;
            width: 100%;
            height: 50%;
            border-radius: 100px 100px 0 0;
        }
        .colors .bottom {
            display: block;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 50%;
            border-radius: 0 0 100px 100px;
        }
        .colors .blue, .colors .nautilus-blue {
            background: #0a4d6d;
            border-color: #0a4d6d;
        }
        .colors .white, .colors .ivory {
            background: #efefe6;
            border-color: #D7D7CF;
        }
        .colors .white:hover, .colors .ivory:hover {
            opacity: 0.5;
        }
        .colors .green, .colors .olive-107 {
            background: #707c3c;
            border-color: #707c3c;
        }
        .colors .orange, .colors .total-orange {
            background: #ed7b20;
            border-color: #ed7b20;
        }
        .colors .chrome {
            background: #cfcfcf;
            border-color: #cfcfcf;
        }
        .colors .ash-fox .top {
            background-color: #9f2d20;
        }
        .colors .ash-fox .bottom {
            background-color: #7a6855;
        }
        .colors .headley-grange .top {
            background-color: #5c462b;
        }
        .colors .headley-grange .bottom {
            background-color: #693f23;
        }
        .colors .nautilus-capt .top {
            background-color: #0a4d6d;
        }
        .colors .nautilus-capt .bottom {
            background-color: #005f86;
        }
        .colors .woodsman .top {
            background-color: #693f23;
        }
        .colors .woodsman .bottom {
            background-color: #ed7b20;
        }
        .colors .black {
            background-color: #231f20;
        }
        .colors .ice-blue {
            background-color: #3f97cb;
        }
        .colors .charcoal {
            background-color: #555;
        }
        .colors .movember .top {
            background-color: #003763;
        }
        .colors .movember .bottom {
            background-color: #f0613c;
        }
        .colors .teton-green .top {
            background-color: #00ad5d;
        }
        .colors .teton-green .bottom {
            background-color: #ff8339;
        }
        .colors .exum-yellow .top {
            background-color: #e0e520;
        }
        .colors .exum-yellow .bottom {
            background-color: #77cdbd;
        }
        .colors .meru-blue .top {
            background-color: #230e65;
        }
        .colors .meru-blue .bottom {
            background-color: #e0e520;
        }
        .colors .summit-red .top {
            background-color: #b52f13;
        }
        .colors .summit-red .bottom {
            background-color: #1fc0dc;
        }

        input[type="radio"] {
            position: absolute;
            left: -9999999px;
            display: inline-block;
        }
        .float-right {
            float: right;
        }
        .float-left {
            float: left;
        }



    </style>
@endsection

@section('content')
        <div class="row margin-top">
            <div class="ui three column grid">
                <div class="seven wide column column-addon">
                    <div class="ui top right attached label rating detail" data-position="bottom center" data-content="Feedback dos utilizadores que usaram o produto">
                        <div class="ui large star rating" data-rating="1" data-max-rating="5">
                            <i class="icon active"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                            <i class="icon"></i>
                        </div>
                    </div>
                    <div class="img-product-detail">
                        <img src="{{$product->img_fm}}" alt=""/>
                    </div>
                </div>
                <div class="two wide column column-addon"></div>
                <div class="seven wide column column-addon">
                    <h2 class="title-product-detail">{{$product->nome_fm}}</h2>
                    <div class="ui flowing popup">
                        <div class="ui two column divided equal height center aligned grid">
                            <div class="column">
                                <img src="{{$product->img_marca}}" alt="" class="ui small image"/>
                            </div>
                            <div class="column">
                                <b class="ui header">{{$product->equivalencia}}</b>
                                <p>Utilizadores comparam o cheiro este produto.</p>
                                <p><b>{{$product->preco_oficial_marca}} €</b> preço médio noutros estabelecimentos </p>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="row price-details">
                            <span class="money-details-client">{{$product->preco_cliente}} €</span>

                            <span class="money-details-seller">{{$product->preco_vendedor}} €</span>
                        </div>
                        <div class="row">
                            <p class="product-availability">
                                <span>
                                    - Portes grátis para encomendas acima de 20€
                                </span>
                                <div class="product-description">
                                    <b>Descrição</b><br/>
                                    {{$product->descricao}}
                                </div>
                            </p>
                        </div>
                        <div class="row">
                            <section class="modifiers one-time ">
                                <div class="color-picker clear" data-modifier="color">
                                    <div class="float-right colors">
                                        <div class="color">
                                            <input id="The Truman Set_Total Orange" name="The Truman Set_color-picker" type="radio" value="Total Orange">
                                            <label for="The Truman Set_Total Orange" itemprop="color" class="total-orange">
                                                <div class="top"></div>
                                                <div class="bottom"></div>
                                            </label>
                                        </div>
                                        <div class="color">
                                            <input id="The Truman Set_Nautilus Blue" name="The Truman Set_color-picker" type="radio" value="Nautilus Blue">
                                            <label for="The Truman Set_Nautilus Blue" itemprop="color" class="nautilus-blue">
                                                <div class="top"></div>
                                                <div class="bottom"></div>
                                            </label>
                                        </div>
                                        <div class="color">
                                            <input id="The Truman Set_Ivory" name="The Truman Set_color-picker" type="radio" value="Ivory">
                                            <label for="The Truman Set_Ivory" itemprop="color" class="ivory">
                                                <div class="top"></div>
                                                <div class="bottom"></div>
                                            </label>
                                        </div>
                                        <div class="color">
                                            <input id="The Truman Set_Olive 107" name="The Truman Set_color-picker" type="radio" value="Olive 107">
                                            <label for="The Truman Set_Olive 107" itemprop="color" class="olive-107">
                                                <div class="top"></div>
                                                <div class="bottom"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <label class="text float-left">
                                        Color
                                    </label>
                                </div>


                                <div class="quantity clear" data-modifier="quantity" style="display: block">
                                    <label class="text float-left">Quantidade</label>
                                    <div class="float-right" style="">
                                        <div class="ui selection dropdown">
                                            <input name="gender" type="hidden">
                                            <div class="default text">Quantidade</div>
                                            <i class="dropdown icon"></i>
                                            <div class="menu">
                                                <div class="item" data-value="1">1</div>
                                                <div class="item" data-value="2">2</div>
                                                <div class="item" data-value="3">3</div>
                                                <div class="item" data-value="4">4</div>
                                                <div class="item" data-value="5">5</div>
                                                <div class="item" data-value="6">6</div>
                                                <div class="item" data-value="7">7</div>
                                                <div class="item" data-value="8">8</div>
                                                <div class="item" data-value="9">9</div>
                                                <div class="item" data-value="10">10</div>
                                                <div class="item" data-value="11">11</div>
                                                <div class="item" data-value="12">12</div>
                                                <div class="item" data-value="13">13</div>
                                                <div class="item" data-value="14">14</div>
                                                <div class="item" data-value="15">15</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="quantity clear" data-modifier="quantity" style="display: block">
                                    <label class="text float-left">Embalagem</label>
                                    <div class="float-right">
                                        <div class="ui selection dropdown">
                                            <input name="gender" type="hidden">
                                            <div class="default text">Embalagem</div>
                                            <i class="dropdown icon"></i>
                                            <div class="menu">
                                                <div class="item" data-value="0">30 ml</div>
                                                <div class="item" data-value="1">80 ml</div>
                                                <div class="item" data-value="2">100 ml</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row">
                            <div class="ui green basic button right"><i class="shop icon"></i> Adicionar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('details')
    <div style="height: 200px; width: 100%"></div>
@endsection

@section('suggestion')
    <div class="ui grid four cards">
        <div class="card">
            <div class="image dimmable">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Ver detalhes</div>
                        </div>
                    </div>
                </div>
                <img src="{{$product->img_fm}}">
            </div>
            <div class="content">
                <div class="header">{{$product->nome_fm}}</div>
                <div class="meta">
                    <a class="group">{{$product->preco_cliente}}</a>
                </div>
                <div class="description">
                    <div data-rating="4" class="ui star rating"><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="image dimmable">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Ver detalhes</div>
                        </div>
                    </div>
                </div>
                <img src="{{$product->img_fm}}">
            </div>
            <div class="content">
                <div class="header">{{$product->nome_fm}}</div>
                <div class="meta">
                    <a class="group">{{$product->preco_cliente}}</a>
                </div>
                <div class="description">
                    <div data-rating="4" class="ui star rating"><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="image dimmable">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Ver detalhes</div>
                        </div>
                    </div>
                </div>
                <img src="{{$product->img_fm}}">
            </div>
            <div class="content">
                <div class="header">{{$product->nome_fm}}</div>
                <div class="meta">
                    <a class="group">{{$product->preco_cliente}}</a>
                </div>
                <div class="description">
                    <div data-rating="4" class="ui star rating"><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="image dimmable">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Ver detalhes</div>
                        </div>
                    </div>
                </div>
                <img src="{{$product->img_fm}}">
            </div>
            <div class="content">
                <div class="header">{{$product->nome_fm}}</div>
                <div class="meta">
                    <a class="group">{{$product->preco_cliente}}</a>
                </div>
                <div class="description">
                    <div data-rating="4" class="ui star rating"><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i><i class="icon active"></i></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
        });
    </script>
@endsection
@section('footer')
    <script>
        $('.title-product-detail, .rating.detail').popup();
        $('.ui.dropdown').dropdown();
        $('.star.rating').rating();
        $('.card .dimmer').dimmer({on: 'hover'});
    </script>
@endsection