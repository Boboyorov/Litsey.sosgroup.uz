<?php
    
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Administrator;
use Illuminate\Http\Request;

class ForeignController extends Controller
{
    public function index()
    {
        //zoom bormi gapirib tushuntirardim aka bor bosa kerak lekin ishlarib kormaganman telefon qilsam buladimi
        return view('site.foreign', [
            'departments' => Department::orderBy('created_at', 'DESC')->paginate(1),
            'administrators' => Administrator::orderBy('created_at', 'DESC')->paginate(3),
        ]);  
    }
}
