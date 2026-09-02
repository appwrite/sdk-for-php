<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\BillingPlanGroup;

/**
 * billingPlan
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingPlan
{
    use ArraySerializable;

    /**
     * BillingPlan constructor.
     *
     * @param string $id plan id.
     * @param string $name plan name
     * @param string $desc plan description
     * @param int $order plan order
     * @param float $price price
     * @param int $trial trial days
     * @param int $bandwidth bandwidth
     * @param int $storage storage
     * @param int $imageTransformations image transformations
     * @param int $screenshotsGenerated screenshots generated
     * @param int $webhooks webhooks
     * @param int $wafRules maximum waf rules per project
     * @param int $projects projects
     * @param int $platforms platforms
     * @param int $users users
     * @param int $teams teams
     * @param int $databases databases
     * @param int $databasesReads database reads per month
     * @param int $databasesWrites database writes per month
     * @param int $databasesBatchSize database batch size limit
     * @param int $buckets buckets
     * @param int $fileSize file size
     * @param int $functions functions
     * @param int $sites sites
     * @param int $executions function executions
     * @param int $executionsRetentionCount rolling max executions retained per function/site
     * @param int $gBHours gb hours for functions
     * @param int $realtime realtime connections
     * @param int $realtimeMessages realtime messages
     * @param int $messages messages per month
     * @param int $topics topics for messaging
     * @param int $authPhone sms authentications per month
     * @param int $domains custom domains
     * @param int $usageLogs usage history days
     * @param int $projectInactivityDays number of days of console inactivity before a project is paused. 0 means pausing is disabled.
     * @param int $alertLimit alert threshold percentage
     * @param UsageBillingPlan $usage additional resources
     * @param BillingPlanAddon $addons addons
     * @param bool $budgetCapEnabled budget cap enabled or disabled.
     * @param bool $customSmtp custom smtp
     * @param bool $emailBranding appwrite branding in email
     * @param bool $requiresPaymentMethod does plan require payment method
     * @param bool $requiresBillingAddress does plan require billing address
     * @param bool $isAvailable is the billing plan available
     * @param bool $selfService can user change the plan themselves
     * @param bool $premiumSupport does plan enable premium support
     * @param bool $budgeting does plan support budget cap
     * @param bool $supportsMockNumbers does plan support mock numbers
     * @param bool $supportsOrganizationRoles does plan support organization roles
     * @param bool $supportsCredits does plan support credit
     * @param bool $supportsDedicatedDatabases does plan support dedicated databases.
     * @param bool $supportsDisposableEmailValidation does plan support blocking disposable email addresses.
     * @param bool $supportsCanonicalEmailValidation does plan support requiring canonical email addresses.
     * @param bool $supportsFreeEmailValidation does plan support blocking free email addresses.
     * @param bool $supportsCorporateEmailValidation does plan support restricting sign-ups to corporate email addresses only.
     * @param bool $supportsProjectSpecificRoles does plan support project-specific member roles.
     * @param bool $usagePerProject whether usage addons are calculated per project.
     * @param BillingPlanSupportedAddons $supportedAddons supported addons for this plan
     * @param int $deploymentSize maximum function and site deployment size in mb
     * @param int $buildSize maximum function and site deployment size in mb
     * @param bool $databasesAllowEncrypt does the plan support encrypted string attributes or not.
     * @param BillingPlanGroup $group group of this billing plan for variants
     * @param float $databaseComputeCredit included monthly dedicated-database compute credit in usd. resets each billing cycle with no roll-over.
     * @param int|null $members members
     * @param int|null $activityLogs activity log days
     * @param array|null $usageLogsIntervals usage log time intervals allowed for this plan (e.g. 15m, 1h, 1d).
     * @param array|null $usageAggregateOnlyMetrics metrics this plan only records as a total. they cannot be broken down by dimension or filtered, because the stored events cover a fraction of the real traffic.
     * @param bool|null $backupsEnabled does plan support backup policies.
     * @param int|null $backupPolicies how many policies does plan support
     * @param BillingPlanLimits|null $limits plan specific limits
     * @param Program|null $program details of the program this plan is a part of.
     * @param BillingPlanDedicatedDatabaseLimits|null $dedicatedDatabases dedicated database limits available to this plan.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $desc,
        public int $order,
        public float $price,
        public int $trial,
        public int $bandwidth,
        public int $storage,
        public int $imageTransformations,
        public int $screenshotsGenerated,
        public int $webhooks,
        public int $wafRules,
        public int $projects,
        public int $platforms,
        public int $users,
        public int $teams,
        public int $databases,
        public int $databasesReads,
        public int $databasesWrites,
        public int $databasesBatchSize,
        public int $buckets,
        public int $fileSize,
        public int $functions,
        public int $sites,
        public int $executions,
        public int $executionsRetentionCount,
        public int $gBHours,
        public int $realtime,
        public int $realtimeMessages,
        public int $messages,
        public int $topics,
        public int $authPhone,
        public int $domains,
        public int $usageLogs,
        public int $projectInactivityDays,
        public int $alertLimit,
        public UsageBillingPlan $usage,
        public BillingPlanAddon $addons,
        public bool $budgetCapEnabled,
        public bool $customSmtp,
        public bool $emailBranding,
        public bool $requiresPaymentMethod,
        public bool $requiresBillingAddress,
        public bool $isAvailable,
        public bool $selfService,
        public bool $premiumSupport,
        public bool $budgeting,
        public bool $supportsMockNumbers,
        public bool $supportsOrganizationRoles,
        public bool $supportsCredits,
        public bool $supportsDedicatedDatabases,
        public bool $supportsDisposableEmailValidation,
        public bool $supportsCanonicalEmailValidation,
        public bool $supportsFreeEmailValidation,
        public bool $supportsCorporateEmailValidation,
        public bool $supportsProjectSpecificRoles,
        public bool $usagePerProject,
        public BillingPlanSupportedAddons $supportedAddons,
        public int $deploymentSize,
        public int $buildSize,
        public bool $databasesAllowEncrypt,
        public BillingPlanGroup $group,
        public float $databaseComputeCredit,
        public ?int $members = null,
        public ?int $activityLogs = null,
        public ?array $usageLogsIntervals = null,
        public ?array $usageAggregateOnlyMetrics = null,
        public ?bool $backupsEnabled = null,
        public ?int $backupPolicies = null,
        public ?BillingPlanLimits $limits = null,
        public ?Program $program = null,
        public ?BillingPlanDedicatedDatabaseLimits $dedicatedDatabases = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('desc', $data)) {
            throw new \InvalidArgumentException('Missing required field "desc" for ' . static::class . '.');
        }
        if (!array_key_exists('order', $data)) {
            throw new \InvalidArgumentException('Missing required field "order" for ' . static::class . '.');
        }
        if (!array_key_exists('price', $data)) {
            throw new \InvalidArgumentException('Missing required field "price" for ' . static::class . '.');
        }
        if (!array_key_exists('trial', $data)) {
            throw new \InvalidArgumentException('Missing required field "trial" for ' . static::class . '.');
        }
        if (!array_key_exists('bandwidth', $data)) {
            throw new \InvalidArgumentException('Missing required field "bandwidth" for ' . static::class . '.');
        }
        if (!array_key_exists('storage', $data)) {
            throw new \InvalidArgumentException('Missing required field "storage" for ' . static::class . '.');
        }
        if (!array_key_exists('imageTransformations', $data)) {
            throw new \InvalidArgumentException('Missing required field "imageTransformations" for ' . static::class . '.');
        }
        if (!array_key_exists('screenshotsGenerated', $data)) {
            throw new \InvalidArgumentException('Missing required field "screenshotsGenerated" for ' . static::class . '.');
        }
        if (!array_key_exists('webhooks', $data)) {
            throw new \InvalidArgumentException('Missing required field "webhooks" for ' . static::class . '.');
        }
        if (!array_key_exists('wafRules', $data)) {
            throw new \InvalidArgumentException('Missing required field "wafRules" for ' . static::class . '.');
        }
        if (!array_key_exists('projects', $data)) {
            throw new \InvalidArgumentException('Missing required field "projects" for ' . static::class . '.');
        }
        if (!array_key_exists('platforms', $data)) {
            throw new \InvalidArgumentException('Missing required field "platforms" for ' . static::class . '.');
        }
        if (!array_key_exists('users', $data)) {
            throw new \InvalidArgumentException('Missing required field "users" for ' . static::class . '.');
        }
        if (!array_key_exists('teams', $data)) {
            throw new \InvalidArgumentException('Missing required field "teams" for ' . static::class . '.');
        }
        if (!array_key_exists('databases', $data)) {
            throw new \InvalidArgumentException('Missing required field "databases" for ' . static::class . '.');
        }
        if (!array_key_exists('databasesReads', $data)) {
            throw new \InvalidArgumentException('Missing required field "databasesReads" for ' . static::class . '.');
        }
        if (!array_key_exists('databasesWrites', $data)) {
            throw new \InvalidArgumentException('Missing required field "databasesWrites" for ' . static::class . '.');
        }
        if (!array_key_exists('databasesBatchSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "databasesBatchSize" for ' . static::class . '.');
        }
        if (!array_key_exists('buckets', $data)) {
            throw new \InvalidArgumentException('Missing required field "buckets" for ' . static::class . '.');
        }
        if (!array_key_exists('fileSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "fileSize" for ' . static::class . '.');
        }
        if (!array_key_exists('functions', $data)) {
            throw new \InvalidArgumentException('Missing required field "functions" for ' . static::class . '.');
        }
        if (!array_key_exists('sites', $data)) {
            throw new \InvalidArgumentException('Missing required field "sites" for ' . static::class . '.');
        }
        if (!array_key_exists('executions', $data)) {
            throw new \InvalidArgumentException('Missing required field "executions" for ' . static::class . '.');
        }
        if (!array_key_exists('executionsRetentionCount', $data)) {
            throw new \InvalidArgumentException('Missing required field "executionsRetentionCount" for ' . static::class . '.');
        }
        if (!array_key_exists('GBHours', $data)) {
            throw new \InvalidArgumentException('Missing required field "GBHours" for ' . static::class . '.');
        }
        if (!array_key_exists('realtime', $data)) {
            throw new \InvalidArgumentException('Missing required field "realtime" for ' . static::class . '.');
        }
        if (!array_key_exists('realtimeMessages', $data)) {
            throw new \InvalidArgumentException('Missing required field "realtimeMessages" for ' . static::class . '.');
        }
        if (!array_key_exists('messages', $data)) {
            throw new \InvalidArgumentException('Missing required field "messages" for ' . static::class . '.');
        }
        if (!array_key_exists('topics', $data)) {
            throw new \InvalidArgumentException('Missing required field "topics" for ' . static::class . '.');
        }
        if (!array_key_exists('authPhone', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPhone" for ' . static::class . '.');
        }
        if (!array_key_exists('domains', $data)) {
            throw new \InvalidArgumentException('Missing required field "domains" for ' . static::class . '.');
        }
        if (!array_key_exists('usageLogs', $data)) {
            throw new \InvalidArgumentException('Missing required field "usageLogs" for ' . static::class . '.');
        }
        if (!array_key_exists('projectInactivityDays', $data)) {
            throw new \InvalidArgumentException('Missing required field "projectInactivityDays" for ' . static::class . '.');
        }
        if (!array_key_exists('alertLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "alertLimit" for ' . static::class . '.');
        }
        if (!array_key_exists('usage', $data)) {
            throw new \InvalidArgumentException('Missing required field "usage" for ' . static::class . '.');
        }
        if (!array_key_exists('addons', $data)) {
            throw new \InvalidArgumentException('Missing required field "addons" for ' . static::class . '.');
        }
        if (!array_key_exists('budgetCapEnabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "budgetCapEnabled" for ' . static::class . '.');
        }
        if (!array_key_exists('customSmtp', $data)) {
            throw new \InvalidArgumentException('Missing required field "customSmtp" for ' . static::class . '.');
        }
        if (!array_key_exists('emailBranding', $data)) {
            throw new \InvalidArgumentException('Missing required field "emailBranding" for ' . static::class . '.');
        }
        if (!array_key_exists('requiresPaymentMethod', $data)) {
            throw new \InvalidArgumentException('Missing required field "requiresPaymentMethod" for ' . static::class . '.');
        }
        if (!array_key_exists('requiresBillingAddress', $data)) {
            throw new \InvalidArgumentException('Missing required field "requiresBillingAddress" for ' . static::class . '.');
        }
        if (!array_key_exists('isAvailable', $data)) {
            throw new \InvalidArgumentException('Missing required field "isAvailable" for ' . static::class . '.');
        }
        if (!array_key_exists('selfService', $data)) {
            throw new \InvalidArgumentException('Missing required field "selfService" for ' . static::class . '.');
        }
        if (!array_key_exists('premiumSupport', $data)) {
            throw new \InvalidArgumentException('Missing required field "premiumSupport" for ' . static::class . '.');
        }
        if (!array_key_exists('budgeting', $data)) {
            throw new \InvalidArgumentException('Missing required field "budgeting" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsMockNumbers', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsMockNumbers" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsOrganizationRoles', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsOrganizationRoles" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsCredits', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsCredits" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsDedicatedDatabases', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsDedicatedDatabases" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsDisposableEmailValidation', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsDisposableEmailValidation" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsCanonicalEmailValidation', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsCanonicalEmailValidation" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsFreeEmailValidation', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsFreeEmailValidation" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsCorporateEmailValidation', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsCorporateEmailValidation" for ' . static::class . '.');
        }
        if (!array_key_exists('supportsProjectSpecificRoles', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportsProjectSpecificRoles" for ' . static::class . '.');
        }
        if (!array_key_exists('usagePerProject', $data)) {
            throw new \InvalidArgumentException('Missing required field "usagePerProject" for ' . static::class . '.');
        }
        if (!array_key_exists('supportedAddons', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportedAddons" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentSize" for ' . static::class . '.');
        }
        if (!array_key_exists('buildSize', $data)) {
            throw new \InvalidArgumentException('Missing required field "buildSize" for ' . static::class . '.');
        }
        if (!array_key_exists('databasesAllowEncrypt', $data)) {
            throw new \InvalidArgumentException('Missing required field "databasesAllowEncrypt" for ' . static::class . '.');
        }
        if (!array_key_exists('group', $data)) {
            throw new \InvalidArgumentException('Missing required field "group" for ' . static::class . '.');
        }
        if (!array_key_exists('databaseComputeCredit', $data)) {
            throw new \InvalidArgumentException('Missing required field "databaseComputeCredit" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            name: $data['name'],
            desc: $data['desc'],
            order: $data['order'],
            price: $data['price'],
            trial: $data['trial'],
            bandwidth: $data['bandwidth'],
            storage: $data['storage'],
            imageTransformations: $data['imageTransformations'],
            screenshotsGenerated: $data['screenshotsGenerated'],
            webhooks: $data['webhooks'],
            wafRules: $data['wafRules'],
            projects: $data['projects'],
            platforms: $data['platforms'],
            users: $data['users'],
            teams: $data['teams'],
            databases: $data['databases'],
            databasesReads: $data['databasesReads'],
            databasesWrites: $data['databasesWrites'],
            databasesBatchSize: $data['databasesBatchSize'],
            buckets: $data['buckets'],
            fileSize: $data['fileSize'],
            functions: $data['functions'],
            sites: $data['sites'],
            executions: $data['executions'],
            executionsRetentionCount: $data['executionsRetentionCount'],
            gBHours: $data['GBHours'],
            realtime: $data['realtime'],
            realtimeMessages: $data['realtimeMessages'],
            messages: $data['messages'],
            topics: $data['topics'],
            authPhone: $data['authPhone'],
            domains: $data['domains'],
            usageLogs: $data['usageLogs'],
            projectInactivityDays: $data['projectInactivityDays'],
            alertLimit: $data['alertLimit'],
            usage: static::hydrateTypedValue(UsageBillingPlan::class, $data['usage']),
            addons: static::hydrateTypedValue(BillingPlanAddon::class, $data['addons']),
            budgetCapEnabled: $data['budgetCapEnabled'],
            customSmtp: $data['customSmtp'],
            emailBranding: $data['emailBranding'],
            requiresPaymentMethod: $data['requiresPaymentMethod'],
            requiresBillingAddress: $data['requiresBillingAddress'],
            isAvailable: $data['isAvailable'],
            selfService: $data['selfService'],
            premiumSupport: $data['premiumSupport'],
            budgeting: $data['budgeting'],
            supportsMockNumbers: $data['supportsMockNumbers'],
            supportsOrganizationRoles: $data['supportsOrganizationRoles'],
            supportsCredits: $data['supportsCredits'],
            supportsDedicatedDatabases: $data['supportsDedicatedDatabases'],
            supportsDisposableEmailValidation: $data['supportsDisposableEmailValidation'],
            supportsCanonicalEmailValidation: $data['supportsCanonicalEmailValidation'],
            supportsFreeEmailValidation: $data['supportsFreeEmailValidation'],
            supportsCorporateEmailValidation: $data['supportsCorporateEmailValidation'],
            supportsProjectSpecificRoles: $data['supportsProjectSpecificRoles'],
            usagePerProject: $data['usagePerProject'],
            supportedAddons: static::hydrateTypedValue(BillingPlanSupportedAddons::class, $data['supportedAddons']),
            deploymentSize: $data['deploymentSize'],
            buildSize: $data['buildSize'],
            databasesAllowEncrypt: $data['databasesAllowEncrypt'],
            group: static::hydrateTypedValue(BillingPlanGroup::class, $data['group']),
            databaseComputeCredit: $data['databaseComputeCredit'],
            members: $data['members'] ?? null,
            activityLogs: $data['activityLogs'] ?? null,
            usageLogsIntervals: $data['usageLogsIntervals'] ?? null,
            usageAggregateOnlyMetrics: $data['usageAggregateOnlyMetrics'] ?? null,
            backupsEnabled: $data['backupsEnabled'] ?? null,
            backupPolicies: $data['backupPolicies'] ?? null,
            limits: array_key_exists('limits', $data) ? static::hydrateTypedValue(BillingPlanLimits::class, $data['limits'], true) : null,
            program: array_key_exists('program', $data) ? static::hydrateTypedValue(Program::class, $data['program'], true) : null,
            dedicatedDatabases: array_key_exists('dedicatedDatabases', $data) ? static::hydrateTypedValue(BillingPlanDedicatedDatabaseLimits::class, $data['dedicatedDatabases'], true) : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'name' => static::serializeValue($this->name),
            'desc' => static::serializeValue($this->desc),
            'order' => static::serializeValue($this->order),
            'price' => static::serializeValue($this->price),
            'trial' => static::serializeValue($this->trial),
            'bandwidth' => static::serializeValue($this->bandwidth),
            'storage' => static::serializeValue($this->storage),
            'imageTransformations' => static::serializeValue($this->imageTransformations),
            'screenshotsGenerated' => static::serializeValue($this->screenshotsGenerated),
            'members' => static::serializeValue($this->members),
            'webhooks' => static::serializeValue($this->webhooks),
            'wafRules' => static::serializeValue($this->wafRules),
            'projects' => static::serializeValue($this->projects),
            'platforms' => static::serializeValue($this->platforms),
            'users' => static::serializeValue($this->users),
            'teams' => static::serializeValue($this->teams),
            'databases' => static::serializeValue($this->databases),
            'databasesReads' => static::serializeValue($this->databasesReads),
            'databasesWrites' => static::serializeValue($this->databasesWrites),
            'databasesBatchSize' => static::serializeValue($this->databasesBatchSize),
            'buckets' => static::serializeValue($this->buckets),
            'fileSize' => static::serializeValue($this->fileSize),
            'functions' => static::serializeValue($this->functions),
            'sites' => static::serializeValue($this->sites),
            'executions' => static::serializeValue($this->executions),
            'executionsRetentionCount' => static::serializeValue($this->executionsRetentionCount),
            'GBHours' => static::serializeValue($this->gBHours),
            'realtime' => static::serializeValue($this->realtime),
            'realtimeMessages' => static::serializeValue($this->realtimeMessages),
            'messages' => static::serializeValue($this->messages),
            'topics' => static::serializeValue($this->topics),
            'authPhone' => static::serializeValue($this->authPhone),
            'domains' => static::serializeValue($this->domains),
            'activityLogs' => static::serializeValue($this->activityLogs),
            'usageLogs' => static::serializeValue($this->usageLogs),
            'usageLogsIntervals' => static::serializeValue($this->usageLogsIntervals),
            'usageAggregateOnlyMetrics' => static::serializeValue($this->usageAggregateOnlyMetrics),
            'projectInactivityDays' => static::serializeValue($this->projectInactivityDays),
            'alertLimit' => static::serializeValue($this->alertLimit),
            'usage' => static::serializeValue($this->usage),
            'addons' => static::serializeValue($this->addons),
            'budgetCapEnabled' => static::serializeValue($this->budgetCapEnabled),
            'customSmtp' => static::serializeValue($this->customSmtp),
            'emailBranding' => static::serializeValue($this->emailBranding),
            'requiresPaymentMethod' => static::serializeValue($this->requiresPaymentMethod),
            'requiresBillingAddress' => static::serializeValue($this->requiresBillingAddress),
            'isAvailable' => static::serializeValue($this->isAvailable),
            'selfService' => static::serializeValue($this->selfService),
            'premiumSupport' => static::serializeValue($this->premiumSupport),
            'budgeting' => static::serializeValue($this->budgeting),
            'supportsMockNumbers' => static::serializeValue($this->supportsMockNumbers),
            'supportsOrganizationRoles' => static::serializeValue($this->supportsOrganizationRoles),
            'supportsCredits' => static::serializeValue($this->supportsCredits),
            'supportsDedicatedDatabases' => static::serializeValue($this->supportsDedicatedDatabases),
            'supportsDisposableEmailValidation' => static::serializeValue($this->supportsDisposableEmailValidation),
            'supportsCanonicalEmailValidation' => static::serializeValue($this->supportsCanonicalEmailValidation),
            'supportsFreeEmailValidation' => static::serializeValue($this->supportsFreeEmailValidation),
            'supportsCorporateEmailValidation' => static::serializeValue($this->supportsCorporateEmailValidation),
            'supportsProjectSpecificRoles' => static::serializeValue($this->supportsProjectSpecificRoles),
            'backupsEnabled' => static::serializeValue($this->backupsEnabled),
            'usagePerProject' => static::serializeValue($this->usagePerProject),
            'supportedAddons' => static::serializeValue($this->supportedAddons),
            'backupPolicies' => static::serializeValue($this->backupPolicies),
            'deploymentSize' => static::serializeValue($this->deploymentSize),
            'buildSize' => static::serializeValue($this->buildSize),
            'databasesAllowEncrypt' => static::serializeValue($this->databasesAllowEncrypt),
            'limits' => static::serializeValue($this->limits),
            'group' => static::serializeValue($this->group),
            'program' => static::serializeValue($this->program),
            'databaseComputeCredit' => static::serializeValue($this->databaseComputeCredit),
            'dedicatedDatabases' => static::serializeValue($this->dedicatedDatabases)
        ];
    }
}
