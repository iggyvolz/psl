<?php

declare(strict_types=1);

namespace Psl\Shell;

enum ErrorOutputBehavior {
    /**
     * Discard the standard error output.
     */
    case DISCARD;

    /**
     * Append the standard error output content to the standard output content.
     */
    case APPEND;

    /**
     * Prepend the standard error output content to the standard output content.
     */
    case PREPEND;

    /**
     * Replace the standard output content with the standard error output content.
     */
    case REPLACE;
}
