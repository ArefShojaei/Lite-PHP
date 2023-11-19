# [Lite-PHP](https://github.com/ArefShojaei/Lite-PHP)
**Mirco PHP Freamework** - **Modular Structure** & **Functional Programming !**

---
### Categories :
1. [Introduction](#introduction)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
    * [How can I use Lite-PHP ?](#how-can-i-use-lite-php)
2. [Folder Structure](#folder-structure)
    * [core/](#core)
    * [bootstrap/](#bootstrap)
    * [modules/](#modules)
    * [hooks/](#hooks)
    * [plugins/](#plugins)
3. [Root Files](#root-files)
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [README.md](#readmemd)
    * [server.php](#serverphp)
4. [Tutorial](#tutorial)
    * [core/modules/](#coremodules)
        * [app](#app)
        * [alias](#alias)
        * [module](#module)
        * [plugin](#plugin)
        * [router]()
        * [config]()
        * [enum]()
        * [env]()
    * [core/hooks/]()
        * [useHTTP]()
        * [useRequest]()
        * [useResponse]()
        * [useType]()
        * [useURL]()
        * [useRoute]()
        * [useRedirect]()
        * [useQueryParam]()
        * [usePlugin]()
        * [useMode]()
        * [useID]()
        * [useHeader]()
        * [useHash]()
        * [useHTML]()
        * [useError]()
        * [useEnv]()
        * [useConfig]()
        * [useBody]()
        * [useAPI]()
    * [core/helpers/]()
        * [assets]()
        * [import]()
        * [module]()
        * [parse]()
        * [plugin]()
        * [url]()
        * [view]()
---
## Introduction
### What is Lite-PHP?
```text
The Lite-PHP is a Micro Freamework 
for developing Back-end Applications
```
### Why Lite-PHP?
```text
Because Lite-PHP has:

* Simple & Fast Development Env
* More Hooks - Helper Functions - Modules & ...
* Modular Strucutre
* Custom Plugins & Hooks
* Functional Programming Structure
* Folder Strucutre
* No OOP & No Object
```
## How can I use Lite-PHP?
```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```
**Note**: 
1. This Folder of contents must be moved to 
target web-server folder for running the project
2. Your PHP version must be **8.0 >=**

## Folder Structure
```bash
|- bootstrap
|           |- app.php
|
|- core
|      |- helpers/...
|      |- hooks/...
|      |- modules/...
|
|- hooks
|       |- useUserAgent.php
|
|- modules
|         |- app
|         |     |- _config.php
|         |     |- _controller.php
|         |     |- _route.php
|         |     |- main.php
|         |
|         |- database
|               |- _config.php
|               |- main.php
|
|- plugins
|         |- logger
|                  |- _enum.php
|                  |- main.php
|
|- public
|        |- css/...
|        |- fonts/...
|        |- img/...
|        |- js/...
|
|- views
|         |- includes/...
|         |- index.php
|
|- .env.example
|- .gitignore
|- .htaccess
|- .README.md
|- server.php
```
### core/
```text
This folder is main files or Lite-PHP core files that
can be provided base files for every projects!
```
### bootstrap/
```text
This folder is for init app
```
### modules/
```text
This folder is for using every modules for the app
And by default has a "app" module for running
every Lite-PHP project well 
```
### hooks/
```text
This will have custom Hooks
```
### plugins/
```text
This will have custom Plugins
```
## Root Files

### .gitignore
```text
This is a config to hide 
files for pushing other files
```
### .htaccess
```text
This is a config for apache web-server
```
### README.md
```text
This is an info for Lite-PHP
```
### server.php
```text
This is main file for launching the app
```

## Tutorial

### core/modules/

#### app
App module is **main module** to init the app project .
And You must use it **once** in the **server.php** file
```php
> server.php

<?php

createApp(function() {
    # Logic code...
});
```

#### alias
Alias module is for **declaring path** or more path for a file **as alias**
And You must use it **once** in the **server.php** file
```php
<?php

# Before
include "../../core/hooks/useHTTP.php";

# After
import("@hooks/useHTTP");
```
```php
> server.php

<?php

# init app
createApp(function() {
    # register all aliases
    createAlias([
        "@core" => "core", # core folder path as pointer
        "@bootstrap" => "bootstrap",
        "@modules" => "modules", 
        "@hooks" => "hooks",
        "@plugins" => "plugins",
    ]);
});

# use the alias
import("@core/hooks/useHTTP");

echo useHTTP("HTTP_HOST"); # localhost | ...
```

#### module
module of modules folder is for register all modules for running in the app .
And You must use it **once** in the **bootstrap/app.php** file
```php
> bootstrap/app.php

<?php

createModule(function() {
    registerModule("app");
});
```

#### plugin
plugin module is for creating new plugin.
And You must use it **once** in every plugins/[name].php file!

Don't Forget it .
```php
> plugins/[name].php

<?php

createPlugin("name", function() {
    # Logic code...
});
```