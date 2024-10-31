<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $categories = Category::count();
        $courses = Course::count();
        $enrollments = Enrollment::count();
        $users_count = DB::table('users')->count();
        $courses_count = DB::table('courses')->count();
        $enrollments_count = DB::table('enrollments')->count();

        return view('admin.dashboard', compact('users', 'categories', 'courses', 'enrollments', 'users_count', 'courses_count', 'enrollments_count'));
}
}
