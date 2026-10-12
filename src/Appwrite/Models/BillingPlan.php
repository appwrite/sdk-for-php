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
     * @param int $functionsIntervalMinimum shortest function schedule interval allowed, in minutes. 0 allows every interval.
     * @param bool $databasesAllowEncrypt does the plan support encrypted string attributes or not.
     * @param BillingPlanGroup $group group of this billing plan for variants
     * @param float $databaseComputeCredit included monthly dedicated-database compute credit in usd. resets each billing cycle with no roll-over.
     * @param int|null $members members
     * @param int|null $activityLogs activity log days
     * @param array|null $usageLogsIntervals usage log time intervals allowed for this plan (e.g. 15m, 1h, 1d).
     * @param array|null $usageAggregateOnlyMetrics metrics this plan only records as a total. they cannot be broken down by dimension or filtered, because the stored events cover a fraction of the real traffic.
     * @param UsageBillingPlan|null $usage additional resources. null when the plan does not support usage billing.
     * @param array|null $eligibleCountries iso country codes eligible for this regional plan. empty means no restriction.
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
        public int $functionsIntervalMinimum,
        public bool $databasesAllowEncrypt,
        public BillingPlanGroup $group,
        public float $databaseComputeCredit,
        public ?int $members = null,
        public ?int $activityLogs = null,
        public ?array $usageLogsIntervals = null,
        public ?array $usageAggregateOnlyMetrics = null,
        public ?UsageBillingPlan $usage = null,
        public ?array $eligibleCountries = null,
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
        $data += [
            '$id' => "",
            'name' => "",
            'desc' => "",
            'order' => 0,
            'price' => 0,
            'trial' => 0,
            'bandwidth' => 0,
            'storage' => 0,
            'imageTransformations' => 0,
            'screenshotsGenerated' => 0,
            'webhooks' => 0,
            'wafRules' => 0,
            'projects' => 0,
            'platforms' => 0,
            'users' => 0,
            'teams' => 0,
            'databases' => 0,
            'databasesReads' => 0,
            'databasesWrites' => 0,
            'databasesBatchSize' => 0,
            'buckets' => 0,
            'fileSize' => 0,
            'functions' => 0,
            'sites' => 0,
            'executions' => 0,
            'executionsRetentionCount' => 1000,
            'GBHours' => 0,
            'realtime' => 0,
            'realtimeMessages' => 0,
            'messages' => 0,
            'topics' => 0,
            'authPhone' => 0,
            'domains' => 0,
            'usageLogs' => 0,
            'projectInactivityDays' => 0,
            'alertLimit' => 80,
            'budgetCapEnabled' => false,
            'customSmtp' => false,
            'emailBranding' => false,
            'requiresPaymentMethod' => true,
            'requiresBillingAddress' => false,
            'isAvailable' => true,
            'selfService' => true,
            'premiumSupport' => true,
            'budgeting' => true,
            'supportsMockNumbers' => true,
            'supportsOrganizationRoles' => true,
            'supportsCredits' => false,
            'supportsDedicatedDatabases' => false,
            'supportsDisposableEmailValidation' => false,
            'supportsCanonicalEmailValidation' => false,
            'supportsFreeEmailValidation' => false,
            'supportsCorporateEmailValidation' => false,
            'supportsProjectSpecificRoles' => false,
            'usagePerProject' => true,
            'deploymentSize' => 0,
            'buildSize' => 0,
            'functionsIntervalMinimum' => 0,
            'databasesAllowEncrypt' => false,
            'databaseComputeCredit' => 0,
        ];

        if (!array_key_exists('addons', $data)) {
            throw new \InvalidArgumentException('Missing required field "addons" for ' . static::class . '.');
        }
        if (!array_key_exists('supportedAddons', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportedAddons" for ' . static::class . '.');
        }
        if (!array_key_exists('group', $data)) {
            throw new \InvalidArgumentException('Missing required field "group" for ' . static::class . '.');
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
            functionsIntervalMinimum: $data['functionsIntervalMinimum'],
            databasesAllowEncrypt: $data['databasesAllowEncrypt'],
            group: static::hydrateTypedValue(BillingPlanGroup::class, $data['group']),
            databaseComputeCredit: $data['databaseComputeCredit'],
            members: $data['members'] ?? null,
            activityLogs: $data['activityLogs'] ?? null,
            usageLogsIntervals: $data['usageLogsIntervals'] ?? null,
            usageAggregateOnlyMetrics: $data['usageAggregateOnlyMetrics'] ?? null,
            usage: array_key_exists('usage', $data) ? static::hydrateTypedValue(UsageBillingPlan::class, $data['usage'], true) : null,
            eligibleCountries: $data['eligibleCountries'] ?? null,
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
            'eligibleCountries' => static::serializeValue($this->eligibleCountries),
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
            'functionsIntervalMinimum' => static::serializeValue($this->functionsIntervalMinimum),
            'databasesAllowEncrypt' => static::serializeValue($this->databasesAllowEncrypt),
            'limits' => static::serializeValue($this->limits),
            'group' => static::serializeValue($this->group),
            'program' => static::serializeValue($this->program),
            'databaseComputeCredit' => static::serializeValue($this->databaseComputeCredit),
            'dedicatedDatabases' => static::serializeValue($this->dedicatedDatabases)
        ];
    }
}
