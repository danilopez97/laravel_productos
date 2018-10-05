@include('plantillas.header')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      
      <form class="form-horizontal" method="POST" action='{{ url("/tipo/show/{$tipo->id_tipo_producto}")}}'>
      {{ csrf_field() }}
      <fieldset>
        <legend>Listar Productos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre Tipo</label>
          <div class="col-lg-10">
            <input disabled="disabled" type="text" value="{{ $tipo->Nombre_producto }}" class="form-control" name="Nombre_producto" id="inputEmail" placeholder="Nombre">
          </div>
        </div>

      
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/home') }}" class="btn btn-default" >Regresar</a>
            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
          </div>
        </div>
      </fieldset>
    </form>

    </div>
  </div>
</div>


@include('plantillas.footer')