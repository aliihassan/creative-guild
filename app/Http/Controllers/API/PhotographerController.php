<?php

namespace App\Http\Controllers\API;

use App\Photographer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Photographer as PhotographerResource;

class PhotographerController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PhotographerResource(Photographer::findOrFail($id));
    }
}
