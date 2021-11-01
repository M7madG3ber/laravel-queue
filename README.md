#  Send Email in Background Using Laravel Queue

## Installation
- Add Queue Driver in .env file `database` Or `redis`
- Add Database Configration in .env file
- `php artisan migrate`
- `php artisan db:seed`
- Open `send/emails` Route
- Run `php artisan schedule:run` Or Add it in cron job