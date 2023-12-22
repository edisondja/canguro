<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;


class SettingController extends Controller
{
    
    public function show() {
            
    
      $setting = User::find(Auth::user()->id);


        if($setting->count() > 0) {

           $setting = $setting->config;
        
        }else{

            
                $setting= [
                    'profession'=>'',
                    'address'=>'',
                    'birthdate'=>'',
                    'picture_url'=>''
                    

                ];

        }


        $setting =  (object) $setting;
        /*
        if($setting == "") {

            return dd( $setting );

            $setting = new Setting();
            $setting->user_id = $user_id;
            $setting->save();
            
        }
        */
        return view("user-settings")->with("settings", $setting);
 

    }



    public function create(Request $request){



        $setting = Setting::where('user_id',Auth::user()->id)->first();
        $setting_id = $setting->id;


        if($setting->count() > 0) {

    
        
            $setting = Setting::find($setting->id);
            $setting->address = $request->address;
            $setting->birthday= $request->birthday;
            $setting->profession = $request->profession;

            if($request->hasFile("media")){

                $file = $request->file('media');
                $fileName = $file->getClientOriginalName();
                // Modifica la ruta para guardar en la carpeta 'imagen' dentro del disco público
                $url = Storage::disk('public')->put('imagen/' . $fileName, $file);
                // Asigna la URL al modelo o hace lo que sea necesario con la URL
                $setting->picture_url = $url;

            }
            $setting->save();
        
        }else{

            $setting = new Setting();
            $setting->picture_url = $request->picture_url;
            $setting->address = $request->address;
            $setting->user_id = Auth::user()->id;
            
            if($request->hasFile("media")){

                $file = $request->file('media');
                $fileName = $file->getClientOriginalName();
                // Modifica la ruta para guardar en la carpeta 'imagen' dentro del disco público
                $url = Storage::disk('public')->put('imagen/' . $fileName, $file);
                // Asigna la URL al modelo o hace lo que sea necesario con la URL
                $setting->picture_url = $url;
                $setting->birthday= $request->birthday;
                $setting->profession = $request->profession;
                $setting->save();


            }
        }



      return redirect('dashboard/settings');

    }


}
