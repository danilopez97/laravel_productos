<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Http\Controllers\Controller;
use DB;

class tipoproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tipos = Tipo::all();
        return view('mostrartipo', ['tipos' =>$tipos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('tipo');



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

        $nombre = $request->input('tipo') ;
         
      DB::insert('insert into tipo_producto (descripcion_tipo_producto) values(?) ',[$nombre]);
        return redirect('/tipo')->with('info', 'Tipo de producto agregado');
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

          $tipo=Tipo::where('id_tipo_producto',$id)->first();
        return view('edit_tipos',['tipo'=>$tipo]);
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

         $this->Validate($request, [
            'descripcion_tipo_producto' => 'required'
            
        ]);
        $data = array(
            'descripcion_tipo_producto' => $request->input('descripcion_tipo_producto'),
        
        );
        
        Tipo::where('id_tipo_producto',$id)->update($data);      
        return redirect('/mostrartipo')->with('info', 'Tipo producto actualizado');

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
        Tipo::where('id_tipo_producto', $id)->delete();        
        return redirect('/mostrartipo')->with('info', 'Tipo de producto eliminado');
    }
}
