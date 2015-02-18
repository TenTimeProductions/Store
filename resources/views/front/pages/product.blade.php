@extends('front.master')


@section('header')
    <style>
        .fm-color{
            border: 2px solid #8D0130;
        }
        .item-shop{
            border: 1px solid #8d0130;
            color: #585858;
            min-height: 300px;
        }
        .item-footer{
            width: 100%;
            border-top: 1px solid gray;
            box-shadow: 0 0 1px gray;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="item-shop">

                    <div class="item-footer">
                        <button class="button button-small button-plain button-border">
                            <i class="fa fa-reply"></i>
                        </button>
                        <button class="button button-small button-plain button-borderless">
                            <i class="fa fa-tag"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection