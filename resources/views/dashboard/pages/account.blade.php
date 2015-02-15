@extends('dashboard.master')

@section('content')
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3><strong>Animations</strong> CSS3</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>CSS3 Animations</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <ul>
                                {{ $user->username }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection