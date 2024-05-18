<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function addCat(Request $request){
        ServiceCategory::create(["categoryName"=>$request->catName]);
        $serviceCat = ServiceCategory::all()->toArray();
        return redirect("/")->with('serviceCat', $serviceCat);
    }

    public function deleteCat($id){
        ServiceCategory::find($id)->delete();
        $serviceCat = ServiceCategory::all()->toArray();
        return redirect("/")->with('serviceCat', $serviceCat);
    }

    public function edit($id){
        return view("editCat")->with("id", $id);
    }

    public function updateCat($id, Request $request){
        $cat = ServiceCategory::find($id);
        $cat->categoryName = $request->catName;
        $cat->save();
        $serviceCat = ServiceCategory::all()->toArray();
        return redirect("/")->with('serviceCat', $serviceCat);
    }

}
