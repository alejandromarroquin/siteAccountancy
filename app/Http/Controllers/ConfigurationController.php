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
     * Muestra la vista de configuración.
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
        $template=DB::table('configurations')->select('id','cfditemplate')->where('idCompany',session('idcompany'))->get();
        foreach ($template as $data) {
          $numtemp=$data->cfditemplate;
          $idconfig=$data->id;
        }
        $rfc_emisor=null;
        return view('config/create',compact('url','numtemp','idconfig','rfc_emisor'));
    }

    public function createTemplate(Request $request){
      $cadena=$request->cadena;
      $http=dirname(__DIR__);
      $app=dirname($http);
      $raiz=dirname($app);
      if(file_exists($raiz.'/resources/views/cfdi/'.session('rfc').'template4.blade.php')){
        unlink($raiz.'/resources/views/cfdi/'.session('rfc').'template4.blade.php');
      }
      if($fh = fopen($raiz.'/resources/views/cfdi/'.session('rfc').'template4.blade.php', 'w')){
        fwrite($fh, $cadena) or die("No se pudo escribir en el archivo");
        fclose($fh);
        $config=configuration::find($request->idconfig);
        $config->cfditemplate=4;
        $config->save();
        session(['cfditemplate'=>4]);
        return 1;
      }else{
        return 0;
      }     
    }

    /**
     * Registra en la base de datos el número de template seleccionado
     * para la emisión de CFDI.
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
          session(['cfditemplate'=>$request->numid]);
          DB::commit();
          return 1;
        } catch (\PDOException $e) {
          DB::rollBack();
          return 0;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editTemplate()
    {
      return view('cfdi/edittemplate');
    }

    /**
     * Almacena los archivos que funcionan como credenciales
     * para facturación de cada empresa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadFiles(Request $request){
      if(request()->validate(['cer' => 'file']) && request()->validate(['key' => 'file'])){
        $filecer = $request->file('cer');
        $filekey = $request->file('key');
        $namecer = 'certificate'.session('rfc').'.cer';
        $namekey = 'key'.session('rfc').'.key.pem';
        Storage::disk('local')->put('/Company/'.session('rfc').'/Certificados/'.$namecer,  File::get($filecer));
        Storage::disk('local')->put('/Company/'.session('rfc').'/Certificados/'.$namekey,  File::get($filekey));
        return redirect('/configuracion');
      }else{
        return 0;
      }
    }

    /**
     * Almacena la imagen publcitaria en la carpeta correspondiente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadCommercial(Request $request){
      if(request()->validate(['commercial' => 'image'])){
        $file = $request->file('commercial');
        $nombre = 'commercial'.session('rfc').'.png';
        Storage::disk('local')->put('/Company/'.session('rfc').'/Commercial/'.$nombre,  File::get($file));
        return redirect('/configuracion');
      }else{
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
     * Almacena el logo.
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
