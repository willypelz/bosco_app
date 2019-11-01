<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function gallery()
    {
        //return "hello";
        return view('admin.event');
    }

    public function hello(){
        return "hello";
    }

    public function uploadGallery()
    {
        if ($this->request->hasfile('image')) {


                request()->validate([
                    'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);

                $image = $this->request->file('image');
                $image_array = count($image);
                for($i=0; $i < $image_array; $i++)
                {
                    $extension = $image[$i] ->getClientOriginalExtension();
                    $new_name = rand(123456789,99999999).".".$extension;
                    $upload_path = 'gallery/';
                    $image[$i]->move($upload_path,$new_name);
                    ;

                    /*Insert your data*/
                    $image_save = new Event();
                    $image_save->image = $new_name;
                    $image_save->save();
                    /*Insert your data*/
                }

        }
        return back()->with('message', 'Successfully Save Your Image file.');
    }

    public function list(){
        $image = Event::orderBy('id', 'DESC')->paginate(10);
        return view('admin.allImage',compact('image'));
    }

    public function deleteEvent($id){
        Event ::where ('id', $id)->delete();
        return back();
    }

}
