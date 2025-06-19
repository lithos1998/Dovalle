<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TaxesController;
use App\Http\Controllers\UserController;
use App\Http\Requests\SolicitudPresupuestoRequest;
use App\Mail\SolicitudPresupuesto;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
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

Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');

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


// panel

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');


Route::domain(app()->environment('local') ? 'localhost' : 'admin.estudiodovalle.com')->middleware('auth')->group(function () {
    Route::get('/panel', function () {
        return view('panel.index');
    })->name('panel.index');

    Route::post('/login/{id}/manage', [LoginController::class, 'manage'])->name('login.manage');
    Route::post('/login/{id}/changePassword', [LoginController::class, 'changePassword'])->name('login.changePassword');
    
    Route::resource('admin', AdminController::class);
    Route::resource('clientes', ClientController::class);
    Route::resource('ventas', SalesController::class);
    Route::resource('presupuestos', BudgetController::class);
    Route::put('/presupuestos/{id}/changeStatus', [BudgetController::class, 'changeStatus'])->name('presupuestos.changeStatus');
    Route::resource('items',ItemController::class);
    Route::resource('impuestos',TaxesController::class);
    Route::resource('usuarios',UserController::class);
});


function isBot($data){
    $check = false;
    
    if($data["nombre"] == $data["direccion"] || $data["nombre"] == $data["tramite"] || $data["direccion"] == $data["tramite"]){
          $check = true;
    }

    return $check;
}