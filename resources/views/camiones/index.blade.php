@extends ('layout')

@section('content') <!-- Abres la sección 'content' -->
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Listado de Camiones</h1>
        <a href="{{ route('camiones.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Agregar Camiones
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Codigo Interno</th>
                    <th scope="col">ID Transporte</th>
                    <th scope="col">Color</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Capacidad Toneladas</th>
                    <th scope="col">ID Marca</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($camiones as $camion)
                    <tr>
                        <td>{{ $camion->id_camion }}</td>
                        <td>{{ $camion->placa}}</td>
                        <td>{{ $camion->codig_interno}}</td>
                        <td>{{ $camion->transportes?->id_transporte}}</td> <!-- Asumiendo que tienes una relación definida -->
                        <td>{{ $camion->color}}</td>
                        <td>{{ $camion->modelo }}</td>
                        <td>{{ $camion->capacidad_toneladas }}</td> 
                        <td>{{ $camion->marca?->id_marca}}</td> 
                        <td>
                            <a href="{{ route('camiones.edit', $camion->id_camion) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('camiones.destroy', $camion->id_camion) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este camión?')">
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
        {{ $camiones->links('pagination::bootstrap-5')

        }}
    </div>      
</div>
@endsection <!-- Cierras la sección 'content' -->   