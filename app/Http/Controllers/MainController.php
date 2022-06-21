<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Notifications\LaravelTelegramNotification;

class MainController extends Controller {

    public function welcome() {
        return view('welcome');
    }

    public function container() {
        return view('container');
    }

    public function prokopenko() {
        return view('prokopenko');
    }

    public function melnyk() {
        return view('melnyk');
    }

    public function shpuryk() {
        return view('shpuryk');
    }

    public function protsenko() {
        return view('protsenko');
    }

    public function kviten() {
        return view('kviten');
    }

    public function yalovenko() {
        return view('yalovenko');
    }

    public function callback() {
        $name = "не вказано";
        $phone_number = "не вказано";
        if (isset($_POST["name"])){
            $name = $_POST["name"];
        }
        if(isset($_POST["phone_number"])){
            $phone_number = $_POST["phone_number"];
        }

        $visitor = new Visitor($name, $phone_number);

        $apiToken = env('TELEGRAM_BOT_TOKEN');
        $data = [
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => 'Ім\'я: ' . $visitor->getName() . '. Номер: ' . $visitor->getPhoneNumber()
        ];

        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
            http_build_query($data) );

        return view('callback', ['obj'=>$visitor]);
    }
}
