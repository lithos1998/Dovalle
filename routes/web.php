<?php

use App\Http\Controllers\ServiceController;
use App\Http\Requests\SolicitudPresupuestoRequest;
use App\Mail\ClientGreetings;
use App\Mail\SolicitudPresupuesto;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/inicio', function () {
    return redirect('/');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/sentMail', function () {
    return redirect('/');
});

Route::get('/contacto' , function(){
    return view('home');
})->name('home.contact');

Route::post('/sentMail', function (SolicitudPresupuestoRequest $request) {    
    try{
        Mail::to(config('mail.mailto'))->send(new SolicitudPresupuesto($request));  
        Mail::to($request->request->get('email'))->send(new ClientGreetings());    
        $message = "Mail enviado correctamente, a la brevedad nos pondremos en contacto con usted.";    
    }catch(Exception $e){
        $message = "Ocurrio un error al enviar al enviar el mail, intente nuevamente mas tarde.";
    }

    session()->flash('alert', ['message'=> $message]);

    return redirect('/');
});

Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');
Route::get('/servicios/{service}', [ServiceController::class, 'show'])->name('services.show');
