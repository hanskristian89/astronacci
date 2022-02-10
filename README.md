# Astronacci by Yohanes Hans Kristian

## Installation
1. Clone project using `https://github.com/hanskristian89/astronacci.git` or download zip and extract it.
2. Go to the project folder and rename `.env.example` to `.env`.
3. Make sure to adjust `DB_USERNAME` and `DB_PASSWORD` field in `.env` file correspond to your configuration.
4. Create database with `laravel` as the name.
5. Open your CLI and direct it to the project folder.
6. Run commands below in order:
    - `composer install`
    - `php artisan key:generate`
    - `php artisan migrate --seed`
7. Run `php artisan serve` to access the website.
8. Go to 127.0.0.1:8000 and you are ready to go.

## Notes
1. By default after run the `php artisan migrate --seed`, there are three users which can be used to log into the app. The three users are, user.a@example.com, user.b@example.com, and user.c@example.com. All passwords are `12345`.
2. User can register to a new account by manual registration or register with Facebook or Google.
3. If user register by manual registration, they can choose the membership level.
4. If user register with Facebook or Google, the membership level by default is A, and they can upgrade it later.
5. User can log in with a regular account or with Facebook or Google.
6. All levels of membership can view the entire list of articles and videos, but can only access a certain amount of quota from each level.
