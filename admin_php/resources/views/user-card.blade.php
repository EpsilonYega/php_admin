@extends ('layout')

@section('page_title')
  Профиль пользователя
@endsection

@section('content')
  <p>Но пока что тут пусто</p>
  <a href="/info" class="btn btn-info" role="button">Данные</a>
  <a href="/update_page" class="btn btn-info" role="button">Обновить</a>
  <a href="/delete" class="btn btn-danger" role="button">Удалить</a>
@endsection