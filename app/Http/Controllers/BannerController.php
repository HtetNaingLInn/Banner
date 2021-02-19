<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;


class BannerController extends Controller
{

    public function index()
    {
        $data=Banner::all();
        return view('banner.index',compact('data'));
    }


    public function create()
    {
        return view('banner.create');
    }


    public function store(Request $request)
    {
        $image=$request->image;
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->move(public_path().'/banner/',$imageName);
        Banner::create([
            'image'=>$imageName,
            'from'=>$request->from,
            'to'=>$request->to,
            'link'=>$request->link,
            'status'=>$request->status
        ]);
        return redirect(Route('banner.index'));
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data=Banner::findOrfail($id);
        return view('banner.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {

        $data=Banner::findOrfail($id);

        $image=$request->image;
        if($image){
        $imageName=time().'_'.$image->getClientOriginalName();
        $image->move(public_path().'/banner/',$imageName);
        }
        else{
            $imageName=$data->image;
        }
        $data->update([
            'image'=>$imageName,
            'from'=>$request->from,
            'to'=>$request->to,
            'link'=>$request->link,
            'status'=>$request->status
        ]);
        return redirect(Route('banner.index'));
    }


    public function destroy($id)
    {
        $data=Banner::findOrfail($id);
        $data->delete();
        return redirect(Route('banner.index'));
    }

}
