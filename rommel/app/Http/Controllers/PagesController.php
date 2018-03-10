<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		return view('Pages.welcome');
}

	public function getAbout(){
		$first = 'Rommel';
		$last = 'Diaz';

		$fullname = $first . " " . $last;
		$email ='rommeljoshuadiaz@gmail.com';
		$data['email'] = $email;
		$data['fullname'] =$fullname;
 		return view('Pages.about')->withData($data);

		
	}

	public function getContact(){
		return view('Pages.contacts');
	}

}