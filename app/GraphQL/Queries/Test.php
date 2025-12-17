<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final readonly class Test
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return "GraphQL Works";
    }
}
