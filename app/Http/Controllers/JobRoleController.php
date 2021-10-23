<?php

namespace App\Http\Controllers;

use App\Models\Job_role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class JobRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $job_role = Job_role::orderBy('created_at','DESC')->get();
        $response = [
            'message'=>'List JobRoles by Time',
            'data'=>$job_role
        ];

        return response()->json($response,Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'job_name' => 'required',
            'job_desk' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try{
            $job_role = Job_role::create($request->all());
            $response = [
                'message'=>'new job role added',
                'data' => $job_role
            ];
            return response()->json($response,Response::HTTP_CREATED);
        }catch(QueryException $e){
            return response()->json([
                'message'=> 'Failed'.$e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job_role  $job_role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job_role = Job_role::findOrFail($id);
        $response = [
            'message'=>'Detail JobRole',
            'data'=>$job_role
        ];
        return response()->json($response,Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job_role  $job_role
     * @return \Illuminate\Http\Response
     */
    public function edit(Job_role $job_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job_role  $job_role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $job_role = Job_role::findOrFail($id);
        
        $validator = Validator::make($request->all(),[
            'job_name' => 'required',
            'job_desk' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try{
            $job_role->update($request->all());
            $response = [
                'message'=>'job role updated',
                'data' => $job_role
            ];
            return response()->json($response,Response::HTTP_OK);
        }catch(QueryException $e){
            return response()->json([   
                'message'=> 'Failed'.$e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job_role  $job_role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job_role = Job_role::findOrFail($id);
          
        try{
            $job_role->delete();
            $response = [
                'message'=>'job role deleted'
            ];
            return response()->json($response,Response::HTTP_OK);
        }catch(QueryException $e){
            return response()->json([   
                'message'=> 'Failed'.$e->errorInfo
            ]);
        }
    }
}
