<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------

| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com) 

|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/

$config['google_client_id']        = '118679444879-es90qui0bek13mbsc7uv8ikpj0386h39.apps.googleusercontent.com';
$config['google_client_secret']    = '4kw2mt8cWQdz211Ezx7DYeei';
$config['google_redirect_uri']     = base_url().'google/login';
$config['google_application_name'] = 'Web client 1';
$config['google_api_key']          = '';
$config['google_scopes']           = array();