
source-github

i already run composer require beyondcode/laravel-websockets:1.14.1
Error:

Problem 1
    - react/http[v1.1.0, ..., v1.9.0] require psr/http-message ^1.0 -> found psr/http-message[1.0, 1.0.1, 1.1] but the package is fixed to 2.0 (lock file version) ....
    - beyondcode/laravel-websockets 1.14.1 requires react/http ^1.1 -> satisfiable by react/http[v1.1.0, ..., v1.9.0].
    - Root composer.json requires beyondcode/laravel-websockets 1.14.1 -> satisfiable by beyondcode/laravel-websockets[1.14.1].



Solutions: composer require beyondcode/laravel-websockets:1.14.1 -W