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
    * [modules/](#modules)
    * [hooks/](#hooks)
    * [plugins/](#plugins)
    * [public/](#public)
    * [views/](#views)
3. [Root Files](#root-files)
    * [.env.example]()
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [README.md](#readmemd)
    * [server.php](#serverphp)
4. [Modules]()
    * [alias]()
    * [config]()
    * [enum]()
    * [plugin]()
5. [Helpers]()
    * [import]()
    * [module]()
    * [plugin]()
    * [view]()
    * [dd]()
    * [url]()
    * [assets]()
    * [validator]()
    * [abort]()
    * [parse]()
    * [build]()
    * [element]()
6. [Hooks]()
    * [useHTTP]()
    * [useHeader]()
    * [useType]()
    * [useRequest]()
    * [useResponse]()
    * [useCookie]()
    * [useSession]()
    * [useRoute]()
    * [useRedirect]()
    * [useQuery]()
    * [useGET]()
    * [usePOST]()
    * [useBody]()
    * [useFile]()
    * [useEnv]()
    * [useMode]()
    * [useEnum]()
    * [useConfig]()
    * [useHash]()
    * [useVerify]()
    * [useAPI]()
    * [useHTML]()
    * [useID]()
    * [useFlash]()
    * [usePlugin]()
    * [useMatch]()
    * [useURL]()
    * [useError]()
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
8. **REST API Development**
5. **Functional Programming Structure**
6. **Folder Strucutre**
7. **No OOP & No Object & No Class**

## How can I use Lite-PHP ?

**Note**: 
1. Your PHP version must be **8.0 >=**

2. This Folder of contents must be moved to 
target web-server folder for running the project


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
|- core/
|
|- hooks/
|
|- lang/
|
|- modules/
|
|- plugins/
|
|- public/
|
|- storage/
|
|- views/
|
|- .env.example
|- .gitignore
|- .htaccess
|- .README.md
|- server.php
```

### core/
**This folder is main files or Lite-PHP core files that
can be provided base files for every projects!**

### bootstrap/
**This folder is to init app**

### modules/
This folder is for using every modules for the app
And by default has a "app" module for running
every the Lite-PHP project well** + you can **register every modules** for the project

for developing every project , this folder is important , **because project structure is modular!**

### hooks/
**This will have custom Hooks**

### plugins/
**This will have custom Plugins**

### public/
**This will have asset files**

### views/
**This will have view content of HTML template files as php file to render that in DOM**


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
This module is to register every alias

#### 1-Example:
```php
# Before
require_once "../../modules/user/_model";

# After
import("@modules/user/_model")
```

#### 2-How can I use that ?
```php
require_once "core/modules/alias/createAlias";

createAlias([
    # guide
    "@<alias name>" => "path",
    
    # usage
    "@auth" => "modules/auth",
    "@hooks" => "core/hooks",
    "@logger" => "plugins/logger",
]);

# using in the project
import("@auth/_model");
import("@auth/_route");
import("@logger/_enum");
...
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
