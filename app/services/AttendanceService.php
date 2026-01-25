<?php
require_once __DIR__ . '/../models/Attendance.php';

class AttendanceService
{
    private $attendanceModel;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
    }

    public function saveAttendance($classId, $absentStudentIds, $students)
    {
        foreach ($students as $student) {
            $status = in_array($student['id'], $absentStudentIds) ? 'absent' : 'present';
            $this->attendanceModel->save($student['id'], $classId, $status);
        }
    }
}
