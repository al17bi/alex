# Windows 10 -> Vagrant-PhpShtorm-Laravel-install from PhpStorm and configure them
- XDebug + PHPUnit + GitHub + PUTTY + Git-bash + Vui2 + bootstrap
- На основе:
[phpstorm-with-vagrant-using-laravel-homestead-on-windows-10](http://www.pascallandau.com/blog/phpstorm-with-vagrant-using-laravel-homestead-on-windows-10/)

## Настройки Vagrant Homestead
Содержимое файла Homestead.jaml
- for **Windows 10** C:\\Users\\**_your-User_**\\.homestead\Homestead.jaml:
```
 ip: "192.168.10.10" 
 memory: 2048
 cpus: 1
 hostname: alex
 name: alex
 provider: virtualbox
 authorize: ~/.ssh/id_rsa.pub
 keys: ~/.ssh/id_rsa
 folders:
     - map: C:/Code
      to: /home/vagrant/Code
 sites:
     - map: alex.app
       to: /home/vagrant/Code/alex/public
     - map: phpmyadmin.app
       to: "/home/vagrant/phpmyadmin"
 databases:
    - homestead
```
Добавить в 'C:\\Windows\\System32\\drivers\\etc\\host'
```
 192.168.10.10 alex.app
 192.168.10.10 www.alex.app
```
## Настройки PhpShtorm 2016.2.2
**File->Settings->Build,Execution,Deployment->Deployment**

на вкладке **Connection:**
- **type:** 'SFTP'
- **HOST:** 'you vagrant machine'
- **port:** '22'
- **Root path:** '/home/vagrant/Code'
- **User name:** 'vagrant'
- **Auth type:** 'Key pair(OpenSSH or PuTTY)'
- **Private key file:** 'C:\\Users\\**_your-User_**\\.ssh\\putty_private.ppk' (`сгенерирован PUTTY`)
  - протестировать нажав `Test SFTP connection ...`
  
на вкладке **Mappings:**
- **Set local path:** 'C:\\Code\\alex'
- **Deployment path on server alex.app** '/alex'
- **Web patch on server** '/'
  
**File->Settings->Languages&Framework->PHP**
- **PHP language level:** '7(return types, scalar type hints, etc)'
- **Interpreter:** 'Remote PHP 7 (7.0.8-2+deb.sury.org~xenial+1)'
  - при нажатии кнопки `...` появится новое окно настройки Interpreter
  
**Настройки Interpreter**
  - создать новый Interpreter нажав зеленый **`+`**
- **name:** 'Remote PHP 7'
- **Deployment configuration** выберите настроеный ранее Deployment
- **PHP executable:** '/usr/bin/php'

Для поддержки отладки необходимо добавить в php.ini подключения модуля xdebug.ini следующего содержания:
```
zend_extension=xdebug.so
xdebug.remote_autostart=on
xdebug.remote_enable=on
xdebug.remote_handler='dbgp'
xdebug.remote_host=192.168.1.7
xdebug.remote_port=9001
xdebug.remote_mode=req
xdebug.idekey='PHPSHTORM'
```
## Setup Laravel
**New project->Composer project**
- **Location:** 'C:\\Code\\alex')
- **Download composer.phar from getcomposer.org**
- **Package** -> 'laravel/laravel'

- В файл config/app.php добавить в секцию providers
  - `Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,`

В консоли через PUTTY->SSH(user vagrant)
- Выполнить:
  - `cd /home/vagrant/Code/alex`
  - `composer require barryvdh/laravel-ide-helper`
  - `composer require doctrine/dba1`
  - `composer update`
  - `artisan make:migration`
  - `artisan make:Auth`
  - `php artisan ide-helper:meta`
  - `php artisan ide-helper:generate`
  - `php artisan ide-helper:model`

Теперь можно открыть http://alex.app/ в браузере на первой странице Laravel

выполнить регистрацию, залогиниться и попасть на персональную страницу пользователя

Для включения системы контроля версий необходимо проделать следующее:

**File->Settings>Version Control->GitHub**
- **Host** 'github.com'
- **Auth type** 'Token'
- **Token:** 'from github'
- проверка проводиться нажатеем кнопки `test`
**File->Settings>Version Control->Git**
- **Patch for Git executable** 'C:\\Program Files\\Git\\cmd\\git.exe'
- **SSH executable** 'native'
- проверка проводиться нажатеем кнопки `test`

Для полноценного использования необходимо сгенерировать пару ключей для обмена с GitHub

запустив git-bash на Windows 10 выплним команду:
```
ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
```
Пара ключей будет расположена в 'C:\\Users\\User\\.ssh' -> ***ide_rsa.pub***, ***ide_rsa***
Содержимое ***ide_rsa.pub*** вставить на GitHub при регистрации нового SSH ключа

После этого при инициализации VCS контроля через меню PHPStorm создаться новый репозитарий в GitHub,
который можно полноценно использовать для разработки проекта.

 
 