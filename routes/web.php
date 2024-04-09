<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class);



/*Route::get('cursos', function() {
    return "bienvenido a la pagina cursos";
});

Route::get('cursos/create', function () {
    return "en esta pagina podras crear un curso";
});

Route::get('cursos/{curso}', function($curso){
    return "bienvenido al curso: $curso";
});

/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "bienvenido al cruso $curso, de la categoria $categoria";
    }else{
        return "bienvenido al curso: $curso";
    }
   });

*/
//route::get('test',[HomeController::class,'index']);*/