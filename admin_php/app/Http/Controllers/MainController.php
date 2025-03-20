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
    public function admin_user_card() {
        return view('user-card');
    }
    public function admin_update_user_page() {
        return view('update-user');
    }
    public function admin_create_user(Request $request){
        // dd($request->input('inputFullname').' '.$request->input('inputDOB').' '
        // .$request->input('inputTel').' '.$request->input('inputEmail').' '.$request->input('inputLogin').' '.$request->input('inputPassword'));

        // try {
        //     DB::connection()->getPdo();
        //     return "Connected";
        // }
        // catch (Exception $e) {
        //     return "Error ".$e;
        // }

        DB::insert('insert into users (id, fullname, date_of_birth, phone, email, login, password, photo) values (?, ?, ?, ?, ?, ?, ?, ?)', 
        [Str::uuid(), $request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
        $request->input('inputLogin'), $request->input('inputPassword'), "photo not supported yet"]);
    }
    public function admin_get_users() {
        dd(DB::select("SELECT * FROM users"));
    }
    public function admin_get_user() {
        dd(DB::select("SELECT * FROM users where login = ?", array("login")));
    }
    public function admin_drop_user() {
        dd(DB::delete("DELETE FROM users where login = ?", array("login")));
    }
    public function admin_update_user(Request $request) {
        dd(DB::delete("UPDATE users SET fullname = ?, date_of_birth = ?, phone = ?, email = ?, login = ?, password = ? where login = ?", [$request->input('inputFullname'), $request->input('inputDOB'), $request->input('inputTel'), $request->input('inputEmail'), 
        $request->input('inputLogin'), $request->input('inputPassword'), $request->input('inputOldLogin')]));
    }
}
