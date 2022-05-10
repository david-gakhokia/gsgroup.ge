<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\StoreServceRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\UpdateServceRequest;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        // return $projects;
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/projects';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Project::create($data);

        return redirect()->route('projects.index')
            ->withSuccessMessage(__('alerts.New record has been added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::translatedIn(app()->getLocale())
            ->findOrFail($id);
        return view('backend.projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::translatedIn(app()->getLocale())
            ->findOrFail($id);


        return view('backend.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/projects';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        Project::findOrFail($id)->update($data);
        return redirect()->route('projects.index')->withSuccessMessage(__('alerts.Record has been updated'));
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect()->route('projects.index')->withSuccessMessage(__('alerts.Record has been deleted'));
    }
}
