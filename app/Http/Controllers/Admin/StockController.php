<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{
    public function list()
    {
        $stocks = Stock::paginate(5);
        return view('admin.stocks.list', compact('stocks'));
    }

    public function update(Request $request)
    {
        $stock = Stock::find($request->id);
        if($stock !== null)
        {
            if($request->method() === "POST")
            {
                $validator = Validator::make($request->all(), [
                    'quantity' => "required|integer",
                    'price' => "required|numeric|min:0",
                ]);

                if($validator->fails())
                {
                    return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ]);
                }

                $stock->quantity = $request->quantity;
                $stock->price = $request->price;
                $stock->save();

                return response()->json([
                    'status' => true,
                    'data' => [
                        'redirectUrl' => route('admin.stock.list'),
                        'message' => 'Stock updated successfully.'
                    ]
                ]);
            }
            else
            {
                return view('admin.stocks.update', compact('stock'));
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Selected stock not found.');
        }
    }
}
