<?php

import("@core/hooks/useState");


function createConfig(string $name, array $params): void {
    useState("configs.{$name}", $params);
}