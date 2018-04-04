# faq

##To run the FAQ project:

1. git clone https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other https://laravel.com/docs/5.6/database
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed

##Project Resources:

Git Repo: https://github.com/NJIT-WIS/faq

Tutorial Playlist: https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD

##Relevant Laravel Resources:

https://laravel.com/docs/5.6/eloquent

https://laravel.com/docs/5.6/database

https://laravel.com/docs/5.6/seeding

https://laravel.com/docs/5.6/testing

##Relevant General Resources

https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow

https://www.jetbrains.com/phpstorm/

http://agiledata.org/essays/tdd.html

###free alternative:
https://code.visualstudio.com/

##Prerequisites:
You need to complete upto video 20 where it has testing to begin this project, if you don't have previous experience with Laravel.

https://laracasts.com/series/laravel-from-scratch-2017



This project is to create a website + chatbot that works with slack and evnentually other chat platforms.  The idea is to make a virtual teaching assistant that can help manage questions that I receive.   Once the basic system works I want to add features that turn answering questions into a game that students earn points for. 

There is a training program for people to participate, so that we can all have the same core skill set and know how to work on the project.  This training is similar to what you might receive when being onboarded to a new company.   The training program has 2 parts:

1.  Laravel Basics -> Laracast videos 1-20
2.  FAQ project introduction videos 1-4 now but it will be a total of about 10 - 12 videos by the time i'm done with making the training program. 

The basic practices of this project are that you will take a task that is fairly small and complete the feature, testing, and everything needed to include that feature in the project.  Once we get going we will be using a task board.

There are a few different jobs that we will need eventually.   For example, we may want to have someone to design the visual of the feature and / or write specifications.  Eventually we need people to work on the hosting on heroku or AWS.  We are also going to work on some data science things this summer.   I plan on converting the current FAQ project to use a graph database before launching it in the fall to use it in 5 classes with around 160 students.