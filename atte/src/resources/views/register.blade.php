@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<form action="/register" class="register-form" method="post">
  <div class="register-form">
    <div class="register-form__inner">
      <h2 class="register-form__heading" register__heading>
      会員登録</h2>
    </div>


    <div class="register-form__inputs">
      <input type="text" class="register-form__input" name="name" id="name" value="名前">
    </div>

    <div class="register-form__inputs">
      <input type="text" class="register-form__input" name="email" id="email" value="メールアドレス">
    </div>

    <div class="register-form__inputs">
      <input type="text" class="register-form__input" name="password" id="password" value="パスワード">
    </div>

    <div class="register-form__inputs">
      <input type="text" class="register-form__input" name="confirmation" id="confirmation" value="確認用パスワード">
    </div>
    
    <div class="register-form__inputs">
      <input type="submit" class="register-form__btn" value="会員登録">
    </div>

    <div class="login-form">
      <p class="login">アカウントをお持ちの方はこちらから</p>
      <a href="/login" class="login__btn">ログイン</a>
    </div>
  </div>
</form>
@endsection