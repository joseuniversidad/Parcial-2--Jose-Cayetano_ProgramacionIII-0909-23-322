@extends('layout')

@section('content') <!-- Abres la sección 'content' -->
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Listado de Marcas</h1>
        <a href="{{ route('marcas.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Agregar Marcas
        </a>
    </div>

    <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th]>
                    <th scope="col">Descripción</th>
                    <th scope="col">ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($marcas as $marca)
                    <tr>
                        <td>{{ $marca->id_marca}}</td>
                        <td>{{ $marca->descripcion }}</td>
                        <td>
                            <a href="{{ route('marcas.edit', $marca->id_marca) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('marcas.destroy', $marca->id_marca) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar esta marca?')">
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
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $marcas->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection <!-- Cierras la sección 'content' -->
