<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useEnum");
import("@core/hooks/useRequest");
import("@core/hooks/useRedirect");
import("@core/hooks/useQuery");
import("@plugins/shortLink/_enum");


/**
 * @type Usage
 */
createPlugin("shortLink", function() {
    $table = useEnum("ShortLink::TABLE");
    
    list($shortColumn, $refererColumn) = useEnum("ShortLink::COLUMNS");


    $saveLink = function(string $shortLink, string $refererLink) use($table, $shortColumn, $refererColumn): bool {
        return useQuery("INSERT INTO {$table} ({$shortColumn}, {$refererColumn}) VALUES (?, ?)", [$shortLink, $refererLink]);
    };
    
    $getLinks = function() use($table): array {
        return useQuery("SELECT * FROM {$table}");
    };
    
    $getLinkByShortLink = function(string $shortLink) use($table, $shortColumn): array {
        return useQuery("SELECT * FROM {$table} WHERE {$shortColumn} = ?", [$shortLink]);
    };
    

    return [$saveLink, $getLinks, $getLinkByShortLink];
});