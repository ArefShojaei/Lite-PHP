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
    * [public/]()
    * [views/]()
3. [Root Files](#root-files)
    * [.env.example]()
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [README.md](#readmemd)
    * [server.php](#serverphp)
4. [Tutorial](#tutorial)
    * [core/helpers/]()
        * [assets]()
        * [dd]()
        * [import]()
        * [module]()
        * [parse]()
        * [plugin]()
        * [url]()
        * [validator]()
        * [view]()
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
        * [useQuery]()
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
        * [useState]()
        * [useGlobal]()
        * [useEnum]()
---
## Introduction
### What is Lite-PHP ?
The Lite-PHP is a Micro Freamework 
for developing Back-end Applications

### Why Lite-PHP ?
Because Lite-PHP has:

1. **Simple & Fast Development Env**
2. **Modular Strucutre**
3. **DBMS Like Mysql**
4. **Custom Plugins & Hooks**
5. **Functional Programming Structure**
6. **Folder Strucutre**
7. **No OOP & No Object**

## How can I use Lite-PHP ?

**Note**: 
1. Your PHP version must be **8.0 >=**

2. This Folder of contents must be moved to 
target web-server folder for running the project


```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```

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
**This folder is main files or Lite-PHP core files that
can be provided base files for every projects!**

### bootstrap/
**This folder is for init app**

### modules/
**This folder is for using every modules for the app
And by default has a "app" module for running
every Lite-PHP project well** 

### hooks/
**This will have custom Hooks**

### plugins/
**This will have custom Plugins**

## Root Files
### .gitignore
**This is a config to hide 
files for pushing other files**

### .htaccess
**This is a config for apache web-server**

### README.md
**This is an info for Lite-PHP**

### server.php
**This is main file for launching the app**

## Tutorial
### core/modules/

#### app
The app module is **main module** to init the app project .
And You must use it **once** in the **server.php** file
```php
> server.php

<?php

createApp(function() {
    # Logic code...
});
```

#### alias
The alias module is for **declaring path** or more paths for a file **as alias**
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
The module of modules folder is for register all modules for running in the app.

And You must use it **once** in the **bootstrap/app.php** file
```php
> bootstrap/app.php

<?php

createModule(function() {
    registerModule("app");
});
```

#### plugin
The plugin module is for creating new plugin.
And You must use it **once** in every plugins/[name]/main.php file!

Don't Forget it .

* All plugins can be had two type for using in the project : 
1. Runner Type
2. Usage Type