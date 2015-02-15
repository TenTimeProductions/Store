@extends('dashboard.master')

@section('content')

    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h2>Perfil <small>aqui pode atualizar as suas definições das suas informações &amp; notificações</small></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="#"  class="form-horizontal" role="form" id="settings">
                    <!-- BEGIN TABS -->
                    <div class="tabbable tabbable-custom form">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#general_settings" data-toggle="tab">Informação</a></li>
                            <li><a href="#email_settings" data-toggle="tab">Notificações</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="space20"></div>
                            <div class="tab-pane active" id="general_settings">
                                <div class="row profile">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-unstyled profile-nav col-md-3">
                                                    <li>
                                                        <img src="/img/avatars/avatar4_big.png" alt="avatar 4"/>
                                                    </li>
                                                </ul>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-12 profile-info">
                                                            <h1>{{ $user->name }}</h1>
                                                            <div class="m-t-10"></div>
                                                            <ul class="list-unstyled list-inline">
                                                                <li class="m-r-20"><i class="fa fa-user p-r-5 c-dark"></i> {{ $user->username }}</li>
                                                                <li class="m-r-20"><i class="fa fa-map-marker p-r-5 c-dark"></i> {{ $user->country }}</li> <!-- TODO change country code to name-->
                                                                <li class="m-r-20"><i class="fa fa-calendar p-r-5 c-purple"></i>  {{ $user->registration_date }}</li>
                                                                <li class="m-r-20"><i class="fa fa-briefcase p-r-5 c-brown"></i>  {{ $user->level }}</li> <!-- TODO add words to the leve of user (client, seller, admin)-->
                                                            </ul>
                                                            <div class="m-t-20"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-9">
                                                    <div class="alert alert-block alert-info fade in width-100p">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h5>Partilhe o seu perfil para ganhar clientes e créditos! <a href="#">Copiar link! (http://fm-store.com/inv/{{ $user->username }})</a></h5>
                                                        <!-- TODO mostrar modal com link do user  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row profile-classic">
                                            <div class="col-md-12">
                                                <div class="panel">
                                                    <div class="panel-title line">
                                                        <div class="caption"><i class="fa fa-user c-gray m-r-10"></i> Informações Básicas</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Primeiro Nome:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="{{ $user->first_name }}"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Último Nome:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="{{ $user->last_name }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Nome de Utilizador:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="{{ $user->username }}"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row profile-classic">
                                            <div class="col-md-12 m-t-20">
                                                <div class="panel">
                                                    <div class="panel-title line">
                                                        <div class="caption"><i class="fa fa-phone c-gray m-r-10"></i> Contactos</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="control-label c-gray col-md-3">Email:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="{{ $user->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label c-gray col-md-3">Telemóvel:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="{{ $user->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row profile-classic">
                                            <div class="col-md-12 m-t-20">
                                                <div class="panel">
                                                    <div class="panel-title line">
                                                        <div class="caption"><i class="fa fa-lock c-gray m-r-10"></i> Segurança</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="control-label c-gray col-md-3">Password:</div>
                                                            <div class="col-md-6">
                                                                <input type="password" class="form-control" id="field-1" value="{{ $user->password }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <button class="btn btn-primary m-r-20">Nova Password</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row profile-classic">
                                            <div class="col-md-12">
                                                <div class="panel">
                                                    <div class="panel-title line">
                                                        <div class="caption"><i class="fa fa-info c-gray m-r-10"></i> Sobre</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="control-label col-md-3 p-t-0">Membro desde:</div>
                                                            <div class="col-md-6">{{ $user->registration_date }}</div> <!-- //TODO change this to a real date-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3 p-t-0">Convidado por:</div>
                                                            <div class="col-md-6"><a href="#">John Pharell</a></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Surname:</div>
                                                            <div class="col-md-6">

                                                                <div class="skin-section">
                                                                    <ul class="list col-md-6">
                                                                        <li class="m-b-20">
                                                                            <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-on">
                                                                                    Masculino
                                                                                </label><input type="radio" name="gender" checked="" data-cacheval="false"></div>
                                                                        </li>
                                                                        <li class="m-b-20">
                                                                            <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">
                                                                                    Feminino
                                                                                </label><input type="radio" name="gender" data-cacheval="true"></div>
                                                                        </li>
                                                                        <li class="m-b-20">
                                                                            <div class="ui-radio"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">
                                                                                    Outro
                                                                                </label><input type="radio" name="gender" data-cacheval="true"></div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Linguagem:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="field-1" value="football, basket"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row profile-classic">
                                            <div class="col-md-12">
                                                <div class="panel">
                                                    <div class="panel-title line">
                                                        <div class="caption"><i class="fa fa-home c-gray m-r-10"></i> Morada</div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Rua:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="address" value="{{ $user->address }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Cidade:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="city" value="{{ $user->city }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">Código Postal:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="zip_code" value="{{ $user->zip_code }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="control-label col-md-3">País:</div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" id="country" value="{{ $user->country }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="align-center">
                                                <button class="btn btn-primary m-r-20">Atualizar</button>
                                                <button type="reset" class="btn btn-default">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="email_settings">
                                <p class="m-t-20">Você irá receber as notificações no email {{ $user->email }} <a href="#"><strong>Mudar o email</strong></a></p>
                                <div class="m-t-10"></div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-md-3"></th>
                                        <th class="col-md-3">
                                            <strong>INSTANTLY</strong><br/>
                                            <span>receive an email directly after update</span>
                                        </th>
                                        <th class="col-md-3"><strong>DAYLY</strong><br/>
                                            <span>receive one email by day with all updates</span>
                                        </th>
                                        <th class="col-md-3"><strong>NO EMAIL</strong><br/>
                                            <span>See updates only when I sign in.</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="4"><strong>MESSAGES</strong></td>
                                    </tr>
                                    <tr>
                                        <td>My contacts</td>
                                        <td>
                                            <input type="radio" name="contacts" value="1" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="contacts" value="2"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="contacts" value="3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Other people</td>
                                        <td>
                                            <input type="radio" name="people" value="1"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="people" value="2" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="people" value="3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Smallads</td>
                                        <td>
                                            <input type="radio" name="smallads" value="1"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="smallads" value="2" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="smallads" value="3" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>News</td>
                                        <td>
                                            <input type="radio" name="news" value="1" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="news" value="2"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="news" value="3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Recommandations</td>
                                        <td>
                                            <input type="radio" name="recommandations" value="1"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="recommandations" value="2"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="recommandations" value="3" checked/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Important Alerts (<a href="#" class="c-blue">SMS</a>)</td>
                                        <td>
                                            <input type="radio" name="alerts" value="1" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="alerts" value="2"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="alerts" value="3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Messages sent by email</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send me a confirmation when I send an email.
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Welcome message</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send a message when someone thanks me for my message.
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><strong>MEMBERS</strong></td>
                                    </tr>
                                    <tr>
                                        <td>New members</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send me a confirmation when I send an email.
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contacts not verified</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send me a message.
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><strong>PICTURES</strong></td>
                                    </tr>
                                    <tr>
                                        <td>New Pictures</td>
                                        <td>
                                            <input type="radio" name="pics" value="option1" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="pics" value="option1"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="pics" value="option1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pictures from friends</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send me an email
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><strong>ANSWERS</strong></td>
                                    </tr>
                                    <tr>
                                        <td>New Answer from users</td>
                                        <td>
                                            <input type="radio" name="answers" value="1" checked/>
                                        </td>
                                        <td>
                                            <input type="radio" name="answers" value="2"/>
                                        </td>
                                        <td>
                                            <input type="radio" name="answers" value="3"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Answer one of my message</td>
                                        <td colspan="3">
                                            <label>
                                                <input type="checkbox" checked>Send me an email when someone answer one of my message.
                                            </label>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="align-center m-t-20">
                                            <button class="btn btn-primary m-r-20">Validate</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END TABS-->
                </form>=
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

@endsection