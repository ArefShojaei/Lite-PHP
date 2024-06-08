<?php

/**
 * Show welcome message
 * @function welcomeCommand
 * @return string
 */
function welcomeCommand(): string {
    # Composer Config File
    $config = json_decode(file_get_contents(dirname(__DIR__, 3) . "/composer.json"), true);
  
    # App version info
    $version = [
        "app" => $config["version"],
        "php" => phpversion(),
    ];


    return "
░░      ░░ ░░░░░░░░ ░░░░░░░     ░░░░░░  ░░   ░░ ░░░░░░  
▒▒      ▒▒    ▒▒    ▒▒          ▒▒   ▒▒ ▒▒   ▒▒ ▒▒   ▒▒ 
▒▒      ▒▒    ▒▒    ▒▒▒▒▒       ▒▒▒▒▒▒  ▒▒▒▒▒▒▒ ▒▒▒▒▒▒  
▓▓      ▓▓    ▓▓    ▓▓          ▓▓      ▓▓   ▓▓ ▓▓      
███████ ██    ██    ███████     ██      ██   ██ ██      

                Micro PHP Framework - {$version['app']}

                        Welcome 🎉
        ---------------------------------------
📌 Info:
    🏷️  App version : {$version['app']}
    🏷️  PHP version : {$version['php']}


📌 Usage:
    🏷️  php cli [command] [args]


🧩 Use \"php cli list\" command
";
}