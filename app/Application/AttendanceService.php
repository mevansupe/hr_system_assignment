<?php

namespace App\Application;

use App\Imports\AttendanceImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Domain\Attendance;

class AttendanceService
{
    public function importFile(Request $req) {
        $result = $req->file('file')->store('apiDocs');
        Excel::import(new AttendanceImport, $result);
        return ["result" => $result];
    }

    public function getAttendance(Request $req) {
        if ($req->query('employee_id')) {
            return Attendance::get()->where('employee_id', $req->query('employee_id'));
        }
        return \DB::table('attendances')->selectRaw('*, TIMESTAMPDIFF(hour, checkin, checkout) as duration')->get();
    }

}