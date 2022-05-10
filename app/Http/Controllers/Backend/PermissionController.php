<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:permission-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id', 'DESC')->get();

        return view('backend.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('backend.permissions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
            'title' => 'required',
        ]);

        Permission::create([
            'name' => $request->input('name'),
            'title' => $request->input('title')
        ]);

        return redirect()->route('permissions.index')
            ->with('success', __('alerts.New record has been added'));
    }

    public function show($id)
    {
        $permission = Permission::find($id);

        return view('backend.permissions.show', compact('permission'));
    }

    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('backend.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',

        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->title = $request->input('title');
        $permission->save();

        return redirect()->route('permissions.index')
            ->with('success', 'Permission updated successfully.');
    }

        public function destroy($id)
    {
        Permission::find($id)->delete();

        return redirect()->route('permissions.index')
            ->with('success', __('alerts.Record has been deleted'));
    }
}
