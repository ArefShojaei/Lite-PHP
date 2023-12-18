# Lite-PHP - Micro Freamework
![image](https://github.com/ArefShojaei/Lite-PHP/assets/134844185/9abfe4dc-b4eb-48c0-a9d0-d9323a5bfcc2)

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
4. [Directives](#directives)
    * [core/helpers/](#corehelpers)
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
        * [router](#router)
        * [config](#config)
        * [enum](#enum)
        * [env](#env)
    * [core/hooks/](#corehooks)
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
|- bootstrap
|           |- app.php
|
|- core
|      |- constants/...
|      |- helpers/...
|      |- hooks/...
|      |- modules/...
|      |- private/...
|
|- hooks
|       |- useAgent.php
|
|- modules
|         |- app
|         |     |- _config.php
|         |     |- _controller.php
|         |     |- _route.php
|         |     |- main.php
|         |
|         |- database
|                    |- _config.php
|                    |- main.php
|
|- plugins
|         |- cors
|         |      |- main.php
|         |  
|         |- logger/...
|         |  
|         |- security
|                    |- main.php
|
|- public
|        |- css/...
|        |- fonts/...
|        |- icons/...
|        |- js/...
|
|- views
|         |- errors/...
|         |- includes/...
|         |- welcome.php
|
|- .env.example
|- .gitignore
|- .htaccess
|- .README.md
|- server.php
```

### core/
**This folder is main files or the Lite-PHP core files that
can be provided base files for every projects!**

### bootstrap/
**This folder is for init app**

### modules/
**This folder is for using every modules for the app
And by default has a "app" module for running
every the Lite-PHP project well**

for developing every project , the folder is important , **because project structure is modular !**

### hooks/
**This will have custom Hooks**

### plugins/
**This will have custom Plugins**

### public/
**This will have asset files**

### views/
**This will have view content of HTML template files as php file to render that in DOM**


## Root Files
### .gitignore
**This is a config to hide 
files for pushing other files**

### .htaccess
**This is a config for apache web-server**

### README.md
**This is an info for the Lite-PHP**

### server.php
**This is main file for launching the app**

## Directives

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

* All plugins must be had two type for using in the project : 
1. Runner Type
```php
> plugins/[name]/main.php

<?php

import("@core/modules/plugin/createPlugin");


createPlugin("name", function() {
    # logic code...
}, false);
```

2. Usage Type
```php
> bootstrap/app.php

<?php

import("@core/modules/plugin/createPlugin");


createPlugin("name", function() {
    # logic code...
}); # by default the third argument value of this function is "true"
```

#### router
The router module is for handling routes in **HTTP Requests** , And You must use it **once** in the **bootstrap/app.php** file

```php
> bootstrap/app.php

<?php

import("@core/modules/router/createRouter");


createRouter();
```

#### config
The config module is for creating some configs for a module

* Note: **You can use it once in every module file as '_config.php' file**
```php
> modules/[name]/_config.php

<?php

import("@core/modules/config/createConfig");


createConfig("name", [
    "key" => "value",
]);
```

#### enum
The enum module is for creating constant values as enum

* Note: **You can use it once in every module file as '_enum.php' file**

```php
> modules/[name]/_config.php

<?php

import("@core/modules/enum/createEnum");


createEnum("Name", [
    # keys of this array must be upperCase
    "KEY" => "value",
]);
```

#### env
The env module is for parsing .env file and adding to $_ENV super global .

* Note: **You can use it once in main file**

```php
> server.php

<?php

require_once "core/modules/env/createEnv.php";


createEnv();
```
****

### core/hooks

#### useAPI
the useAPI hook is used to send HTTP request

```php
import("@core/hooks/useAPI");


/**
 * send request with "GET method" by "default"
*/

# get list of users data
$usersPayload = useAPI("http://api.com/users");

# get response
dd($usersPayload); # [...]

/**
 * send request with "POST or other method ..."
*/


# save new user data as the POST method
$userPayload = useAPI("http://api.com/users", [
    "method" => "POST",
    "body" => [...],
    "headers" => []
]);

# get response
dd($userPayload); # [...]
```

#### useBody
the useAPI hook is used to get request body data

```php
import("@core/hooks/useBody");

function doLogin() {
    # first way
    $email = useBody("email");
    $password = useBody("password");

    dd([$email, $password]);
    
    # second way
    dd(useBody());
}
```

#### useConfig
the useConfig hook is used to get configs from a module

```php
import("@core/module/config/createConfig");
import("@core/hooks/useConfig");


/**
 * database config
*/
createConfig("database", [
    "host" => "",
    "db" => "",
    "username" => "",
    "password" => "",
]);

/**
 * use the config
*/
useConfig("database.host");
useConfig("database.password");
...
```

#### useCookie
#### useEnum
#### useEnv
#### useError
#### useFile
#### useFlash
#### useGET
#### useGlobal
#### useHash
#### useHeader
#### useHTML
#### useHTTP
#### useID
#### useLog
#### useMatch
#### useMode
#### usePlugin
#### usePOST
#### useQuery
#### useRedirect
#### useRequest
#### useResponse
#### useRoute
#### useSession
#### useState
#### useType
#### useURL
#### useVerify

****


### core/helpers

#### abort
#### assets
#### build
#### dd
#### element
#### import
#### module
#### parse
#### plugin
#### url
#### validator
#### view

****

### core/constants

#### extention
#### flash
#### include
#### path
#### plugin
#### index

****

### core/private

****