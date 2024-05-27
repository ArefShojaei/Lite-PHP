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
    * [route]()
    * [dd]()
    * [parse]()
    * [view]()
    * [validator]()
    * [build]()
    * [command]()
    * [table]()
    * [test]()
    * [translate]()
    * [url]()
    * [assets]()
    * [assert]()
    * [abort]()
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

## > Introduction
### What is Lite-PHP ?
Lite-PHP is a Micro Freamework 
for developing Back-end Applications

### Why Lite-PHP ?
Because Lite-PHP has:

1. **Simple & Fast Development Env**
2. **Modular Strucutre**
3. **DBMS Like Mysql**
4. **Testing Module**
5. **Custom Plugins & Hooks**
6. **Custom Command-line in console**
7. **REST API Development**
8. **Functional Programming Structure**
9. **Folder Strucutre**
10. **No OOP & No Object & No Class**

## How can I use Lite-PHP ?

**Note**: 
1. Your PHP version must be **8.0 >=**

2. Clone this framework in a folder then run that by a Web-server + Mysql 

```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```
Finally , you will see the welcome page

## > Folder Structure
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
This folder is main files or **Lite-PHP core** files that
can be provided base files for every projects!

### bootstrap/
This folder is base files to **init the app**

### modules/
This folder is modules that the app needs to run as main file

### hooks/
This folder lets you to development **custom hooks**

### plugins/
This folder lets you to development **custom plugin**

### public/
**This folder is entry point to run the app**

### resources/
**This folder is asset and view files**

### storage/
This folder management the **log, cache and upload files**


## > Root Files

### .env.example
**This is a config for env** , Then before starting the project you must changed it from **.env.example** to **.env** file! 

### .gitignore
This is a config to **hide 
files** to not push on Github

### .htaccess
This is a config for **Apache web-server**

### README.md
**This is an info about Lite-PHP**

### server.php
This is **main file for launching the app**


## > Modules

### Alias
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
Move to **"bootstrap/alias.php"**
Then, register an Alias by this way :

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

### Config
This module registers new configuration for a module

#### 1-How can I create a config ?

```php
import("@core/modules/config/createConfig");

createConfig("config-name", [
    "key" => "value"
])
```

#### 2-How can I use the config ?

```php
import("@core/hooks/useConfig");


# Usage
useConfig("config-name.key")
```

### Enum
This module registers an Enum as constant

#### 1-How can I create an Enum ?

```php
import("@core/modules/enum/createEnum");

createEnum("enum-name", [
    "KEY" => "value"
])
```

#### 2-How can I use the Enum ?

```php
import("@core/hooks/useEnum");


# Usage
useEnum("enum-name::KEY")
```

### Plugin
This module registers new Plugin

Note: We have **two types** for using plugin :

1. **Runner Type** needs to register in         **"bootstrap/providers.php"**

2. **Usage Type** needs to use in **logic code**

#### 1-How can I create a Runner Plugin ?

```php
import("@core/modules/plugin/createPlugin");

# Usage
createPlugin("plugin-name", function ($params) {}, false);
```

#### 2-How can I use the Runner Plugin ?
Move to **"bootstrap/providers.php"** , then use this way to register the Runner Plugin

```php
"plugins" => [
    # Examples
    registerPlugin("logger", ["level" => "short"]),
    registerPlugin("security"),
    registerPlugin("cors"),

    # Usage
    registerPlugin("plugin-name"),
],
```

#### 3-How can I create a Usage Plugin ?

```php
import("@core/modules/plugin/createPlugin");

# Usage
createPlugin("plugin-name", function () {});
```

#### 4-How can I use the Usage Plugin ?
Note: for using the plugin, you should use this way 

```php
import("@core/hooks/usePlugin");


# Usage
list(...) = usePlugin("plugin-name");
```

## > Helpers

### import
This helper load file by Alias

```php
import("@modules/user/_controller")


$user = getUser();

print_r($user);
```

### import
This helper load file by Alias

```php
import("@modules/user/_controller")


$user = getUser();

print_r($user);
```

### Route
This helper lets you to register Route in a module

Note: You can use it by two ways: <br>

1. Add Single Route
2. Group Routes

```php
# Usage
import("@core/helpers/route");


# Single Route
addRoute("GET", "/user", "showUser"); # /user


# Group Route
addGroupRoute("/page", function() {
    addRoute("GET", "/home", "showHome"); # /page/home
    addRoute("GET", "/users", "showUsers"); # /page/users
    addRoute("GET", "/courses", "showCourses"); # /page/courses
});
```
