<?php namespace App\Modules\ModuleManager\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class MMController extends BaseController {

	use DispatchesCommands, ValidatesRequests;

}
