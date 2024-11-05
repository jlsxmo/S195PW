<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frituras </title>

    @vite(['resources/js/app.js'])
</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">
    @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif

    

    <form action="/enviar" method="POST">
        @csrf()
    <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="txtFritura">
            <small class="text-danger fst-italic">{{ $errors->first('txtFritura') }}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" name="txtSabor">
            <small class="text-danger fst-italic">{{ $errors->first('txtSabor') }}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control" name="txtPeso">
            <small class="text-danger fst-italic">{{ $errors->first('txtPeso') }}</small>
        </div>

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
    </form>

        
</div>

</body>
</html>