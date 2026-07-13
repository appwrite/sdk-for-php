<?php

namespace Appwrite\Models;

/**
 * Organization
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
     * @param int $billingBudget project budget limit
     * @param array $budgetAlerts project budget limit
     * @param string $billingPlan organization's billing plan id.
     * @param string $billingPlanId organization's billing plan id.
     * @param BillingPlan $billingPlanDetails organization's billing plan.
     * @param string $billingEmail billing email set for the organization.
     * @param string $billingStartDate billing cycle start date.
     * @param string $billingCurrentInvoiceDate current invoice cycle start date.
     * @param string $billingNextInvoiceDate next invoice cycle start date.
     * @param string $billingTrialStartDate start date of trial.
     * @param int $billingTrialDays number of trial days.
     * @param string $billingAggregationId current active aggregation id.
     * @param string $billingInvoiceId current active aggregation id.
     * @param string $paymentMethodId default payment method.
     * @param string $billingAddressId default payment method.
     * @param string $backupPaymentMethodId backup payment method.
     * @param string $status team status.
     * @param string $remarks remarks on team status.
     * @param string $agreementBAA organization agreements
     * @param string $programManagerName program manager's name.
     * @param string $programManagerCalendar program manager's calendar link.
     * @param string $programDiscordChannelName program's discord channel name.
     * @param string $programDiscordChannelUrl program's discord channel url.
     * @param string $billingPlanDowngrade billing plan selected for downgrade.
     * @param string $billingTaxId tax id
     * @param bool $markedForDeletion marked for deletion
     * @param string $platform product with which the organization is associated (appwrite or imagine)
     * @param array $projects selected projects
     * @param BillingLimits|null $billingLimits billing limits reached
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $total,
        public Preferences $prefs,
        public int $billingBudget,
        public array $budgetAlerts,
        public string $billingPlan,
        public string $billingPlanId,
        public BillingPlan $billingPlanDetails,
        public string $billingEmail,
        public string $billingStartDate,
        public string $billingCurrentInvoiceDate,
        public string $billingNextInvoiceDate,
        public string $billingTrialStartDate,
        public int $billingTrialDays,
        public string $billingAggregationId,
        public string $billingInvoiceId,
        public string $paymentMethodId,
        public string $billingAddressId,
        public string $backupPaymentMethodId,
        public string $status,
        public string $remarks,
        public string $agreementBAA,
        public string $programManagerName,
        public string $programManagerCalendar,
        public string $programDiscordChannelName,
        public string $programDiscordChannelUrl,
        public string $billingPlanDowngrade,
        public string $billingTaxId,
        public bool $markedForDeletion,
        public string $platform,
        public array $projects,
        public ?BillingLimits $billingLimits = null
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
        if (!array_key_exists('billingBudget', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingBudget" for ' . static::class . '.');
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
        if (!array_key_exists('billingTrialStartDate', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingTrialStartDate" for ' . static::class . '.');
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
        if (!array_key_exists('billingAddressId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingAddressId" for ' . static::class . '.');
        }
        if (!array_key_exists('backupPaymentMethodId', $data)) {
            throw new \InvalidArgumentException('Missing required field "backupPaymentMethodId" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('remarks', $data)) {
            throw new \InvalidArgumentException('Missing required field "remarks" for ' . static::class . '.');
        }
        if (!array_key_exists('agreementBAA', $data)) {
            throw new \InvalidArgumentException('Missing required field "agreementBAA" for ' . static::class . '.');
        }
        if (!array_key_exists('programManagerName', $data)) {
            throw new \InvalidArgumentException('Missing required field "programManagerName" for ' . static::class . '.');
        }
        if (!array_key_exists('programManagerCalendar', $data)) {
            throw new \InvalidArgumentException('Missing required field "programManagerCalendar" for ' . static::class . '.');
        }
        if (!array_key_exists('programDiscordChannelName', $data)) {
            throw new \InvalidArgumentException('Missing required field "programDiscordChannelName" for ' . static::class . '.');
        }
        if (!array_key_exists('programDiscordChannelUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "programDiscordChannelUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlanDowngrade', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlanDowngrade" for ' . static::class . '.');
        }
        if (!array_key_exists('billingTaxId', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingTaxId" for ' . static::class . '.');
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
            billingBudget: $data['billingBudget'],
            budgetAlerts: $data['budgetAlerts'],
            billingPlan: $data['billingPlan'],
            billingPlanId: $data['billingPlanId'],
            billingPlanDetails: static::hydrateTypedValue(BillingPlan::class, $data['billingPlanDetails']),
            billingEmail: $data['billingEmail'],
            billingStartDate: $data['billingStartDate'],
            billingCurrentInvoiceDate: $data['billingCurrentInvoiceDate'],
            billingNextInvoiceDate: $data['billingNextInvoiceDate'],
            billingTrialStartDate: $data['billingTrialStartDate'],
            billingTrialDays: $data['billingTrialDays'],
            billingAggregationId: $data['billingAggregationId'],
            billingInvoiceId: $data['billingInvoiceId'],
            paymentMethodId: $data['paymentMethodId'],
            billingAddressId: $data['billingAddressId'],
            backupPaymentMethodId: $data['backupPaymentMethodId'],
            status: $data['status'],
            remarks: $data['remarks'],
            agreementBAA: $data['agreementBAA'],
            programManagerName: $data['programManagerName'],
            programManagerCalendar: $data['programManagerCalendar'],
            programDiscordChannelName: $data['programDiscordChannelName'],
            programDiscordChannelUrl: $data['programDiscordChannelUrl'],
            billingPlanDowngrade: $data['billingPlanDowngrade'],
            billingTaxId: $data['billingTaxId'],
            markedForDeletion: $data['markedForDeletion'],
            platform: $data['platform'],
            projects: $data['projects'],
            billingLimits: array_key_exists('billingLimits', $data) ? static::hydrateTypedValue(BillingLimits::class, $data['billingLimits'], true) : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
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

        return $result;
    }
}
