# Windows 10 -> Vagrant-PhpShtorm-Laravel-install from PhpStorm and configure them
- XDebug + GitHub + PUTTY + Git-bash
- На основе:
http://www.pascallandau.com/blog/phpstorm-with-vagrant-using-laravel-homestead-on-windows-10/
[example site]:http://www.pascallandau.com/blog/phpstorm-with-vagrant-using-laravel-homestead-on-windows-10/
## Настройки Vagrant Homestead
file Homestead.jaml -> for **Windows 10** -> c:\Users\\**_your-User_**\\.homestead\Homestead.jaml:
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
## Настройки PhpShtorm 2016.2.2
Для использования php на виртуальной машине vagrant

Считаем что PhpShtorm установлен и создаем новый project, при этом настройки vagrant остались прежние

при создании нового project предполагается использования composer в Shtorm->New project->Composer project->Location = новый каталог для проекта ( под домонтированым 'c:/Code/new')
example: **С:/Code/alex**
На установленном PhpShtorm для нового project: -> входим в настройки  
### Lfktt
## Setup
- считаем что уже установлен PhpShtorm 
- download/clone the git repository from
  - `git clone https://github.com/paslandau/laravelexample.git`
- navigate into the project folder
  - `cd laravelexample`
- make sure not to work directly on the master branch  
  - `git checkout -b my_local_branch`
- to prepare the vagrant configuration, run
  - `vendor/bin/homestead make` or `vendor/bin/homestead.bat make` on Windows
- adjust the `hosts` file and the newly created `Homestead.yaml` in the root of the repo according to your needs. Usually that includes:
  - adjust `ip`
    - make sure the `ip` is not already used in your local network
  - add an entry to your host file
    - `[IP] laravelexample.app` (e.g. `192.168.33.111 laravelexample.app`)
    - location on Unix: `/etc/hosts`
    - location on Windows: `C:\Windows\System32\drivers\etc`
- adjust `folders` and `sites` mapping (optional; it should be set up correctly by default if you followed the steps above).
  Watch out for the following:
  - the `folders: - map: "[PATH]"` should point to the absolute path to the `cube` repository on your **local** machine
  - the `folders: to: "[PATH]"` denotes the path on your **vagrant** machine that is mapped to the above mentioned path on your local machine,
    so that you can access your local files within the vagrant box.
  - the `sites: - map: "[HOSTNAME]"` denotes the hostname that the nginx is looking for to serve content on
    - you _should_ adjust that to the hostname chosen for your hostfile (e.g. `laravelexample.app`) although it not necessary since nginx will even respond to another hostname
  - the `sites: - to: "[PATH]"` denotes the absolute path withing the vagrant box that the above mentioned hostname uses as `root` path for content.
    This should be the path to the `public` folder of this repository
- start the vagrant box with `vagrant up`, ssh into it with `vagrant ssh`, switch to the project folder (by default, this should be `cd /home/vagrant/laravelexample/`) and install the 
  project's dependencies
  - `composer install`
- setup laravel by generating an application key and setting up the .env file:
  - php artisan key:generate
  - `cp .env.example .env`
- generate the meta data files for better code completion
  - `php artisan ide-helper:meta`
  - `php artisan ide-helper:generate`
  - `php artisan ide-helper:model`

You should now be able to open http://laravelexample.app/ in your browser and see the Laravel welcome page :)
