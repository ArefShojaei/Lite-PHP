<?php

import("@core/helpers/test");
import("@core/helpers/assert");
import("@core/hooks/useGlobal");
import("@modules/database/main");


describe("Database Tests", function() {
    it("should connect to the database", function() {
        $connection = useGlobal("database");
        
        $result = isset($connection);

        assertTrue($result);
    });


    it("should disconnect from the database", function() {
        $connection = useGlobal("database");

        $result = mysqli_close($connection);

        assertTrue($result);
    });
});