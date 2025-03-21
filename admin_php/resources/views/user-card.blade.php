@extends ('layout')

@section('page_title')
  Профиль пользователя
@endsection

@section('content')
  {{-- <a href="/info" class="btn btn-info" role="button">Данные</a> --}}
  @if($user->photo && file_exists(public_path('img/' . $user->photo)))
      <img src="{{ asset('img/' . $user->photo) }}" alt="User  Image" style="max-width: 300px; max-height: 300px;">
  @else
      <p>Изображение не найдено.</p>
  @endif
  <h1>{{ $user->fullname }}</h1>
  <h2>{{ $user->login }}</h2>
  <p>{{ $user->date_of_birth }}</p>
  <p>{{ $user->email }}</p>
  <p>{{ $user->phone }}</p>
  <a href="/update_page/{{ $user->login }}" class="btn btn-info" role="button">Обновить</a>
  <a href="/delete/{{ $user->login }}" class="btn btn-danger" role="button">Удалить</a>
@endsection