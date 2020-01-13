<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\configuration;
use DB;
use File;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Storage::disk('local')->exists('/Company/'.session('rfc').'/Brand/','brand'.session('rfc').'.png')){
          $url = Storage::disk('local')->url('Company/'.session('rfc').'/Brand/'.'brand'.session('rfc').'.png');
        }else{
          $url=null;
        }
        $template=DB::table('configurations')->select('id','cfditemplate')->where('idComapny',session('idcompany'))->get();
        foreach ($template as $data) {
          $numtemp=$data->cfditemplate;
          $idconfig=$data->id;
        }
        return view('config/create',compact('url','numtemp','idconfig'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTemplate(Request $request){
        $config=configuration::find($request->idconfig);
        DB::beginTransaction();
        try {
          $config->cfditemplate=$request->numid;
          $config->save();
          DB::commit();
          return 1;
        } catch (\PDOException $e) {
          DB::rollBack();
          return 0;
        }
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
        if(request()->validate(['brand' => 'image'])){
          $file = $request->file('brand');
          $nombre = 'brand'.session('rfc').'.png';
          Storage::disk('local')->put('/Company/'.session('rfc').'/Brand/'.$nombre,  File::get($file));
          return redirect('/configuracion');
        }else{
          return 0;
        }
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
}
