<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::paginate(10);
        return view('content.index', compact('contents'));
    }

    public function create()
    {
        $content = new Content;
        return view('content.form', compact('content'));
    }

    public function store(ContentRequest $request)
    {
        $content = new Content;
        $this->save($content, $request);

        return redirect('/content');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('content.form', compact('content'));
    }

    public function update(ContentRequest $request, $id)
    {
        $content = Content::findOrFail($id);
        $this->save($content, $request);

        return redirect('/content');
    }
    public function destroy($id)
    {
        Content::destroy($id);
    }

    public function algorithm()
    {        
        $content = new Content;
        return view('content.ahp', compact('content'));

    }
    public function pr()
    {
        $content = new Content;
        return view('content.purchaing_requestion', compact('content'));

    }
    public function quo()
    {
        $content = new Content;
        return view('content.quotation', compact('content'));

    }
    public function po()
    {
        $content = new Content;
        return view('content.purchaing_order', compact('content'));

    }
    public function pi()
    {
        $content = new Content;
        return view('content.proforma_invoive', compact('content'));

    }
    public function inv()
    {
        $content = new Content;
        return view('content.invoive', compact('content'));

    }
    public function sup()
    {
        $content = new Content;
        return view('content.supplier', compact('content'));

    } 
    


    private function save($data, $value)
    {
        $data->topic = $value->topic;
        $data->description = $value->description;
        $data->tags = $value->tags;
        $data->user_id = auth()->id();
        $data->save();
    }
}
