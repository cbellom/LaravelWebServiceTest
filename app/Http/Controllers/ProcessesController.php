<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\ProcessesModel;

class ProcessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $processes = \App\Models\ProcessesModel::get();

        foreach ($processes as $process) {
            $process->entity = explode( ',', $process->entity );
            $process->pointsOfService = explode( ',', $process->pointsOfService );
        }
        return response()->json([
            "processes"=>$processes,
        ],200
        );
    }



     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

