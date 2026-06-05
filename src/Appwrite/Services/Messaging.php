<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\MessagePriority;
use Appwrite\Enums\SmtpEncryption;

class Messaging extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all messages from the current Appwrite project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\MessageList
     */
    public function listMessages(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\MessageList
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/messages'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MessageList::from($response);

    }

    /**
     * Create a new email message.
     *
     * @param string $messageId
     * @param string $subject
     * @param string $content
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?array $cc
     * @param ?array $bcc
     * @param ?array $attachments
     * @param ?bool $draft
     * @param ?bool $html
     * @param ?string $scheduledAt
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function createEmail(string $messageId, string $subject, string $content, ?array $topics = null, ?array $users = null, ?array $targets = null, ?array $cc = null, ?array $bcc = null, ?array $attachments = null, ?bool $draft = null, ?bool $html = null, ?string $scheduledAt = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/messages/email'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;
        $apiParams['subject'] = $subject;
        $apiParams['content'] = $content;

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($cc)) {
            $apiParams['cc'] = $cc;
        }

        if (!is_null($bcc)) {
            $apiParams['bcc'] = $bcc;
        }

        if (!is_null($attachments)) {
            $apiParams['attachments'] = $attachments;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }

        if (!is_null($html)) {
            $apiParams['html'] = $html;
        }
        $apiParams['scheduledAt'] = $scheduledAt;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Update an email message by its unique ID. This endpoint only works on
     * messages that are in draft status. Messages that are already processing,
     * sent, or failed cannot be updated.
     * 
     *
     * @param string $messageId
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?string $subject
     * @param ?string $content
     * @param ?bool $draft
     * @param ?bool $html
     * @param ?array $cc
     * @param ?array $bcc
     * @param ?string $scheduledAt
     * @param ?array $attachments
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function updateEmail(string $messageId, ?array $topics = null, ?array $users = null, ?array $targets = null, ?string $subject = null, ?string $content = null, ?bool $draft = null, ?bool $html = null, ?array $cc = null, ?array $bcc = null, ?string $scheduledAt = null, ?array $attachments = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/email/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;
        $apiParams['topics'] = $topics;
        $apiParams['users'] = $users;
        $apiParams['targets'] = $targets;
        $apiParams['subject'] = $subject;
        $apiParams['content'] = $content;
        $apiParams['draft'] = $draft;
        $apiParams['html'] = $html;
        $apiParams['cc'] = $cc;
        $apiParams['bcc'] = $bcc;
        $apiParams['scheduledAt'] = $scheduledAt;
        $apiParams['attachments'] = $attachments;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Create a new push notification.
     *
     * @param string $messageId
     * @param ?string $title
     * @param ?string $body
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?array $data
     * @param ?string $action
     * @param ?string $image
     * @param ?string $icon
     * @param ?string $sound
     * @param ?string $color
     * @param ?string $tag
     * @param ?int $badge
     * @param ?bool $draft
     * @param ?string $scheduledAt
     * @param ?bool $contentAvailable
     * @param ?bool $critical
     * @param ?MessagePriority $priority
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function createPush(string $messageId, ?string $title = null, ?string $body = null, ?array $topics = null, ?array $users = null, ?array $targets = null, ?array $data = null, ?string $action = null, ?string $image = null, ?string $icon = null, ?string $sound = null, ?string $color = null, ?string $tag = null, ?int $badge = null, ?bool $draft = null, ?string $scheduledAt = null, ?bool $contentAvailable = null, ?bool $critical = null, ?MessagePriority $priority = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/messages/push'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }
        $apiParams['data'] = $data;

        if (!is_null($action)) {
            $apiParams['action'] = $action;
        }

        if (!is_null($image)) {
            $apiParams['image'] = $image;
        }

        if (!is_null($icon)) {
            $apiParams['icon'] = $icon;
        }

        if (!is_null($sound)) {
            $apiParams['sound'] = $sound;
        }

        if (!is_null($color)) {
            $apiParams['color'] = $color;
        }

        if (!is_null($tag)) {
            $apiParams['tag'] = $tag;
        }

        if (!is_null($badge)) {
            $apiParams['badge'] = $badge;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }
        $apiParams['scheduledAt'] = $scheduledAt;

        if (!is_null($contentAvailable)) {
            $apiParams['contentAvailable'] = $contentAvailable;
        }

        if (!is_null($critical)) {
            $apiParams['critical'] = $critical;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Update a push notification by its unique ID. This endpoint only works on
     * messages that are in draft status. Messages that are already processing,
     * sent, or failed cannot be updated.
     * 
     *
     * @param string $messageId
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?string $title
     * @param ?string $body
     * @param ?array $data
     * @param ?string $action
     * @param ?string $image
     * @param ?string $icon
     * @param ?string $sound
     * @param ?string $color
     * @param ?string $tag
     * @param ?int $badge
     * @param ?bool $draft
     * @param ?string $scheduledAt
     * @param ?bool $contentAvailable
     * @param ?bool $critical
     * @param ?MessagePriority $priority
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function updatePush(string $messageId, ?array $topics = null, ?array $users = null, ?array $targets = null, ?string $title = null, ?string $body = null, ?array $data = null, ?string $action = null, ?string $image = null, ?string $icon = null, ?string $sound = null, ?string $color = null, ?string $tag = null, ?int $badge = null, ?bool $draft = null, ?string $scheduledAt = null, ?bool $contentAvailable = null, ?bool $critical = null, ?MessagePriority $priority = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/push/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;
        $apiParams['topics'] = $topics;
        $apiParams['users'] = $users;
        $apiParams['targets'] = $targets;
        $apiParams['title'] = $title;
        $apiParams['body'] = $body;
        $apiParams['data'] = $data;
        $apiParams['action'] = $action;
        $apiParams['image'] = $image;
        $apiParams['icon'] = $icon;
        $apiParams['sound'] = $sound;
        $apiParams['color'] = $color;
        $apiParams['tag'] = $tag;
        $apiParams['badge'] = $badge;
        $apiParams['draft'] = $draft;
        $apiParams['scheduledAt'] = $scheduledAt;
        $apiParams['contentAvailable'] = $contentAvailable;
        $apiParams['critical'] = $critical;
        $apiParams['priority'] = $priority;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Create a new SMS message.
     *
     * @param string $messageId
     * @param string $content
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?bool $draft
     * @param ?string $scheduledAt
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function createSMS(string $messageId, string $content, ?array $topics = null, ?array $users = null, ?array $targets = null, ?bool $draft = null, ?string $scheduledAt = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/messages/sms'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;
        $apiParams['content'] = $content;

        if (!is_null($topics)) {
            $apiParams['topics'] = $topics;
        }

        if (!is_null($users)) {
            $apiParams['users'] = $users;
        }

        if (!is_null($targets)) {
            $apiParams['targets'] = $targets;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }
        $apiParams['scheduledAt'] = $scheduledAt;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Update an SMS message by its unique ID. This endpoint only works on
     * messages that are in draft status. Messages that are already processing,
     * sent, or failed cannot be updated.
     * 
     *
     * @param string $messageId
     * @param ?array $topics
     * @param ?array $users
     * @param ?array $targets
     * @param ?string $content
     * @param ?bool $draft
     * @param ?string $scheduledAt
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function updateSMS(string $messageId, ?array $topics = null, ?array $users = null, ?array $targets = null, ?string $content = null, ?bool $draft = null, ?string $scheduledAt = null): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/sms/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;
        $apiParams['topics'] = $topics;
        $apiParams['users'] = $users;
        $apiParams['targets'] = $targets;
        $apiParams['content'] = $content;
        $apiParams['draft'] = $draft;
        $apiParams['scheduledAt'] = $scheduledAt;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Get a message by its unique ID.
     * 
     *
     * @param string $messageId
     * @throws AppwriteException
     * @return \Appwrite\Models\Message
     */
    public function getMessage(string $messageId): \Appwrite\Models\Message
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Message::from($response);

    }

    /**
     * Delete a message. If the message is not a draft or scheduled, but has been
     * sent, this will not recall the message.
     *
     * @param string $messageId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $messageId): string
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/{messageId}'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get the message activity logs listed by its unique ID.
     *
     * @param string $messageId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\LogList
     */
    public function listMessageLogs(string $messageId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\LogList
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/{messageId}/logs'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LogList::from($response);

    }

    /**
     * Get a list of the targets associated with a message.
     *
     * @param string $messageId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\TargetList
     */
    public function listTargets(string $messageId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\TargetList
    {
        $apiPath = str_replace(
            ['{messageId}'],
            [$messageId],
            '/messaging/messages/{messageId}/targets'
        );

        $apiParams = [];
        $apiParams['messageId'] = $messageId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\TargetList::from($response);

    }

    /**
     * Get a list of all providers from the current Appwrite project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ProviderList
     */
    public function listProviders(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\ProviderList
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ProviderList::from($response);

    }

    /**
     * Create a new Apple Push Notification service provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $authKey
     * @param ?string $authKeyId
     * @param ?string $teamId
     * @param ?string $bundleId
     * @param ?bool $sandbox
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createAPNSProvider(string $providerId, string $name, ?string $authKey = null, ?string $authKeyId = null, ?string $teamId = null, ?string $bundleId = null, ?bool $sandbox = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/apns'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($authKeyId)) {
            $apiParams['authKeyId'] = $authKeyId;
        }

        if (!is_null($teamId)) {
            $apiParams['teamId'] = $teamId;
        }

        if (!is_null($bundleId)) {
            $apiParams['bundleId'] = $bundleId;
        }

        if (!is_null($sandbox)) {
            $apiParams['sandbox'] = $sandbox;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Apple Push Notification service provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $authKey
     * @param ?string $authKeyId
     * @param ?string $teamId
     * @param ?string $bundleId
     * @param ?bool $sandbox
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateAPNSProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $authKey = null, ?string $authKeyId = null, ?string $teamId = null, ?string $bundleId = null, ?bool $sandbox = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/apns/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($authKeyId)) {
            $apiParams['authKeyId'] = $authKeyId;
        }

        if (!is_null($teamId)) {
            $apiParams['teamId'] = $teamId;
        }

        if (!is_null($bundleId)) {
            $apiParams['bundleId'] = $bundleId;
        }
        $apiParams['sandbox'] = $sandbox;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Firebase Cloud Messaging provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?array $serviceAccountJSON
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createFCMProvider(string $providerId, string $name, ?array $serviceAccountJSON = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/fcm'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;
        $apiParams['serviceAccountJSON'] = $serviceAccountJSON;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Firebase Cloud Messaging provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?array $serviceAccountJSON
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateFCMProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?array $serviceAccountJSON = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/fcm/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;
        $apiParams['serviceAccountJSON'] = $serviceAccountJSON;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Mailgun provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $apiKey
     * @param ?string $domain
     * @param ?bool $isEuRegion
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createMailgunProvider(string $providerId, string $name, ?string $apiKey = null, ?string $domain = null, ?bool $isEuRegion = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/mailgun'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }
        $apiParams['isEuRegion'] = $isEuRegion;

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Mailgun provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?string $apiKey
     * @param ?string $domain
     * @param ?bool $isEuRegion
     * @param ?bool $enabled
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateMailgunProvider(string $providerId, ?string $name = null, ?string $apiKey = null, ?string $domain = null, ?bool $isEuRegion = null, ?bool $enabled = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/mailgun/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }
        $apiParams['isEuRegion'] = $isEuRegion;
        $apiParams['enabled'] = $enabled;

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new MSG91 provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $templateId
     * @param ?string $senderId
     * @param ?string $authKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createMsg91Provider(string $providerId, string $name, ?string $templateId = null, ?string $senderId = null, ?string $authKey = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/msg91'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($templateId)) {
            $apiParams['templateId'] = $templateId;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a MSG91 provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $templateId
     * @param ?string $senderId
     * @param ?string $authKey
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateMsg91Provider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $templateId = null, ?string $senderId = null, ?string $authKey = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/msg91/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($templateId)) {
            $apiParams['templateId'] = $templateId;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Resend provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $apiKey
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createResendProvider(string $providerId, string $name, ?string $apiKey = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/resend'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Resend provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $apiKey
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateResendProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $apiKey = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/resend/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Sendgrid provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $apiKey
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createSendgridProvider(string $providerId, string $name, ?string $apiKey = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/sendgrid'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Sendgrid provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $apiKey
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateSendgridProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $apiKey = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/sendgrid/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Amazon SES provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $accessKey
     * @param ?string $secretKey
     * @param ?string $region
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createSesProvider(string $providerId, string $name, ?string $accessKey = null, ?string $secretKey = null, ?string $region = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/ses'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($accessKey)) {
            $apiParams['accessKey'] = $accessKey;
        }

        if (!is_null($secretKey)) {
            $apiParams['secretKey'] = $secretKey;
        }

        if (!is_null($region)) {
            $apiParams['region'] = $region;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update an Amazon SES provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $accessKey
     * @param ?string $secretKey
     * @param ?string $region
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateSesProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $accessKey = null, ?string $secretKey = null, ?string $region = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/ses/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($accessKey)) {
            $apiParams['accessKey'] = $accessKey;
        }

        if (!is_null($secretKey)) {
            $apiParams['secretKey'] = $secretKey;
        }

        if (!is_null($region)) {
            $apiParams['region'] = $region;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new SMTP provider.
     *
     * @param string $providerId
     * @param string $name
     * @param string $host
     * @param ?int $port
     * @param ?string $username
     * @param ?string $password
     * @param ?SmtpEncryption $encryption
     * @param ?bool $autoTLS
     * @param ?string $mailer
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createSMTPProvider(string $providerId, string $name, string $host, ?int $port = null, ?string $username = null, ?string $password = null, ?SmtpEncryption $encryption = null, ?bool $autoTLS = null, ?string $mailer = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/smtp'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;
        $apiParams['host'] = $host;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }

        if (!is_null($autoTLS)) {
            $apiParams['autoTLS'] = $autoTLS;
        }

        if (!is_null($mailer)) {
            $apiParams['mailer'] = $mailer;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a SMTP provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?string $host
     * @param ?int $port
     * @param ?string $username
     * @param ?string $password
     * @param ?SmtpEncryption $encryption
     * @param ?bool $autoTLS
     * @param ?string $mailer
     * @param ?string $fromName
     * @param ?string $fromEmail
     * @param ?string $replyToName
     * @param ?string $replyToEmail
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateSMTPProvider(string $providerId, ?string $name = null, ?string $host = null, ?int $port = null, ?string $username = null, ?string $password = null, ?SmtpEncryption $encryption = null, ?bool $autoTLS = null, ?string $mailer = null, ?string $fromName = null, ?string $fromEmail = null, ?string $replyToName = null, ?string $replyToEmail = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/smtp/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($host)) {
            $apiParams['host'] = $host;
        }
        $apiParams['port'] = $port;

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($encryption)) {
            $apiParams['encryption'] = $encryption;
        }
        $apiParams['autoTLS'] = $autoTLS;

        if (!is_null($mailer)) {
            $apiParams['mailer'] = $mailer;
        }

        if (!is_null($fromName)) {
            $apiParams['fromName'] = $fromName;
        }

        if (!is_null($fromEmail)) {
            $apiParams['fromEmail'] = $fromEmail;
        }

        if (!is_null($replyToName)) {
            $apiParams['replyToName'] = $replyToName;
        }

        if (!is_null($replyToEmail)) {
            $apiParams['replyToEmail'] = $replyToEmail;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Telesign provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $from
     * @param ?string $customerId
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createTelesignProvider(string $providerId, string $name, ?string $from = null, ?string $customerId = null, ?string $apiKey = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/telesign'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($customerId)) {
            $apiParams['customerId'] = $customerId;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Telesign provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $customerId
     * @param ?string $apiKey
     * @param ?string $from
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateTelesignProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $customerId = null, ?string $apiKey = null, ?string $from = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/telesign/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($customerId)) {
            $apiParams['customerId'] = $customerId;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Textmagic provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $from
     * @param ?string $username
     * @param ?string $apiKey
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createTextmagicProvider(string $providerId, string $name, ?string $from = null, ?string $username = null, ?string $apiKey = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/textmagic'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Textmagic provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $username
     * @param ?string $apiKey
     * @param ?string $from
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateTextmagicProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $username = null, ?string $apiKey = null, ?string $from = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/textmagic/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Twilio provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $from
     * @param ?string $accountSid
     * @param ?string $authToken
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createTwilioProvider(string $providerId, string $name, ?string $from = null, ?string $accountSid = null, ?string $authToken = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/twilio'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Twilio provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $accountSid
     * @param ?string $authToken
     * @param ?string $from
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateTwilioProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $accountSid = null, ?string $authToken = null, ?string $from = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/twilio/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Create a new Vonage provider.
     *
     * @param string $providerId
     * @param string $name
     * @param ?string $from
     * @param ?string $apiKey
     * @param ?string $apiSecret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function createVonageProvider(string $providerId, string $name, ?string $from = null, ?string $apiKey = null, ?string $apiSecret = null, ?bool $enabled = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/providers/vonage'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;
        $apiParams['name'] = $name;

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Update a Vonage provider by its unique ID.
     *
     * @param string $providerId
     * @param ?string $name
     * @param ?bool $enabled
     * @param ?string $apiKey
     * @param ?string $apiSecret
     * @param ?string $from
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function updateVonageProvider(string $providerId, ?string $name = null, ?bool $enabled = null, ?string $apiKey = null, ?string $apiSecret = null, ?string $from = null): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/vonage/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['enabled'] = $enabled;

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Get a provider by its unique ID.
     * 
     *
     * @param string $providerId
     * @throws AppwriteException
     * @return \Appwrite\Models\Provider
     */
    public function getProvider(string $providerId): \Appwrite\Models\Provider
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Provider::from($response);

    }

    /**
     * Delete a provider by its unique ID.
     *
     * @param string $providerId
     * @throws AppwriteException
     * @return string
     */
    public function deleteProvider(string $providerId): string
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/{providerId}'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get the provider activity logs listed by its unique ID.
     *
     * @param string $providerId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\LogList
     */
    public function listProviderLogs(string $providerId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\LogList
    {
        $apiPath = str_replace(
            ['{providerId}'],
            [$providerId],
            '/messaging/providers/{providerId}/logs'
        );

        $apiParams = [];
        $apiParams['providerId'] = $providerId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LogList::from($response);

    }

    /**
     * Get the subscriber activity logs listed by its unique ID.
     *
     * @param string $subscriberId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\LogList
     */
    public function listSubscriberLogs(string $subscriberId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\LogList
    {
        $apiPath = str_replace(
            ['{subscriberId}'],
            [$subscriberId],
            '/messaging/subscribers/{subscriberId}/logs'
        );

        $apiParams = [];
        $apiParams['subscriberId'] = $subscriberId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LogList::from($response);

    }

    /**
     * Get a list of all topics from the current Appwrite project.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\TopicList
     */
    public function listTopics(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\TopicList
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/topics'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\TopicList::from($response);

    }

    /**
     * Create a new topic.
     *
     * @param string $topicId
     * @param string $name
     * @param ?array $subscribe
     * @throws AppwriteException
     * @return \Appwrite\Models\Topic
     */
    public function createTopic(string $topicId, string $name, ?array $subscribe = null): \Appwrite\Models\Topic
    {
        $apiPath = str_replace(
            [],
            [],
            '/messaging/topics'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['name'] = $name;

        if (!is_null($subscribe)) {
            $apiParams['subscribe'] = $subscribe;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Topic::from($response);

    }

    /**
     * Get a topic by its unique ID.
     * 
     *
     * @param string $topicId
     * @throws AppwriteException
     * @return \Appwrite\Models\Topic
     */
    public function getTopic(string $topicId): \Appwrite\Models\Topic
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Topic::from($response);

    }

    /**
     * Update a topic by its unique ID.
     * 
     *
     * @param string $topicId
     * @param ?string $name
     * @param ?array $subscribe
     * @throws AppwriteException
     * @return \Appwrite\Models\Topic
     */
    public function updateTopic(string $topicId, ?string $name = null, ?array $subscribe = null): \Appwrite\Models\Topic
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['name'] = $name;
        $apiParams['subscribe'] = $subscribe;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Topic::from($response);

    }

    /**
     * Delete a topic by its unique ID.
     *
     * @param string $topicId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTopic(string $topicId): string
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get the topic activity logs listed by its unique ID.
     *
     * @param string $topicId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\LogList
     */
    public function listTopicLogs(string $topicId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\LogList
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}/logs'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LogList::from($response);

    }

    /**
     * Get a list of all subscribers from the current Appwrite project.
     *
     * @param string $topicId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\SubscriberList
     */
    public function listSubscribers(string $topicId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\SubscriberList
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}/subscribers'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\SubscriberList::from($response);

    }

    /**
     * Create a new subscriber.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @param string $targetId
     * @throws AppwriteException
     * @return \Appwrite\Models\Subscriber
     */
    public function createSubscriber(string $topicId, string $subscriberId, string $targetId): \Appwrite\Models\Subscriber
    {
        $apiPath = str_replace(
            ['{topicId}'],
            [$topicId],
            '/messaging/topics/{topicId}/subscribers'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;
        $apiParams['targetId'] = $targetId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Subscriber::from($response);

    }

    /**
     * Get a subscriber by its unique ID.
     * 
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws AppwriteException
     * @return \Appwrite\Models\Subscriber
     */
    public function getSubscriber(string $topicId, string $subscriberId): \Appwrite\Models\Subscriber
    {
        $apiPath = str_replace(
            ['{topicId}', '{subscriberId}'],
            [$topicId, $subscriberId],
            '/messaging/topics/{topicId}/subscribers/{subscriberId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Subscriber::from($response);

    }

    /**
     * Delete a subscriber by its unique ID.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws AppwriteException
     * @return string
     */
    public function deleteSubscriber(string $topicId, string $subscriberId): string
    {
        $apiPath = str_replace(
            ['{topicId}', '{subscriberId}'],
            [$topicId, $subscriberId],
            '/messaging/topics/{topicId}/subscribers/{subscriberId}'
        );

        $apiParams = [];
        $apiParams['topicId'] = $topicId;
        $apiParams['subscriberId'] = $subscriberId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
