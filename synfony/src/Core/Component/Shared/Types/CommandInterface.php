<?php
declare(strict_types=1);

namespace App\Core\Component\Shared\Types;

/**
 * Interface CommandInterface
 * @package App\Core\Component\Shared\Types
 */
interface CommandInterface
{
    public function __construct(array $payload = []);
}
