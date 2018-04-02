# faq

To run the FAQ project:

1. git clone https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/5.6/database)
5. Run: php artisan migrate
6. Run: unit tests: phpunit
7. Run: seeds php artisan migrate:refresh --seed


YouTube Video Series on This Project: https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD