<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.adminhome');
    }

    public function allEmployees()
    {
        $allEmployees = User::where('isapproved', 'approved')->where('role_id', 2)->get();
        return response()->json([
            'allEmployees' => $allEmployees,
        ], 200);
    }
    public function allPendingEmployees()
    {
        $allPendingEmployees = User::where('isapproved', 'pending')->where('role_id', 2)->get();
        return response()->json([
            'allPendingEmployees' => $allPendingEmployees,
        ], 200);
    }
    public function allRejectedEmployees()
    {
        $allRejectedEmployees = User::where('isapproved', 'reject')->where('role_id', 2)->get();
        return response()->json([
            'allPendingEmployees' => $allRejectedEmployees,
        ], 200);
    }

    public function approve($id)
    {
        $employee = User::find($id);
        $employee->isapproved = "approved";
        $employee->save();
    }
    public function reject($id)
    {
        $employee = User::find($id);
        $employee->isapproved = "reject";
        $employee->save();
    }

    public function deleteRejectedEmployee($id)
    {
        User::find($id)->delete();
    }

}
