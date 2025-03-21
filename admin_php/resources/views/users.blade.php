@extends ('layout')

@section('page_title')
  Список пользователей
@endsection

@section('content')
<div class="list-group">
  <ul>
    @foreach ($users as $u)
      <a href="/user_info/{{ $u->login }}" class="list-group-item list-group-item-action" name={{ $u->login }}>{{ $u->fullname }}</a>
    @endforeach
  </ul>
</div>
@endsection
