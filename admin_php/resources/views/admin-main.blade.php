@extends ('layout')

@section('page_title')
  Админ панель
@endsection

@section('content')
  <p>Adminka</p>
  <a href="/newuser_page" class="btn btn-info" role="button">Добавить</a>
  <div class="users">
    <a href="/users" class="btn btn-info" role="button">Все пользователи</a>
    <div class="list-group">
      <a href="/user_info" class="list-group-item list-group-item-action">Cras justo odio</a>
      <a href="/user_info" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
      <a href="/user_info" class="list-group-item list-group-item-action">Morbi leo risus</a>
      <a href="/user_info" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
      <a href="/user_info" class="list-group-item list-group-item-action">Vestibulum at eros</a>
    </div>
  </div>
@endsection