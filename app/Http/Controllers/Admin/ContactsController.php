<?php

namespace App\Http\Controllers\Publics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publics\ContactsModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Lang;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;



class ContactsController extends Controller
{

public function render()
{
    $contacts= ContactsModel::paginate(12);
    return view('Controllers.Admin.ContactsControllers',['contacts'=>$contacts])->layout('layouts.app_admin');
}



    

}
