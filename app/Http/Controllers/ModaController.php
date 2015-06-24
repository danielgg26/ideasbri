<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\moda;

use Illuminate\Http\Request;

class ModaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$moda = moda::all();
		return view('secciones.indexseccion',['secc'=>'moda','secct'=>'Moda','registros'=>$moda]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create',['secc'=>'moda','secct'=>'Moda']);
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

       $moda = new Moda;
 
        $moda->titulo = $request->input('titulo');
        $moda->resumen  = $request->input('resumen');
        $moda->materiales   = $request->input('materiales');
        $moda->descripcion   = $request->input('descripcion');
        $moda->imagenmate   = $request->input('imagenmatet');
        $moda->imagencomp   = $request->input('imagencollat');
        $moda->imagenfin   = $request->input('imagenindt');
 
        $moda->save();
 
       return redirect('/moda/todos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	 * Show the section moda.
	 *
	 * @return Response
	 */
	public function all()
	{
		$modas = moda::all();
		return view('admin.allmoda',['modas' => $modas]);
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
