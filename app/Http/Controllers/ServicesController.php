<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Services;
use App\Http\Controllers\Controller;
use SebastianBergmann\Environment\Console;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $data = [
            'services' => M_Services::all(),
            'title' => 'Services'
        ];
        return view('services', $data);
        // echo "A";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function changeStatus(Request $request)
    {
        // dd($request->status);
        $service =M_Services::find($request->id);
        if ($request->status == 1) {
            $service->status = 'on';
        } else {
            $service->status = 'off';
        }
        
        
        $service->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

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
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\M_Services  $M_Services
     * @return \Illuminate\Http\Response
     */
    public function show(M_Services $M_Services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\M_Services  $M_Services
     * @return \Illuminate\Http\Response
     */
    public function edit(M_Services $M_Services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M_Services  $M_Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M_Services $bidangkajian)
    {
    //     //
    //     $validatedData = $request->validate([
    //         'nama_kajian' => 'required',
    //     ]);

    //     $a = M_Services::where('id', $bidangkajian->id)->update($validatedData);
    //     return redirect('/bidangkajian')->with('pesan', 'Data Berhasil Diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M_Services  $M_Services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // //
        // M_Services::destroy($id);
        // return redirect('/bidangkajian')->with('pesan', 'Data Berhasil Dihapus');
    }
}
