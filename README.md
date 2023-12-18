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

#### useConfig
the useConfig hook is used to get configs from a module

```php
import("@core/modules/config/createConfig");
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

#### useEnum
the useEnum hook is used to get enum from a module

```php
import("@core/modules/enum/createEnum");
import("@core/hooks/useEnum");


/**
 * create enum
*/
createEnum("Logger", [
    "NAME" => "app",
    "LEVEL" => "INFO"
]);

/**
 * use the enum
*/
useEnum("Logger@NAME");
useEnum("Logger@LEVEL");
...
```

#### useEnv
the useEnv hook is used to get variables from **.env** file **as** "env"

```php
import("@core/hooks/useEnv");

# .env
APP_NAME = Lite-PHP
APP_MODE = development
...


# usage
useEnv("APP_NAME");
useEnv("APP_MODE");
...
```

#### useMode
the useMode hook is used to get APP_MODE from **.env** file

```php
import("@core/hooks/useMode");

# .env
APP_MODE = development
...


# usage
useMode();
```

#### useError
the useError hook is used to die the project and **show message** as **error**

```php
import("@core/hooks/useError");

$age = 20;

if($age <= 15) useError("The age is not valid!");

echo "The age is valid.";
```

#### useGET
the useGET hook is used to get request data from **$_GET super global**

```php
import("@core/hooks/useGET");

function doLogin() {
    # first way: get specific request data
    $email = useGET("email");
    $password = useGET("password");
    
    dd([$email, $password]);

    # second way: get all request data
    dd(useGET());
}
```

#### usePOST
the usePOST hook is used to get request data from **$_POST super global**

```php
import("@core/hooks/usePOST");

function doLogin() {
    # first way: get specific request data
    $email = usePOST("email");
    $password = usePOST("password");
    
    dd([$email, $password]);

    # second way: get all request data
    dd(usePOST());
}
```

#### useBody
the useBody hook is used to get request body data

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

#### useGlobal
the useGlobal hook is used to get variable from **$_GLOBALS['container']** or **$_GLOBALS[]**

```php
import("@core/hooks/useGlobal");

# get aliases from container
$aliases = useGlobal("aliases");

# get plugins from container
$plugins = useGlobal("plugins");

# get plugins from container
$variables = useGlobal();


# dump all data
dd([$aliases, $plugins, $variables]);
```

#### useState
the useState hook is used to decalre variable in **$_GLOBALS['container']**

```php
import("@core/hooks/useState");
import("@core/hooks/useGlobal");

# anatomy
useState("name", ["nested array"], "value");

# example
[
    "a" => [
        "b" => "c"
    ]
]
useState("a", ["b"], "c"); 
----------

[
    "a" => [
        "b" => [
            "c" => [
                "d" => [
                    "e" => "f"
                ]
            ]
        ]
    ]
]
useState("a", ["b", "c", "d", "e"], "f");




# usage
$array = useGlobal("a");

# dump the array
dd($array);
```

#### useHTML
the useHTML hook is used to get HTML content **from a url as request to the target**

```php
import("@core/hooks/useHTML");

# get html content
$html = useHTML("http://google.com");

# show the content
var_dump($html);
```

#### useURL
the useURL hook is used to parse URL

```php
import("@core/hooks/useURL");

$parsedURL = useURL("http://app.com/products/mobile?q=apple")


dd($parsedURL);
[
    "scheme" => "http"
    "host" => "app.com"
    "path" => "/products/mobile"
    "query" => "q=apple"
]

```

#### useMatch
the useMatch hook is used to get **regex matches for a pattern**

```php
import("@core/hooks/useMatch");

# declare regex
$pattern = "/message/";

# content to apply the regex
$text = "This is a new message!";

# get response
$isMatch = useMatch($pattern, $text);

# dump the response
var_dump((bool) $isMatch);
```

#### useID
the useID hook is used to get **random number id**

```php
import("@core/hooks/useID");

# usage
echo useID();
```

#### useHash
the useHash hook is used to hash **password**

```php
import("@core/hooks/useHash");

# usage
echo useHash("12345"); # $2y$10$f3zyPBDa32nc5iBGMv5hmeapv.Tpi4uKeyQduvwB09hHeliw7b2yi
```

#### useVerify
the useVerify hook is used to verify a **password** with the **hashed password**

```php
import("@core/hooks/useVerify");

