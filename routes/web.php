<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Requests\SolicitudPresupuestoRequest;
use App\Http\Resources\ServiceCollection;
use App\Mail\ClientGreetings;
use App\Mail\SolicitudPresupuesto;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/nosotros', [HomeController::class, 'index'])->name('home.index');
Route::get('/contacto', [HomeController::class, 'index'])->name('home.index');
Route::get('/referencias', [HomeController::class, 'index'])->name('home.index');

Route::get('/inicio', function () {
    return redirect('/');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/sentMail', function () {
    return redirect('/');
});

Route::post('/sentMail', function (SolicitudPresupuestoRequest $request) {    
    try{
        if(isBot($request) == false){
            Mail::to(config('mail.mailto'))->send(new SolicitudPresupuesto($request));  
            // Mail::to($request->request->get('email'))->send(new ClientGreetings());    
        }
        $message = "Mail enviado correctamente, a la brevedad nos pondremos en contacto con usted.";    
    }catch(Exception $e){
        $message = "Ocurrio un error al enviar al enviar el mail, intente nuevamente mas tarde.";
    }
    
    session()->flash('alert', ['message'=> $message]);
    
    return redirect('/');
});

Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');
// Route::get('/servicios/{service}', [ServiceController::class, 'index'])->name('services.index');


// vieja ruta api ----- borrar
Route::get('/get-services', function () {
    return new ServiceCollection(Service::all());
});


function isBot($data){
    $check = false;
    
    if($data["nombre"] == $data["direccion"] || $data["nombre"] == $data["tramite"] || $data["direccion"] == $data["tramite"]){
          $check = true;
    }

    return $check;
}