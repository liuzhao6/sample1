@extends('layouts.default')
@section('title', '主页')
@section('content')
    <div class="jumbotron static-home">
        <h1>hello laravel</h1>
        <p class="lead">
            这是laravel5.5主页
        </p>
        <p>
            从这里起步
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-success btn-lg" role="button">
                现在注册
            </a>
        </p>
    </div>

@stop