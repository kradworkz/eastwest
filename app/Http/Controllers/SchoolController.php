<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class SchoolController extends Controller
{
    public function index()
    {
        if($request->search){

            $data = DefaultResoruce::collection(
                School::query()
                ->when($request->keyword, function ($query, $keyword) {
                    $query->where('name', 'LIKE', "%{$keyword}%");
                })
                ->orderBy('created_at','DESC')
                ->paginate($request->count)
                ->withQueryString()
            );

            return $data;
        }else{
            return inertia('Schools/Index');
        }
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            $code = $this->allotment();
            $data = School::create($request->all());
            return $data;
        });

        return back()->with([
            'message' => 'School added successfully. Thanks',
            'data' => new DefaultResource($q),
            'type' => 'bxs-check-circle'
        ]); 
    }
}
