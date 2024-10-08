<?php

import("@core/helpers/directive");


/**
 * @linkStyle
 * @style
 * @endstyle
 * @linkScript
 * @script
 * @endscript
 * @php
 * @endphp
 * @dump
 * @dd
 */
directive("linkStyle", fn(string $url): string => "<link rel='stylesheet' href='{$url}'>", true);
directive("style", fn(): string => "<style>");
directive("endstyle", fn(): string => "</style>");

directive("linkScript", fn(string $url): string => "<script src='{$url}' defer>", true);
directive("script", fn(): string => "<script>");
directive("endscript", fn(): string => "</script>");

directive("php", fn(): string => "<?php");
directive("endphp", fn(): string => "?>");

directive("dump", fn(string $data): string => "<?php var_dump({$data}) ?>", true);

directive("dd", fn(string $data): string => "<?php dd({$data}) ?>", true);