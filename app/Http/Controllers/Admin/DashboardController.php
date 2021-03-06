<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Record;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            'allRejectedEmployees' => $allRejectedEmployees,
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

    public function detailsApprovedEmployee($id)
    {
        $approvedEmployee = Record::where('user_id', $id)->orderBy('id', 'desc')->first();
        if ($approvedEmployee) {
            return response()->json([
                'approvedEmployee' => $approvedEmployee,
            ], 200);
        } else {
            return response()->json([
                'approvedEmployee' => null,
            ], 200);
        }

    }

    public function editemployee($id)
    {
        $employee = Record::where('user_id', $id)->orderBy('id', 'desc')->first();

        return response()->json([
            'employee' => $employee,
        ], 200);

    }

    public function updateemployee(Request $request, $id)
    {
        $this->validate($request, [
            'absents' => 'numeric|integer|nullable',
            'salaries' => 'numeric|integer|nullable',
            'leave' => 'numeric|integer|nullable',
            'working_hour_per_day' => 'numeric|integer|nullable',
        ]);

        $employee = User::find($id);

        $now = Carbon::now();
        $now = $now->format('F Y');
        $flag = 0;
        $lastMonthRecord = '';

        $existingOrNot = Record::where('user_id', '=', $id)->get();

        if ($existingOrNot->count() == 0) {
            $record = new Record();

            $employee->position = $request->position;
            $employee->save();

            $record->user_id = $employee->id;
            $record->user_name = $employee->name;
            $record->month = $now;
            $record->joining_date = $request->joining_date;
            $record->position = $request->position;
            $record->absents = $request->absents;
            $record->salaries = $request->salaries;
            $record->leave = $request->leave;
            $record->working_hour_per_day = $request->working_hour_per_day;
            $record->save();

        } else {
            foreach ($existingOrNot as $row) {
                if ($row->month == $now) {
                    $flag = 1;
                    $lastMonthRecord = $row;
                }
            }
            if ($flag == 1) {
                //$lastMonthRecord = $existingOrNot->where('month', $now)->orderBy('id', 'desc')->first();
                $existingMonth = Record::find($lastMonthRecord->id);

                $employee->position = $request->position;
                $employee->save();

                $existingMonth->joining_date = $request->joining_date;
                $existingMonth->position = $request->position;
                $existingMonth->absents = $request->absents;
                $existingMonth->salaries = $request->salaries;
                $existingMonth->leave = $request->leave;
                $existingMonth->working_hour_per_day = $request->working_hour_per_day;
                $existingMonth->save();
            } else {
                $record = new Record();

                $employee->position = $request->position;
                $employee->save();

                $record->user_id = $employee->id;
                $record->user_name = $employee->name;
                $record->month = $now;
                $record->joining_date = $request->joining_date;
                $record->position = $request->position;
                $record->absents = $request->absents;
                $record->salaries = $request->salaries;
                $record->leave = $request->leave;
                $record->working_hour_per_day = $request->working_hour_per_day;
                $record->save();
            }

        }

    }

    public function ourTeam()
    {
        $getOurTeam = User::where('isapproved', 'approved')->where('role_id', 2)->get();
        return response()->json([
            'getOurTeam' => $getOurTeam,
        ], 200);
    }

    public function getTopFiveEmployees()
    {
        $now = Carbon::now();
        $now = $now->format('F Y');

        $getTopFive = Record::orderBy('working_hour_per_day', 'desc')
            ->orderBy('leave', 'asc')
            ->orderBy('absents', 'asc')
            ->where('month', $now)
            ->take(5)->get();

        return response()->json([
            'getTopFive' => $getTopFive,
        ], 200);
    }
}
