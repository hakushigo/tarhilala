<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\saldo;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class UserSetupController extends Controller
{

    public function setup($tipe){
        if(Auth::check()){
            $id = Auth::getUser()->getAuthIdentifier();
        }else{
            $id = -99;
        }

        if((Unit::where('user_id', $id)->first() != null) || (Nasabah::where('user_id', $id)->first() != null) || (User::find($id)->user_id != null)){
            return redirect(route('dashboard'));
        }

        return view("auth.setup", [
            "tipe" => $tipe,
            "unit" => Unit::all()->toArray()
        ]);
    }

    public function finalization(Request $request){
        if(Auth::check()){
            $id = Auth::getUser()->getAuthIdentifier();
        }else{
            $id = 0;
        }

        $tipe = $request->tipe;

        switch($tipe){
            case 0:
                // validation!
                $request->validate([
                    'nama_unit' => ['required', 'string'],
                    'alamat_unit' => ['required', 'string'],
                    'kecamatan_unit' => ['required', 'string']
                ]);

                // set-up unit
                // first, let's set the user's account type
                User::whereId($id)->update(["tipe_akun" => 0, "have_done_setup" => 1]);

                // then, we add row in unit
                Unit::create([
                    'nama_unit' => $request->nama_unit,
                    'alamat_unit' => $request->alamat_unit,
                    'kecamatan_unit' => $request->kecamatan_unit,
                    'user_id' => $id
                ]);

                return redirect("/dashboard");

                break;
            case 1:

                // validate
                $request->validate([
                    'nama_nasabah' => ['required', 'string'],
                    'no_rekening' => ['required', 'integer'],
                    'alamat_nasabah' => ['required', 'string'],
                    'nik_nasabah' => ['required', 'integer'],
                    'nasabah_of' => ['required', 'integer']
                ]);

                // set-up nasabah
                // first, let's set the user's account type
                // marks it have done setup!
                User::whereId($id)->update(["tipe_akun" => 1, "have_done_setup" => 1]);

                // then, we add row in nasabah
                $createNasabah = Nasabah::create([
                    'nama_nasabah' => $request->nama_nasabah,
                    'no_rekening' => $request->no_rekening,
                    'alamat_nasabah' => $request->alamat_nasabah,
                    'nik_nasabah' => $request->nik_nasabah,
                    'nasabah_of' => $request->nasabah_of,
                    'user_id' => $id
                ]);

                saldo::create([
                    'nasabah_id' => $createNasabah->id,
                    'saldo' => 0 // for starter let it zero!
                ]);

                return redirect("/dashboard");

                break;
            default:
                return redirect("/");
                break;
        }

    }
}
