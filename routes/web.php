<?php

    // Page d'accueil
Route::get('/', 'UrlsController@create');

    // Génération de d'url avec validation du champ.
Route::post('/', 'UrlsController@store');

    // Redirigez l'URL si elle existe déjà/a déjà été raccourcie
Route::get('/{shortened}', 'UrlsController@show');

