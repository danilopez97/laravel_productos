@include('plantillas.header')

<legend>Tipo de productos</legend>

<div class="row">
  <div class=col-md-4>
    @if(session('info'))
    <div class="alert alert-success">
      {{ session('info') }}
    </div>
    @endif
  </div>
</div>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Tipo de Producto</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($tipos)>0)
        @foreach($tipos->all() as $tipo)
      <tr>    
          <td>{{$tipo->id_tipo_producto}}</td>
        <td>{{$tipo->descripcion_tipo_producto}}</td>
        
   
        <td>
         <a href='{{ url("/tipo/mostrar/{$tipo->id_tipo_producto}") }}' class="label label-primary">Leer</a>
          <a href='{{ url("/tipo/edit/{$tipo->id_tipo_producto}") }}' class="label label-success">Modificar</a>
          <a href='{{ url("/tipo/delete/{$tipo->id_tipo_producto}") }}' class="label label-danger">Borrar</a>
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')