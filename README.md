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
    * [.env.example](#envexample)
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [cli](#cli)
    * [gulpfile.mjs](#gulpfilemjs)
    * [package.json](#packagejson)
    * [README.md](#readmemd)
    * [server.php](#serverphp)
4. [Modules](#modules)
    * [alias](#Alias)
    * [config](#config)
    * [enum](#enum)
    * [plugin](#plugin)
5. [Helpers](#helpers)
    * [import](#import)
    * [route](#route)
    * [dd](#dd)
    * [parse](#parse)
    * [view](#view)
    * [command](#command)
    * [test](#test)
    * [abort]()
    * [build]()
    * [table]()
    * [translate]()
    * [url]()
    * [assets]()
    * [validator]()
    * [assert]()
6. [Hooks]()
    * [useHTTP](#usehttp)
    * [useGET](#useget)
    * [usePOST](#usepost)
    * [useAPI](#usefetch---needs-to-refactore)
    * [useID](#useid)
    * [useConfig](#useconfig)
    * [useEnum](#useenum)
    * [useState](#usestate)
    * [useGlobal](#useglobal)
    * [useHash](#usehash)
    * [usePasswordVerfiy](#useverifypassword)
    * [useHTML](#usehtml)
    * [useHeader]()
    * [useRedirect]()
    * [useBody]()
    * [useCache]()
    * [useFile]()
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

---

## > Root Files

### .env.example
**This is a config for env** , Then before starting the project you must changed it from **.env.example** to **.env** file! 

### .gitignore
This is a config to **hide 
files** to not push on Github

### .htaccess
This is a config for **Apache web-server**

### Cli
This is console configuration to **use commands**

### Gulpfile.mjs
This is **Task-runner configuration** for assets

### Package.json
This is list of **pacakge dependencies that the Task-runner needs to run**

### README.md
**This is an info about Lite-PHP**

### server.php
This is **main file for launching the app**

---
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
---
## > Helpers

### import
This helper loads file by Alias

```php
import("@modules/user/_controller")


$user = getUser();

print_r($user);
```

### Route
This helper lets you to add a new Route in a module

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

### DD
This helper lets you to dump and die an Array in Browser as Client

Note : You don't need to load the helper, Because the helper has loaded ! 

```php
$user = [
    "id" => 1,
    "name" => "Robert",
    "skills" => ["PHP", ...]
];

# Usage
dd($user); # to dump and die

dd($user, false); # just to dump and no die
```

### Parse
This helper lets you to get file content

```php
import("@core/helpers/parse");

$file = "links.txt";

# Usage
$links = prase($file);
$links = @prase($file); # use @ to get boolean or content if you don't want to get error

forach ($links as $link) {
    echo "[Link] {$link}" . PHP_EOL;
}
```

### View
This helper lets you to render view template

```php
import("@core/helpers/view");

# Example 1
view("welcome");

# Example 2
$user = [
    "id" => 267
    "title" => "User Page",
    "name" => "Robert",
]

view("user", $user);
```

### Command
This helper lets you to add a new Command to use in console

Note: You can use it by two ways: <br>

1. Add Single Command
2. Group Commands

```php
# Usage
import("@core/helpers/command");


# Single Command
addCommand("sayHi", fn() => "Hi from Lite PHP", "show Framework"); # php cli sayHi


# Group Command
addGroupCommand("fake:", function() {
    addCommand("city", "action", "description"); # php cli fake:city
    addCommand("company", "action", "description"); # php cli fake:company
    addCommand("user", "action", "description"); # php cli fake:user
    addCommand("book", "action", "description"); # php cli fake:book
});
```

### Test
This helper lets you to test module

Note: You can test by two ways: <br>

1. Test single module by name
2. Test all modules

```php
# Usage
import("@core/helpers/test");


# Definition
describe('test-info', function() {
    it("test-description", function() {
        # use Asserts ...
        # Read "core/helpers/assertion.php" to use in this logic code !
    });
});


# Usage

    # Test All Modules 
    php cli test
    
    # Test Single Module 
    php cli test [module-name]
```
Finally, you will see the result in console.


### Build
This helper lets you to build new path & URL

```php
import("@core/helpers/build");

# Guide
buildURL("/products"); # [pre defined => (host:port)] + route


buildPath("/resources", "/lang/en/public"); # base path + path + file ext
```


### Build
This helper lets you to build new path & URL

```php
import("@core/helpers/build");

# Guide
buildURL("/products"); # [pre defined => (host:port)] + route


buildPath("/resources", "/lang/en/public"); # base path + path + file ext
```

---
## > Hooks

Note: You should use hooks in logic code and don't use that outer of logic code!

### UseHTTP
This hook provides to use http as **$_SERVER** super global

```php
import("@core/hooks/useHTTP");


function inspectRequest() {
    $method = useHTTP("REQUEST_METHOD");

    echo $method; # GET, POST, PUT, PATCH, DELETE
}
```

### UseGET
This hook provides to use **$_GET** super global

```php
import("@core/hooks/useGET");


function inspectRequest() {
    $username = useGET("username");
    $password = useGET("password");


    dd([
        "username" => $username,
        "password" => $password
    ]);
}
```

### UsePOST
This hook provides to use **$_POST** super global

```php
import("@core/hooks/usePOST");


function inspectRequest() {
    $token = usePOST("token");

    echo $token;
}
```

### UseFetch - (Needs to Refactore)
This hook provides to send http request

```php
import("@core/hooks/useFetch");

# Examples

# Send GET Request
function sendGetRequest() {
    $response = useFetch("http://domain.com/end-point");


    dd($response);
}

// Send POST Request
function sendPostRequest() {
    $params = [
        "method" => "POST",
        "data" => [],
        "headers" => [],
    ];

    $response = useFetch("http://domain.com/end-point", $params);


    dd($response);
}

// Send PUT Request
function sendPutRequest() {
    $params = [
        "method" => "PUT",
        "data" => [],
        "headers" => [],
    ];

    $response = useFetch("http://domain.com/end-point", $params);


    dd($response);
}

// Send PATCH Request
function sendPatchRequest() {
    $params = [
        "method" => "PATCH",
        "data" => [],
        "headers" => [],
    ];

    $response = useFetch("http://domain.com/end-point", $params);


    dd($response);
}
```

### UseID
This hooks provides to get random number ID

```php
import("@core/hooks/useID");


function createUser($name, $email, $passowrd) {
    $id = useID();

    # logic code ...
}
```

### UseConfig
This hooks provides to get Config by key

Note: sometimes you dont' want to get error for getting value from the hook usage, First you should load target module configuration in current file or script !

```php
import("@core/hooks/useConfig");


function createUser($name, $email, $passowrd) {
    $applicationName = useConfig("app.name");

    # logic code ...
}
```

### UseEnum
This hooks provides to get Enum by key

Note: sometimes you dont' want to get error for getting value from the hook usage, First you should load target module configuration in current file or script !

```php
import("@core/hooks/useEnum");


function createUser($name, $email, $passowrd) {
    # User SQL Table
    $userTable = useEnum("User::TABLE");
    
    # HTTP Statuses
    $HTTP_200 = useEnum("HTTP::OK");
    $HTTP_201 = useEnum("HTTP::SUCCESS");
    $HTTP_400 = useEnum("HTTP::BAD");
    
    # logic code ...
}
```


### UseState
This hooks provides to define state in **container** as **$GLOBALS['container']** super global

Note: The hook has more option that you will like that

1. Define state as "value"
2. Define state as "key" & "value"
3. Define state as "key" (Nested) & "value"

```php
import("@core/hooks/useState");


function createUser($id, $name, $email, $password) {
    $user = [
        "email" => $email,
        "password" => $password
    ];


    # First Way => Key & Value
    useState("users", [], $user);
    
    # Second Way => Key & Value
    useState("users", [$name], $user);
    
    # Third Way => Nested Keys & Value
    useState("users", [$id, $name], $user);


    # Then inspect $GLOBALS['container']['users']




    # logic code ...
}
```

### UseGlobal
This hooks provides to get value from **container** as **$GLOBALS['container']** super global

```php
import("@core/hooks/useGlobal");


function listComamnds() {
    $comamnds = useGlobal("commands"); # $GLOBALS['container']['commands']


    # logic code ...
}
```



### UseHash
This hooks provides to hash password

```php
import("@core/hooks/useHash");


function createUser($name, $email, $passowrd) {
    $hashedPassword = useHash($password);

    # logic code ...
}
```

### UseVerifyPassword
This hooks provides to verify hashed password

```php
import("@core/hooks/useVerifyPassword");


function checkPassword($password,  $hashedPassowrd) {
    $isValidPassword = useVerifyPassword($password, $hashedPassword);

    # logic code ...
}
```

### UseVerifyPassword
This hooks provides to verify hashed password

```php
import("@core/hooks/useVerifyPassword");


function checkPassword($password,  $hashedPassowrd) {
    $isValidPassword = useVerifyPassword($password, $hashedPassword);

    # logic code ...
}
```

### UseHTML
This hooks provides to get html content by url

```php
import("@core/hooks/useHTML");


function getSiteHtmlContent($url) {
    $html = useHTML($url);

    # logic code ...
}
```