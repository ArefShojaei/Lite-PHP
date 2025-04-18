<?php

/**
 * Show welcome message
 */
function welcomeCommand(): string {
    # Composer configs
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
    🏷️  php cli [command] [args] [flag]


🧩 Use \"php cli list\" command
";
}