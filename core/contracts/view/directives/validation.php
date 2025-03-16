<?php

import("@core/helpers/directive");


/**
 * @isset
 * @endisset
 
 * @empty
 * @endempty
 
 * @flash
 * @endflash
 */
directive("isset", fn(string $expression): string => "<?php if(isset({$expression})): ?>", true);
directive("endisset", fn(): string => "<?php endif; ?>");

directive("empty", fn(string $expression): string => "<?php if(empty({$expression})): ?>", true);
directive("endempty", fn() => "<?php endif; ?>");

directive("flash", fn(string $flash): string => "<?php if(isset({$flash})): ?>", true);
directive("endflash", fn() => "<?php endif; ?>");