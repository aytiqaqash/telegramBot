## <p align="center"><a href="https://aytiqaqash.com" target="_blank"> TELEGRAM BOT </a></p>

## Install etmə qaydası

- Clone edirsiz: git clone https://github.com/aytiqaqash/telegramBot.git 
- Proyektə keçirsiz: cd telegramBot/
- rm -rf .git | .git qovluğunu silin. (istəsəniz özünüz üçün git init edə bilərsiz)
- composer ilə install edin: composer install
- .env fayl yaradın .env.example faylına əsasən: cp .env.example .env 
- .env faylında verilənlər bazasına qoşulmanı ayarlayın
- .env faylında telegram TELEGRAM_BOT_TOKEN və APP_URL_NGROK qeyd edin
- php artisan key:generate əmrindən istifadə edin
- php artisan serve
  edin ( [Homestead](https://aytiqaqash.medium.com/laravel-homestead-install-qaydas%C4%B1-a4da7b9fad67 ) ilə ayarlasaz
  daha yaxşı olar.)
- verilənlər bazasını migrasiya edin: php artisan migrate (vəya migrate:fresh) ümid edirəm fərqini bilirsiniz.
- cp VerifyCsrfToken_template.php app/Http/Middleware/VerifyCsrfToken.php əmrindən istifadə edib, tokeni əlavə edirik
- /setWebhook browserdən açıb true cavabı almalıyıq


## Həsr olunmuş məqalələr



## Biz sosial şəbəkələrdə

- [Youtube](https://www.youtube.com/c/AyTiQaqa%C5%9F)
- [Facebook Qrup](https://www.facebook.com/groups/aytiqaqash)
- [Facebook Səhifə](https://www.facebook.com/aytiqaqash)
- [Telegram Qrup](https://t.me/aytiqaqashlar)
- [Telegram Kanal](https://t.me/aytiqaqash)
- [İnstagram](https://www.instagram.com/aytiqaqash/)
- [Twitter](https://twitter.com/aytiqaqash)
- [Slack](https://aytiqaqash.slack.com/)
- [Discord](https://discord.gg/YTKU2SY6N3)

## Maddi dəstək ola bilərsiz

- [PayPal vəya Credit kartla](https://www.paypal.com/donate/?business=CD3ZQ7X38VXNY&no_recurring=0&item_name=AyTi+Qaqa%C5%9Fa+d%C9%99st%C9%99k)
