@extends ('layout')

@section('page_title')
  Админ панель
@endsection

@section('content')
  <div class="col-md-8 offset-md-2">
    <p>Админ панель</p>
    <a href="/newuser_page" class="btn btn-info" role="button">Добавить</a>
    <a href="/users" class="btn btn-info" role="button">Все пользователи</a>
  </div>
@endsection