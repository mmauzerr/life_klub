<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
//    public $subject;
    public $body;
//    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name','body','email'], 'required','message' => 'Obavezno Polje!'],
            [['name', 'body'], 'string'],
            ['email', 'email','message' => 'Morate uneti validan email!'],

        // verifyCode needs to be entered correctly
//          ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels() {
        return [
            'name' => 'Ime',
            'body' => 'Sadrzaj',
            'email' => 'Email'
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            $this->body = ("Kontakt emil: {$this->email}\r\n" . $this->body);
            return Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom('sajt-kontakt@lifeklub.rs')
                ->setReplyTo($this->email)
                ->setSubject($this->name)
                ->setTextBody($this->body)
                ->send();
        }
        return Yii::$app->session->setFlash('error', 'Došlo je do greške prilikom slanja email-a. Molim vas pokušajte ponovo');
    }
}
