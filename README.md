![Picture](https://github.com/user-attachments/assets/a1250cea-a46a-4ee9-ab5b-657d08a0cbe7)

##  Tutorial :
1. [Introduction](#introduction)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
2. [Installation](#installation)
3. [Folder Structure](#folder-structure)
    * [core/](#core)
    * [bootstrap/](#bootstrap)
    * [public/](#public)
    * [modules/](#modules)
    * [plugins/](#plugins)
    * [console/](#console)
    * [resources/](#resources)
    * [hooks/](#hooks)
    * [storage/](#storage)
4. [Root Files](#root-files)
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
5. [Modules](#modules)
    * [alias](#Alias)
    * [config](#config)
    * [enum](#enum)
    * [plugin](#plugin)
6. [Template Engine](#template-engine)
7. [Helpers](#helpers)
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
8. [Hooks]()
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
    * [useFile]()
    * [useUpload]()
    * [useCache]()
    * [useCookie]()
    * [useSession]()

<br/>

##  **Introduction**

### What is Lite-PHP ?
> Lite-PHP is a Micro Freamework 
for developing Back-end Applications

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

#### Using GIT
```bash
git clone https://github.com/ArefShojaei/Lite-PHP
```
#### Using Composer
```bash
composer create-project arefshojaei/lite-php
```
<br />

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
> Provides to register custom Alias

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
])
```

#### 2-How can I use the config ?

```php
import("@core/hooks/useConfig");


# Usage
useConfig("name.key")
```

### Enum
> Registers an Enum as constant

#### 1-How can I create an Enum ?

```php
import("@core/modules/enum/createEnum");

createEnum("name", [
    "KEY" => "value"
])
```

#### 2-How can I use the Enum ?

```php
import("@core/hooks/useEnum");


# Usage
useEnum("name::KEY")
```

### Plugin
> Registers new Plugin

Note: We have **two types** for using plugin :

> 1. **Runner Type** needs to register in         **"bootstrap/providers.php"**

> 2. **Usage Type** needs to use in **logic code**

#### 1-How can I create a Runner Plugin ?

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

#### 3-How can I create a Usage Plugin ?

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
@include("/includes/header")
    <h1>Welcome Page</h1>
@include("/includes/footer")
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

dd($user, false); # just to dump and no die
```

### Parse
> Gets file content

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

### Build
> Builds new path & URL

```php
import("@core/helpers/build");

# Guide
buildURL("/products"); # [pre defined => (host:port)] + route


buildPath("/resources", "/lang/en/public"); # base path + path + file ext
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
> Provides to get value from **container** as **$GLOBALS['container']** super global

```php
import("@core/hooks/useGlobal");


function listComamnds() {
    $comamnds = useGlobal("commands"); # $GLOBALS['container']['commands']


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
