<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("", [
    "up" => function($table) {
        
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);