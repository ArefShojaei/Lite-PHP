<?php

import("@core/helpers/directive");
import("@core/hooks/useSession");


/**
 * @authRole
 * @endauthRole
 
 * @auth
 * @endauth
 
 * @guest
 * @endguest
 
 * csrf
 */
directive("authRole", fn(string $role): string => '<?php if(useSession("isLoggedIn") && (bool) useSession("isLoggedIn") && useSession(' . $role . ') ): ?>', true);
directive("endauthRole", fn(): string => "<?php endif; ?>");

directive("auth", fn(): string => '<?php if(useSession("isLoggedIn") && (bool) useSession("isLoggedIn")): ?>');
directive("endauth", fn(): string => "<?php endif; ?>");

directive("guest", fn(): string => '<?php if(!useSession("isLoggedIn")): ?>');
directive("endguest", fn(): string => "<?php endif; ?>");

directive("csrf", fn(): string => '<input type="hidden" name="_token" value="<?php echo "' .  useSession("_token") . '" ?>" />');