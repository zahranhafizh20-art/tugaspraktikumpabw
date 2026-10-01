<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Satria Baja pink',
                'major' => 'Sistem Informasi kota cerdas',
                'age' => 20,
                'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => 'Hadu Hiud',
                'major' => 'Sistem Informasi Kota Cerdas',
                'age' => 100,
                'courses' => ['UI/UX Design', 'Manajemen Proyek', 'IoT'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}