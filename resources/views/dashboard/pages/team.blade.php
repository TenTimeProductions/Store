@extends('dashboard.master')

@section('header')
    <style>
        .progress {
            height: 7px;
            background-color: #C3C3C3;
            width: 80%;
            margin: auto;
        }
        .progress-bar{
            box-shadow: none;
        }
        .team-member{
            text-align: center;
            padding: 15px;
        }
        .team-leader{
            background: rgba(189, 189, 189, 0.21);
            box-shadow: 0 0 3px 1px rgb(158, 155, 155);
        }
        .team-member-img{
            text-align: center;
            padding: 0 30px 15px;
        }
        .team-member-name{
            text-align: center;
            font-weight: bold;
            padding: 0 10px 5px;
            color: rgb(113, 113, 113);
        }
        .team-member-points{
            margin: auto;
            text-align: center;
            font-weight: 600;
            margin-top: 5px;
            color: rgb(165, 165, 165);
        }
        .team-member-add{
            text-align: center;
            font-weight: 500;
            padding: 0 10px 5px;
            color: rgb(152, 152, 152);
        }
        .team-member-add-circle{
            background: rgba(169, 169, 169, 0.41);
            border: 1px solid darkgray;
            border-radius: 50%;
            padding: 30px 29px 30px 32px;
            color: rgb(107, 107, 107);
            margin: 25% auto;
            font-size: 18px;
            cursor: pointer;
        }
        /* CSS for table */
        .progress.table-progress{
            height: 12px;
        }
    </style>
@endsection
@section('content')
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3><strong>Membros da Equipa</strong></h3>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-3">
                <div class="team-member team-leader">
                    <div class="team-member-img">
                        <img src="/back/img/avatar.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="team-member-name">
                        Susana Reis
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="team-member-points">
                        270 / 600 (3%)
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="/back/img/avatar.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="team-member-name">
                        Susana Reis
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="team-member-points">
                        270 / 600
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="/back/img/avatar.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="team-member-name">
                        Susana Reis
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="team-member-points">
                        270 / 600
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="/back/img/avatar.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="team-member-name">
                        Susana Reis
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="team-member-points">
                        270 / 600
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="/back/img/avatar.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="team-member-name">
                        Susana Reis
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="team-member-points">
                        270 / 600
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="team-member">
                    <div class="team-member-img">
                       <span class="glyphicon glyphicon-plus team-member-add-circle"></span>
                    </div>
                    <div class="team-member-add">
                        Adicionar novo <br> Membro de Equipa
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nº Vendedor</th>
                            <th>Nome</th>
                            <th width="30%">Progresso</th>
                            <th>Pontos</th>
                            <th>Mês anterior</th>
                            <th>Patamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>724213</td>
                            <td>Susana Reis</td>
                            <td>
                                <div class="progress table-progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>210</td>
                            <td>110</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>724213</td>
                            <td>Susana Reis</td>
                            <td>
                                <div class="progress table-progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                123
                            </td>
                            <td>210</td>
                            <td>110</td>
                            <td>3%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection