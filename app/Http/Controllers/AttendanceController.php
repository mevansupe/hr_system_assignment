<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Application\AttendanceService;

class AttendanceController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $attendance_service;

    public function __construct(AttendanceService $service)
    {
        $this->attendance_service = $service;
    }

    public function importFile(Request $request)
    {
        return $this->attendance_service->importFile($request);
    }

    public function getAttendance(Request $request)
    {
        return $this->attendance_service->getAttendance($request);
    }
}
