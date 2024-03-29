@extends('layouts.layout')

@section('title','Авторизация')

@section('content')
    <div class="d-flex d-lg-flex justify-content-center align-items-center login-dark">
        <form method="post">
        	@csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
            	<input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
            	<input class="form-control" type="password" name="password" placeholder="Пароль">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary btn-block" type="submit">Войти</button>
            </div>
            <a class="forgot" href="/register">Регистрация</a></form>
    </div>
@endsection