<?php

namespace App\Http\Controllers;

use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class LocationController extends Controller
{
    public function provinces($id = null)
    {
        $data = LocationProvince::where('region_code',$id)->orderBy('name','ASC')->get();
        return DefaultResource::collection($data);
    }

    public function municipalities($id = null)
    {
        $data = LocationMunicipality::where('province_code',$id)->orderBy('name','ASC')->get();
        return DefaultResource::collection($data);
    }
}
