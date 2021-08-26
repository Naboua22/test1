<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormulaireRequest;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    //
    public function getForm()
    {
        return view('formulaire');
    }

    public function getList()
    {
        return view('list');
    }

    public function postForm(FormulaireRequest $request)
    {
        session([$request->all()]);

        return redirect()->route('list');
    }
}
