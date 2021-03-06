<?php

class Mailer
{

}

class RegistersUsers
{
    protected $mailer;
    
    public function __construct(Mailer $mailer){
        
        $this->mailer = $mailer;
    }
}

App::singleton('foo', function(){
    return new RegistersUsers(new Mailer);
});

$one = app('foo');

$two = app('foo');

var_dump($one, $two);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
