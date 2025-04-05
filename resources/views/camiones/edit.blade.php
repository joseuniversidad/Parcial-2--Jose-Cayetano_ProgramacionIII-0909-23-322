<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    label {
        font-weight: bold;
        font-family: Optima;
        font-size: 25px;
    }
</style>
<form id="form-camiones" action="{{ route('camiones.update', $camion->id_camion) }}" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-4 text-center bg-white p-4 rounded shadow" style="margin-top: 150px;">
            <label for="placa">Placa</label>
            <input type="text" name="placa" class="w3-input w3-border w3-round-xxlarge" placeholder="placa del camion" value="{{ $camion->placa }}" required>
            <br>

            <label for="codig_interno">Codigo Interno</label>
            <input type="text" name="codig_interno" class="w3-input w3-border w3-round-xxlarge" placeholder="Codigo Interno" value="{{ $camion->codig_interno }}" required>
            <br>

            <label for="id_transporte">ID de transporte</label>
            <input type="text" name="id_transporte" class="w3-input w3-border w3-round-xxlarge" placeholder="Placa del camion" value="{{ $camion->transportes?->id_transporte }}" required>
            <br>

            <label for="color">Color</label>
            <input type="text" name="color" class="w3-input w3-border w3-round-xxlarge" placeholder="Placa del camion" value="{{ $camion->color }}"required>
            <br>

            <label for="modelo">Modelo</label>
            <input type="date" name="modelo" class="w3-input w3-border w3-round-xxlarge" placeholder="Placa del camion" value="{{ $camion->modelo }}" required>
            <br>

            <label for="capacidad_toneladas">Capacidad de Toneladas</label>
            <input type="text" name="capacidad_toneladas" class="w3-input w3-border w3-round-xxlarge" placeholder="Placa del camion" value="{{ $camion->capacidad_toneladas }}"required>
            <br>

            <label for="id_marca">Id Marca</label>
            <input type="text" name="id_marca" class="w3-input w3-border w3-round-xxlarge" placeholder="Placa del camion" value="{{ $camion->marca?->id_marca}}"required>
            <br>

            <button type="submit" value="Editar" class="btn btn-primary" style="margin-top:15px;">Editar</button>
        </div>
        <div class="col-md-2"></div>
    </div>
</form>

<script>
    document.getElementById('form-camiones').addEventListener('submit', function(e) {
        e.preventDefault(); 

        Swal.fire({
            icon: 'success',
            title: '¡Registro!',
            text: 'Se ha Registrado correctamente',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
            
                e.target.submit();
            }
        });
    });
</script>
