<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Author" lang="fr" content="Gobet Jérémy" />
        <meta name="Description" content="Site du Groupement Autonome de Basket Ball Genève : association organisant un championnat de basket ball depuis 1951" />
        <meta name="Keywords" lang="fr" content="gabasket gab basket Genève Geneve Geneva Genf groupement autonome championnat challenge équipes team tournoi tournament coupe" />
        <meta name="Reply-to" content="Gobet Jérémy" />
        <meta name="Publisher" content="Gobet Jérémy" />
        <title>GAB</title>
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- App vue.js -->
        <div id="app"></div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
