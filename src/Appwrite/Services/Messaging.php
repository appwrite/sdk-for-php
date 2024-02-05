<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\MessageType;
use Appwrite\Enums\SMTPEncryption;

class Messaging extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List messages
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listMessages(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/messaging/messages');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create an email.
     *
     * @param string $messageId
     * @param string $subject
     * @param string $content
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param array $cc
     * @param array $bcc
     * @param MessageType $status
     * @param bool $html
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function createEmail(string $messageId, string $subject, string $content, array $topics = null, array $users = null, array $targets = null, array $cc = null, array $bcc = null, MessageType $status = null, bool $html = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace([], [], '/messaging/messages/email');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }
        if (!isset($subject)) {
            throw new AppwriteException('Missing required parameter: "subject"');
        }
        if (!isset($content)) {
            throw new AppwriteException('Missing required parameter: "content"');
        }
        if (!is_null($messageId)) {
            $apiParams['messageId'] = $messageId;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($content)) {
            $apiParams['content'] = $content;
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

        if (!is_null($cc)) {
            $apiParams['cc'] = $cc;
        }

        if (!is_null($bcc)) {
            $apiParams['bcc'] = $bcc;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($html)) {
            $apiParams['html'] = $html;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update an email.
     *
     * @param string $messageId
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param string $subject
     * @param string $content
     * @param MessageType $status
     * @param bool $html
     * @param array $cc
     * @param array $bcc
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function updateEmail(string $messageId, array $topics = null, array $users = null, array $targets = null, string $subject = null, string $content = null, MessageType $status = null, bool $html = null, array $cc = null, array $bcc = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/email/{messageId}');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
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

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($content)) {
            $apiParams['content'] = $content;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($html)) {
            $apiParams['html'] = $html;
        }

        if (!is_null($cc)) {
            $apiParams['cc'] = $cc;
        }

        if (!is_null($bcc)) {
            $apiParams['bcc'] = $bcc;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create a push notification.
     *
     * @param string $messageId
     * @param string $title
     * @param string $body
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param array $data
     * @param string $action
     * @param string $icon
     * @param string $sound
     * @param string $color
     * @param string $tag
     * @param string $badge
     * @param MessageType $status
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function createPush(string $messageId, string $title, string $body, array $topics = null, array $users = null, array $targets = null, array $data = null, string $action = null, string $icon = null, string $sound = null, string $color = null, string $tag = null, string $badge = null, MessageType $status = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace([], [], '/messaging/messages/push');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }
        if (!isset($title)) {
            throw new AppwriteException('Missing required parameter: "title"');
        }
        if (!isset($body)) {
            throw new AppwriteException('Missing required parameter: "body"');
        }
        if (!is_null($messageId)) {
            $apiParams['messageId'] = $messageId;
        }

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

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($action)) {
            $apiParams['action'] = $action;
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

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update a push notification.
     *
     * @param string $messageId
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param string $title
     * @param string $body
     * @param array $data
     * @param string $action
     * @param string $icon
     * @param string $sound
     * @param string $color
     * @param string $tag
     * @param int $badge
     * @param MessageType $status
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function updatePush(string $messageId, array $topics = null, array $users = null, array $targets = null, string $title = null, string $body = null, array $data = null, string $action = null, string $icon = null, string $sound = null, string $color = null, string $tag = null, int $badge = null, MessageType $status = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/push/{messageId}');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
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

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($action)) {
            $apiParams['action'] = $action;
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

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create an SMS.
     *
     * @param string $messageId
     * @param string $content
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param MessageType $status
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function createSMS(string $messageId, string $content, array $topics = null, array $users = null, array $targets = null, MessageType $status = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace([], [], '/messaging/messages/sms');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }
        if (!isset($content)) {
            throw new AppwriteException('Missing required parameter: "content"');
        }
        if (!is_null($messageId)) {
            $apiParams['messageId'] = $messageId;
        }

        if (!is_null($content)) {
            $apiParams['content'] = $content;
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

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update an SMS.
     *
     * @param string $messageId
     * @param array $topics
     * @param array $users
     * @param array $targets
     * @param string $content
     * @param MessageType $status
     * @param string $scheduledAt
     * @throws AppwriteException
     * @return array

     */
    public function updateSMS(string $messageId, array $topics = null, array $users = null, array $targets = null, string $content = null, MessageType $status = null, string $scheduledAt = null): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/sms/{messageId}');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
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

        if (!is_null($content)) {
            $apiParams['content'] = $content;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($scheduledAt)) {
            $apiParams['scheduledAt'] = $scheduledAt;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get a message
     *
     * @param string $messageId
     * @throws AppwriteException
     * @return array

     */
    public function getMessage(string $messageId): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/{messageId}');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete a message
     *
     * @param string $messageId
     * @throws AppwriteException
     * @return string

     */
    public function delete(string $messageId): string
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/{messageId}');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List message logs
     *
     * @param string $messageId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listMessageLogs(string $messageId, array $queries = null): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/{messageId}/logs');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List message targets
     *
     * List the targets associated with a message as set via the targets
     * attribute.
     *
     * @param string $messageId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listTargets(string $messageId, array $queries = null): array
    {
        $apiPath = str_replace(['{messageId}'], [$messageId], '/messaging/messages/{messageId}/targets');

        $apiParams = [];
        if (!isset($messageId)) {
            throw new AppwriteException('Missing required parameter: "messageId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List providers
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listProviders(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create APNS provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $authKey
     * @param string $authKeyId
     * @param string $teamId
     * @param string $bundleId
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createAPNSProvider(string $providerId, string $name, string $authKey = null, string $authKeyId = null, string $teamId = null, string $bundleId = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/apns');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update APNS provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $authKey
     * @param string $authKeyId
     * @param string $teamId
     * @param string $bundleId
     * @throws AppwriteException
     * @return array

     */
    public function updateAPNSProvider(string $providerId, string $name = null, bool $enabled = null, string $authKey = null, string $authKeyId = null, string $teamId = null, string $bundleId = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/apns/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create FCM provider
     *
     * @param string $providerId
     * @param string $name
     * @param array $serviceAccountJSON
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createFCMProvider(string $providerId, string $name, array $serviceAccountJSON = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/fcm');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($serviceAccountJSON)) {
            $apiParams['serviceAccountJSON'] = $serviceAccountJSON;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update FCM provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param array $serviceAccountJSON
     * @throws AppwriteException
     * @return array

     */
    public function updateFCMProvider(string $providerId, string $name = null, bool $enabled = null, array $serviceAccountJSON = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/fcm/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($serviceAccountJSON)) {
            $apiParams['serviceAccountJSON'] = $serviceAccountJSON;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Mailgun provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $apiKey
     * @param string $domain
     * @param bool $isEuRegion
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createMailgunProvider(string $providerId, string $name, string $apiKey = null, string $domain = null, bool $isEuRegion = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/mailgun');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($isEuRegion)) {
            $apiParams['isEuRegion'] = $isEuRegion;
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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Mailgun provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $apiKey
     * @param string $domain
     * @param bool $isEuRegion
     * @param bool $enabled
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @throws AppwriteException
     * @return array

     */
    public function updateMailgunProvider(string $providerId, string $name = null, string $apiKey = null, string $domain = null, bool $isEuRegion = null, bool $enabled = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/mailgun/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($isEuRegion)) {
            $apiParams['isEuRegion'] = $isEuRegion;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
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


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Msg91 provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $from
     * @param string $senderId
     * @param string $authKey
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createMsg91Provider(string $providerId, string $name, string $from = null, string $senderId = null, string $authKey = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/msg91');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Msg91 provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $senderId
     * @param string $authKey
     * @param string $from
     * @throws AppwriteException
     * @return array

     */
    public function updateMsg91Provider(string $providerId, string $name = null, bool $enabled = null, string $senderId = null, string $authKey = null, string $from = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/msg91/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($senderId)) {
            $apiParams['senderId'] = $senderId;
        }

        if (!is_null($authKey)) {
            $apiParams['authKey'] = $authKey;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Sendgrid provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $apiKey
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createSendgridProvider(string $providerId, string $name, string $apiKey = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/sendgrid');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Sendgrid provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $apiKey
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @throws AppwriteException
     * @return array

     */
    public function updateSendgridProvider(string $providerId, string $name = null, bool $enabled = null, string $apiKey = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/sendgrid/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create SMTP provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $host
     * @param int $port
     * @param string $username
     * @param string $password
     * @param SMTPEncryption $encryption
     * @param bool $autoTLS
     * @param string $mailer
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createSMTPProvider(string $providerId, string $name, string $host, int $port = null, string $username = null, string $password = null, SMTPEncryption $encryption = null, bool $autoTLS = null, string $mailer = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/smtp');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!isset($host)) {
            throw new AppwriteException('Missing required parameter: "host"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($host)) {
            $apiParams['host'] = $host;
        }

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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update SMTP provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $host
     * @param int $port
     * @param string $username
     * @param string $password
     * @param SMTPEncryption $encryption
     * @param bool $autoTLS
     * @param string $fromName
     * @param string $fromEmail
     * @param string $replyToName
     * @param string $replyToEmail
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function updateSMTPProvider(string $providerId, string $name = null, string $host = null, int $port = null, string $username = null, string $password = null, SMTPEncryption $encryption = null, bool $autoTLS = null, string $fromName = null, string $fromEmail = null, string $replyToName = null, string $replyToEmail = null, bool $enabled = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/smtp/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($host)) {
            $apiParams['host'] = $host;
        }

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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Telesign provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $from
     * @param string $username
     * @param string $password
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createTelesignProvider(string $providerId, string $name, string $from = null, string $username = null, string $password = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/telesign');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Telesign provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $username
     * @param string $password
     * @param string $from
     * @throws AppwriteException
     * @return array

     */
    public function updateTelesignProvider(string $providerId, string $name = null, bool $enabled = null, string $username = null, string $password = null, string $from = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/telesign/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Textmagic provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $from
     * @param string $username
     * @param string $apiKey
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createTextmagicProvider(string $providerId, string $name, string $from = null, string $username = null, string $apiKey = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/textmagic');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Textmagic provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $username
     * @param string $apiKey
     * @param string $from
     * @throws AppwriteException
     * @return array

     */
    public function updateTextmagicProvider(string $providerId, string $name = null, bool $enabled = null, string $username = null, string $apiKey = null, string $from = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/textmagic/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Twilio provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $from
     * @param string $accountSid
     * @param string $authToken
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createTwilioProvider(string $providerId, string $name, string $from = null, string $accountSid = null, string $authToken = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/twilio');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Twilio provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $accountSid
     * @param string $authToken
     * @param string $from
     * @throws AppwriteException
     * @return array

     */
    public function updateTwilioProvider(string $providerId, string $name = null, bool $enabled = null, string $accountSid = null, string $authToken = null, string $from = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/twilio/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($accountSid)) {
            $apiParams['accountSid'] = $accountSid;
        }

        if (!is_null($authToken)) {
            $apiParams['authToken'] = $authToken;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create Vonage provider
     *
     * @param string $providerId
     * @param string $name
     * @param string $from
     * @param string $apiKey
     * @param string $apiSecret
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createVonageProvider(string $providerId, string $name, string $from = null, string $apiKey = null, string $apiSecret = null, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/messaging/providers/vonage');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update Vonage provider
     *
     * @param string $providerId
     * @param string $name
     * @param bool $enabled
     * @param string $apiKey
     * @param string $apiSecret
     * @param string $from
     * @throws AppwriteException
     * @return array

     */
    public function updateVonageProvider(string $providerId, string $name = null, bool $enabled = null, string $apiKey = null, string $apiSecret = null, string $from = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/vonage/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($apiKey)) {
            $apiParams['apiKey'] = $apiKey;
        }

        if (!is_null($apiSecret)) {
            $apiParams['apiSecret'] = $apiSecret;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get provider
     *
     * @param string $providerId
     * @throws AppwriteException
     * @return array

     */
    public function getProvider(string $providerId): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete provider
     *
     * @param string $providerId
     * @throws AppwriteException
     * @return string

     */
    public function deleteProvider(string $providerId): string
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/{providerId}');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List provider logs
     *
     * @param string $providerId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listProviderLogs(string $providerId, array $queries = null): array
    {
        $apiPath = str_replace(['{providerId}'], [$providerId], '/messaging/providers/{providerId}/logs');

        $apiParams = [];
        if (!isset($providerId)) {
            throw new AppwriteException('Missing required parameter: "providerId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List subscriber logs
     *
     * @param string $subscriberId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listSubscriberLogs(string $subscriberId, array $queries = null): array
    {
        $apiPath = str_replace(['{subscriberId}'], [$subscriberId], '/messaging/subscribers/{subscriberId}/logs');

        $apiParams = [];
        if (!isset($subscriberId)) {
            throw new AppwriteException('Missing required parameter: "subscriberId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List topics.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listTopics(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/messaging/topics');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create a topic.
     *
     * @param string $topicId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createTopic(string $topicId, string $name): array
    {
        $apiPath = str_replace([], [], '/messaging/topics');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($topicId)) {
            $apiParams['topicId'] = $topicId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get a topic.
     *
     * @param string $topicId
     * @throws AppwriteException
     * @return array

     */
    public function getTopic(string $topicId): array
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update a topic.
     *
     * @param string $topicId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function updateTopic(string $topicId, string $name = null): array
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete a topic.
     *
     * @param string $topicId
     * @throws AppwriteException
     * @return string

     */
    public function deleteTopic(string $topicId): string
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List topic logs
     *
     * @param string $topicId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listTopicLogs(string $topicId, array $queries = null): array
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}/logs');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List subscribers.
     *
     * @param string $topicId
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listSubscribers(string $topicId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}/subscribers');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create a subscriber.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @param string $targetId
     * @throws AppwriteException
     * @return array

     */
    public function createSubscriber(string $topicId, string $subscriberId, string $targetId): array
    {
        $apiPath = str_replace(['{topicId}'], [$topicId], '/messaging/topics/{topicId}/subscribers');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!isset($subscriberId)) {
            throw new AppwriteException('Missing required parameter: "subscriberId"');
        }
        if (!isset($targetId)) {
            throw new AppwriteException('Missing required parameter: "targetId"');
        }
        if (!is_null($subscriberId)) {
            $apiParams['subscriberId'] = $subscriberId;
        }

        if (!is_null($targetId)) {
            $apiParams['targetId'] = $targetId;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get a subscriber.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws AppwriteException
     * @return array

     */
    public function getSubscriber(string $topicId, string $subscriberId): array
    {
        $apiPath = str_replace(['{topicId}', '{subscriberId}'], [$topicId, $subscriberId], '/messaging/topics/{topicId}/subscribers/{subscriberId}');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!isset($subscriberId)) {
            throw new AppwriteException('Missing required parameter: "subscriberId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete a subscriber.
     *
     * @param string $topicId
     * @param string $subscriberId
     * @throws AppwriteException
     * @return string

     */
    public function deleteSubscriber(string $topicId, string $subscriberId): string
    {
        $apiPath = str_replace(['{topicId}', '{subscriberId}'], [$topicId, $subscriberId], '/messaging/topics/{topicId}/subscribers/{subscriberId}');

        $apiParams = [];
        if (!isset($topicId)) {
            throw new AppwriteException('Missing required parameter: "topicId"');
        }
        if (!isset($subscriberId)) {
            throw new AppwriteException('Missing required parameter: "subscriberId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
