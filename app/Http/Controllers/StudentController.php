<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Traits\ManageCart;
use App\Traits\Student\ManageCourses;
use App\Traits\Student\ManageOrders;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use ManageCart, ManageCourses, ManageOrders;

    public function index() {
        return view('student.index');
    }

    public function orders(Order $order)
    {
        return view('student.orders.index', compact('order'));
    }

}
