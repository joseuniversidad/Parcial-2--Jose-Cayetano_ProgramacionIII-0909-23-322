<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<form action="{{route('marcas.update',  $marca->id_marca) }}" id="form-marcas" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-4 text-center bg-white p-4 rounded shadow" style="margin-top: 150px;">
            <label for="descripcion">Nombre</label>
            <input type="text" name="descripcion" class="w3-input w3-border w3-round-xxlarge" placeholder="Descrippcion de la marca" value="{{$marca->descripcion}}" required>
            <br>

            <button type="submit" value="Editar" class="btn btn-primary" style="margin-top:15px;">Editar</button>
        </div>
        <div class="col-md-2"></div>
    </div>
</form>

<script>
    document.getElementById('form-marcas').addEventListener('submit', function(e) {
        e.preventDefault(); 

        Swal.fire({
            icon: 'success',
            title: '¡Actualizado!',
            text: 'Se ha editado correctamente',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
            
                e.target.submit();
            }
        });
    });
</script>
