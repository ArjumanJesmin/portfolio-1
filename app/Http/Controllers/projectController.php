<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\project;
use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

use function Termwind\render;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectResource::collection(project::with('skill')->get());
         return Inertia::render('Projects/Index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $skills = skill::all();
       return Inertia::render('Projects/create',compact('skills'))->with('message','Project Created successfully.');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' =>['required','image'],
            'name'  =>['required','min:3'],
         'skill_id' =>['required'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->store('projects');

            project::create([
                'skill_id' =>$request->skill_id,
                 'name'    =>$request->name,
                 'image'   =>$image,
             'project_url' =>$request->project_url,
            ]);
            return redirect::route('projects.index')->with('message','Project Created successfully.');
        }
        return Redirect::back();
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
    public function edit(project $project)
    {

    //    dd($project->all());
          $skills = skill::all();
          return Inertia::render('Projects/Edit',compact('project','skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        $image = $project->image;

        $request->validate([
            'name'  =>['required','min:3'],
         'skill_id' =>['required'],
        ]);
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        };
        $project->update([
            'name'        => $request->name,
            'skill_id'    => $request->skill_id,
            'project_url' => $request->project_url,
            'image'       =>$image,
        ]);
        return redirect::route('projects.index')->with('message','Project Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return Redirect::back()->with('message','Project Deleted successfully.');
    }
   
}
