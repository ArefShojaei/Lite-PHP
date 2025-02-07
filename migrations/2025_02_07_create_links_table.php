<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("links", [
    "up" => function($table) {
        column_increment($table, "id");
        column_string($table, "short");
        column_string($table, "reference");
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);