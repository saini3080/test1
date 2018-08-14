<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
    <link href="{{ asset('admin_asset/css/theme-default.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/backend_css/subscription_form.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.dataTables.css') }}" />
</head>

<?php 

/*https://hackernoon.com/laravel-multiple-authentication-80daa855322b
https://medium.com/employbl/easily-build-administrator-login-into-a-laravel-5-app-8a942e4fef37
https://laracasts.com/discuss/channels/general-discussion/create-middleware-to-auth-admin-users?page=0
https://laracasts.com/discuss/channels/laravel/user-admin-authentication
https://ysk-override.com/Multi-Auth-in-Laravel-54-Login-20170203/
https://laravel.com/docs/5.6/middleware

https://scotch.io/tutorials/password-verification-using-laravel-form-request
*/

?>
<body>