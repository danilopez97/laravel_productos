@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/producto/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de Productos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="nombre" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripcion</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="descripcion" id="inputEmail">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">existencias</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="existencias" id="inputEmail">
          </div>
        </div>

  <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Tipo de producto</label>
          <div class="col-lg-10">
            <select name="tipodeproducto" id="tipodeproductoid" class="form-control"> 



              @foreach($categorias as $categoria)
            <option value="{{$categoria['descripcion_tipo_producto']}}">{{$categoria['descripcion_tipo_producto']}} </option>
          @endforeach
            </select>
          </div>
        </div>


       
<!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="tipodeproducto" id="inputEmail">
          </div>
        </div>-->





       

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/home') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')