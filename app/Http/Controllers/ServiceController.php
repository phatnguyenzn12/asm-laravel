<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function listService(){
        $services = services::all();
        return view('services.listService', compact('services'));
    
    }

    public function getCreateService()
    {
        return view('services.addService');
    }
    public function postCreateService(Request $request){
        $model = new services();
        $model->fill($request->all());
        if ($request->hasFile('uploadfile')) {
            $newFileName = uniqid() . '-' . $request->uploadfile->getClientOriginalName();
            $path = $request->uploadfile->storeAs('public/uploads/services', $newFileName);
            $model->icon = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('listService'));
    }
    
    public function deleteService(Request $request, $id)
    {
        Services::where('id', $id)->delete();
        return redirect()->route('listService');
    }

    public function getEditService(Request $request, $id)
    {
        $services = services::where('id', $id)->get();
        // dump($services);
        return view('services.editService', compact('services'));
    }

    public function postEditService(Request $request,$id)
    {
        $model = services::find($id);
        if (!$model) {
            return redirect(route('listService'));
        }
        $model->fill($request->all());
        if ($request->hasFile('uploadfile')) {
            $newFileName = uniqid() . '-' . $request->uploadfile->getClientOriginalName();
            $path = $request->uploadfile->storeAs('public/uploads/services', $newFileName);
            $model->icon = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('listService'));
    }
}
