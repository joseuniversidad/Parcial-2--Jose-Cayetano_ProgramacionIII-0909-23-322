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

<form id="form-producto" action="{{ route('productos.update', $producto->id) }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

 <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-4 text-center bg-white p-4 rounded shadow" style="margin-top: 150px;">
    <label for="nombre_producto">Nombre:</label>
    <input type="text" class="w3-input w3-border w3-round-xxlarge" name="nombre_producto" placeholder="Nombre del producto" value="{{$producto->nombre_producto}}" required>
    <br>

    <label for="descripcion_producto">Descripción:</label>
    <input type="text" class="w3-input w3-border w3-round-xxlarge"name="descripcion_producto" placeholder="Descripción del producto"   value="{{$producto->descripcion_producto}}" required>
    <br>

    <label for="precio_producto">Precio Costo:</label>
    <input type="number" class="w3-input w3-border w3-round-xxlarge" name="precio_producto" placeholder="Precio costo" value="{{$producto->precio_producto}}" required>
    <br>

    <label for="precio_venta_producto">Precio Venta:</label>
    <input type="number" class="w3-input w3-border w3-round-xxlarge" name="precio_venta_producto" placeholder="Precio venta" value="{{$producto->precio_venta_producto}}" required>
    <br>

    <label for="fecha_vencimiento_producto">Fecha de Vencimiento:</label>
    <input type="date" class="w3-input w3-border w3-round-xxlarge" name="fecha_vencimiento_producto" value="{{$producto->fecha_vencimiento_producto}}" required>
    <br>

    
    <button type="submit" value="Editar" class="btn btn-primary" style="margin-top:15px;">Editar</button>
    </form>
    </div>
    <div class="col-md-2"></>
</div>

<script>
    document.getElementById('form-producto').addEventListener('submit', function(e) {
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
