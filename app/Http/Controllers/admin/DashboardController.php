<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EducationalStaff;
use App\Models\Expense;
use App\Models\OperationalBalance;
use App\Models\Revenue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $key;

    public function __construct()
    {
        $this->key = 'Dashboard';
    }

    public function index()
    {
        session()->flash('menu', 'dashboard');
        session()->flash('title', 'Dashboard');
        $data['user'] = auth()->user();
        return view('admin.dashboard', $data);
        // echo "berhasil login";
    }
}
