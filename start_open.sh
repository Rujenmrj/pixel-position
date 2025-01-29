#!/bin/bash

systemctl start mysql
code .
firefox -url "localhost:8000" & disown
php artisan serve
