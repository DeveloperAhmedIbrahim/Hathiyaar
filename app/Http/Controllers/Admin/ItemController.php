<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function list()
    {
        $items = Item::paginate(5);
        return view('admin.items.list', compact('items'));
    }

    public function insert(Request $request)
    {
        if($request->method() === "POST")
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:items,name',
                'category' => 'required|exists:categories,id',
                'brand' => 'required|exists:brands,id',
                'sku' => 'required|unique:items,sku',
                'description' => 'required',
                'images' => 'required',
                'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ]);
            }

            $item = new Item();
            $item->name = $request->name;
            $item->category_id = $request->category;
            $item->brand_id = $request->brand;
            $item->user_id = Auth::user()->id;
            $item->sku = $request->sku;
            $item->description = $request->description;
            $item->save();

            $item->stock()->create([
                'item_id' => $item->id,
                'quantity' => 0,
                'price' => 0
            ]);

            foreach($request->file('images') as $image)
            {
                $imageName = time() . rand(1111, 9999) . '.' . $image->extension();
                $image->move(public_path('uploads/items'), $imageName);
                $item->images()->create([
                    'item_id' => $item->id,
                    'name' => $imageName
                ]);
            }

            return response()->json([
                'status' => true,
                'data' => [
                    'redirectUrl' => route('admin.item.list'),
                    'message' => 'New item recorded successfully.'
                ]
            ]);
        }
        else
        {
            $brands = Brand::all();
            $categories = Category::all();
            return view('admin.items.insert', compact('brands', 'categories'));
        }
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        if($item !== null)
        {
            if($request->method() === "POST")
            {
                $validator = Validator::make($request->all(), [
                    'name' => "required|unique:items,name,$request->id,id",
                    'category' => 'required|exists:categories,id',
                    'brand' => 'required|exists:brands,id',
                    'sku' => "required|unique:items,sku,$request->id,id",
                    'description' => 'required',
                ]);

                if($validator->fails())
                {
                    return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ]);
                }

                if($request->hasFile('images'))
                {
                    foreach($request->file('images') as $image)
                    {
                        $imageName = time() . rand(1111, 9999) . '.' . $image->extension();
                        $image->move(public_path('uploads/items'), $imageName);
                        $item->images()->create([
                            'item_id' => $item->id,
                            'name' => $imageName
                        ]);
                    }
                }

                $item->name = $request->name;
                $item->category_id = $request->category;
                $item->brand_id = $request->brand;
                $item->sku = $request->sku;
                $item->description = $request->description;
                $item->save();


                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.item.list'),
                        'message' => 'Item updated successfully.'
                    ]
                ]);
            }
            else
            {
                $brands = Brand::all();
                $categories = Category::all();
                return view('admin.items.update', compact('item', 'brands', 'categories'));
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Selected item not found.');
        }
    }

    public function delete($id)
    {
        $item = Item::find($id);
        foreach($item->images as $image)
        {
            if(file_exists(public_path('uploads/items/' . $image->name))){
                unlink(public_path('uploads/items/' . $image->name));
            }
        }
        $item->images()->delete();
        $item->stock()->delete();
        $item->carts()->delete();
        $item->delete();

        return response()->json([
            'status' => true,
            'data' => [
                'message' => 'Item deleted successfully.'
            ]
        ]);
    }

    public function deleteImage($id)
    {
        $image = ItemImage::find($id);
        if($image->item->images->count() > 1)
        {
            if(file_exists(public_path('uploads/items/' . $image->name))){
                unlink(public_path('uploads/items/' . $image->name));
            }
            $image->delete();
            return response()->json([
                'status' => true,
                'data' => [
                    'message' => 'Image deleted successfully.'
                ]
            ]);
        }
        else
        {
            return response()->json([
                'message' => 'At least one image is required.'
            ], 402);
        }
    }
}
