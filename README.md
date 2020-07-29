# ApiBlade

Various experiments with APIs in Laravel 7, using stock Blade templates.

## APIs

###  NASA Astronomy Photograph of the Day 

Created a command apod:get which is scheduled to run in the morning once a day. Pulls data into apod table.
View pulls latest record and displays.

## Start + Resetting

To start, `sudo docker-compose up` then `composer run reseed` to run migrations and seeders.
Then `php artisan apod:get` to get first apod data.


## Versions

* 1.0.0 Add NASA Astronomy Photograph of the Day 
