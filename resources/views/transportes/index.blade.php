@extends ('layout')


@section('content')
<div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Listado de transportes</h1>
            <a href="{{ route('transportes.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Agregar Transporte
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Razon Social</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transportes as $transporte)
                    <tr>
                        <td>{{ $transporte->id_transporte}}</td>
                        <td>{{ $transporte->codigo }}</td>
                        <td>{{ $transporte->nombre}}</td>
                        <td>{{ $transporte->razon_social}}</td>
                        <td>
                            <a href="{{ route('transportes.edit', $transporte->id_transporte) }}" class="btn btn-sm btn-warning me-2">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('transportes.destroy', $transporte->id_transporte) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este transporte?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    <tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $transportes->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection

