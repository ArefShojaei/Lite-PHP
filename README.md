# [Lite-PHP](https://github.com/ArefShojaei/Lite-PHP)
**PHP Library** - **Modular Structure** & **Functional Base**

---
### Categories :
1. [About the Lite-PHP](#about-the-lite-php)
    * [What is Lite-PHP ?](#what-is-lite-php)
    * [Why Lite-PHP ?](#why-lite-php)
    * [How can I use Lite-PHP ?](#how-can-i-use-lite-php)
3. [Folder Structure](#folder-structure)
    * [core/](#core)
    * [bootstrap/](#bootstrap)
    * [modules/](#modules)
    * [hooks/](#hooks)
    * [plugins/](#plugins)
4. [Root Files](#root-files)
    * [.gitignore](#gitignore)
    * [.htaccess](#htaccess)
    * [README.md](#readmemd)
    * [server.php](#serverphp)
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
## About the Lite-PHP
### What is Lite-PHP?
```text
The Lite-PHP is a Library 
for developing Back-end Applications by PHP
```
### Why Lite-PHP?
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
### core/
```text
This folder is main files or Lite-PHP core files that
can be provided base files for every projects!
```
### bootstrap/
```text
This folder is for init app
```
### modules/
```text
This folder is for using every modules for the app
And by default has a "app" module for running
every Lite-PHP project well 
```
### hooks/
```text
This will have custom Hooks
```
### plugins/
```text
This will have custom Plugins
```
## Root Files

### .gitignore
```text
This is a config to hide 
files for pushing other files
```
### .htaccess
```text
This is a config for apache web-server
```
### README.md
```text
This is an info for Lite-PHP
```
### server.php
```text
This is main file for launching the app
```