# usage
$hashedPassword = '$2y$10$f3zyPBDa32nc5iBGMv5hmeapv.Tpi4uKeyQduvwB09hHeliw7b2yi';

$password = "12345";

$isValidPassword = useVerify($password, $hashedPassword);

var_dump($isValidPassword); # true | false
```

#### useHTTP
the useHTTP hook is used to get header info from **$_SERVER super global**

```php
import("@core/hooks/useHTTP");


/**
 * usage
*/

# getter
echo useHTTP("HTTP_HOST");

# setter
useHTTP("name", "default value");

echo useHTTP("name");
```

#### useHeader
the useHeader hook is used to **set and remove**  header

```php
import("@core/hooks/useHeader");


/**
 * usage
*/

# set header
useHeader("X-Token", "value");

# remove header
useHeader("X-Powered-By");
```

#### useType
the useType hook is used to set **content type**

```php
import("@core/hooks/useType");


/**
 * usage
*/

# text type
useType("text/plain");
echo "Hello";

# HTML type
useType("text/html");
echo "<h1>Hello<h1/>";
```

#### useRequest
the useRequest hook is used to use the request http options

```php
import("@core/hooks/useRequest");


/**
 * usage
*/
echo useRequest("method"); # request method
echo useRequest("ip"); # request client ip
echo useRequest("host"); # request http host
echo useRequest("params"); # request route params
echo useRequest("query"); # request query string
echo useRequest("route"); # request route
echo useRequest("protocol"); # request http protocol
echo useRequest("userAgent"); # request client user agent
```

#### useResponse
the useResponse hook is used to use the response http options

```php
import("@core/hooks/useResponse");


/**
 * usage
*/

# text
echo useResponse("text", "Hello");

# HTML
echo useResponse("text", "<h1>Hello</h1>");

# JSON
echo useResponse("text", [
    "message" => "JSON Response"
]);
```

#### useRoute
the useRoute hook is used to declare new route

```php
import("@core/hooks/useRoute");


function showProducts() {
    # logic code ...
}
function showProductByID() {
    # logic code ...
}


/**
 * usage
*/

# simple route
useRoute("GET", "/products", "showProducts");

# route params
useRoute("GET", "/products/{id}", "showProductByID");
```

#### useRedirect
the useRedirect hook is used to redirect to a route

```php
import("@core/hooks/useRedirect");

function doLogin() {
    # logic code ...

    useRedirect("/dashboard");
}
```

#### useQuery
the useQuery hook is used to run sql query for **MYSQL database**

```php
import("@core/hooks/useQuery");

/**
 * usage
*/

# get users
$users = useQuery("SELECT * FROM users");

# get user by ID
$user = useQuery("SELECT * FROM users WHERE id = 1");

# get user by ID + ( escape query with "?" )
$user = useQuery("SELECT * FROM users WHERE id = ?", [1]);
```

#### useLog
the useLog hook is used to add custom log to **app.log** file

```php
import("@core/hooks/useLog");

/**
 * usage
*/
useLog("This is custom Log!");
```

#### useFlash
the useFlash hook is used to add falsh message in **$_SESSION super global**

```php
import("@core/hooks/useFlash");

/**
 * usage
*/

# set flash
useFlash("register", "Your registeration was successfully.");

# get flash
echo useFlash("register"); # Your registeration was successfully.
```

#### useFile
#### useCookie
#### useSession
#### usePlugin


****


### core/helpers

#### abort
the abort helper function is used to throw HTTP exception

```php
import("@core/helpers/abort");
import("@core/hooks/useRoute");

/**
 * usage
*/
show404() {
    abort(404, "Page not found!"); # render 404 template
}

useRoute("GET", "/404", "show404");
```

#### assets
the assets helper is list of functions for asset files ! <br>
for example:

```php
import("@core/helpers/assets");

/**
 * usage
*/
echo asset("/img/user.png"); # /public/img/user.png

echo css("style"); # /public/css/style.css

echo js("app"); # /public/js/app.js

echo img("user.png"); # /public/img/user.png

echo icon("logo.svg"); # /public/img/logo.svg
```

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