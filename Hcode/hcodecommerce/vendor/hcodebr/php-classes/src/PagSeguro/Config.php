<?php

namespace Hcode\PagSeguro;

class Config {

	//TRUE PARA HOMOLOAÇÃO E FALSE PARA PRODUÇÃO
    const SANDBOX = false;
    
    const SANDBOX_EMAIL = "gabrielbsouzadev@gmail.com";
    const PRODUCTION_EMAIL = "gabrielbsouzadev@gmail.com";

	//TOKENS DA CONTA gabrielbsouzadev@gmail.com
    const SANDBOX_TOKEN = "AC39920CF2CE4A5AA93A2919BC8346C9";
    const PRODUCTION_TOKEN = "96f213a7-2d97-4c66-a7f1-8a8e54c821674ba1eb944136ba9175c404daa4fed40d04f0-5f88-4cd5-9c4b-7044ee2d61cc";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

    const SANDBOX_URL_TRANSACTION = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions";
    const PRODUCTION_URL_TRANSACTION = "https://ws.pagseguro.uol.com.br/v2/transactions";
    
    const SANDBOX_URL_NOTIFICATION = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/";
	const PRODUCTION_URL_NOTIFICATION =	"https://ws.pagseguro.uol.com.br/v3/transactions/notifications/";

    const MAX_INSTALLMENT_NO_INTEREST = 10;
    const MAX_INSTALLMENT = 10;

    const NOTIFICATION_URL = "http://www.gabrielbsouzadeveloper.com/payment/notification";

    public static function getAuthentication():array
	{

		if (Config::SANDBOX === true)
		{

			return array(
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN
			);

		} else {

			return array(
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			);

		}

	}

	public static function getUrlSessions():string
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;

	}

	public function getUrlJS()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;

	}

	public static function getUrlTransaction()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_TRANSACTION :
		Config::PRODUCTION_URL_TRANSACTION;

	}

	public static function getNotificationTransactionURL()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_NOTIFICATION :
		Config::PRODUCTION_URL_NOTIFICATION;

	}

}