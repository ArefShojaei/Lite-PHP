<?php

/**
 * @package
 */
import("@commands/make/_shared");



/**
 * make command by name
 * @function makeCommand
 * @param string $name command name
 * @return void
 */
function makeCommand($name): void {
    # define tag
    $tag = "command";

    # register license
    list($src, $DIR) = _getPathInfo("console/commands/{$name}");

    # check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # stop proccess if file exists!
    if($fileStatus) return;

    # make DIR
    mkdir($DIR);

    # get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_command-template.php");


    # make specific files
    _makeFiles([
        $src => $content,
        "{$DIR}/_helpers.php" => "",
        "{$DIR}/_shared.php" => "",
    ]);


    # show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * make module by name
 * @function makeModule
 * @param string $name module name
 * @return void
 */
function makeModule($name): void {
    # define tag
    $tag = "module";

    # register license
    list($src, $DIR) = _getPathInfo("modules/{$name}");

    # check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # stop proccess if file exists!
    if($fileStatus) return;

    # make DIR
    mkdir($DIR);

    # get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_module-template.php");


    # make specific files
    _makeFiles([
        $src => $content,
        "{$DIR}/_config.php" => "",
        "{$DIR}/_model.php" => "",
        "{$DIR}/_controller.php" => "",
        "{$DIR}/_service.php" => "",
        "{$DIR}/_middleware.php" => "",
        "{$DIR}/_test.php" => "",
    ]);

    
    # show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * make plugin by name
 * @function makePlugin
 * @param string $name plugin name
 * @param string $type types like "--runner" & "--usage" 
 * @return void
 */
function makePlugin($name, $type): void {
    # define tag
    $tag = "plugin";

    # register license
    list($src, $DIR) = _getPathInfo("plugins/{$name}");

    # check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # stop proccess if file exists!
    if($fileStatus) return;


    # make DIR
    mkdir($DIR);

    # get plugin type
    $pluginType = $type == "--usage" ? "usage" : "runner";
    
    # get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_plugin-{$pluginType}-template.php");

    # make specific file
    _makeFile($src, $content);

    # show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * make hook by name
 * @function makeHook
 * @param string $name hook name
 * @return void
 */
function makeHook($name): void {
    # define tag
    $tag = "hook";

    # register license
    list($src, $DIR) = _getPathInfo("hooks", $name);

    # check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # stop proccess if file exists!
    if($fileStatus) return;


    # get file content by pre-defined templates
    $content = file_get_contents("console/commands/make/templates/_hook-template.php");

    # make specific file
    _makeFile($src, $content);

    # show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}


/**
 * make view by name
 * @function makeView
 * @param string $name view name
 * @return void
 */
function makeView($name): void {
    # define tag
    $tag = "view";

    # register license
    list($src, $DIR) = _getPathInfo("resources/views", $name);

    # check to exist file as Middleware 
    $fileStatus = _checkFileToExist($src, $name, $tag);
    
    # stop proccess if file exists!
    if($fileStatus) return;

    
    # make specific file
    _makeFile($src, "");

    # show final message about the task
    _showCompletedTaskMessage($tag, $DIR);
}
