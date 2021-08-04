<?php

namespace App\Http\Controllers;

use App\Models\rooms;
use App\Models\roomservices;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    public function listRoom(){
        $rooms = rooms::all();
        return view('rooms.listRoom', compact('rooms'));
    
    }
    public function getaddRoom(){
        $services = services::all();
        return view('rooms.addRoom', compact('services'));
    }
    public function postaddRoom(Request $request)
    {
        $model = new rooms();
        // gán gtri cho các thuộc tính của object sử dụng massassign ($fillable trong model)
        $model->fill($request->all());
        // lưu ảnh
        if ($request->hasFile('uploadfile')) {
            $newFileName = uniqid() . '-' . $request->uploadfile->getClientOriginalName();
            $path = $request->uploadfile->storeAs('public/uploads/rooms', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        //service in room
        // $modelRoomServices = new roomservices();
        // $modelRoomServices->fill($request->all());
        $model->save();
        // $modelRoomServices->save();
        return redirect(route('listRoom'));
    }
    public function geteditRoom(Request $request, $id){
        // dump($id);
        $room = rooms::where('id', $id)->get();
        // dump($room);
        return view('rooms.editRoom', compact('room'));
    }

    public function posteditRoom(Request $request,$id)
    {
        $model = rooms::find($id);
        if (!$model) {
            return redirect(route('listRoom'));
        }
        $model->fill($request->all());
        if ($request->hasFile('uploadfile')) {
            $newFileName = uniqid() . '-' . $request->uploadfile->getClientOriginalName();
            $path = $request->uploadfile->storeAs('public/uploads/rooms', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('listRoom'));
    }

    public function deleteRoom(Request $request, $id)
    {
        rooms::where('id', $id)->delete();
        return redirect()->route('listRoom');
    }
}
