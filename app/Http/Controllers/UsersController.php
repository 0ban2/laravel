<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
	public function index()
	{
		$user = User::orderBy('id', 'ASC')->paginate(5);
		return view('admin.users.index')->with('users', $user);
	}
	public function create()
	{
		return view('admin.users.create');
	}
	public function store(Request $request)
	{
		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();
		Flash::success("Se ha registrado " . $user->name . " de forma exitosa.");
		return redirect()->route('users.index');
	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		/*$user = User::find($id);
		return view('admin.users.edit')->with('users', $user);*/
	}
	public function update(Request $request, $id)
	{
		dd($request->all());
	}
	public function destroy($id)
	{
		$user = User::find($id);
		$user -> delete();
		Flash::warning('El usuario ' . $user->name . " ha sido borrado correctamente.");
		return redirect()->route('users.index');
	}
}
