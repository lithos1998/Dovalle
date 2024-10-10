<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Requests\SolicitudPresupuestoRequest;
use App\Mail\SolicitudPresupuesto;
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

// Route::get('/sentMail', function () {
//     return redirect('/');
// });

Route::post('/sentMail', function (SolicitudPresupuestoRequest $request) {   
    try{
        if(isBot($request->validated()) == false){
            Mail::to(config('mail.mailto'))->send(new SolicitudPresupuesto($request->validated()));  
        }
        $message = "Mail enviado correctamente, a la brevedad nos pondremos en contacto con usted.";    
    }catch(Exception $e){
        dd($e);
        $message = "Ocurrio un error al enviar al enviar el mail, intente nuevamente mas tarde.";
    }
    
    session()->flash('alert', ['message'=> $message]);
    
    return redirect('/');
});

Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');


function isBot($data){
    $check = false;
    
    if($data["nombre"] == $data["direccion"] || $data["nombre"] == $data["tramite"] || $data["direccion"] == $data["tramite"]){
          $check = true;
    }

    return $check;
}