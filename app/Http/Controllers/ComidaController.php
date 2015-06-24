<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\comida;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Factory;

class ComidaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$comida = comida::all();
		$comida = comida::orderBy('id','desc')->paginate(9);
        return view('secciones.indexseccion', ['secc'=>'comida','secct'=>'Comida','registros' => $comida]);
        //return view('secciones.indexseccion',compact('comida'));
		//return view('secciones.indexcomida');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create',['secc'=>'comida','secct'=>'Comida']);
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

       $comida = new Comida;
 
        $comida->titulo = $request->input('titulo');
        $comida->resumen  = $request->input('resumen');
        $comida->materiales   = $request->input('materiales');
        $comida->descripcion   = $request->input('descripcion');
        $comida->imagenmate   = $request->input('imagenmatet');
        $comida->imagencomp   = $request->input('imagencollat');
        $comida->imagenfin   = $request->input('imagenindt');
 
        $comida->save();
 
       return redirect('/comida/todos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comida = comida::find($id);

        return View('secciones.showarticulo', ['secct'=>'Comida','registros' => $comida ]);
        //return $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comidas = comida::find($id);

        return View('admin.editcomida', [ 'comidas' => $comidas ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$filem = $request->file('imgmateriales');//obtenemos el campo file definido en el formulario
       //$nombrem = $filem->getClientOriginalName();//obtenemos el nombre del archivo
       \Storage::disk('local')->put($request->input('imagenmate'),  \File::get($request->file('imgmateriales')));
       \Storage::disk('local')->put($request->input('imagencomp'),  \File::get($request->file('imgcollage')));
       \Storage::disk('local')->put($request->input('imagenfin'),  \File::get($request->file('imgindividual')));

       //$filec = $request->file('imgcollage');
       //$nombrec = $filec->getClientOriginalName();
       //\Storage::disk('local')->put($nombrec,  \File::get($filec));

       //$filei = $request->file('imgindividual');
       //$nombrei = $filei->getClientOriginalName();
       //\Storage::disk('local')->put($nombrei,  \File::get($filei));

		$comida = comida::find($id);

		$comida->titulo = $request->input('titulo');
        $comida->resumen  = $request->input('resumen');
        $comida->materiales   = $request->input('materiales');
        $comida->descripcion   = $request->input('descripcion');
        $comida->imagenmate   = $request->input('imagenmate');
        $comida->imagencomp   = $request->input('imagencomp');
        $comida->imagenfin   = $request->input('imagenfin');
 
        $comida->save();
 
       return redirect('/comida/todos');

	}

	/**
	 * Show the section comida.
	 *
	 * @return Response
	 */
	public function all()
	{
		//$comidas = comida::paginate(9)->all();
		$comida = comida::orderBy('id','asc')->paginate(9);
		return view('admin.allcomida',['secct'=>'Comida','secc'=>'comida','comidas'=>$comida]);
 
        //return view('admin.allcomida', ['comidas' => $comidas]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comida = comida::find($id);
		\Storage::disk('local')->delete([$comida->imagenmate, $comida->imagencomp, $comida->imagenfin]);
		comida::destroy($id);
		return redirect('/comida/todos');
	}

}
