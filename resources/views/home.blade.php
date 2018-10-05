@include('plantillas.header')

<legend>Productos</legend>

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
      <th>Nombre del producto</th>
      <th>descripcion</th>
      <th>existencias</th>
      <th>Tipo de Producto</th>
    
    </tr>
  </thead>
  <tbody>
      @if(count($productos)>0)
        @foreach($productos->all() as $producto)
      <tr>    
          <td>{{$producto->idproducto}}</td>
        <td>{{$producto->Nombre_producto}}</td>
        <td>{{$producto->Descripcion_producto}}</td>
        <td>{{$producto->existencias}}</td>
        <td>{{$producto->tipo_producto}}</td>
        <td>
         <a href='{{ url("/producto/show/{$producto->idproducto}") }}' class="label label-primary">Leer</a>
          <a href='{{ url("/producto/edit/{$producto->idproducto}") }}' class="label label-success">Modificar</a>
          <a href='{{ url("/producto/delete/{$producto->idproducto}") }}' class="label label-danger">Borrar</a>
        </td>
    
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 

@include('plantillas.footer')