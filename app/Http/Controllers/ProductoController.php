<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductoFormRequest;
use DB;


class ProductoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $productos=DB::table('producto as pr')
			->join('categoria as ca', 'pr.idcategoria', '=', 'ca.idcategoria')
			->select('pr.*', 'ca.nombre as nom_categoria')
			->where('pr.nombre','LIKE','%'.$query.'%')
            ->where ('pr.estado','=','1')
            ->orderBy('pr.idproducto','desc')
            ->paginate(7);
            return view('almacen.producto.index',["productos"=>$productos,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $categorias=DB::table('categoria')->where ('condicion','=','1')
        ->orderBy('nombre','asc')
        ->paginate(7);
		return view('almacen.producto.create',["categorias"=>$categorias]);
    }
    public function store (ProductoFormRequest $request)
    {
        $producto=new Producto;
		$producto->idcategoria=$request->get('idcategoria');
		$producto->nombre=$request->get('nombre');
		$producto->descripcion=$request->get('descripcion');
		$producto->valor=$request->get('valor');
        $producto->estado='1';
        $producto->save();
        return Redirect::to('almacen/producto');

    }
    public function show($id)
    {
        return view("almacen.producto.show",["producto"=>Producto::findOrFail($id)]);
    }
    public function edit($id)
    {
        $categorias=DB::table('categoria')->where ('condicion','=','1')
        ->orderBy('nombre','asc')
        ->paginate(7);
		return view("almacen.producto.edit",["producto"=>Producto::findOrFail($id),"categorias"=>$categorias]);
    }
    public function update(ProductoFormRequest $request,$id)
    {
        $producto=Producto::findOrFail($id);
		$producto->nombre=$request->get('nombre');
		$producto->idcategoria=$request->get('idcategoria');
        $producto->descripcion=$request->get('descripcion');
		$producto->valor=$request->get('valor');
        $producto->update();
        return Redirect::to('almacen/producto');
    }
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->estado='0';
        $producto->update();
        return Redirect::to('almacen/producto');
    }
}
