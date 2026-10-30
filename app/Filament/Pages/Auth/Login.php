<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;
use AbanoubNassem\FilamentGRecaptchaField\Forms\Components\GRecaptcha;

class Login extends BaseLogin
{
    public function form(Form $form): Form
    {
        // Ambil form default lalu sisipkan reCAPTCHA
        return parent::form($form)->schema([
            static::getEmailFormComponent(),
            static::getPasswordFormComponent(),
            static::getRememberFormComponent(),

            // reCAPTCHA v2 field
            GRecaptcha::make('captcha')
                ->rules(['required', 'captcha'])   // validasi server-side dari no-captcha
                ->columnSpanFull(),
        ]);
    }
}
