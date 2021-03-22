<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function getSuppliers(){

        $fetch_supplier = Supplier::OrderBy('created_at', 'desc')->get();

        return response()->json($fetch_supplier);
    }

    public function addSupplier(Request $request){

        $create_supplier = Supplier::create($request->all());
        $products_ids =[1,2];
        $create_supplier->products()->attach($products_ids);

        return response()->json($create_supplier);
    }

    public function updateSupplier(Supplier $supplier){

        $upd_supplier = $supplier->update([
            'name' => request('name') 
        ]);

        return response()->json(["Supplier Updated Successifully" => $upd_supplier ]);
    }

    public function delSupplier($id)
    {
        $del_supplier = Supplier::destroy($id);

        return response()->json(["supplier Deleted Successifully" => $del_supplier]);
    }
}
