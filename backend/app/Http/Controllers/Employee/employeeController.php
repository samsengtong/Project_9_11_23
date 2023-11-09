<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class employeeController extends Controller
{
    function index(){
        $employees = Employee::all();
        return response()->json($employees);

    }
}
