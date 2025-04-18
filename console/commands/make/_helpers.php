<?php

import("@commands/make/_shared");


function makeCommand(string $name): void {
    $tag = "command";

    list($src, $DIR) = _getPathInfo("console/commands/{$name}");

    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if the file exists!
    if($fileStatus) return;

    
    mkdir($DIR);

    # Get the file content by pre-defined templates
    $content = file_get_contents(_getBaseCommandTemplatesPath() . "/_command-template.php");


    _makeFiles([
        $src => $content,
        "{$DIR}/_helpers.php" => "",
        "{$DIR}/_shared.php" => "",
    ]);

    _showCompletedTaskMessage($tag, $DIR);
}

function makeModule(string $name): void {
    $tag = "module";

    list($src, $DIR) = _getPathInfo("modules/{$name}");

    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if the file exists!
    if($fileStatus) return;

    mkdir($DIR);

    # Get the file content by pre-defined templates
    $content = file_get_contents(_getBaseCommandTemplatesPath() . "/_module-template.php");


    _makeFiles([
        $src => $content,
        "{$DIR}/_config.php" => "",
        "{$DIR}/_model.php" => "",
        "{$DIR}/_controller.php" => "",
        "{$DIR}/_service.php" => "",
        "{$DIR}/_middleware.php" => "",
        "{$DIR}/_test.php" => "",
    ]);

    _showCompletedTaskMessage($tag, $DIR);
}

/**
 * @param $type Types like "--runner" & "--usage" 
 */
function makePlugin(string $name, string $type): void {
    $tag = "plugin";

    list($src, $DIR) = _getPathInfo("plugins/{$name}");

    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if the file exists!
    if($fileStatus) return;


    mkdir($DIR);


    $pluginType = $type == "--usage" ? "usage" : "runner";
    
    # Get the file content by pre-defined templates
    $content = file_get_contents(_getBaseCommandTemplatesPath() . "/_plugin-{$pluginType}-template.php");


    _makeFile($src, $content);

    _showCompletedTaskMessage($tag, $DIR);
}

function makeHook(string $name): void {
    $tag = "hook";

    list($src, $DIR) = _getPathInfo("hooks", $name);

    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if the file exists!
    if($fileStatus) return;


    # Get the file content by pre-defined templates
    $content = file_get_contents(_getBaseCommandTemplatesPath() . "/_hook-template.php");

    _makeFile($src, $content);

    _showCompletedTaskMessage($tag, $DIR);
}

function makeView(string $name): void {
    $tag = "view";

    list($src, $DIR) = _getPathInfo(VIEWS_PATH, $name);

    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;

    
    _makeFile($src, content: "");

    _showCompletedTaskMessage($tag, $DIR);
}

function makeMigration(string $name): void {
    $tag = "migration";

    $filename = date("Y_m_d") . "_" . $name;

    list($src, $DIR) = _getPathInfo("migrations", $filename);


    if (file_exists($src)) die("The `{$filename}` migration file has been exists!");

    # Get the file content by pre-defined templates
    $content = file_get_contents(_getBaseCommandTemplatesPath() . "/_migration-template.php");

    
    _makeFile($src, $content);

    _showCompletedTaskMessage($tag, $DIR);
}