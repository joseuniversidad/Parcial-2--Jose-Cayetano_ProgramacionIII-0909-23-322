@extends ('layout')

@section('content') <!-- Abres la sección 'content' -->
    <div class="container py-4">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Listado de Peliculas</h1>
                
            </div>
    
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Clasificacion</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Actor Principal</th>
                            <th scope="col">Actor Secundario</th>
                            <th scope="col">Fecha</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peliculas as $pelicula)
                            <tr>
                                <td>{{ $pelicula->id }}</td>
                                <td>{{ $pelicula->titulo }}</td>
                                <td>{{ $pelicula-> puntuacion }}</td>
                                <td>{{ $pelicula->genero }}</td>
                                <td>{{ $pelicula->actor_principal }}</td>
                                <td>{{ $pelicula->actor_secundario }}</td>
                                <td>{{ $pelicula->fecha_publicacion}}</td>
                                <td>
                                    <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar esta pelicula?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
                
            </div>
            <div class="d-flex justify-content-center mt-4">
            {{ $peliculas->links('pagination::bootstrap-5') }}

    
    </div>  
    </div>
@endsection <!-- Cierras la sección 'content' -->