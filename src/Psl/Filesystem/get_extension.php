<?php

declare(strict_types=1);

namespace Psl\Filesystem;

use function pathinfo;

/**
 * Returns the $node extension.
 *
 * @param non-empty-string $node
 *
 * @return non-empty-string|null the $node extensions, or null if none.
 *
 * @pure
 */
function get_extension(string $node): ?string
{
    /** @var non-empty-string|null */
    return pathinfo($node)['extension'] ?? null;
}
