<?php

namespace Appwrite\Models;

use Appwrite\Enums\DatabaseType;
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{
    public function testFromWithoutBackupFields(): void
    {
        $database = Database::from([
            '$id' => '5e5ea5c16897e',
            'name' => 'My Database',
            '$createdAt' => '2020-10-15T06:38:00.000+00:00',
            '$updatedAt' => '2020-10-15T06:38:00.000+00:00',
            'enabled' => false,
            'type' => 'legacy',
        ]);

        $this->assertSame('5e5ea5c16897e', $database->id);
        $this->assertSame('legacy', (string) $database->type);
        $this->assertNull($database->policies);
        $this->assertNull($database->archives);
        $this->assertNull($database->toArray()['policies']);
        $this->assertNull($database->toArray()['archives']);
    }

    public function testFromWithBackupFields(): void
    {
        $database = Database::from([
            '$id' => '5e5ea5c16897e',
            'name' => 'My Database',
            '$createdAt' => '2020-10-15T06:38:00.000+00:00',
            '$updatedAt' => '2020-10-15T06:38:00.000+00:00',
            'enabled' => true,
            'type' => 'tablesdb',
            'policies' => [[
                '$id' => 'policy1',
                'name' => 'Daily',
                '$createdAt' => '2020-10-15T06:38:00.000+00:00',
                '$updatedAt' => '2020-10-15T06:38:00.000+00:00',
                'services' => [],
                'resources' => [],
                'retention' => 30,
                'schedule' => '0 0 * * *',
                'type' => 'scheduled',
                'enabled' => true,
            ]],
            'archives' => [],
        ]);

        $this->assertCount(1, $database->policies);
        $this->assertInstanceOf(BackupPolicy::class, $database->policies[0]);
        $this->assertSame([], $database->archives);
    }
}
