<?php

import("@core/helpers/directive");


/**
 * @auth
 * @endauth
 * @guest
 * @endguest
 */
directive("auth", fn(): string => '<?php if(in_array("isLoggedIn", $_SESSION) && isset($_SESSION["isLoggedIn"]) && (bool) $_SESSION["isLoggedIn"]): ?>', true);
directive("endauth", fn(): string => "<?php endif; ?>", true);

directive("guest", fn(): string => '<?php if(!in_array("isLoggedIn", $_SESSION)): ?>', true);
directive("endguest", fn(): string => "<?php endif; ?>", true);