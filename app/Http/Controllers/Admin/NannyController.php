<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nanny;

class NannyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nannies = Nanny::all();
        return view('Admin.nanny.index', compact('nannies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.nanny.createUpdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('website/images/nanny', $filename);


        $form_data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'location'=> $request->location,
            'fb'=> $request->fb,
            'insta'=> $request->insta,
            'linkdin'=> $request->linkdin,
            'age'=> $request->age,
            'experience'=> $request->experience,
            'image'=> $filename,
        );

        Nanny::create($form_data);
        return redirect('admin/nanny')->with('success', 'Successfully nanny created .');
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
        $edit = Nanny::find($id);
        return view('Admin.nanny.createUpdate', compact('edit'));
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
        $nanny = Nanny::find($id);

        if($request->image){
            $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('website/images/nanny', $filename);
            
        }else{
            $filename = $nanny->image;
        }

        


        $form_data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'location'=> $request->location,
            'fb'=> $request->fb,
            'insta'=> $request->insta,
            'linkdin'=> $request->linkdin,
            'age'=> $request->age,
            'experience'=> $request->experience,
            'image'=> $filename,
        );

        $nanny->update($form_data);
        return redirect('admin/nanny')->with('success', 'Successfully nanny updated .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nanny::find($id)->delete();
        return redirect('admin/nanny');
    }
}
