<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\hogar;

use Illuminate\Http\Request;

class HogarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hogar = hogar::orderBy('id','desc')->paginate(9);
        return view('secciones.indexseccion', ['secc'=>'hogar','secct'=>'Hogar','registros' => $hogar]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create',['secct'=>'Hogar','secc'=>'hogar']);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
        'titulo' => 'required',
        'resumen' => 'required',
        'materiales' => 'required',
        'descripcion' => 'required',
        'imgmateriales' => 'required',
        'imgcollage' => 'required',
        'imgindividual' => 'required',
    	]);

       $filem = $request->file('imgmateriales');//obtenemos el campo file definido en el formulario
       $nombrem = $filem->getClientOriginalName();//obtenemos el nombre del archivo
       \Storage::disk('local')->put($nombrem,  \File::get($filem));//indicamos que queremos guardar un nuevo archivo en el disco local

       $filec = $request->file('imgcollage');
       $nombrec = $filec->getClientOriginalName();
       \Storage::disk('local')->put($nombrec,  \File::get($filec));

       $filei = $request->file('imgindividual');
       $nombrei = $filei->getClientOriginalName();
       \Storage::disk('local')->put($nombrei,  \File::get($filei));

       $hogar = new Hogar;
 
        $hogar->titulo = $request->input('titulo');
        $hogar->resumen  = $request->input('resumen');
        $hogar->materiales   = $request->input('materiales');
        $hogar->descripcion   = $request->input('descripcion');
        $hogar->imagenmate   = $request->input('imagenmatet');
        $hogar->imagencomp   = $request->input('imagencollat');
        $hogar->imagenfin   = $request->input('imagenindt');
 
        $hogar->save();
 
       return redirect('/hogar/todos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hogar = hogar::find($id);
		return view('secciones.showarticulo',['secc'=>'hogar','secct'=>'Hogar','registros'=>$hogar]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Show the section hogar.
	 *
	 * @return Response
	 */
	public function all()
	{
		$hogars = hogar::all();
		return view('admin.allhogar',['hogars' => $hogars]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
