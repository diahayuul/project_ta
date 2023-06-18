<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit() {
    
        return view('admin.profile.index');
    }

    public function update(Request $request)
    {
    
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'no_telp' => 'required|max:15',
        ]);
  
        // $validatedData = $request->validate($rules);

        // if($request->oldImage){
        //     Storage::delete($request->oldImage);
        // }
        // $validatedData['foto'] = $request->file('foto')->store('profile-image');
        
        if($validator->fails()){
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $query = User::find(Auth::user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'no_telp'=>$request->no_telp,
            ]);

            if(!$query){
                return response()->json(['status'=>0,'msg'=>'Something went wrong']);
            }else {
                return redirect('/profile')->with('success', 'Data Berhasil Diubah');

            }
        }
    }

    public function update_image(Request $request)
    {
        $rules = [
            'foto'=> 'image|file|max:2000',
        ];
        
        $validatedData = $request->validate($rules);
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['foto'] = $request->file('foto')->store('user-image');
        
        User::find(Auth::user()->id)
                    ->update($validatedData);
        return redirect('/profile')->with('success', 'Foto Berhasil Diunggah');
    }
}
