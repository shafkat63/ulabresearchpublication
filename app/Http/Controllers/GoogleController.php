<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Laravel\Socialite\Facades\Socialite;
// use Throwable;

// class GoogleController extends Controller
// {

//   public function logout()
//   {
//     auth()->logout();
//     return redirect('/');
//   }
//   //
//   public function loginWithGoogle()
//   {
//     return  Socialite::driver('google')->redirect();
//   }

//   public function callbackFromGoogle()
//   {
//     try {
//       $user = Socialite::driver('google')->user();
//       $is_user =  User::where('email', $user->getEmail())->first();

//       if (!$is_user) {

//         $saveUser = User::updateOrCreate(
//           [
//             'google_id' => $user->getId()
//           ],
//           [
//             'name' => $user->getName(),
//             'email' => $user->getEmail(),
//             'password' => Hash::make($user->getName() . "@" . $user->getId())
//           ]
//         );
//       } else {
//         User::where('email', $user->getEmail())->update(
//           [
//             'google_id' => $user->getId(),
//           ]
//         );
//         $saveUser = User::where('email', $user->getEmail())->first();
//       }
//       Auth::loginUsingId($saveUser);
//       return redirect()->route('/');
//     } catch (Throwable $th) {
//       throw $th;
//     }
//   }
// }
