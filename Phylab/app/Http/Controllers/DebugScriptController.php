<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DebugScriptController extends Controller {

    public function debug(){
		// $id = $_GET['id'];
		header('Location: http://www.baidu.com');
		exit;
		return 1;
	}

}