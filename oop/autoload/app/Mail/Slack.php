<?php 
namespace App\Mail;
use App\Interfaces\Notification;

class Slack implements Notification{
	public function send()
	{
		return 'Slack !';
	}
}