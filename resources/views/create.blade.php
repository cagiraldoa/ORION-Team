<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ORION</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="m-0 vh-100 row justify-content-center allign-items-center">

    <div class="col-auto p-5 text-center col-12 col.sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('add_team') }}" method="POST">
                @csrf
                <div class="container">
                    <a class="btn btn-warning" href="{{ route('home') }}"><---</a>
                    <h1 class="display-4 text-center">TEAM</h1>
                    <hr>
                    @if (session('success'))
                        <li>{{ session('success') }}</li>
                    @endif
                    <br>

                    <div class="form-group">

                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="true">

                    </div>

                    <div class="form-group">

                        <input type="number" class="form-control" name="identification" placeholder="Cedula" required="true">

                    </div>

                    <div class="form-group">

                        <input type="number" class="form-control" name="cell" placeholder="Celular" required="true">

                    </div>

                    <div class="form-group">

                        <select type="text" class="form-control" name="area" placeholder="Area"
                            required="true">
                            <option value="Administacion">Administración</option>
                            <option value="Estrategia">Estrategia</option>
                            <option value="Mecanica">Mecanica</option>
                            <option value="Electronica">Electronica</option>
                            <option value="Aerodinamica">Aerodinamica</option>
                            <option value="Comunicaciones">Comunicaciones</option>
                            <option value="Investigación">Investigación</option>
                            <option value="Producción">Producción</option>
                        </select>

                    </div>

                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg btn-block">
                            Agregar
                        </button>
                        <br>
                        <br>
                        <a href="{{ route('list.index') }}" class="btn btn-primary btn-lg">
                            Ver TEAM
                        </a>
                    </div>
                    <br>
                </div>

            </form>
        </div>
    
</body>

</html>
