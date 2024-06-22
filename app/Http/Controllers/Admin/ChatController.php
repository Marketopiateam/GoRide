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
        $moduleName = $this->getModelName();
        $pageTitle = "Create ". $moduleName;
        $pageDes = "Here you can create " .$moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        return view('admin.chats.single' , compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName',
        ));

    }
}
