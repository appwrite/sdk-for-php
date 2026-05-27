```php
<?php

use Appwrite\Client;
use Appwrite\Services\Functions;
use Appwrite\Enums\FunctionRuntime;
use Appwrite\Enums\ProjectKeyScopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$functions = new Functions($client);

$result = $functions->create(
    functionId: '<FUNCTION_ID>',
    name: '<NAME>',
    runtime: FunctionRuntime::NODE145(),
    execute: ["any"], // optional
    events: [], // optional
    schedule: '', // optional
    timeout: 1, // optional
    enabled: false, // optional
    logging: false, // optional
    entrypoint: '<ENTRYPOINT>', // optional
    commands: '<COMMANDS>', // optional
    scopes: [ProjectKeyScopes::PROJECTREAD()], // optional
    installationId: '<INSTALLATION_ID>', // optional
    providerRepositoryId: '<PROVIDER_REPOSITORY_ID>', // optional
    providerBranch: '<PROVIDER_BRANCH>', // optional
    providerSilentMode: false, // optional
    providerRootDirectory: '<PROVIDER_ROOT_DIRECTORY>', // optional
    providerBranches: [], // optional
    providerPaths: [], // optional
    buildSpecification: '', // optional
    runtimeSpecification: '', // optional
    deploymentRetention: 0 // optional
);```
