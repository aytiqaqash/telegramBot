<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    protected $telegram;

    public function __construct()
    {
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
    }

    public function handleRequest()
    {
        try {
            Telegram::commandsHandler(true);
            return 'ok';
        } catch (\Exception $exception) {
            return 'ok';
        }
    }

    public function setWebhook()
    {
        $domain = 'https://389b8699e2ab.ngrok.io/';

        $response = Telegram::setWebhook(['url' => $domain . env('TELEGRAM_BOT_TOKEN') . '/webhook']);

        return Response()->json($response);
    }

    public function getWebhookInfo(){
        return Carbon::parse($this->telegram->getWebhookInfo()->lastErrorDate)->format('d-m-Y  H:i:s') . " | " . $this->telegram->getWebhookInfo()->lastErrorMessage ;
    }

}
