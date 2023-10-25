<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HolokdResource;
use App\Http\Requests\StoreUpdateHolokdRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Holokds;

class HolokdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holokds = Holokds::all();
        return HolokdResource::collection($holokds);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateHolokdRequest $request)
    {
        $data = $request->validated();

        $holokd = Holokds::create($data);
        return new HolokdResource($holokd);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $holokd = Holokds::findOrFail($id);
        return new HolokdResource($holokd);
    }

    /**
     * Display the specified resource.
     */
    public function listBy(string $id)
    {
        $holokds = Holokds::where('category', $id)->get();
        return HolokdResource::collection($holokds);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $holokd = Holokds::findOrFail($id);
        $data = $request->all();

        $holokd->update($data);

        return new holokdResource($holokd);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
