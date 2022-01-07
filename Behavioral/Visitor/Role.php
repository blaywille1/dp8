<?php

declare(strict_types=1);

namespace DP\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}
