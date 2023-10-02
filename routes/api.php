<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

foreach (scandir(dirname(__FILE__)) as $dir) {
    $dirname = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir;
    if (is_dir($dirname) && !in_array($dir, [".", ".."])) {
        if ($handler = opendir($dirname)) {
            while (false != ($file = readdir($handler))) {
                if (!in_array($file, [".", ".."])) {
                    $file_route = $dir . DIRECTORY_SEPARATOR . $file;
                    include_once $file_route;
                }
            }
            closedir($handler);
        }
    }
}
