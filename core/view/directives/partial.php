<?php

import("@core/helpers/directive");


/**
 * @include
 */
directive("include", fn(string $src): string => "<?php include partial({$src}); ?>", true);