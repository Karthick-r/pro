<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Docs;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app = Project::all();
        return view('projects')->with('app', $app);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $app = Project::all();
        return view('adddocs')->with('app', $app);
    }
    public function listdocs($id)
    {
        $app = Project::find($id);
        return view('listdocs')->with('app', $app);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app = new Project;
        $app->name = $request->name;
        $app->save();
        return redirect('/projects');

    }
    public function docs(Request $request)
    {
        $app = new Docs;
        $app->endpoint = $request->endpoint;
        $app->project_id = $request->project_id;
        $app->method = $request->method;
        $app->description = $request->description;
        $app->explain = $request->explain;


        $app->save();
        return redirect('/projects');

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
