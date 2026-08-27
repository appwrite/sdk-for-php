<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Organization
 *
 * @phpstan-consistent-constructor
 */
readonly class Organization
{
    use ArraySerializable;

    /**
     * Organization constructor.
     *
     * @param string $id team id.
     * @param string $createdAt team creation date in iso 8601 format.
     * @param string $updatedAt team update date in iso 8601 format.
     * @param string $name team name.
     * @param int $total total number of team members.
     * @param Preferences $prefs team preferences as a key-value object
     * @param array $budgetAlerts project budget limit
     * @param string $billingPlan organization's billing plan id.
     * @param string $billingPlanId organization's billing plan id.
     * @param BillingPlan $billingPlanDetails organization's billing plan.
     * @param string $billingEmail billing email set for the organization.
     * @param string $billingStartDate billing cycle start date.
     * @param string $billingCurrentInvoiceDate current invoice cycle start date.
     * @param string $billingNextInvoiceDate next invoice cycle start date.
     * @param int $billingTrialDays number of trial days.
     * @param string $billingAggregationId current active aggregation id.
     * @param string $billingInvoiceId current active aggregation id.
     * @param string $paymentMethodId default payment method.
     * @param string $status team status.
     * @param bool $markedForDeletion marked for deletion
     * @param string $platform product with which the organization is associated (appwrite or imagine)
     * @param array $projects selected projects
     * @param int|null $billingBudget project budget limit. null when no budget is set.
     * @param string|null $billingTrialStartDate start date of trial.
     * @param string|null $billingAddressId default payment method.
     * @param string|null $backupPaymentMethodId backup payment method.
     * @param string|null $remarks remarks on team status.
     * @param string|null $agreementBAA organization agreements
     * @param string|null $programManagerName program manager's name.
     * @param string|null $programManagerCalendar program manager's calendar link.
     * @param string|null $programDiscordChannelName program's discord channel name.
     * @param string|null $programDiscordChannelUrl program's discord channel url.
     * @param BillingLimits|null $billingLimits billing limits reached
     * @param string|null $billingPlanDowngrade billing plan selected for downgrade.
     * @param string|null $billingTaxId tax id
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $total,
        public Preferences $prefs,
        public array $budgetAlerts,
        public string $billingPlan,
        public string $billingPlanId,
        public BillingPlan $billingPlanDetails,
        public string $billingEmail,
        public string $billingStartDate,
        public string $billingCurrentInvoiceDate,
        public string $billingNextInvoiceDate,
        public int $billingTrialDays,
        public string $billingAggregationId,
        public string $billingInvoiceId,
        public string $paymentMethodId,
        public string $status,
        public bool $markedForDeletion,
        public string $platform,
        public array $projects,
        public ?int $billingBudget = null,
        public ?string $billingTrialStartDate = null,
        public ?string $billingAddressId = null,
        public ?string $backupPaymentMethodId = null,
        public ?string $remarks = null,
        public ?string $agreementBAA = null,
        public ?string $programManagerName = null,
        public ?string $programManagerCalendar = null,
        public ?string $programDiscordChannelName = null,
        public ?string $programDiscordChannelUrl = null,
        public ?BillingLimits $billingLimits = null,
        public ?string $billingPlanDowngrade = null,
        public ?string $billingTaxId = null
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('prefs', $data)) {
            throw new \InvalidArgumentException('Missing required field "prefs" for ' . static::class . '.');
        }
        if (!array_key_exists('budgetAlerts', $data)) {
            throw new \InvalidArgumentException('Missing required field "budgetAlerts" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlan', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlan" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlanId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlanId" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlanDetails', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlanDetails" for ' . static::class . '.');
        }
        if (!array_key_exists('billingEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('billingStartDate', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingStartDate" for ' . static::class . '.');
        }
        if (!array_key_exists('billingCurrentInvoiceDate', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingCurrentInvoiceDate" for ' . static::class . '.');
        }
        if (!array_key_exists('billingNextInvoiceDate', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingNextInvoiceDate" for ' . static::class . '.');
        }
        if (!array_key_exists('billingTrialDays', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingTrialDays" for ' . static::class . '.');
        }
        if (!array_key_exists('billingAggregationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingAggregationId" for ' . static::class . '.');
        }
        if (!array_key_exists('billingInvoiceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingInvoiceId" for ' . static::class . '.');
        }
        if (!array_key_exists('paymentMethodId', $data)) {
            throw new \InvalidArgumentException('Missing required field "paymentMethodId" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('markedForDeletion', $data)) {
            throw new \InvalidArgumentException('Missing required field "markedForDeletion" for ' . static::class . '.');
        }
        if (!array_key_exists('platform', $data)) {
            throw new \InvalidArgumentException('Missing required field "platform" for ' . static::class . '.');
        }
        if (!array_key_exists('projects', $data)) {
            throw new \InvalidArgumentException('Missing required field "projects" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            total: $data['total'],
            prefs: static::hydrateTypedValue(Preferences::class, $data['prefs']),
            budgetAlerts: $data['budgetAlerts'],
            billingPlan: $data['billingPlan'],
            billingPlanId: $data['billingPlanId'],
            billingPlanDetails: static::hydrateTypedValue(BillingPlan::class, $data['billingPlanDetails']),
            billingEmail: $data['billingEmail'],
            billingStartDate: $data['billingStartDate'],
            billingCurrentInvoiceDate: $data['billingCurrentInvoiceDate'],
            billingNextInvoiceDate: $data['billingNextInvoiceDate'],
            billingTrialDays: $data['billingTrialDays'],
            billingAggregationId: $data['billingAggregationId'],
            billingInvoiceId: $data['billingInvoiceId'],
            paymentMethodId: $data['paymentMethodId'],
            status: $data['status'],
            markedForDeletion: $data['markedForDeletion'],
            platform: $data['platform'],
            projects: $data['projects'],
            billingBudget: $data['billingBudget'] ?? null,
            billingTrialStartDate: $data['billingTrialStartDate'] ?? null,
            billingAddressId: $data['billingAddressId'] ?? null,
            backupPaymentMethodId: $data['backupPaymentMethodId'] ?? null,
            remarks: $data['remarks'] ?? null,
            agreementBAA: $data['agreementBAA'] ?? null,
            programManagerName: $data['programManagerName'] ?? null,
            programManagerCalendar: $data['programManagerCalendar'] ?? null,
            programDiscordChannelName: $data['programDiscordChannelName'] ?? null,
            programDiscordChannelUrl: $data['programDiscordChannelUrl'] ?? null,
            billingLimits: array_key_exists('billingLimits', $data) ? static::hydrateTypedValue(BillingLimits::class, $data['billingLimits'], true) : null,
            billingPlanDowngrade: $data['billingPlanDowngrade'] ?? null,
            billingTaxId: $data['billingTaxId'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'total' => static::serializeValue($this->total),
            'prefs' => static::serializeValue($this->prefs),
            'billingBudget' => static::serializeValue($this->billingBudget),
            'budgetAlerts' => static::serializeValue($this->budgetAlerts),
            'billingPlan' => static::serializeValue($this->billingPlan),
            'billingPlanId' => static::serializeValue($this->billingPlanId),
            'billingPlanDetails' => static::serializeValue($this->billingPlanDetails),
            'billingEmail' => static::serializeValue($this->billingEmail),
            'billingStartDate' => static::serializeValue($this->billingStartDate),
            'billingCurrentInvoiceDate' => static::serializeValue($this->billingCurrentInvoiceDate),
            'billingNextInvoiceDate' => static::serializeValue($this->billingNextInvoiceDate),
            'billingTrialStartDate' => static::serializeValue($this->billingTrialStartDate),
            'billingTrialDays' => static::serializeValue($this->billingTrialDays),
            'billingAggregationId' => static::serializeValue($this->billingAggregationId),
            'billingInvoiceId' => static::serializeValue($this->billingInvoiceId),
            'paymentMethodId' => static::serializeValue($this->paymentMethodId),
            'billingAddressId' => static::serializeValue($this->billingAddressId),
            'backupPaymentMethodId' => static::serializeValue($this->backupPaymentMethodId),
            'status' => static::serializeValue($this->status),
            'remarks' => static::serializeValue($this->remarks),
            'agreementBAA' => static::serializeValue($this->agreementBAA),
            'programManagerName' => static::serializeValue($this->programManagerName),
            'programManagerCalendar' => static::serializeValue($this->programManagerCalendar),
            'programDiscordChannelName' => static::serializeValue($this->programDiscordChannelName),
            'programDiscordChannelUrl' => static::serializeValue($this->programDiscordChannelUrl),
            'billingLimits' => static::serializeValue($this->billingLimits),
            'billingPlanDowngrade' => static::serializeValue($this->billingPlanDowngrade),
            'billingTaxId' => static::serializeValue($this->billingTaxId),
            'markedForDeletion' => static::serializeValue($this->markedForDeletion),
            'platform' => static::serializeValue($this->platform),
            'projects' => static::serializeValue($this->projects)
        ];
    }
}
