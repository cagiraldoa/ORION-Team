<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>ORION</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="m-0 vh-100 row justify-content-center allign-items-center">

    <div class="col-auto p-5 text-center col-12 col.sm-10 col-lg-6 mx-auto">
                <a class="btn btn-warning" href="{{ route('home') }}"><---</a>
                <h1 class="display-4 text-center">TEAM</h1>
                <h3 class="display-4 text-center">{cantidad} Miembros</h3>
                <hr>
                <br>
                <nav>


                    <select type="text" class="form-control" name="forma" onchange="location = this.value;">
                    <option>Seleccionar</option>
                    <option value="Todos">Todos</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Mecanica">Mecanica</option>
                    <option value="Electronica">Electronica</option>
                    <option value="Estrategia">Estrategia</option>
                    <option value="Comunicaciones">Comunicaciones</option>
                    <option value="Investigacion">Investigacion</option>
                    <option value="Produccion">Produccion</option>
                    <option value="Aerodinamica">Aerodinamica</option>
                    <option value="Salud">Salud</option>
                </select>



                  </nav>




                  <br>
                  <br>
                  <form action="{{ route('edit_team') }}" method="POST">
                    @csrf
                    @method('PUT')
                <table class="table table-bordered">
                    <thead class="thead-dark">

                        <tr>
                            <th scope="col">Points</th>
                            <th scope="col">Nombre</th>
                        </tr>

                    </thead>

                    <tbody>



                        @foreach ($teams->reverse() as $team)
                            <tr>

                                <input type="hidden" name="idteam[]" value="{{$team->id}}">
                                    <td width="245px" scope="row"><input type="number" name="points[]" value="{{ $team->points }}"></a>

                                    </td>


                                <td><a style="text-decoration: none"
                                    href="{{ route('list.show', $team->id) }}">{{ $team->name }}</td>

                            </tr>

                        @endforeach

                    </tbody>


                </table>
                <button type="submit" class="btn btn-danger btn-block text">Guardar</button>

                    </form>
                <br>
                <br>
                <div class="text-center">
                    <a href="{{ route('create.index') }}" class="btn btn-success btn-lg btn-block">
                        Añadir nuevo miembro
                    </a>
                </div>
                {{-- <div class="d-flex justify-content-center">
                    {!! $teams->links() !!}
                </div> --}}
            </div>
        </div>

    </div>
</body>

</html>
