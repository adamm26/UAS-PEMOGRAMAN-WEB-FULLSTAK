<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use App\Models\room_categories;
use Illuminate\Http\Request;

class AdminRooms extends Controller
{
    //
     public function index()
{
    $rooms = rooms::with('category')->get();

    return view('admin.rooms.index', compact('rooms'));
}

    public function view($id){

        $view= rooms::findOrFail($id);

        return view('admin.rooms.view',compact('view'));
    }

    public function showCreateForm(){
        $category=room_categories::all();
        return view('admin.rooms.create',compact('category'));
    }


    public function create(Request $request){

    }
}
