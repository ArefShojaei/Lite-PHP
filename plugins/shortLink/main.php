<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useEnum");
import("@core/hooks/useRequest");
import("@core/hooks/useRedirect");
import("@core/hooks/useQuery");
import("@plugins/shortLink/_enum");


/**
 * Short link plugin
 * @type Usage
 */
createPlugin("shortLink", function() {
    /**
     * Table name
     * @prop
     * @return string
     */
    $table = useEnum("ShortLink::TABLE");
    
    /**
     * Columns of table
     * @prop
     * @return array
     */
    list($shortColumn, $refererColumn) = useEnum("ShortLink::COLUMNS");


    /**
     * Save link in database
     * @param string $shortLink
     * @param string $refererLink
     * @return bool
     */
    $saveLink = function(string $shortLink, string $refererLink) use($table, $shortColumn, $refererColumn): bool {
        return useQuery("INSERT INTO {$table} ({$shortColumn}, {$refererColumn}) VALUES (?, ?)", [$shortLink, $refererLink]);
    };
    
    /**
     * Get all links from database
     * @return array
     */
    $getLinks = function() use($table): array {
        return useQuery("SELECT * FROM {$table}");
    };
    
    /**
     * Get link by short link from database
     * @param string $shortLink
     * @return array
     */
    $getLinkByShortLink = function(string $shortLink) use($table, $shortColumn): array {
        return useQuery("SELECT * FROM {$table} WHERE {$shortColumn} = ?", [$shortLink]);
    };
    

    # Return as array for using this plugin
    return [$saveLink, $getLinks, $getLinkByShortLink];
});