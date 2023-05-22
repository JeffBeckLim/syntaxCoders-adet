<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        
        // Save the user in the database
        $user->save();

        // Redirect to the home screen
        return redirect('/')->with('message', 'User registered successfully');
            
    }  
    
    public function logout (Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'logged out');    
        
    }


    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function download($file)
    {
        $filePath = public_path('downloads/' . $file);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404);
        }
    }

    public function users(){
        if (auth()->user()->user_type != 1) {
            abort(404, 'Unauthorized Access');
        }
    
        $users = User::all();
    
        return view('admin.users', compact('users'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        

        return view('admin.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'user_type'=>'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->user_type = $validatedData['user_type'];

        $user->save();

        return redirect()->back()->with('message', 'User updated successfully');
    }

    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
        
        // Delete the user
        $user->delete();
        
        // Redirect back to the previous page or any other desired route
        return redirect()->back()->with('message', 'User deleted successfully');
    }


}
