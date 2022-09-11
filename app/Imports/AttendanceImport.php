<?php

namespace App\Imports;

use App\Domain\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
            'checkin'  => $row['checkin'],
            'checkout' => $row['checkout'],
            'total_working_hours'    => $row['total_working_hours'],
            'employee_id'    => $row['employee_id'],
            'schedule_id'    => $row['schedule_id'],
        ]);
    }
}
