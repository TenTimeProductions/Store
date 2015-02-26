@extends('dashboard.master')

@section('title')
    <title>{{ $user->name }} | {{$page}} - FM Group</title>
@endsection

@section('header')

@endsection
@section('content')
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3><strong>Membros da Equipa</strong></h3>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-sm btn-icon btn-rounded btn-info"><i class="fa fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-sm btn-icon btn-rounded btn-primary"><i class="fa fa-facebook"></i>
                </button>
                <button type="button" class="btn btn-sm btn-icon btn-rounded btn-danger"><i class="fa fa-google-plus"></i>
                </button>
                <button type="button" class="btn btn-sm btn-icon btn-rounded btn-default"><i class="fa fa-power-off"></i>
                </button>
                <br>
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
                                        <label class="col-sm-3 control-label">Titulo <span class="asterisk">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" data-parsley-minlength="3" class="form-control" required="" data-parsley-id="9874"><ul class="parsley-errors-list" id="parsley-id-9874"></ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">URL</label>
                                        <div class="col-sm-9">
                                            <input type="url" name="url" class="form-control" data-parsley-type="url" required="" data-parsley-id="5682"><ul class="parsley-errors-list" id="parsley-id-5682"></ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Comment <span class="asterisk">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control valid" placeholder="Write your comment... (minimum 30 characters)" data-parsley-minlength="30" required="" data-parsley-id="4645"></textarea><ul class="parsley-errors-list" id="parsley-id-4645"></ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary m-b-10">Submit</button>
                                            <button type="reset" class="btn btn-default m-b-10">Cancel</button>
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