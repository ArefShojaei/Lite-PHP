![Header](https://github.com/ArefShojaei/Lite-PHP/assets/134844185/5fa46fac-9c94-41fc-8b1b-31201b8e66f5)

---
### Categories :
1. [Introduction](#introduction)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
    * [How can I use Lite-PHP ?](#how-can-i-use-lite-php)
2. [Folder Structure](#folder-structure)
    * [core/](#core)
    * [bootstrap/](#bootstrap)
    * [public/](#public)
    * [modules/](#modules)
    * [plugins/](#plugins)
    * [console/](#console)
    * [resources/](#resources)
    * [hooks/](#hooks)
    * [storage/](#storage)
3. [Root Files](#root-files)
    * [.env.example]()
    * [.gitignore]()
    * [.htaccess]()
    * [cli]()
    * [gulpfile.mjs]()
    * [package.json]()
    * [README.md]()
    * [server.php]()
4. [Modules]()
    * [alias](#Alias)
    * [config]()
    * [enum]()
    * [plugin]()
5. [Helpers]()
    * [import]()
    * [abort]()
    * [assert]()
    * [assets]()
    * [build]()
    * [command]()
    * [dd]()
    * [parse]()
    * [table]()
    * [route]()
    * [test]()
    * [translate]()
    * [url]()
    * [view]()
    * [validator]()
6. [Hooks]()
    * [useHTTP]()
    * [useGET]()
    * [usePOST]()
    * [useAPI]()
    * [useBody]()
    * [useCache]()
    * [useConfig]()
    * [useEnum]()
    * [useFile]()
    * [useGlobal]()
    * [useState]()
    * [useHash]()
    * [usePasswordVerfiy]()
    * [useHeader]()
    * [useHTML]()
    * [useID]()
    * [useRedirect]()
    * [useURL]()
    * [useType]()
    * [useCookie]()
    * [useSession]()
    * [useMode]()
    * [useMatch]()
    * [useLog]()
    * [useFlash]()
    * [useError]()
    * [useEnv]()
    * [usePlugin]()
    * [useQuery]()
    * [useRequest]()
    * [useResponse]()
    * [useUpload]()
---

## Introduction
### What is Lite-PHP ?
Lite-PHP is a Micro Freamework 
for developing Back-end Applications

### Why Lite-PHP ?
Because the Lite-PHP has:

1. **Simple & Fast Development Env**
2. **Modular Strucutre**
3. **DBMS Like Mysql**
4. **Custom Plugins & Hooks**
5. **Custom Command Line in console**
8. **REST API Development**
5. **Functional Programming Structure**
6. **Folder Strucutre**
7. **No OOP & No Object & No Class**

## How can I use Lite-PHP ?

**Note**: 
1. Your PHP version must be **8.0 >=**

2. Clone this framework in a folder then run that by a web-server

```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```
Then run mysql & web-server<br>
Finally , you will see the welcome page

## Folder Structure
Here is default folder structure for starting new project !

```bash
|- bootstrap/
|
|- console/
|
|- core/
|
|- hooks/
|
|- modules/
|
|- plugins/
|
|- public/
|
|- resources/
|
|- storage/
|
|
|- .env.example
|- .gitignore
|- .htaccess
|- .cli
|- gulpfile.mjs
|- package.json
|- .README.md
|- server.php
```

### core/
**This folder is main files or Lite-PHP core files that
can be provided base files for every projects!**

### bootstrap/
**This folder is to init bade app files**

### modules/
This folder is modules that the app needs to run as main files

### hooks/
**In this folder you can development own custom hooks that you will use it in your project soon**

### plugins/
**In this folder you can development own custom plugin that you will use it in your project soon**

### public/
**This folder is entry point to run the app**

### resources/
**This folder has asset and view files**

### storage/
**This folder management log, cache and upload files**


## Root Files

### .env.example
**This is a config for env** , Then before starting the project you must changed it from **.env.example** to **.env** file! 

### .gitignore
**This is a config to hide 
files for pushing other files**

### .htaccess
**This is a config for apache web-server**

### README.md
**This is an info for the Lite-PHP**

### server.php
**This is main file for launching the app**


## Modules

### alias
This module provides to register custom Alias

#### 1-Example:
```php
# Before
require_once "../../../modules/user/_controller.php";
require_once "../console/commands/package/_main.php";

# After
import("@modules/user/_controller") # without using '.php' ext
import("@commands/package/_main") # without using '.php' ext
```

#### 2-How can I use that ?
Move to "bootstrap/alias.php"
Then, register own alias by this way:
```php
/**
 * init aliases
 */
createAlias([
   # Guide
   "@<alias-name>" => dirname(__DIR__) . "path",

   # Example
    "@core" => dirname(__DIR__) . "/core",
    "@modules" => dirname(__DIR__) . "/modules",
    ...
]);
```

### config
This module is to register config

#### 1-How can I create a config ?
```php
import("@core/modules/config/createConfig");

createConfig("configName", [
    "key" => "value"
])
```

#### 2-How can I use the config ?
```php
import("@core/hooks/useConfig");

useConfig("configName.key")
```

### enum
This module is to register enum as constant

#### 1-How can I create an enum ?
```php
import("@core/modules/enum/createEnum");

createEnum("ConfigName", [
    "KEY" => "value"
])
```

#### 2-How can I use the enum ?
```php
import("@core/hooks/useEnum");

useEnum("ConfigName::KEY")
```

### plugin
This module is to register plugin

Note: We have two types for using plugin :

1. **Runner Type**
2. **Usage Type**

#### 1-How can I create an enum ?
```php
import("@core/modules/plugin/createPlugin");

# usage type
createPlugin("pluginName", function () {});

# runner type
createPlugin("pluginName", function ($params) {}, false);
```

#### 2-How can I use the plugin ?
```php
# Runner Type
registerPlugin("pluginName")

# Usage Type
import("@core/hooks/usePlugin");
usePlugin("pluginName"); # usage type
```







## Helpers

### import
This helper is for load file by alias that you've **already decalred** that in the **createAlias module**

```php
# Before
require "../hooks/useAgent.php";

# After
import("@hooks/useAgent");
```

### module
This helper is to register module in **bootstrap/app.php** file!

```php
# helper function to register new module
registerModule();

# usage
createModule(function () {
    return [
        # list of plugins that has runner type
        "plugins" => [],
        # list of modules that must be run in main process
        "modules" => [
            registerModule("moduleName"),
        ],
    ];
});
```

### plugin
This helper is to register plugin in **bootstrap/app.php** file!

```php
# helper function to register new plugin
registerPlugin();

# usage
createModule(function () {
    return [
        # list of plugins that has runner type
        "plugins" => [
            registerPlugin("pluginName"),
        ],
        # list of modules that must be run in main process
        "modules" => [],
    ];
});
```

### view
This helper is to render HTML template

```php
import("@core/helpers/view");

function index() {
    view("login", ["title" => "Login Page"]);
}
```

### dd
This helper is to dump & die an Array info

```php
$numbers = [1,2,3,4,5];

dd($numbers);
```

### abort
This helper is to throw HTTP exception

```php
import("@core/helpers/abort");

abort(404, "Page not found!")
```

### parse
This helper is to prase file content

```php
import("@core/helpers/parse");

parse("links.txt")
```



### Soon 
