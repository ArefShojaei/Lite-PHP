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
 * short link plugin
 * @type usage
 */
createPlugin("shortLink", function() {
    /**
     * table name
     * @prop
     * @return string
     */
    $table = useEnum("ShortLink::TABLE");
    
    /**
     * columns of table
     * @prop
     * @return array
     */
    list($shortColumn, $refererColumn) = useEnum("ShortLink::COLUMNS");


    /**
     * save link in database
     * @param string $shortLink
     * @param string $refererLink
     * @return bool
     */
    $saveLink = function(string $shortLink, string $refererLink) use($table, $shortColumn, $refererColumn): bool {
        return useQuery("INSERT INTO {$table} ({$shortColumn}, {$refererColumn}) VALUES (?, ?)", [$shortLink, $refererLink]);
    };
    
    /**
     * get all links from database
     * @return array
     */
    $getLinks = function() use($table): array {
        return useQuery("SELECT * FROM {$table}");
    };
    
    /**
     * get link by short link from database
     * @param string $shortLink
     * @return array
     */
    $getLinkByShortLink = function(string $shortLink) use($table, $shortColumn): array {
        return useQuery("SELECT * FROM {$table} WHERE {$shortColumn} = ?", [$shortLink]);
    };
    

    # return as array for using this plugin
    return [$saveLink, $getLinks, $getLinkByShortLink];
});