<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<form action="{{ url('marcas') }}" id="form-marcas" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-4 text-center bg-white p-4 rounded shadow" style="margin-top: 150px;">
            <label for="descripcion">Nombre</label>
            <input type="text" name="descripcion" class="w3-input w3-border w3-round-xxlarge" placeholder="Descrippcion de la marca" required>
            <br>

            <button type="submit" value="Agregar" class="btn btn-primary" style="margin-top:15px;">Agregar</button>
        </div>
        <div class="col-md-2"></div>
    </div>
</form>

<script>
    document.getElementById('form-marcas').addEventListener('submit', function(e) {
        e.preventDefault(); // Evita que se envíe el formulario directamente

        Swal.fire({
            icon: 'success',
            title: '¡Registrado!',
            text: 'Se ha registrado correctamente',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Envía el formulario manualmente después de aceptar
                e.target.submit();
            }
        });
    });
</script>
