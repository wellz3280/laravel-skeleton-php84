<?php

namespace Tests\Unit;

use App\Models\Entities\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserEntity(): void
    {
        $user = new User(1, 'jose', 'silva');
        $this->assertSame(1, $user->getId());
        $this->assertSame('jose', $user->getName());
        $this->assertSame('silva', $user->getLasName());
    }
}
