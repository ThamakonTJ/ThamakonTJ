<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Adddetail;
use Illuminate\Support\Facades\Validator;


class DynamicAddRemoveFieldController extends Controller
{
    public function index() 
    {
        return view("add-remove-input-fields");
    }
    public function store(Request $request)
    {
        $request->validate([
            'moreFields.*.product' => 'required',
            'moreFields.*.pcs' => 'required',
            'moreFields.*.price_pcs' => 'required',
            'moreFields.*.note' => 'required',
        ]);
     
        foreach ($request->moreFields as $key => $value) {
            Adddetail::create($value);
        }
     
        return back()->with('success', 'Todos Has Been Created Successfully.');
    }
}
