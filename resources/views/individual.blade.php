<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>ORION</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-12 col.sm-10 col-lg-8 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <a class="btn btn-warning" href="{{ route('home') }}">
                    <--- </a>
                        <h1 class="display-4 text-center">MIEMBRO {{$team->id}}</h1>
                        <hr>
                        <br>
                        <form action="{{ route('edit_member', $team->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Area</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td><input type="text" name="name" value="{{ $team->name }}"></td>
                                        <td><input type="number" name="identification" value="{{ $team->identification }}"></td>
                                        <td><input type="number" name="cell" value="{{ $team->cell }}"></td>
                                        <td><input type="text" name="email" value="{{ $team->email }}"></td>
                                        <td><input type="text" name="area" value="{{ $team->area }}"></td>
                                    </tr>




                        </tbody>
                        </table>
                        <div class="col-12 col.sm-10 col-lg-3 mx-auto">
                        <button type="submit" class="btn btn-success btn-lg">Editar</button>
                        </div>
                        </form>
                        <br>
                        <div class="col-12 col.sm-10 col-lg-3 mx-auto">
                            <form action="{{ route('delete_team', $team->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg">Borrar</button>

                            </form>




                            <a href="{{ route('list.index', 'Todos') }}" class="btn btn-primary btn-lg float-right">
                                Volver
                            </a>


                        </div>
            </div>
        </div>

    </div>
</body>

</html>
