<?php

class AdminTableSeeder extends Seeder{
	
	public function run(){
		DB::table('admin')->insert(array(
			'username' 		=>	'admin',
			'password'		=>	Hash::make('admin'),
			'nim'			=>	'3411121013',
			'namaLengkap'	=>	'Rifky Ekayama',
			'angkatan'		=>	'2012',
			));
	}
}