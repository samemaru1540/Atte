@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<form action="/login" class="login-form" method="post">
  <div class="login-form">
    <div class="login-form__inner">
      <h2 class="login-form__heading" login__heading>
      ログイン</h2>
    </div>


    <div class="login-form__inputs">
      <input type="text" class="login-form__input" name="email" id="email" value=""  placeholder="メールアドレス">
    </div>

    <div class="login-form__inputs">
      <input type="text" class="login-form__input" name="password" id="password" value=""  placeholder="パスワード">
    </div>

    <div class="login-form__inputs">
    <input type="submit" class="login-form__btn" value="ログイン">
    </div>

    <div class="register-form">
      <p class="register">アカウントをお持ちでない方はこちらから</p>
      <a href="/register" class="register__btn">会員登録</a>
    </div>
  </div>
</form>
@endsection