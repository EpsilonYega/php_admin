@extends ('layout')

@section('page_title')
  Новый пользователь
@endsection

@section('content')
<form action="/update/{{ $user->login }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="inputFullname">ФИО пользователя</label>
    <input type="text" class="form-control" id="inputFullname" aria-describedby="inputFullname" placeholder="ФИО" name="inputFullname" value={{ $user->fullname }}>
    <small id="inputFullnameSmall" class="form-text text-muted">С пробелами и заглавными буквами.</small>
  </div>
  <div class="form-group">
    <label for="inputDOB">Дата рождения</label>
    <input type="text" class="form-control" id="inputDOB" aria-describedby="inputDOB" placeholder="Дата" name="inputDOB" value={{ $user->date_of_birth }}>
    <small id="inputDOBSmall" class="form-text text-muted">Введите дату по примеру "01/01/2001" .</small>
  </div>
  <div class="form-group">
    <label for="inputTel">Номер телефона</label>
    <input type="tel" class="form-control" id="inputTel" aria-describedby="inputTel" placeholder="Номер" name="inputTel" value={{ $user->phone }}>
    <small id="inputTelSmall" class="form-text text-muted">Введите номер начиная с "+7..." .</small>
  </div>
  <div class="form-group">
    <label for="inputEmail">"Эл. почта"</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail" placeholder="Эл. почта" name="inputEmail" value={{ $user->email }}>
    <small id="inputEmailSmall" class="form-text text-muted">Введите почту в виде example@domain.subdomain .</small>
  </div>
  <div class="form-group">
    <label for="inputLogin">Введите новый логин пользователя</label>
    <input type="text" class="form-control" id="inputLogin" aria-describedby="inputLogin" placeholder="Логин" name="inputLogin" value={{ $user->login }}>
    <small id="inputLoginSmall" class="form-text text-muted">Что угодно если не занято.</small>
  </div>
  <div class="form-group">
    <label for="inputPassword">Введите пароль пользователя</label>
    <input type="password" class="form-control" id="inputPassword" aria-describedby="inputPassword" placeholder="Пароль" name="inputPassword" value={{ $user->password }}>
    <small id="inputPasswordSmall" class="form-text text-muted">500 internal server error.</small>
  </div>
  <div>
    <div class="mb-4 d-flex justify-content-center">
        <img id="selectedImage" src="{{ asset('img/'.$user->photo) }}" 
        alt="Не удалось загрузить изображения" style="width: 300px;" />
    </div>
    <div class="d-flex justify-content-center">
      <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
        <label class="form-label text-white m-1" for="customFile1">Выбрать файл</label>
        <input type="file" class="form-control d-none" id="customFile1" name="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
      </div>
    
      <img id="selectedImage" src="" alt="Загруженное изображение" class="img-fluid mt-3 d-none" />
    
      <script>
          function displaySelectedImage(event, imageId) {
              const file = event.target.files[0];
              const imageElement = document.getElementById(imageId);
              
              if (file) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      imageElement.src = e.target.result; 
                      imageElement.classList.remove('d-none'); 
                  }
                  reader.readAsDataURL(file); 
              }
          }
      </script>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection