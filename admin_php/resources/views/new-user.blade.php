@extends ('layout')

@section('page_title')
  Новый пользователь
@endsection

@section('content')
<form action="/create_user" method="POST">
  @csrf
  <div class="form-group">
    <label for="inputFullname">ФИО пользователя</label>
    <input type="text" class="form-control" id="inputFullname" aria-describedby="inputFullname" placeholder="ФИО" name="inputFullname">
    <small id="inputFullnameSmall" class="form-text text-muted">С пробелами и заглавными буквами.</small>
  </div>
  <div class="form-group">
    <label for="inputDOB">Дата рождения</label>
    <input type="text" class="form-control" id="inputDOB" aria-describedby="inputDOB" placeholder="Дата" name="inputDOB">
    <small id="inputDOBSmall" class="form-text text-muted">Введите дату по примеру "01/01/2001" .</small>
  </div>
  <div class="form-group">
    <label for="inputTel">Номер телефона</label>
    <input type="tel" class="form-control" id="inputTel" aria-describedby="inputTel" placeholder="Номер" name="inputTel">
    <small id="inputTelSmall" class="form-text text-muted">Введите номер начиная с "+7..." .</small>
  </div>
  <div class="form-group">
    <label for="inputEmail">"Эл. почта"</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail" placeholder="Эл. почта" name="inputEmail">
    <small id="inputEmailSmall" class="form-text text-muted">Введите почту в виде example@domain.subdomain .</small>
  </div>
  <div class="form-group">
    <label for="inputLogin">Введите логин пользователя</label>
    <input type="text" class="form-control" id="inputLogin" aria-describedby="inputLogin" placeholder="Логин" name="inputLogin">
    <small id="inputLoginSmall" class="form-text text-muted">Что угодно если не занято.</small>
  </div>
  <div class="form-group">
    <label for="inputPassword">Введите пароль пользователя</label>
    <input type="password" class="form-control" id="inputPassword" aria-describedby="inputPassword" placeholder="Пароль" name="inputPassword">
    <small id="inputPasswordSmall" class="form-text text-muted">500 internal server error.</small>
  </div>
  <p>Возможно дальнейшее прикрепление фото.</p>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection