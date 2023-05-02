<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Nasabah;
use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $returning = [
            'user' => $request->user(),
            'request' => $request
        ];

        if($request->get('page') == 'profil'){
            switch(Auth::user()->tipe_akun){
                case 0 :
                    $tipe_akun = "unit";
                    break;
                case 1 :
                    $tipe_akun = "nasabah";
                    break;
                default:
                    $tipe_akun = "unknown";
                    break;
            }

            $returning['tipe_akun'] = $tipe_akun;

            // only if the tipe_akun is nasabah
            if(Auth::user()->tipe_akun == 1){
                $returning['unit'] = Unit::all()->toArray();
            }
        }

        return view('profile.edit', $returning);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        // delete the data
        if($user->tipe_akun == 0){
            // find unit and delete!
            Unit::where('user_id', $user->id)->delete();
        }else if($user->tipe_akun == 1){
            // find nasabah and delete!
            Nasabah::where('user_id', $user->id)->delete();
        }
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function entityUpdate(){

    }
}
