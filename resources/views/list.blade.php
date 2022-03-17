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
                </select>
                  
         
                    
                  </nav>
                 



                  <br>
                  <br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        @foreach ($teams as $team)
                        <tr>
                            <th scope="col">Points</th>
                            <th scope="col">Nombre</th>
                        </tr>
                        @break
                        @endforeach
                    </thead>
                    <tbody>

                        @foreach ($teams->reverse() as $team)
                            <tr>
                               <form action="{{ route('edit_team') }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <td width="245px" scope="row"><input type="number" name="points" value="{{ $team->points }}"></a>
                                    <button name="id" value="{{$team->id}}" type="submit" class="btn btn-success text-right">✓</button>
                                    </td>
                                </form>
                                
                                <td><a style="text-decoration: none"
                                    href="{{ route('list.show', $team->id) }}">{{ $team->name }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>

                </table>
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
