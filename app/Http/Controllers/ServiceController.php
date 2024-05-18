<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function addService($id, Request $request){
        Service::create(["serviceName"=>$request->serviceName, "serviceDescription"=>$request->serviceDescription, "servicePrice"=>$request->servicePrice, "categoryID"=>$id]);
        $service = Service::all()->where("categoryID", $id)->toArray();
        return redirect("/service/".$id)->with(['service' => $service, 'catID' => $id]);
    }

    public function deleteService($catID,$id){
        Service::find($id)->delete();
        $service = Service::all()->where("categoryID", $catID)->toArray();
        return redirect("/service/".$catID)->with(['service' => $service, 'catID' => $id]);
    }

    public function edit($catID, $id){
        return view("editService")->with(["catID"=>$catID, "id"=>$id]);
    }

    public function updateService($catID, $id, Request $request){
        $service = Service::find($id);
        $service->serviceName = $request->serviceName;
        $service->serviceDescription = $request->serviceDescription;
        $service->servicePrice = $request->servicePrice;
        $service->save();
        $service = Service::all()->where("categoryID", $catID)->toArray();
        return redirect("/service/".$catID)->with(['service' => $service, 'catID' => $id]);
    }

}
