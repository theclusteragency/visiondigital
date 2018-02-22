<?php

namespace App\Http\Controllers;

use Exception;
use Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RafaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Página de Usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return view('users');
    }

    /**
     * Página del Calendario.
     *
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        return view('calendar');
    }

    /**
     * Página del Mapa de Eventos.
     *
     * @return \Illuminate\Http\Response
     */
    public function map()
    {
        return view('map');
    }

    /**
     * Página del Mapa de Usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_map()
    {
        return view('user-map');
    }

    /**
     * Página del Evento.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {
        return view('event');
    }

    /**
     * Página de Categorias.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('categories');
    }

    /**
     * Página de Actividades.
     *
     * @return \Illuminate\Http\Response
     */
    public function activities()
    {
        return view('activities');
    }

    /**
     * Página de Gráficas.
     *
     * @return \Illuminate\Http\Response
     */
    public function statistics()
    {
        return view('statistics');
    }

    /**
     * Página de Registros.
     *
     * @return \Illuminate\Http\Response
     */
    public function operation()
    {
        return view('operation');
    }

    /**
     * Página de Chat.
     *
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        return view('chat');
    }

     /**
     * Listado de eventos.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        return view('events');
    }

}
