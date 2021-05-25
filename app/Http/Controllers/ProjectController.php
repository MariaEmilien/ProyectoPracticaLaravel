<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller {
    public function __constrct()
    {
      $this->middleware('auth')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects'=> Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
    
        return view('projects.show', [
            'project' => $project
            ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
            ]);
    }

    public function store(SaveProjectRequest $request)
    {
       /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/

       // función con protección de asignación masiva
            /*$fields = request()->validate([
                'title' => 'required',
                 'url' => 'required',
                'description' => 'required'
            ]);*/
           // return $request->validated();

             Project::create($request->validated());

            return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito' );
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated() );
      /*$project->update([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
      ]);*/
      return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project)
    {
      $project->delete();

      return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}
//use Illuminate\Support\Fcades\Route;