<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->id) {
            return view("theme.controlepanel.create");
        }
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkRequest $request)
    {
        $data = $request->validated();
        //1. get the image from the requeste
        $image = $request->iamge;
        //2. change the image name
        $newImageName = time() . "-" . $image->getClientOriginalName();
        //3. move the image to my project folder (storage>app>public)
        $image->storeAs('work', $newImageName, 'public');
        //4. save new name image to database
        $data['iamge'] = $newImageName;
        Work::create($data);
        return back()->with('WorkCreateStatus', 'created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        if (Auth::user()->id) {
            return view("theme.controlepanel.edit", compact('work'));
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        $data = $request->validated();
        if ($request->hasFile('iamge')) {
            Storage::delete("public/work/$work->iamge");
            $image = $request->iamge;
            $newImageName = time() . '-' . $image;
            $image->storeAs('work', $newImageName, 'public');
            $data['iamge'] = $newImageName;
        }
        $work->update($data);
        return back()->with('WorkUpdateStatus', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        if (Auth::user()->id) {
            Storage::delete("public/work/$work->iamge");
            $work->delete();
            return back()->with('workDeleteStatus', 'Your work has been Deleted successfully');
        }
        abort(403);
    }

    // }
    public function myWork()
    {
        $work = Work::cursorPaginate(4);
        return view('theme.controlepanel.dashboard', compact('work'));
    }
}