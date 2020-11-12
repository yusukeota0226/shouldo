@extends('layouts.app')

@section('content')
<div class="signinPage">
    <div class="container">
        <h2 class="title">shouldoにログイン</h2>
        <div class="text-center m-3">or</div>
        <div class="text-center">
            <p class="accountPage_link"<a href="{{ route('register')}}">アカウントを作成</p>
        </div>
        <form class="new_user" id="new_user" action="{{ route('login')}}" accept-charset="UTF-8" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                
            </div>
        </form>
    </div>
</div>