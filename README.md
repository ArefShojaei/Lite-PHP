<img width="1856" height="1170" alt="Poster" src="https://github.com/user-attachments/assets/70f51422-ef52-4239-b89e-12c6f0de0836" />


##  Tutorial :
1. [Introduction](#introduction)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
2. [Installation](#installation)
3. [Flow chart of process](#view-of-lite-php-process-in-application)
4. [Folder Structure](#folder-structure)
    * [core/](#core)
    * [bootstrap/](#bootstrap)
    * [public/](#public)
    * [modules/](#modules)
    * [plugins/](#plugins)
    * [console/](#console)
    * [resources/](#resources)
    * [hooks/](#hooks)
    * [migrations/](#migrations)
    * [storage/](#storage)
5. [Root Files](#root-files)
    * [.env.example](#envexample)
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [cli](#cli)
    * [composer.json](#composerjson)
    * [gulpfile.mjs](#gulpfilemjs)
    * [init](#init)
    * [package.json](#packagejson)
    * [README.md](#readmemd)
    * [robots.txt](#robotstxt)
    * [server.php](#serverphp)
6. [Modules](#modules)
    * [alias](#Alias)
    * [config](#config)
    * [enum](#enum)
    * [plugin](#plugin)
    * [validator](#validator)
7. [Template Engine](#template-engine)
8. [Cli ( console )](#cli-1)
9. [Helpers](#helpers)
    * [import](#import)
    * [route](#route)
    * [dd](#dd)
    * [parse](#parse)
    * [view](#view)
    * [command](#command)
    * [test](#test)
    * [abort](#abort)
    * [build](#build)
    * [translate](#translate)
    * [url](#url)
    * [assets](#assets)
    * [validator](#validator-1)
    * [assert](#assert)
10. [Hooks](#hooks)
    * [useHTTP](#usehttp)
    * [useGET](#useget)
    * [usePOST](#usepost)
    * [useFetch](#usefetch)
    * [useID](#useid)
    * [useConfig](#useconfig)
    * [useEnum](#useenum)
    * [useState](#usestate)
    * [useGlobal](#useglobal)
    * [useHash](#usehash)
    * [usePasswordVerfiy](#useverifypassword)
    * [useHTML](#usehtml)
    * [useMode](#usemode)
    * [useEnv](#useenv)
    * [useLog](#uselog)
    * [useError](#useerror)
    * [usePlugin](#useplugin)
    * [useQuery](#usequery)
    * [useResponse](#useresponse)
    * [useRequest](#userequest)
    * [useRedirect](#useredirect)
    * [useURL](#useurl)
    * [useBody](#usebody)
    * [useHeader](#useheader)
    * [useMatch](#usematch)
    * [useFlash](#useflash)
    * [useFile](#usefile)
    * [useUpload](#useupload)
    * [useCache](#usecache)
    * [useCookie](#usecookie)
    * [useSession](#usesession)
    * [useToken](#usetoken)
    * [useVerifyToken](#useverifytoken)
    * [useValidator](#usevalidator)
    * [useAction](#useaction)
    * [useTable](#usetable)
    * [useRecord](#userecord)
<br/>

##  **Introduction**

### What is Lite-PHP ?
> Lite-PHP is a Micro Framework
for developing Back-end applications

### Why Lite-PHP ?
Because Lite-PHP has:

> **Simple & Fast Development Env**

> **Modular Strucutre**

> **DBMS Like Mysql**

> **Testing Module**

> **Custom Plugins & Hooks**

> **Custom Command-line in console**

> **REST API Development**

> **Functional Programming Structure**

> **Folder Strucutre**

> **No OOP & No Object & No Class**

<br />

## **Installation**

#### Using Composer
```bash
composer create-project arefshojaei/lite-php
```

#### Using GIT
```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```
<br />

## **View of LITE PHP process in application**
![flow](https://github.com/user-attachments/assets/ad9d887d-79d2-4036-a384-b3c6abe08836)


## **Folder Structure**
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
|- migrations/
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
|- cli
|- composer.json
|- gulpfile.mjs
|- init
|- package.json
|- README.md
|- robots.txt
|- server.php
```

### core/
> Main files or **Lite-PHP core** files that
can be provided base files for every projects!

### bootstrap/
> Base files to **boot the app**

### modules/
> Modules that the app needs to run as main file

### hooks/
> Lets you to development **custom hooks**

### migrations/
> Lets you to work with database

### plugins/
> Lets you to development **custom plugin**

### public/
> **Static files in production** with entry point file ( index.php )

### resources/
> **Asset and View** files

### storage/
> Local folder & files like **Log, Cache & Upload** ...

<br/>

## **Root Files**

### .env.example
> **This is a config for ENV** , Then before starting the project you must changed it from **.env.example** to **.env** file! 

### .gitignore
> This is a config to **hide 
files** to not push on Github

### .htaccess
> **Apache** web server config

### cli
> Console configuration to **use commands**

### composer.json
> Passport of package info

### gulpfile.mjs
> **Task-runner** configuration for assets

### init
> Basic setup configuration to **development app**

### package.json
> List of **pacakge dependencies that the Task-runner needs to run**

### README.md
> **Lite-PHP** Package info

### robots.txt
> **This is configuration for crawlers of Google**

### server.php
> **Main file** for launching the app

<br/>

## **Modules**

### Alias
> Registers custom Alias

#### 1-Example:
```php
# Before
require_once "../../../modules/user/_controller.php";
require_once "../console/commands/package/_main.php";

# After + without using '.php' ext
import("@modules/user/_controller")
import("@commands/package/_main")
```

#### 2-How can I use that ?
Move to **"bootstrap/alias.php"**
Then, register an Alias by this way :

```php
createAlias([
   # Guide
   "@<alias>" => dirname(__DIR__) . "path",

   # Example
    "@core" => dirname(__DIR__) . "/core",
    "@modules" => dirname(__DIR__) . "/modules",
    ...
]);
```

### Config
> Registers new configuration for a module

#### 1-How can I create a config ?

```php
import("@core/modules/config/createConfig");

createConfig("name", [
    "key" => "value"
]);
```

#### 2-How can I use the config ?

```php
import("@core/hooks/useConfig");


# Usage
useConfig("name.key");
```

### Enum
> Registers an Enum as constant

#### 1-How can I create an Enum ?

```php
import("@core/modules/enum/createEnum");

createEnum("name", [
    "KEY" => "value"
]);
```

#### 2-How can I use the Enum ?

```php
import("@core/hooks/useEnum");


# Usage
useEnum("name::KEY");
```

### Migration
> Registers a Migration

#### 1-How can I create a Migration ?

```bash
php cli make:migration [migration-name]
```

```php
import("@core/modules/migration/createMigration");
import("@core/helpers/migration");

createMigration("table-name", [
    "up" => function(string $table) {
        column_id(...);
        column_string(...);
    },
    "down" => function(string $table) {
        table_dropIfExists(...);
    },
]);
```

#### 2-How can I use the migration ?

```bash
php cli list
    > php cli migrate
    > php cli migrate [table-name]
    
    > php cli migrate:reset
    > php cli migrate:reset [table-name]
    > 
    php cli migrate:refresh
    > php cli migrate:refresh [table-name]
```

### Plugin
> Registers new Plugin

Note: We have **two types** for using plugin :

> 1. **Runner Type** needs to register in         **"bootstrap/providers.php"**

> 2. **Usage Type** needs to use in **function or logic code**

#### 1-How can I create a **Runner type** Plugin ?

```php
import("@core/modules/plugin/createPlugin");

# Usage
createPlugin("name", function ($params) {}, false);
```

#### 2-How can I use the Runner Plugin ?
Move to **"bootstrap/providers.php"** , then use this way to register the Runner Plugin

```php
"plugins" => [
    # Usage
    registerPlugin("name"),
    
    
    # Examples
    registerPlugin("logger", ["level" => "short"]),
    registerPlugin("security"),
    registerPlugin("cors"),
],
```

#### 3-How can I create a **Usage type** Plugin ?

```php
import("@core/modules/plugin/createPlugin");

# Usage
createPlugin("name", function () {});
```

#### 4-How can I use the Usage Plugin ?
> Note: for using the plugin, you should use this way 

```php
import("@core/hooks/usePlugin");


# Usage
list(...) = usePlugin("name");
```

### Validator
> Defines Schema for input data 

#### 1-How can I create a Schema ?

```php
import("@core/modules/validator/createValidator");

createValidator("post", [
    "id" => [
        "type" => "int",
        "required" => true,
    ],

    "title" => [
        "type" => "string",
        "min" => 20,
    ]
]);
```

#### 2-How can I use that ?

```php
import("@core/hooks/useValidator");


# Usage
$schema = "post",

$post = [
    "id" => 1,
    "title" => "Thanks for using the Micro Framework.",
];

$isValid = useValidator($schema, $post);
```

<br/>

## **Cli**
These are list of commands that can be done works to develop your application! 
```bash
> php cli


░░      ░░ ░░░░░░░░ ░░░░░░░     ░░░░░░  ░░   ░░ ░░░░░░
▒▒      ▒▒    ▒▒    ▒▒          ▒▒   ▒▒ ▒▒   ▒▒ ▒▒   ▒▒
▒▒      ▒▒    ▒▒    ▒▒▒▒▒       ▒▒▒▒▒▒  ▒▒▒▒▒▒▒ ▒▒▒▒▒▒
▓▓      ▓▓    ▓▓    ▓▓          ▓▓      ▓▓   ▓▓ ▓▓
███████ ██    ██    ███████     ██      ██   ██ ██

                    Micro PHP Framework

                        Welcome 🎉
```
![carbon (2)](https://github.com/user-attachments/assets/4979f1ff-552f-44f2-820b-7541a3350b4e)
![carbon (1)](https://github.com/user-attachments/assets/17b7c886-05f8-4a95-afa7-6756c2a79a97)
![carbon (3)](https://github.com/user-attachments/assets/be1f3b8b-a880-4cc4-8a84-d390a6cd3ccd)



<br/>

## **Template Engine**
> Provides to work as **professional** with templates instead of using usual php template engine !

### Examples :
> **Before** - views/user.php
```php
<?php foreach ($users as $user): ?>
    <div class="user-card">
        <span>ID: <?php echo $user['id'] ?> </span>
        <h3>Name: <?php echo $user['name'] ?> </h3>
        <p>CV: <?php echo $user['cv'] ?> </p>
    </div>
<?php endforeach; ?>
```

> **After** - views/user.hbs
```hbs
@foreach ($users as $user)
    <div class="user-card">
        <span>ID: {{ $user['id'] }} </span>
        <h3>Name: {{ $user['name'] }} </h3>
        <p>CV: {{ $user['cv'] }} </p>
    </div>
@endforeach
```
> NOTE:  We want to work it as professional with customized **.hbs** template engine and we don't have this like JS lib ( handlebars ) template engine and you should know about it that we have a customized template engine !


### Syntaxes
```bash
{{ $variable }} # to Protect XSS attack 
{{{ $variable }}} # Not to Protect XSS attack
{{!-- comment message --}} # Writing Comment
```


### Directives

> Condition
```bash
# Directives
@if(expression)
@elseif
@else
@endif
```

```hbs
{{!-- Example --}}
@if ($role == 'manager')
    <h3>Welcome Manager</h3>
@elseif ($role == 'admin')
    <h3>Welcome Admin</h3>
@else
    <h3>The Role is not valid!</h3>
@endif
```


> Loop
```bash
# Directives
@foreach(expression)
@endforeach

@while(expression)
@endwhile

@break(expression)
@continue(expression)
```

```hbs
{{!-- Example-1 --}}
@foreach($users as $user)
    <div>
        <h3>Name: {{ $user['name'] }} </h3>
        <p>Email: {{ $user['email'] }} </p>
    </div>
@endforeach


{{!-- Example-2 --}}
@while($count < 100)
    <p>Count: {{ $count }}</p>

    @countinue($count < 10)

    @break($count == 90)

    $count++;
@endwhile
```

> Partial
```bash
# Directives
@include(partialPath)
```

```hbs
{{!-- Example --}}
@include("includes.header") # include views/includes/header.hbs
    <h1>Welcome Page</h1>
@include("includes.footer") # include views/includes/footer.hbs
```

> Script
```bash
# Directives
@style
@endstyle
@linkStyle

@script
@endScript
@linkScript

@php
@endphp

@dump

@dd
```

```hbs
{{!-- Example-1 --}}
@style
* {
    box-sizing: border-box;
    color : #e5e5e5;
}
@endStyle

@linkStyle("https://domain.com/bootstrap/styles/grid.min.css")


{{!-- Example-2 --}}
@script
    const username = promt('Enter your userName:')

    alert(username)
@endscript


@linkScript("https://domain.com/jquery/jquery.min.css")


{{!-- Example-3 --}}
@php
    $message = "Welcome to Lite PHP"

    echo $message;
@endphp


{{!-- Example-4 --}}
@dump($message, true, [])

@dd([1,2,3,4,5])
```

> Validation
```bash
# Directives
@isset(expression)
@endisset

@empty(expression)
@endempty

@flash(flash)
@endflash
```

```hbs
{{!-- Example-1 --}}
@isset($user['isCheckedRole'])
    <p>User role is checked</p>
@endisset


{{!-- Example-2 --}}
@empty($posts)
    <p>Here we don't have any posts!</p>
@endempty
```

> CSRF token to protect attacks
```bash
# Directive
@csrf
```

```hbs
<form>
    @csrf

    <input type="text" name="username" />
    <input type="password" name="password" />

    <button>Login</button>
</form>
```

> Auth
```bash
# Directives
@auth
@endauth

@authRole
@endauthRole

@guest
@endguest
```

```hbs
{{!-- Example-1 --}}
@auth
    <a href="...">Dashboard Panel</a>
@endauth

{{!-- Example-2 --}}
@authRole("admin")
    <a href="...">Admin Dashboard</a>
@endauthRole


{{!-- Example-3 --}}
@guest
    <a href="...">Login</a>
    <a href="...">Register</a>
@endguest
```


<br/>

## **Helpers**

### import
> Loads file by Alias

```php
import("@modules/user/_controller")


$user = getUser();

print_r($user);
```

### Route
> Adds new Route in a module

Note: You can use it by two ways: <br>

> 1. Add Single Route

> 2. Group Routes

> 3. Sign Route

```php
# Usage
import("@core/helpers/route");


# Single Route
addRoute("GET", "/user", "showUser"); # /user


# Group Route
groupRoute("/page", function() {
    addRoute("GET", "/", "__app__index"); # /page/home
    addRoute("GET", "/users", "__user__index"); # /page/users
    addRoute("GET", "/courses", "__course__index"); # /page/courses
});

# Sign Route
$secretKey = "...";

$route = addSignedRoute("/admin?pid=fk921", $secretKey, ....);
```

### DD
> Dumps and dies an Array in browser

> Note : You don't need to load the helper, Because the helper has loaded ! 

```php
$user = [
    "id" => 1,
    "name" => "Robert",
    "skills" => ["PHP", ...]
];

# Usage
dd($user); # to dump and die

dd($user, false); # just to dump and no die process
```

### Parse
> Gets file content

```php
import("@core/helpers/parse");

$file = "links.txt";

# Usage
$links = prase($file);
$links = @prase($file); # use the @ to get boolean or content if you don't want to get error

forach ($links as $link) {
    echo "[Link] {$link}" . PHP_EOL;
}
```

### View
> Renders view template

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
> Adds new Command to use in console

Note: You can use it by two ways: <br>

> 1. Add Single Command

> 2. Group Commands

```php
# Usage
import("@core/helpers/command");


# Single Command
addCommand("database", fn() => "Hi from Lite PHP", "Database status"); # php cli database


# Group Command
groupCommand("fake:", function() {
    addCommand("city", "action", "description"); # php cli fake:city
    addCommand("company", "action", "description"); # php cli fake:company
    addCommand("user", "action", "description"); # php cli fake:user
    addCommand("book", "action", "description"); # php cli fake:book
});
```

### Test
> Tests module

Note: You can test by two ways: <br>

> 1. Test single module by name

> 2. Test all modules

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

### Abort
> Throw HTTP error as Rendered page to show Error message

```php
import("@core/helpers/abort");


# Usage
function bootstrap() {
    abort(500, "Internal Server Error", ["package" => "LITE PHP"]);
}
```

### Build
> Builds new path & URL

```php
import("@core/helpers/build");

# Guide
buildURL("/products"); # [pre defined => (host:port)] + route


buildPath("/resources", "/lang/en/public"); # base path + path + file ext
```

### Translate
> Translates content

```php
import("@core/helpers/translate");

# Text: Welcome message
"Translated: " . __("welcome");  # پیام خوش آمد گویی

# Text: Thanks :name for using :product
"Translated: " . __("introduce", [
    "name" => "رابرت", 
    "product" => "This package"
    ]);  # ممنون رابرت برای استفاده کردن از این پکیج

```

### URL
> Provides to use helper functions for URL, Route and ...

```php
import("@core/helpers/url");


# Get base URL
baseURL(); # Http://localhost:5000

# Get current route
url(); # /product/257

# Get current url
origin(); # Http://localhost:5000/product/257

# Build pointer Route to redirect to another route 
toRoute("/users"); # Http://localhost:5000/users

# Bind route by name
addRoute("GET", "/dashboard/admin/page/users", "__admin_user__edit", name: "user")

route("users") # "/dashboard/admin/page/users"
```

### Assets
> Provides to use helper functions for Asset files

```php
import("@core/helpers/assets");

# Get asset path
asset("/css/grid.css"); # resources/assets/css/grid.css

# CSS asset path
asset("/css/grid.css"); # resources/assets/css/grid.css
css("grid"); # resources/assets/css/grid.css

# JS asset path
asset("/js/state.js"); # resources/assets/js/state.js
js("state"); # resources/assets/js/state.js

# Image asset path
img("user.jpeg"); # resources/assets/img/user.jpeg

# Icon asset path
icon("logo.svg"); # resources/assets/img/logo.svg
```

### Validator
> Provides to validate data

```php
import("@core/helpers/validator");

# Email validation
$email_1 = "Robert@gmail.com";
$email_2 = "Kevin@yahoo.com";

isEmail($email_1); # true
isEmail($email_2); # false


# URL validation
$url_1 = "http://localhost:5000";
$url_2 = "/categories/mobile/54673124";

isURL($url_1); # true
isURL($url_2); # false


# Signed route validation
$route = "/dashboard?pid=019231";
$secretKey = "...";

$isValidSignedRoute = validateSignedRoute($route, $secretKey);
```

### Assert
> Provides to assert data in **unit test**

* Note: You must use it when you are writing tests that exists in every modules of app with **_test.php** file! 

* If you like to use more asserts, you should move to **"core/helpers/assert.php"** file  

```php
import("@core/helpers/asserts");


assertTrue(""); # false
assertTrue("This is a message"); # true
assertTrue(0); # false
assertTrue(1); # true


assertEmpty([]) # true
assertEmpty([1,2,3]) # false

# and more assert functions....
```

<br />

## **Hooks**

> Note: You should use hooks in logic code and don't use that outer of logic code!

<br />

### UseHTTP
> Provides to use http as **$_SERVER** super global

```php
import("@core/hooks/useHTTP");


function inspectRequest() {
    $method = useHTTP("REQUEST_METHOD");

    echo $method; # GET, POST, PUT, PATCH, DELETE
}
```

### UseGET
> Provides to use **$_GET** super global

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
> Provides to use **$_POST** super global

```php
import("@core/hooks/usePOST");


function inspectRequest() {
    $token = usePOST("token");

    echo $token;
}
```

### UseFetch
> Provides to send http request

### Examples :

```php
# Send GET Request
import("@core/hooks/useFetch");

$response = useFetch("http://domain.com/end-point");


dd($response);
```

```php
# Send POST Request
import("@core/hooks/useFetch");


$params = [
    "method" => "POST",
    "body" => [],
    "headers" => [],
];

$response = useFetch("http://domain.com/end-point", $params);


dd($response);
```

```php
# Send PUT Request
import("@core/hooks/useFetch");


$params = [
    "method" => "PUT",
    "body" => [],
    "headers" => [],
];

$response = useFetch("http://domain.com/end-point", $params);


dd($response);
```

```php
# Send PATCH Request
import("@core/hooks/useFetch");


$params = [
    "method" => "PATCH",
    "body" => [],
    "headers" => [],
];

$response = useFetch("http://domain.com/end-point", $params);


dd($response);
```

```php
# Send DELETE Request
import("@core/hooks/useFetch");


$params = [
    "method" => "DELETE",
    "body" => [],
    "headers" => [],
];

$response = useFetch("http://domain.com/end-point", $params);


dd($response);
```

### UseID
> Provides to get random number ID

```php
import("@core/hooks/useID");


function createUser($name, $email, $passowrd) {
    $id = useID();

    # logic code ...
}
```

### UseConfig
> Provides to get Config by key

>Note: Sometimes you don't want to get error for getting value from the hook usage, First you should load target module configuration in current file or script !

```php
import("@core/hooks/useConfig");


function createUser($name, $email, $passowrd) {
    $applicationName = useConfig("app.name");

    # logic code ...
}
```

### UseEnum
> Provides to get Enum by key

> Note: sometimes you dont' want to get error for getting value from the hook usage, First you should load target module configuration in current file or script !

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
> Provides to define state in **container** as **$GLOBALS['container']** super global

Note: The hook has more option that you will like that

> 1. Define state as "value"

> 2. Define state as "key" & "value"

> 3. Define state as "key" (Nested) & "value"


```php
import("@core/hooks/useState");


function createUser($id, $name, $email, $password) {
    $user = [
        "email" => $email,
        "password" => $password
    ];


    # First way => key & value
    useState("users", $user);
    
    # Second way => nested keys & value
    useState("users.{$name}", $user);
    
    # Third way => nested keys & value
    useState("users.{$id}.{$name}", $user);


    # logic code ...
}
```

### UseGlobal
> Provides to get value from **container** as **$GLOBALS['container']** super global

```php
import("@core/hooks/useGlobal");


function getPlugins() {
    # First way => without nested key
    $plugins = useGlobal("plugins"); # $GLOBALS['container']['plugins']
    
    # Second way => with nested keys
    $runnerPlugins = useGlobal("plugins.runner"); # $GLOBALS['container']['plugins']['runner']
    
    $usagePlugins = useGlobal("plugins.usage"); # $GLOBALS['container']['plugins']['usage']


    # logic code ...
}
```



### UseHash
> Provides to hash password

```php
import("@core/hooks/useHash");


function createUser($name, $email, $passowrd) {
    $hashedPassword = useHash($password);

    # logic code ...
}
```

### UseVerifyPassword
> Provides to verify hashed password

```php
import("@core/hooks/useVerifyPassword");


function checkPassword($password,  $hashedPassowrd) {
    $isValidPassword = useVerifyPassword($password, $hashedPassword);

    # logic code ...
}
```

### UseHTML
> Provides to get html content by url

```php
import("@core/hooks/useHTML");


function getSiteHtmlContent($url) {
    $html = useHTML($url);

    # logic code ...
}
```

### UseMode
> Provides to get current app mode from ".env" as APP_MODE **( Production | Development )**

```php
import("@core/hooks/useMode");


function getApplicationModeStatus() {
    $mode = useMode(); # Production | Development

    # logic code ...
}
```

### UseEnv
> Provides to get env from ".env" by key

```php
import("@core/hooks/useEnv");


function createDatabaseConnection() {
    $db = useEnv("DATABASE_DB");
    $host = useEnv("DATABASE_HOST");
    $username = useEnv("DATABASE_USER");
    $password = useEnv("DATABASE_PASS");

    # logic code ...
}
```

### UseLog
> Provides to put log message

```php
import("@core/hooks/useLog");


function showDashboardPage() {
    useLog("Admin Logged in!");

    # logic code ...
}
```

### UsePlugin
> Provides to use plugins that has **usage type**

```php
import("@core/hooks/usePlugin");


function getShortLink($longURL) {
    [...] = usePlugin("shortLink");

    # logic code ...
}
```

### UseQuery
> Provides to run **SQL query**

```php
import("@core/hooks/useQuery");


function createUser($name, $email, $passowrd) {
    useQuery("INSERT INTO `users` (name, email, password) VALUES (?, ?, ?)", [$name, $email, $passowrd]);
    
    # logic code ...
}

function doLogin($email, $passowrd) {
    $user = useQuery("SELECT * FROM `users` WHERE email = ?", [$email]);

    dd($user);
    # logic code ...
}
```

### UseResponse
> Provides to return content output to the response as JSON | HTML | TEXT

> Note : You don't need to set content-type in header, Because the hook has done it 

* @Reference : core/hooks/useType <br>
* @Reference : core/hooks/useResponse

```php
import("@core/hooks/useResponse");


function showLoginPage() {
    $form = "
        <form action='' method='POST'>
            <input type='email' name='email' />
            <input type='password' name='password' />
            <button type='submit'>Login</button>
        </form>
    ";
    
    return useResponse("html", $form);
}
```

### UseRequest
> Provides the request data

```php
import("@core/hooks/useRequest");


function inspectRequest() {
    $host = useRequest("host"); # site.com
    $ip = useRequest("ip"); # 192.168.1.1
    $method = useRequest("method"); # GET | POST | PUT | PATCH | DELETE
    $protocol = useRequest("protocol"); # HTTP | HTTPS
    $query = useRequest("query"); # LIKE /product/?category='mobile'&limit=10
    $route = useRequest("route"); # /products
    $routeParams = useRequest("params"); # /product/{id} => ["id" => 171]
    $userAgent = useRequest("userAgent"); # ...


    # logic code ...
}
```

### UseRedirect
> Provides to redirect to a route

```php
import("@core/hooks/useRedirect");


function inspectRequest() {
    $isValidUser = true;

    if($isValidUser) {
        useRedirect("/dashboard");
    }

    # logic code ...
}
```

### UseURL
> Provides to parse URL

```php
import("@core/hooks/useURL");


function inspectRequest() {
    $parsedURL = useURL("http://localhost:5000/api/v1/products/?limit=25");

    dd($parsedURL);
    # logic code ...
}
```

### UseBody
> Provides to get the request body data

```php
import("@core/hooks/useBody");


function inspectRequest() {
    $token = useBody("token");

    # logic code ...
}
```

### UseHeader
> Provides to add & remove header by **key and value**

```php
import("@core/hooks/useHeader");


function inspectRequest() {
    $fakeUserAgent = "...";

    # add
    useHeader("HTTP_USER_AGENT", $fakeUserAgent);
    
    # remove
    useHeader("X-Powered-By");


    # logic code ...
}
```

### UseMatch
> Provides to use regex

```php
import("@core/hooks/useMatch");


function isValidEmail($email) {
    $regexPattern = "/^\w+@gmail.com$/";

    $result = useMatch($regexPattern, $email);

    dd($result);

    # logic code ...
}
```

### UseFlash
> Provides to add & remove falsh message

```php
import("@core/hooks/useFlash");


function doLogin() {
    useFlash("login", "Invalid Email or Password!");
    
    # logic code ...
}
```

### useFile
> Provides to get file from $_FILES

```php
import("@core/hooks/useFile");


function addProfile() {
    $profile = useFile("profile");

    # logic code ...
}
```

### useUpload
> Provides to upload file in local stroage

```php
import("@core/hooks/useFile");
import("@core/hooks/useUpload");


function uploadProfile() {
    $profile = useFile("profile");

    $result = useUpload($profile);

    # logic code ...
}
```

### useCache
> Provides to cache data

```php
import("@core/hooks/useCache");


# Cache Data
function cachePostsData() {
    $posts = [...];

    useCache("posts", $posts);
    # logic code ...
}

# Get cached data
function getCachedPostsData() {
    $posts = useCache("posts");
    
    # logic code ...
}
```

### useCookie
> Provides to use cookie in process of app

```php
import("@core/hooks/useCookie");


# Set cookie
useCookie("darkMode", true);

# Get the cookie
$darkModeState = useCookie("darkMode"); # true

# Set cookie params
useCookie("darkMode", rand(), [
    "expireTime" => "",
    "path" => "",
    "domain" => "",
    "secure" => "",
    "httpOnly" => ""
]);
```

### useSession
> Provides to use session in process of app

```php
import("@core/hooks/useSession");


# Set session
useSession("isLoggedIn", true);

# Get the session
$loginState = useSession("isLoggedIn"); # true

# Get list of all sessions
$sessions = useSession();
```

### UseToken
> Provides to generate new token

```php
import("@core/hooks/useToken");


function doLogin() {
    $user = [
        "username" => "Robert",
        "password" => 12345
    ];


    $token = useToken($user, "secretKey");


    # logic code ...
}
```

### UseVerifyToken
> Provides to verify token

```php
import("@core/hooks/useVerifyToken");


function exportLogs() {
    $token = "...";

    $isValidUser = useVerifyToken($token,"secretKey");


    # logic code ...
}
```

### useValidator
> Provides to validate input data

```php
import("@core/hooks/useValidator");


function validatePost() {
    $schema = "post";

    $post = [
        "id" => 1,
        "title" => "What is LITE PHP?",
        "body" => "Micro PHP Freamework!"
    ];

    $isValid = useValidator($schema, $post);

    # logic code ...
}
```

### useAction
> Provides to save action in local database

```php
import("@core/hooks/useAction");


function addTodo() {
    useAction("ADD_TODO");

    $todo = [
        "id" => rand(),
        "title" => "Done login page",
        "timestamp" => time()
    ];
    
    # logic code ...
}
```

### useRecord
> Provides to save data in local database

```php
import("@core/hooks/useRecord");


function addTodo() {
    $todo = [
        "id" => rand(),
        "timestamp" => time()
    ];

    useRecord("todos", $todo["title"], $todo["timestamp"]);

    # logic code ...
}
```

### useTable
> Provides to get & delete data in local database

#### 1-Getting data:

```php
import("@core/hooks/useTable");


function getTimestamp() {
    $result = useTable('actions', 'NEW_TASK');

    # Logic code ...
}
```

#### 2-Deleteing data:

```php
import("@core/hooks/useTable");


function deleteAction() {
    $result = useTable('actions', 'NEW_TASK', $action = TABLE_DELETE_ACTION);

    # Logic code ...
}
```
