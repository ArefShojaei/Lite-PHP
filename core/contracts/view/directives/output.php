<?php

import("@core/helpers/directive");


/**
 * {{ $escaped }}
 * {{{ $unEscaped }}}
 * {{!-- comment --}}
 */
directiveSyntax("{{", "}}", fn($variable): string => "<?php echo htmlspecialchars({$variable}) ?>", true);
directiveSyntax("{{{", "}}}", fn($variable): string => "<?php echo {$variable} ?>", true);
directiveSyntax("{{!--", "--}}", fn($comment): string => "<!-- {$comment} -->", true);