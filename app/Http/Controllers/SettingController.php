<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DomainName;
use App\Models\MailSetup;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domain = DomainName::all();
        return view('settings.index',compact('domain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function store_domain(Request $request)
    {
        //    return $request->addMoreInputFields;
        $request->validate([
            'addMoreInputFields.*.domain_name' => 'required'
        ]);
        
        
        foreach ($request->addMoreInputFields as $key => $value) {
            DomainName::create($value);
        }
        
        return back()->with('success', 'New Domain has been added.');
        
    }

    public function store_mailsetup(Request $request)
    {
        // return $request;
        MailSetup::create($request->all());
        return back()->with('successmsg', 'Mail Configration has been added.');
    }
}
