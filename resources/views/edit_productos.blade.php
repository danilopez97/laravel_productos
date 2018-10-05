@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/producto/update/{$producto->idproducto}")}}' >
      {{ csrf_field() }}
      <fieldset>
        <legend>editar Productos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $producto->Nombre_producto}}" class="form-control" name="Nombre_producto" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripcion</label>
          <div class="col-lg-10">
            <input type="text" value="{{ $producto->Descripcion_producto }}" class="form-control" name="Descripcion_producto" id="inputEmail" placeholder="Descripcion">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">existencias</label>
          <div class="col-lg-10">
            <input type="text"  value="{{ $producto->existencias }}"  class="form-control" name="existencias" id="inputEmail" placeholder="existencias">
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo producto</label>
          <div class="col-lg-10">
            <input type="text"  value="{{ $producto->tipo_producto }}"  class="form-control" name="tipo_producto" id="inputEmail" placeholder="Tipo producto">
          </div>
        </div>
     



        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/home') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')