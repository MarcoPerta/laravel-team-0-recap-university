## INstallazione e creazione del progetto con auth e vue
1. ```composer create-project --prefer-dist laravel/laravel:^7.0 35-laravel7-crud-university-auth-vue2```
2. ```composer require laravel/ui:^2.4```
3. ```php artisan ui vue --auth```
4. ```npm i```
5. Modifichiamo il file .env
6. ```php -S localhost:8000 -t public```
7. Su un altro terminale: ```npm run dev && npm run watch```
8. creo il nuovo controller Admin/HomeController per le pagine di backOffice
9. Modifico web.php con il gruppo rotte per il backOffice e le rotte per il frontOffice
10. Modifico il file: RouteServiceProvider.php in: ```public const HOME = '/admin';```
11. modifico l'home controller in:
```
class HomeController extends Controller
{
    // pagina di atterraggio dopo il login
    public function index()
    {
        return view('admin.home');
    }
}
```
12. Creiamo il file blade per la pagina di frontoffice in questo percorso: resources/views/guest/home.blade.php
13. struttura tipo:
```
// resources/views/guest/home.blade.php

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
		<!-- inseriamo un unico div #root a cui si aggancerà vue -->
    <div id="root"></div>

		<!-- colleghiamo il file js -->
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
```
14. Creiamo la views App.vue nel percorso: resources/js/views/App.vue con questo codice:
```
// resources/js/views/App.vue

<template>
    <work-in-progress />
</template>

<script>
import WorkInProgress from "../components/WorkInProgress";
export default {
    name: "App",
    components: {
        WorkInProgress
    }
}
</script>

<style scoped>

</style>
```
16. Creiamo il componente WorkInProgress:
```
<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <h1 class="text-uppercase">Work in progress</h1>
                <h2>Il sito è in costruzione...</h2>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WorkInProgress"
}
</script>

<style scoped>

</style>

```
17. Attiviamo il rendering del file App.vue in questo percorso: resources/js/app.js
```
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// importiamo il componente App
import App from './views/App';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#root',
    render: h => h(App), // renderizziamo App all'avvio di Vue
});
```
18. da qui in poi possiamo tornare a dedicarci al backend come abbiamo sempre fatto e nei prossimi giorni ci dedichiamo al frontoffice con view
19. Se vogliamo creare un nuovo controller per la sezione Admin dovremo inserirlo nel gruppo in questo modo:
```
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('/posts', 'PostController');
});
```
