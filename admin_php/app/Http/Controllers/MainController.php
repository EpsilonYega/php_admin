<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function admin_main() {
        return view('admin-main');
    }
    public function admin_new_user() {
        return view('new-user');
    }
    public function admin_user_card($login) {
        $user = DB::select("SELECT * FROM users where login = ?", array($login))[0];
        return view('user-card', compact('user'));
    }
    public function admin_update_user_page($login) {
        $user = DB::select("SELECT * FROM users where login = ?", array($login))[0];
        return view('update-user', compact('user'));
    }
    public function admin_create_user(Request $request){
        if ($request->hasFile('customFile1')) {

            $file = $request->file('customFile1');
            
            $fileName = $file->getClientOriginalName();
            
            $destinationPath = public_path('img'); 

            $file->move($destinationPath, $fileName);

            DB::insert('insert into users (id, fullname, date_of_birth, phone, email, login, password, photo) values (?, ?, ?, ?, ?, ?, ?, ?)', 
            [Str::uuid(), $request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
            $request->input('inputLogin'), $request->input('inputPassword'), $fileName]);
        }
        else {
            DB::insert('insert into users (id, fullname, date_of_birth, phone, email, login, password, photo) values (?, ?, ?, ?, ?, ?, ?, ?)', 
            [Str::uuid(), $request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
            $request->input('inputLogin'), $request->input('inputPassword'), "default.png"]);
        }

        // DB::insert('insert into users (id, fullname, date_of_birth, phone, email, login, password, photo) values (?, ?, ?, ?, ?, ?, ?, ?)', 
        // [Str::uuid(), $request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
        // $request->input('inputLogin'), $request->input('inputPassword'), "photo not supported yet"]);
        // return view('admin-main');
    }
    public function admin_get_users() {
        $users = DB::select("SELECT * FROM users");
        return view('users', compact('users'));
    }
    public function admin_drop_user($login) {
        DB::delete("DELETE FROM users where login = ?", array($login));
        return view('admin-main');
    }
    public function admin_update_user(Request $request, $data) {
        if ($request->hasFile('customFile1')) {

            $file = $request->file('customFile1');
            
            $fileName = $file->getClientOriginalName();
            
            $destinationPath = public_path('img'); 

            $file->move($destinationPath, $fileName);

            DB::update("UPDATE users SET fullname = ?, date_of_birth = ?, phone = ?, email = ?, login = ?, password = ?, photo = ? where login = ?", [$request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
            $request->input('inputLogin'), $request->input('inputPassword'), $fileName, $data]);
            return view('admin-main');
        }
        DB::update("UPDATE users SET fullname = ?, date_of_birth = ?, phone = ?, email = ?, login = ?, password = ? where login = ?", [$request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
        $request->input('inputLogin'), $request->input('inputPassword'), $data]);
        return view('admin-main');
    }
}
