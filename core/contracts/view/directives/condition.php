<?php

import("@core/helpers/directive");


/**
 * @if
 * @elseif
 * @else
 * @endif
 */
directive("if", fn(string $expression): string => "<?php if({$expression}): ?>", true);
directive("elseif", fn(string $expression): string => "<?php elseif({$expression}): ?>", true);
directive("else", fn(): string => "<?php else: ?>");
directive("endif", fn(): string => "<?php endif; ?>");