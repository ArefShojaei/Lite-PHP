<?php

import("@core/helpers/directive");


/**
 * @foreach
 * @endforeach
 * @while
 * @endwhile
 * @continue
 * @break
 */
directive("foreach", fn(string $expression): string => "<?php foreach({$expression}): ?>", true);
directive("endforeach", fn(): string => "<?php endforeach; ?>");

directive("while", fn(string $expression): string => "<?php while({$expression}): ?>", true);
directive("endwhile", fn(): string => "<?php endwhile; ?>");

directive("continue", fn(string $expression): string => "<?php if({$expression}) continue; ?>", true);
directive("break", fn(string $expression): string => "<?php if({$expression}) break; ?>", true);