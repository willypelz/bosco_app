<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    //
    public function index()
    {
        Alert::success('Success Title', 'Success Message');
        $category = Category::paginate(5);
        return view('admin.category',compact('category'));
    }


//    public function alert(){
//        Alert::success('Success Title', 'Success Message');
//
//
//    }
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        $category = new Category();
        $category->title = $this->request['title'];
        $category->created_at = $this->time;
        $check = Category::where ('title',  $this->request['title']);
        if($check->count() < 1) {
            $category->save();

            if ($category) {

                return redirect()->back();
            } else {
                return back()->withToastSuccess('Category not created');
            }
        }else {
            return back()->withToastError('Category already exist');
        }
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->title = $this->request['title'];
        $category->updated_at = $this->time;
        $category->save();

        if($category) {
            return back()->with('success', 'Category updated');
        }else{
            return back()->with('success', 'Category not updated');
        }
    }

    public function delete($id)
    {
        Category ::where ('id', $id)->delete();
        return back()->with('success','Category successfully deleted');
    }




}
