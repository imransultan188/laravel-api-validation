<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveEmployeeRequest;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResources as EmployeeResources;
use App\Models\employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employees = employee::all();
        return EmployeeResources::collection($Employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveEmployeeRequest $request)
    {
        $employee= new employee;
     
        $employee->name= request('name');
        $employee->project= request('project');
        $employee->save();

        // $employee_id= $employee->id;
        // $project_id= $employee->id;

        $project = $employee->project;
        $employee->project->attach($project);
        return new EmployeeResources($employee);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new EmployeeResources($employee);
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
        $data = array(
            'name' => $request->input('name'),
             'project' => $request->input('project'),

        );
        Employee::where('id',$id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        return response('deleted'.' '.$employee->id);
    }
}
