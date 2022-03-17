<?php
namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;


class ProjectController extends Controller
{
	/**
	*@param
	*@return
	*/
	public function __construct()
	{
		$this->middleware('auth')->except('index','show');
	}

	//El index es la lista de los proyectos
	public function index(){
		return view('projects.index',[

			'projects'=>Project::latest()->paginate()

		]);
	}

	public function show( Project $projects){

		return view('projects.show',[

			'projects' => $projects

		]);
	}

	//Se crea el proyecto
	public function create(){

		return view('projects.create',[

			'projects' => new Project

		]);
	}

	//Procesamiento de un formulario y lo guarda en la BD
	public function store(SaveProjectRequest $request){

		 Project::create( $request->validated());

		 return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
	}


	public function edit(Project $projects)
	{
		return view('projects.edit',[

			'projects' => $projects

		]);
	}

	public function update(Project $projects, SaveProjectRequest $request)
	{
		 $projects->update($request->validated());

		 return redirect()->route('projects.show',$projects)->with('status','El proyecto fue actualizado exitosamente ');

	}

	public function destroy(Project $projects)
	{
		//Project::destroy($projects)
		$projects->delete();

		return redirect()->route('projects.index')->with('status','El proyecto fue eliminado exitosamente');
	}
}