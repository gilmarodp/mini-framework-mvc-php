<?php

namespace app\controller;

use app\core\Controller;

class MessageController extends Controller
{
	public function message (string $title, string $message)
	{
        http_response_code($code);
        $this->load('massage/main', [
            'title' => $title,
            'message' => $message
        ]);
	}
}