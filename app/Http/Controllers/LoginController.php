<?php

namespace App\Http\Controllers;

use Exception;
use Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){

        if (Auth::check()) {

            $user = Auth::user();

            if( $user->IDROL == 1 ){

                return redirect()->route('calendar');

            }else{

                return redirect()->route('statistics');

            }
        }

        return view('index');
    }

    /**
     * Login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::check()) {

            $user = Auth::user();

            if( $user->IDROL == 1 ){

                return redirect()->route('calendar');

            }else{

                return redirect()->route('statistics');

            }
        }

        return view('login');
    }

    /**
     * Restablecer password.
     *
     * @return \Illuminate\Http\Response
     */
    public function restablecer()
    {
        return view('restablecer-password');
    }

    /**
     * Nuevo password.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {
        return view('nuevo-password');
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        
        Auth::logout();

        return redirect('/');
    }

    /**
     * Login.
     *
     * @return \Illuminate\Http\Response
     */
    public function handlelogin(Request $request)
    {

            $rules = [
                'userEmail'     => 'required|email|exists:USUARIOS,EMAIL',
                'userPassword'  => 'required',
            ];

            $messages = [
                'required'  => 'El campo es obligatorio.',
                'email'     => 'Ingrese su email',
                'exists'    => 'El correo no existe'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect('log')
                            ->withErrors($validator)
                            ->withInput();
            }

            $email = $request->input('userEmail');
            $password = $request->input('userPassword');        

            $ch = curl_init();

            $data = array('usuario' => $email, 'password' => $password);
            $data_string = json_encode($data);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt($ch, CURLOPT_URL,"https://i0mqxn71n1.execute-api.us-west-2.amazonaws.com/dev/login");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-api-key: R0m3FHbz7pMHbVJRDJ0N6YyxDKOCuWu8fQP2AaOc'));
            
            $server_output = curl_exec ($ch);

            $resp = json_decode($server_output);

            //Logueo Exitoso 
            if( $resp->code == 0 ){

                $user = User::where('EMAIL', '=', $email)->first();

                //Sólo pueden loguearse Administradores (1) y Analistas (3)
                if( $user->IDROL == 1 || $user->IDROL == 3){

                    Auth::login($user);

                    if( $user->IDROL == 1 ){

                        return redirect()->route('calendar');

                    }else{

                        return redirect()->route('statistics');

                    }

                }else{

                    return redirect('/log')->with('message', 'Acceso no autorisado');

                }



            } else {

                return redirect('/log')->with('message', $resp->message);

            }

            curl_close ($ch);

    }

}
