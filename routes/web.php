<?php
// aprendible.com = Route :: get('/', function)
// aprendible.com/contacto = Route :: get ('contacto', function)
/*Route::get('/', function(){
	return "Hola desde la página de incicio";
});

Route::get('contacto', function(){
	return "Hola desde la página de contacto";
});
Route::get()
Route::post()//Form action ="POST"
Route::put()
Route::patch()
Route::delete()*/



/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get ('saludo/{nombre}', function($nombre){
	return "Saludos" . $nombre;
});*/
/*Route:: get('contactanos', function(){
	return 'Sección de contactos';
})-> name('contactos');*/

/*Route::get('/', function(){
	$nombre = "Jorge";
	return view('home')-> with (['nombre'=> $nombre]) ;
})->name ('home');*/

 Route::view('/', 'home')-> name('home');
 Route::view('/quienes-somos', 'about')-> name('about');

/* Route::resource('projects', 'ProjectController')
 	 ->parameters(['portafolio'=>'project'])
 	 ->names('projects');*/

 Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
 Route::get('/portafolio/crear', 'ProjectController@create') ->name('projects.create');

 Route::get('/portafolio/{project}/editar', 'ProjectController@edit') ->name('projects.edit');
 Route::patch('/portafolio/{project}', 'ProjectController@update') ->name('projects.update');

 Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
 Route::get('/portafolio/{project}', 'ProjectController@show') ->name('projects.show');

 Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

 Route::view('/contacto', 'contact')-> name('contact');
 Route::post('contact', 'MessageController@store')->name('messages.store'); 


//Route::resource('proyectos', 'PortfolioController');
//Route::apiResource('projects', 'PortfolioController');
 // Route::resource('projects','PortfolioController')->only(['index','show']);
//Route:: view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

/*Route::get ('/',function(){
	echo "<a href='". route ('contactos')."'> Contactos 1 </a><br>";
	echo "<a href='". route ('contactos')."'> Contactos 2 </a><br>";
	echo "<a href='". route ('contactos')."'> Contactos 3 </a><br>";
	echo "<a href='". route ('contactos')."'> Contactos 4 </a><br>";
	echo "<a href='". route ('contactos')."'> Contactos 5 </a><br>";
});*/


Auth::routes(['register' => false]);


