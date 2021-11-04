<?php
use App\Http\Livewire\Afp\Afps;
use App\Http\Livewire\Afp\CreateAfp;
use App\Http\Livewire\Afp\UpdateAfp;
use App\Http\Livewire\Arl\Arls;
use App\Http\Livewire\Arl\CreateArl;
use App\Http\Livewire\Arl\UpdateArl;
use App\Http\Livewire\Cesantia\Cesantias;
use App\Http\Livewire\Cesantia\CreateCesantia;
use App\Http\Livewire\Cesantia\UpdateCesantia;
use App\Http\Livewire\Contrato\Contratos;
use App\Http\Livewire\Empleados\Empleados;
use App\Http\Livewire\Eps\CreateEps;
use App\Http\Livewire\Eps\Epses;
use App\Http\Livewire\Eps\UpdateEps;
use App\Http\Livewire\Licencia\CreateLicencia;
use App\Http\Livewire\Licencia\Licencias;
use App\Http\Livewire\Licencia\UpdateLicencia;
use App\Http\Livewire\Soat\ShowSoat;
use App\Http\Livewire\Soat\Soats;
use App\Http\Livewire\Soat\create;
use App\Http\Livewire\Sucursales\Sucursal;
use App\Http\Livewire\Tecnicomecanica\CreateTecnicomecanica;
use App\Http\Livewire\Tecnicomecanica\ShowTecnicomecanica;
use App\Http\Livewire\Tecnicomecanica\Tecnicomecanicas;
use App\Http\Livewire\TipoContrato\TipoContratos;
use App\Http\Livewire\Vehiculo\Show;
use App\Http\Livewire\Vehiculo\Vehiculos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/empleados', Empleados::class);
    Route::get('/vehiculos', Vehiculos::class);
    Route::get('/show-vehicles/{id}', Show::class);
    Route::get('/soat', Soats::class);
    Route::get('/create-soats', create::class);
    Route::get('/show-soat/{id}', ShowSoat::class);
    Route::get('/eps', Epses::class);
    Route::get('/create-eps', CreateEps::class);
    Route::get('/update-eps/{id}', UpdateEps::class);
    Route::get('/arl', Arls::class);
    Route::get('/create-arl', CreateArl::class);
    Route::get('/update-arl/{id}', UpdateArl::class);
    Route::get('/afp', Afps::class);
    Route::get('/create-afp', CreateAfp::class);
    Route::get('/update-afp/{id}', UpdateAfp::class);
    Route::get('/cesantias', Cesantias::class);
    Route::get('/create-cesantia', CreateCesantia::class);
    Route::get('/update-cesantia/{id}', UpdateCesantia::class);
    Route::get('/tipoContratos', TipoContratos::class);
    Route::get('/contratos', Contratos::class);
    Route::get('/tecnicomecanica', Tecnicomecanicas::class);
    Route::get('/create-tecnicomecanica', CreateTecnicomecanica::class);
    Route::get('/show-tecnicomecanica/{id}', ShowTecnicomecanica::class);
    Route::get('/sucursal', Sucursal::class);
    Route::get('/licencia', Licencias::class);
    Route::get('/create-licencia', CreateLicencia::class);
    Route::get('/update-licencia/{id}', UpdateLicencia::class);
});
