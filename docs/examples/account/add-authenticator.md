<?php

use Appwrite\Client;
use Appwrite\Services\Account;
use Appwrite\Enums\AuthenticatorFactor;

$client = new Client();

$client
    ->setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('5df5acd0d48c2') // Your project ID
    ->setSession('') // The user session to authenticate with
;

$account = new Account($client);

$result = $account->addAuthenticator(AuthenticatorFactor::TOTP());