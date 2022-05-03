<?php

namespace App\Http\Controllers;

use App\Models\LineasPedido;
use App\Models\LineasVenta;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Venta;
use Symfony\Component\Console\Input\Input;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //$datos = new Venta();
        $input = $request->all();

        $venta = Venta::create(["cedula"=> $input['cedula'], "cliente"=>$input['cliente'] ]);
        
        foreach($input['producto'] as $producto){
            LineasVenta::create(['producto_id'=> $producto,'venta_id'=> $venta->id]);
        }
        return redirect()->route('ventas.create');
        
        /*
        $datosventa = request()->except('_token');
        $datos->cedula = $request->input('cedula');
        $datos->cliente = $request->input('cliente');
        $datos->save();
        $venta_id = $datos->id;
        return redirect()->route('ventas.create');
        /*$lienas_venta  = new LineasVenta();
        
        
        foreach($datosventa as $venta){
             $id_pro = $venta[0];
             $productos  = Producto::findOrfail($id_pro);
             $producto_id = $productos->id;
                     
        }
        */
        

        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
