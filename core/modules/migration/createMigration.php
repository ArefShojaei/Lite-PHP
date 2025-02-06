<?php

import("@core/hooks/useState");


function createMigration(string $table, array $actions): void {
    useState("migrations.{$table}", $actions);
}