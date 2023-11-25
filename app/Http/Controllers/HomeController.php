<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/firesmoke.json')
        ->withDatabaseUri('https://firesmoke-detection-default-rtdb.asia-southeast1.firebasedatabase.app');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total = $this->database->getReference('admin')->getValue();
        $ref = $this->database->getReference('admin')->getValue();
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/firesmoke.json');
        $api = $ref['api'];
        $asap = $ref['asap'];

        return view('home',compact('api','asap'));
    }

    function api() {
        // Mengambil nilai dari database untuk referensi 'admin'
        $adminRef = $this->database->getReference('admin')->getValue();

        // Menginisialisasi Factory dengan Service Account
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firesmoke.json');

        // Mengambil nilai 'api' dan 'asap' dari referensi 'admin'
        $api = $adminRef['api'];
        $asap = $adminRef['asap'];

        // Mengembalikan nilai atau melakukan operasi tertentu sesuai kebutuhan
        return ($adminRef);

        
    }

}
