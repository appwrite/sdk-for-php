```php
<?php

use Appwrite\Client;
use Appwrite\Services\Functions;
use Appwrite\Enums\Runtime;
use Appwrite\Enums\ProjectKeyScopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$functions = new Functions($client);

$result = $functions->create(
    functionId: '<FUNCTION_ID>',
    name: '<NAME>',
    runtime: Runtime::NODE145(),
    execute: ["any"], // optional
    events: [], // optional
    schedule: '0 0 * * *', // optional
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
    buildSpecification: 's-1vcpu-512mb', // optional
    runtimeSpecification: 's-1vcpu-512mb', // optional
    deploymentRetention: 0 // optional
);
```
