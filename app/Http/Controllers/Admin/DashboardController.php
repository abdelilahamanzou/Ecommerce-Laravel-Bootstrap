<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\OrdersModel;
use Illuminate\Support\Facades\Lang;

class DashboardController extends Controller
{

    public function index()
    {
        $oredersModel = new OrdersModel();
        $ordersByMonth = $oredersModel->getOrdersByMonth();
        return view('admin.dashboard', [
            'page_title_lang' => Lang::get('admin_pages.dashboard'),
            'ordersByMonth' => $ordersByMonth
        ]);
    }

}
