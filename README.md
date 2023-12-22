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
|- modules/
|
|- plugins/
|
|- public/
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