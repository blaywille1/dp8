<?php

declare(strict_types=1);

namespace DP\Tests\Visitor\Tests;

use DP\Behavioral\Visitor\RecordingVisitor;
use DP\Behavioral\Visitor\User;
use DP\Behavioral\Visitor\Group;
use DP\Behavioral\Visitor\Role;
use DP\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
