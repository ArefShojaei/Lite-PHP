<?php

import("@core/helpers/directive");


/**
 * @isset
 * @endisset
 * @empty
 * @endempty
 */
directive("isset", fn(string $expression): string => "<?php if(isset({$expression})): ?>", true);
directive("endisset", fn(): string => "<?php else: ?>");

directive("empty", fn(string $expression): string => "<?php if(empty({$expression})): ?>", true);
directive("endempty", fn() => "<?php else: ?>");

directive("error", fn(string $flash): string => "<?php if(isset({$flash})): ?>", true);
directive("enderror", fn() => "<?php endif: ?>");