<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $serviceCat = ServiceCategory::all()->toArray();
        return view("home")->with('serviceCat', $serviceCat);
    }

    public function service($id){
        $service = Service::all()->where("categoryID", $id)->toArray();
        return view("service")->with(['service' => $service, 'catID' => $id]);
    }

}
