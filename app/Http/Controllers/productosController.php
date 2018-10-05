<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoP;
use App\Http\Controllers\Controller;
use DB;
use App\Tipo;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $productos = TipoP::all();
        return view('home', ['productos' =>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=Tipo::all();
         return view('producto',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         /* $this->Validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'existencias' => 'required',
            'tipodeproducto' => 'required'
        ]);

        $es = new TipoP();
        $es->Nombre_producto= $request->input('nombre');
        $es->Descripcion_producto=$request->input('descripcion');
        $es->existencias=$request->input('existencias');
        $es->tipo_producto=$request->input('tipodeproducto');
        $es->save();
        return redirect('/producto')->with('info', 'producto agregado');*/

        $nombre = $request->input('nombre') ;
         $descripcion = $request->input('descripcion') ;
          $existencias = $request->input('existencias') ;
           $tipo = $request->input('tipodeproducto') ;
      DB::insert('insert into producto (Nombre_producto,Descripcion_producto,existencias,tipo_producto) values(?,?,?,?) ',[$nombre,$descripcion,$existencias,$tipo ]);
        return redirect('/home')->with('info', 'producto agregado');
    //  echo '<a href = "/insert">Click Here</a> to go back.';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
           $producto=TipoP::where('idproducto',$id)->first();
        return view('mostrarunproducto',['producto'=>$producto]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

         /*$producto = TipoP::find($id);
        return view('edit_productos', ['producto' =>$producto ]);*/

       $producto=TipoP::where('idproducto',$id)->first();
        return view('edit_productos',['producto'=>$producto]);




        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       /* $nuevoNombre=$request->input('Nombre_producto');
        $ndescripcion=$request->input('Descripcion_producto');
        $nexitencias=$request->input('existencias');
        $ntipoproductoe=$request->input('tipo_producto');

        $produc=TipoP::find($id);
        $produc->Nombre_producto=$nuevoNombre;
        $produc->Descripcion_producto=$ndescripcion;
        $produc->existencias=$nexitencias;
        $produc->tipo_producto=$ntipoproductoe;
        $produc->save();
        return view('/producto');*/



      $this->Validate($request, [
            'Nombre_producto' => 'required',
            'Descripcion_producto' => 'required',
            'existencias' => 'required',
            'tipo_producto' => 'required'
        ]);
        $data = array(
            'Nombre_producto' => $request->input('Nombre_producto'),
            'Descripcion_producto' => $request->input('Descripcion_producto'),
            'existencias' => $request->input('existencias'),
             'tipo_producto' => $request->input('tipo_producto')
        );
        
        TipoP::where('idproducto',$id)->update($data);      
        return redirect('/home')->with('info', 'producto actualizado');


       
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //

         TipoP::where('idproducto', $id)->delete();        
        return redirect('/home')->with('info', 'producto eliminado');
    }
}
