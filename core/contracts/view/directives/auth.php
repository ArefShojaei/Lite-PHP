<?php

import("@core/helpers/directive");


/**
 * @authRole
 * @endauthRole
 
 * @auth
 * @endauth
 
 * @guest
 * @endguest
 
 * csrf
 */
directive("authRole", fn(string $role): string => '<?php if(in_array("isLoggedIn", $_SESSION) && isset($_SESSION["isLoggedIn"]) && (bool) $_SESSION["isLoggedIn"] && isset($_SESSION[' . $role . '])): ?>', true);
directive("endauthRole", fn(): string => "<?php endif; ?>");

directive("auth", fn(): string => '<?php if(in_array("isLoggedIn", $_SESSION) && isset($_SESSION["isLoggedIn"]) && (bool) $_SESSION["isLoggedIn"]): ?>');
directive("endauth", fn(): string => "<?php endif; ?>");

directive("guest", fn(): string => '<?php if(!in_array("isLoggedIn", $_SESSION)): ?>');
directive("endguest", fn(): string => "<?php endif; ?>");

directive("csrf", fn(): string => '<input type="hidden" name="csrf-token" value="<?php echo "' .  $_SESSION["csrf-token"] . '" ?>" />');