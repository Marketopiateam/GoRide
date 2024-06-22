<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\room;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()  {

    }
    public function single($id)  {
        return view('admin.chats.single' , compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName',
            'roles'
        ));

    }
}
