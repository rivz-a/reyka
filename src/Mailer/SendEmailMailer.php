<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * SendEmail mailer.
 */
class SendEmailMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'SendEmail';

    public function sendEmail($form)
    {
        return $this
        ->setTo('sabmailcom@gmail.com') //адрес получателя
        ->setSubject('Пример отправки сообщения пользователю') //тема сообщения
        ->setEmailFormat('html') //формат сообщения
        ->setLayout('send_email') //используемый макет (src/Template/Layout/Email/html/send_email.ctp)
        ->setTemplate('default') //используемый шаблон (src/Template/Email/html/default.ctp)
        ->set(['content'=>'<h1>'.sprintf('Здравствуйте %s', $form->name).'</h1><br> <p>Это тестовое сообщение. Отправка электронной почты в CakePHP 3</a></p>']); //текст сообщения 
    }
}
