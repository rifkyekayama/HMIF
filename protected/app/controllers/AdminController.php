<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return \View::make('admin.home');
	}

	public function form()
	{
		//
		return \View::make('admin.formsederhana');
	}

	public function profile()
	{
		//
		return \View::make('admin.profile');
	}

	public function login()
	{
		return \View::make('admin.login');
	}

	public function doLogin()
	{
		$rules = array(
			'username' => 'required',
			'password' => 'required|alphaNum'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('admin/login')->with('alert-danger','Username atau Password tidak sesuai...!');
		}else{
			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);
			if(Auth::admin()->attempt($userdata)){
				return Redirect::to('admin')->with('alert-info', 'Login Berhasil');
			}else{
				return Redirect::to('admin/login')->with('alert-danger', 'Login Gagal');
			}
		}
	}

	public function doLogout(){
		Auth::admin()->logout();
		return Redirect::to('admin/login')->with('alert-danger','Logout Berhasil');
	}

	public function search(){
		return View::make('admin.search');
	}

	public function dosearch(){
		$seleksi = Input::get('seleksi');
		/*$rules = array(
			'cari' =>'required',
			'angkatan' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('admin/search')->with('alert-danger','Username atau Password tidak sesuai...!');
		}else*/

		if($seleksi == '1'){
			$nim = Input::get('cari');
			$mhsw = mhsw::find($nim);
			$mhsw = mhsw::where('nim','=',$nim)->get();
			
			return \View::make('admin.profile')->with('datanim',$mhsw);
		}

		if($seleksi == '2'){
			$angkatan = Input::get('angkatan');
			$mhsw = mhsw::find($angkatan);
			$mhsw = mhsw::where('angkatan','=',$angkatan)->get();
			
			return \View::make('admin.profile')->with('datanim',$mhsw);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
