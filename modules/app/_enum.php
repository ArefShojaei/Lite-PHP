<?php

import("@core/modules/enum/createEnum");


createEnum("HTTP", [
    "500" => "Internal Server Error!",
    "429" => "Too Many Requests!",
    "404" => "Not Found!",
    "403" => "Forbidden!",
    "401" => "Unauthorized!",
    "400" => "Bad Request!",
]);