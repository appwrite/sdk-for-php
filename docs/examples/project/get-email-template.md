```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;
use Appwrite\Enums\EmailTemplateType;
use Appwrite\Enums\EmailTemplateLocale;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>') // Your project ID
    ->setKey('<YOUR_API_KEY>'); // Your secret API key

$project = new Project($client);

$result = $project->getEmailTemplate(
    templateId: EmailTemplateType::VERIFICATION(),
    locale: EmailTemplateLocale::AF() // optional
);```
