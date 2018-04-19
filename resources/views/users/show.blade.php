@extends('layouts.app')

@section('title', $user->name . '的个人中心')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr/>
                        <h4><strong>个人简介</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection