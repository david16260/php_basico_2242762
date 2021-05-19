<!DOCTYPE html>
<html lang="en">

<head>
  |
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form class="form-horizontal" method="POST" action="{{ url('buscar')  }}">
    @csrf
    <fieldset>

      <!-- Form Name -->
      <legend>Buscador en diferentes motores de busqueda</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="termino">1.) Ingrese el termino a buscar</label>
        <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="placeholder" class="form-control input-md">

        </div>
      </div>

      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="motores">2.)Seleccione el motor de busqueda</label>
        <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Yahoo
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="3">
              Duck Duck go
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="4">
              Baidu
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="5">
              dogpile
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="6">
              yandex
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="7">
              Ask
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="8">
              Naver
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="9">
              Escocia
            </label>
          </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="10">
              Bing
            </label>
          </div>
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
          <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-warning">Buscar</button>
        </div>
      </div>
    </fieldset>
  </form>

</body>

</html>