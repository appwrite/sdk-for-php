<?php

namespace Appwrite;

use PHPUnit\Framework\TestCase;

final class RoleTest extends TestCase {
    public function testAny(): void {
        $this->assertSame('any', Role::any());
    }

    public function testUserWithoutStatus(): void {
        $this->assertSame('user:custom', Role::user('custom'));
    }

    public function testUserWithStatus(): void {
        $this->assertSame('user:custom/verified', Role::user('custom', 'verified'));
    }

    public function testUsersWithoutStatus(): void {
        $this->assertSame('users', Role::users());
    }

    public function testUsersWithStatus(): void {
        $this->assertSame('users/verified', Role::users('verified'));
    }

    public function testGuests(): void {
        $this->assertSame('guests', Role::guests());
    }

    public function testTeamWithoutRole(): void {
        $this->assertSame('team:custom', Role::team('custom'));
    }

    public function testTeamWithRole(): void {
        $this->assertSame('team:custom/owner', Role::team('custom', 'owner'));
    }

    public function testMember(): void {
        $this->assertSame('member:custom', Role::member('custom'));
    }

    public function testLabel(): void {
        $this->assertSame('label:admin', Role::label('admin'));
    }
}
