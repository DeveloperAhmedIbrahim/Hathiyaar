<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::paginate(5);
        return view('admin.brands.list', compact('brands'));
    }

    public function insert(Request $request)
    {
        if($request->method() === "POST")
        {
            $validator = Validator::make($request->all(), [
                'logo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|unique:brands,name',
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ]);
            }

            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->extension();
            $logo->move(public_path('uploads/brands'), $logoName);

            $brand = new Brand();
            $brand->logo = $logoName;
            $brand->name = $request->name;
            $brand->save();

            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => route('admin.brand.list'),
                    'message' => 'New brand recorded successfully.'
                ]
            ]);
        }
        else
        {
            return view('admin.brands.insert');
        }
    }

    public function update(Request $request)
    {
        $brand = Brand::find($request->id);
        if($brand !== null)
        {
            if($request->method() === "POST")
            {
                $validator = Validator::make($request->all(), [
                    'name' => "required|unique:brands,name,$request->id,id",
                ]);

                if($validator->fails())
                {
                    return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ]);
                }

                if($request->hasFile('logo'))
                {
                    $logo = $request->file('logo');
                    $logoName = time() . '.' . $logo->extension();
                    $logo->move(public_path('uploads/brands'), $logoName);
                    unlink(public_path('uploads/brands/' . $brand->logo));
                    $brand->logo = $logoName;
                }

                $brand->name = $request->name;
                $brand->save();

                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.brand.list'),
                        'message' => 'Brand updated successfully.'
                    ]
                ]);
            }
            else
            {
                return view('admin.brands.update', compact('brand'));
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Selected brand not found.');
        }
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        unlink(public_path('uploads/brands/' . $brand->logo));
        $brand->delete();

        return response()->json([
            'status' => true,
            'data' => [
                'message' => 'Brand deleted successfully.'
            ]
        ]);
    }
}
