@extends('dashboard.master')

@section('title')
    <title>{{ $user->name }} | {{$page}} - FM Group</title>
@endsection

@section('header')

@endsection
@section('content')
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3><strong>Parilha do vendedor</strong></h3>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <p><strong>Dados do vendedor:</strong></p>
                                <p><strong>Nome:</strong><br/> {{ $user->name }}</p>
                                <p><strong>Link de Partilha:</strong><br/> http://fm-store.com/inv/<strong>{{ $user->username }}</strong></p>
                                <br>
                                <!-- I got these buttons from simplesharebuttons.com -->
                                <div id="share-buttons">
                                    <!-- Facebook -->
                                    <a href="http://www.facebook.com/sharer.php?u=http://fm-store.com/inv/{{ $user->username }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-primary"><i class="fa fa-facebook"></i></button>
                                    </a>
                                    <!-- Twitter -->
                                    <a href="http://twitter.com/share?url=http://fm-store.com/inv/{{ $user->username }}&text=Simple Share Buttons&hashtags=FMGroupStore" target="_blank">
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-info"><i class="fa fa-twitter"></i></button>
                                    </a>
                                    <!-- Google+ -->
                                    <a href="https://plus.google.com/share?url=http://fm-store.com/inv/{{ $user->username }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-danger"><i class="fa fa-google-plus"></i></button>
                                    </a>
                                    <!-- LinkedIn -->
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://fm-store.com/inv/{{ $user->username }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-default"><i class="fa fa-linkedin"></i></button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <p><strong>Avatar:</strong> <img src="{{ $user->avatar }}" alt="" class="img-responsive"/></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p>Escreva o que pretende partilhar</p>
                                <br>
                                <form id="form1" class="form-horizontal" data-parsley-validate="" novalidate="">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Comment <span class="asterisk">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control valid" placeholder="Write your comment... (minimum 30 characters)" data-parsley-minlength="30" required="" data-parsley-id="4645"></textarea><ul class="parsley-errors-list" id="parsley-id-4645"></ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary m-b-10">Partilhar</button>
                                            <button type="reset" class="btn btn-default m-b-10">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center" width="130">Partilha Nº</th>
                            <th style="text-align: center">Nome</th>
                            <th style="text-align: center">Estado</th>
                            <th style="text-align: center" width="30">Referencia</th>
                            <th style="text-align: center" width="150">Nº Encomendas</th>
                            <th style="text-align: center" width="90">Lucro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12</td>
                            <td>Susana Reis</td>
                            <td>Registado</td>
                            <td><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-facebook"></i></button></td>
                            <td>1</td>
                            <td>3,4€</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Luís Reis</td>
                            <td>Pendente</td>
                            <td><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-facebook"></i></button></td>
                            <td>0</td>
                            <td>0 €</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Luís Paixão</td>
                            <td>Visita</td>
                            <td><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-google-plus"></i></button></td>
                            <td>1</td>
                            <td>0€</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Miguel Cerejo</td>
                            <td>Registado</td>
                            <td><button type="button" class="btn btn-sm btn-info"><i class="fa fa-twitter"></i></button></td>
                            <td>13</td>
                            <td>23,4€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection