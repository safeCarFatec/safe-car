<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExecucaoServicoController;
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\VeiculoController;

Route::apiResource('clientes' , ClienteController::class);
Route::apiResource('execucoes', ExecucaoServicoController::class);
Route::apiResource('ordens'   , OrdemServicoController::class);
Route::apiResource('veiculos' , VeiculoController::class);
