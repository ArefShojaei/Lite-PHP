<?php

/**
 * @package
 */
import("@commands/make/_shared");



/**
 * Make command by name
 * @function makeCommand
 * @param string $name command name
 * @return void
 */
function makeCommand($name): void {
    # Define tag
    $tag = "command";

    # Register license
    list($src, $DIR) = _getPathInfo("console/commands/{$name}");

    # Check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;

    # Make DIR
    mkdir($DIR);

    # Get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_command-template.php");


    # Make specific files
    _makeFiles([
        $src => $content,
        "{$DIR}/_helpers.php" => "",
        "{$DIR}/_shared.php" => "",
    ]);


    # Show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * Make module by name
 * @function makeModule
 * @param string $name module name
 * @return void
 */
function makeModule($name): void {
    # Define tag
    $tag = "module";

    # register license
    list($src, $DIR) = _getPathInfo("modules/{$name}");

    # Check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;

    # Make DIR
    mkdir($DIR);

    # Get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_module-template.php");


    # Make specific files
    _makeFiles([
        $src => $content,
        "{$DIR}/_config.php" => "",
        "{$DIR}/_model.php" => "",
        "{$DIR}/_controller.php" => "",
        "{$DIR}/_service.php" => "",
        "{$DIR}/_middleware.php" => "",
        "{$DIR}/_test.php" => "",
    ]);

    
    # Show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * Make plugin by name
 * @function makePlugin
 * @param string $name Plugin name
 * @param string $type Types like "--runner" & "--usage" 
 * @return void
 */
function makePlugin($name, $type): void {
    # Define tag
    $tag = "plugin";

    # Register license
    list($src, $DIR) = _getPathInfo("plugins/{$name}");

    # Check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;


    # Make DIR
    mkdir($DIR);

    # Get plugin type
    $pluginType = $type == "--usage" ? "usage" : "runner";
    
    # Get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_plugin-{$pluginType}-template.php");

    # Make specific file
    _makeFile($src, $content);

    # Show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * Make hook by name
 * @function makeHook
 * @param string $name Hook name
 * @return void
 */
function makeHook($name): void {
    # Define tag
    $tag = "hook";

    # Register license
    list($src, $DIR) = _getPathInfo("hooks", $name);

    # Check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;


    # Get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_hook-template.php");

    # Make specific file
    _makeFile($src, $content);

    # Show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * Make view by name
 * @function makeView
 * @param string $name View name
 * @return void
 */
function makeView($name): void {
    # Define tag
    $tag = "view";

    # Register license
    list($src, $DIR) = _getPathInfo("resources/views", $name);

    # Check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # Stop proccess if file exists!
    if($fileStatus) return;

    
    # Make specific file
    _makeFile($src, "");

    # Show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}
