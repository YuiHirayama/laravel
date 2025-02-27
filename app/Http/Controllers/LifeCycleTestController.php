<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    // サービスプロバイダテスト1
    public function showServiceProviderTest()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');

        $sample = app()->make('serviceProviderTest');

        dd($sample, $password, $encrypt->decrypt($password));
    }
    public function showServiceContainerTest()
        
    {
        app()->bind('lefeCycleTest', function(){
            return 'ライフサイクルテスト';
        });

        $test = app()->make('lefeCycleTest');
        
        //サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();
        // dd($test, app());

        //サービスコンテナapp()ありのパターン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

    }
}

class Sample
{
    public $message;
    public function __construct(Message $message){
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
}

class Message
{
    public function send(){
        echo('メッセージ表示');
    }
}