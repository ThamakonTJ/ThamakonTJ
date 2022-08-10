<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pr_add_detail;
;
use Illuminate\Support\Facades\Validator;



class DynamicAddRemoveFieldController extends Controller
{
    public function index() 
    {   
        echo "Study PHP at";
        return view("purchaing_requestion");

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
            Pr_add_detail::create($value);
        }
     
        return back()->with('success', 'Add Successfully.');
    }
}
