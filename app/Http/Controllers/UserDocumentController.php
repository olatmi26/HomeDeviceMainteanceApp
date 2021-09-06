<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDocumentStoreRequest;
use App\Http\Requests\UserDocumentUpdateRequest;
use App\Models\UserDocument;
use Illuminate\Http\Request;

class UserDocumentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userDocuments = UserDocument::all();

        return view('userDocument.index', compact('userDocuments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('userDocument.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserDocument $userDocument
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, UserDocument $userDocument)
    {
        return view('userDocument.show', compact('userDocument'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserDocument $userDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, UserDocument $userDocument)
    {
        return view('userDocument.edit', compact('userDocument'));
    }

    /**
     * @param \App\Http\Requests\UserDocumentUpdateRequest $request
     * @param \App\Models\UserDocument $userDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UserDocumentUpdateRequest $request, UserDocument $userDocument)
    {
        $userDocument->update($request->validated());

        $request->session()->flash('userDocument.id', $userDocument->id);

        return redirect()->route('userDocument.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserDocument $userDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, UserDocument $userDocument)
    {
        $userDocument->delete();

        return redirect()->route('userDocument.index');
    }

    /**
     * @param \App\Http\Requests\UserDocumentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDocumentStoreRequest $request)
    {
        $userdocument = Userdocument::create($request->validated());

        $request->session()->flash('userdocument.PassportDocument', $userdocument->PassportDocument);

        return redirect()->route('userdocument.index');
    }
}
