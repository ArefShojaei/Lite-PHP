# [Lite-PHP](https://github.com/ArefShojaei/Lite-PHP)
**PHP Library** - **Modular Structure** & **Functional Base**

---
### Categories :
1. [About the Lite-PHP](#what-is-lite-php)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
    * [How can I use Lite-PHP ?](#how-can-i-use-lite-php)
3. [Folder Structure](#folder-structure)
    * [core/]()
    * [bootstrap/]()
    * [modules/]()
    * [hooks/]()
    * [plugins/]()
4. [Root Files]()
    * [.gitignore]()
    * [.htaccess]()
    * [README.md]()
    * [server.php]()
5. [Tutorial]()
    * [core/modules/]()
        * [app]()
        * [alias]()
        * [module]()
        * [plugin]()
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
## What is Lite-PHP?
```text
The Lite-PHP is a Library 
for developing Back-end Applications by PHP
```
## Why Lite-PHP?
```text
Because Lite-PHP has:

* Simple & Fast Development Env
* More Modules - Hooks - Helpers & ...
* Modular Strucutre
* Custom Plugins & Hooks
* Functional Programming Base
* Has Folder Strucutre
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
|- core
|      |- helpers/...
|      |- hooks/...
|      |- modules/...
|- hooks
|       |- useUserAgent.php
|- modules
|         |- app
|               |- main.php
|- plugins
|         |- logger.php
|
|- .gitignore
|- .htaccess
|- .README.md
|- server.php
```