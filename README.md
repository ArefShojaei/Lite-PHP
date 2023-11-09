# [Lite-PHP](https://github.com/ArefShojaei/Lite-PHP)
**PHP Library** - **Modular Structure** & **Functional Base**

---
#### Categories :
1. [About the Lite-PHP]()
    * [What is the Lite-PHP ?]()
    * [Why the Lite-PHP ?]()
    * [How can I use the Lite-PHP ?]()
2. [Flow & Architecture]()
3. [Folder Structure]()
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

### [Folder Structure]()
```text
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