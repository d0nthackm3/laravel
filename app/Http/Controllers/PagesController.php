<?php

		# Process variable data or params
		# talk to the model
		# recieve from the model
		# compile or process data from the model if needed 
		# pass that data to the correct view

# Dit haalt alle blade files op en returnt ze in een view in web.php worden ze aangeroepen met de filenaam PagesController@functiename

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function getLogin(){ 
		return view('home');
	} 

	public function getAdd(){
		/*
		$first = "Mehemt";
		$last = "X";

		$fullname = $first . " " . $last;

		$email = "Imnotahacker@riseup.net";
		$data = []; 
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		*/

	return view('add');//->withData($data);

	}

	public function getRemove(){ 
		return view('remove');
	}
/*
	public function getTeachers() { 
		return view('teachers');
	}
*/

	public function getLogout(){
		return view('logout');
	}

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTeachers()
    {
        return view('teachers');
    }
}


?> 
