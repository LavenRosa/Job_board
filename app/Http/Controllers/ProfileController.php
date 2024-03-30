<?php

namespace App\Http\Controllers;

use App\Models\Seeker;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(){
        $user = session('Auther');
       // dd($user);
        if (!$user) {
            return redirect()->route('ShowUserLogin');
        }
        $userEmail = $user->email;
        //dd($userEmail);
        $user_profile = Seeker::join('profiles', 'seekers.email', '=', 'profiles.email')
                                ->where('seekers.email', $userEmail)
                                ->select('seekers.name', 'seekers.email','profiles.phone',
                                'profiles.skills','profiles.languages','profiles.project',
                                'profiles.experience', 'profiles.image', 'profiles.id')
                                ->first();
      //  dd($user_profile);

        if($user_profile){
            $users = (object)[
                'name' => $user_profile->name,
                'email' => $user_profile->email,
            ];
            $profiles = (object)[
                'phone' => $user_profile->phone,
                'skills' => $user_profile->skills,
                'languages' => $user_profile->languages,
                'project' => $user_profile->project,
                'experience' => $user_profile->experience,
                'image' => $user_profile->image,
                'id' => $user_profile->id
            ];

        return view('frontend.profileshow', compact('users', 'profiles'));
    } else {
        return redirect()->route('ShowUserLogin'); // Redirect to login if user is not logged in
    }
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        $userId = session('Auther');
        $userEmail = $userId->email;
        $user = Seeker::where('email',  $userEmail)->first();

        return view('frontend.profileupdate', compact('user', 'profile'));
    }


    public function update(Request $request, $id)
    {
        $user = session('Auther');
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'skills' => 'nullable|string|max:255',
            'languages' => 'nullable|string|max:255',
            'project' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            //'password' => 'nullable|string|min:8|confirmed',
            //'newpassword' => 'nullable|string|min:8|different:password|confirmed',
        ]);
        //dd($user);

        $profile = Profile::findOrFail($id);
        $userId = session('Auther');
        $userEmail = $userId->email;
        $users = Seeker::where('email',  $userEmail)->first();

        //dd( $profile,$users);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'skills' => $request->skills,
            'languages' => $request->languages,
            'project' => $request->project,
            'experience' => $request->experience,
        ];

        if ($request->filled('password') && Hash::check($request->password, $user->password)) {
            $data['password'] = Hash::make($request->newpassword);
        }

        if ($users) {
            $users->update($data);
        }

        if ($profile) {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/profiles', $imageName);
                $data['image'] = $imageName;
            }
            $profile->update($data);
        }
        //dd($profile,$users);
        return redirect()->route('ProfileShow')->with('success', 'Profile updated successfully.');
    }
}


