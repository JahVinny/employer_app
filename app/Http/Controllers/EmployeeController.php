<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //This show all existing employees
    function show()
    {
        $employees = Employee::all();

        $html = view('employees_view', compact('employees'))->render();// navigate to show all employees
        return json_encode(['status' => true, 'content' => $html]);
    }

    //This navigates to a form where you can capture new employee
    function add()
    {
        $html = view('employee_add')->render(); //navigate to add new employee view
        return json_encode(['status' => true, 'content' => $html]);
    }

    //This store/saves information of new employee and navigates to view of all employees
    function store(Request $request)
    {
        $record = $request['data'];
        Employee::create($record);

        $employees = Employee::all();// Read employees and return all employees and new employee

        $html = view('employees_view', compact('employees'))->render();
        return json_encode(['status' => true, 'content' => $html]);
    }

    //This deletes an existing employee
    function delete(Request $request)
    {
        $id = $request['employee_id'];

        $employee = Employee::find($id);
        if (empty($employee)) {
            return json_encode(['status' => false, 'error_description' => 'This employee does not exist!']);
        }
        $employee->delete(); //if employee exists this function will delete the employee

        $employees = Employee::all();//Return all employees to show that employee was deleted

        $html = view('employees_view', compact('employees'))->render();
        return json_encode(['status' => true, 'content' => $html]);
    }

    function edit(Request $request)
    {
        $id = $request['employee_id'];

        $employee = Employee::find($id);
        $html = view('employee_update', compact('employee'))->render();
        return json_encode(['status' => true, 'content' => $html]);
    }

    function update(Request $request)
    {
        $record = $request['data'];
        $id = $request['employee_id'];

        Employee::where('id',$id)->update($record);

        $employees = Employee::all();// Read employees and return all employees and new employee
        $html = view('employees_view', compact('employees'))->render();
        return json_encode(['status' => true, 'content' => $html]);
    }

    function contact()
    {
        $html = view('contact_us')->render();
        return json_encode(['status' => true, 'content' => $html]);
    }

    function team()
    {
        $html = view('team')->render();
        return json_encode(['status' => true, 'content' => $html]);
    }
}
