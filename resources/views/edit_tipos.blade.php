@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/tipo/update/{$tipo->id_tipo_producto}")}}'>
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar tipo de  Productos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text"  value="{{ $tipo->descripcion_tipo }}"  class="form-control" name="descripcion_tipo_producto" id="inputEmail" placeholder="Nombre">
          </div>
        </div>




        
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrartipo') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>


@include('plantillas.footer')