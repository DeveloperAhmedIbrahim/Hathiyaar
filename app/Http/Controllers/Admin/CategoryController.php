<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::paginate(5);
        return view('admin.categories.list', compact('categories'));
    }

    public function insert(Request $request)
    {
        if($request->method() === "POST")
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:categories,name',
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ]);
            }

            $category = new Category();
            $category->name = $request->name;
            $category->save();

            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => route('admin.category.list'),
                    'message' => 'New category recorded successfully.'
                ]
            ]);
        }
        else
        {
            return view('admin.categories.insert');
        }
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        if($category !== null)
        {
            if($request->method() === "POST")
            {
                $validator = Validator::make($request->all(), [
                    'name' => "required|unique:categories,name,$request->id,id",
                ]);

                if($validator->fails())
                {
                    return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ]);
                }

                $category->name = $request->name;
                $category->save();

                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.category.list'),
                        'message' => 'Category updated successfully.'
                    ]
                ]);
            }
            else
            {
                return view('admin.categories.update', compact('category'));
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Selected category not found.');
        }
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return response()->json([
            'status' => true,
            'data' => [
                'message' => 'Category deleted successfully.'
            ]
        ]);
    }
}
