<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("temp", [
    "up" => function($table) {
        column_increment($table, "id");
        column_string($table, "title");
        column_date($table, "created_at");
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);