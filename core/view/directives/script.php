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
 */
directive("linkStyle", fn(string $url): string => "<link rel='stylesheet' href='{$url}'>", true);
directive("style", fn(): string => "<style>");
directive("endstyle", fn(): string => "</style>");

directive("linkScript", fn(string $url): string => "<script src='{$url}' defer>", true);
directive("script", fn(): string => "<>");
directive("endscript", fn(): string => "</script>");