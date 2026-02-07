# INSTALLATION
## Installe le package NativePHP Mobile
composer require nativephp/mobile -W

## Prépare les fichiers de configuration et le binaire 'native'
php artisan native:install

## Tester avec Jump
Jump est une application compagnon (disponible sur iOS et Android) qui sert de "lecteur" pour ton application Laravel en local. 

1. Télécharge l'app Jump sur l'App Store ou le Google Play Store sur ton téléphone. Bifrost NativePHP - Jump 
link : https://play.google.com/store/apps/details?id=com.bifrosttech.jump

2. Lance le serveur Jump depuis ton terminal dans ton projet Laravel

php artisan native:jump

3. Scanne le QR Code qui s'affiche dans ton terminal avec l'application Jump de ton téléphone. 

Comment ça marche ?

Connexion locale : Ton téléphone et ton ordinateur doivent être sur le même réseau Wi-Fi.

Hot Reload : Dès que tu modifies une vue Blade ou un contrôleur, Jump rafraîchit l'application sur ton téléphone presque instantanément. NativePHP Mobile Guide

Plugins Natifs : Jump inclut déjà les plugins pour tester la caméra, les notifications ou la géolocalisation sans aucune compilation. Laravel News - NativePHP Mobile Free 


# Rendu de mon terminal apres tout les etapes

alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ composer require nativephp/mobile -W
./composer.json has been updated
Running composer update nativephp/mobile --with-all-dependencies
Loading composer repositories with package information
Updating dependencies
Lock file operations: 14 installs, 1 update, 0 removals
  - Locking endroid/qr-code (5.1.0)
  - Locking evenement/evenement (v3.0.2)
  - Locking fig/http-message-util (1.1.5)
  - Locking nativephp/mobile (3.0.0)
  - Downgrading psr/http-message (2.0 => 1.1)
  - Locking react/cache (v1.2.0)
  - Locking react/datagram (v1.10.0)
  - Locking react/dns (v1.14.0)
  - Locking react/event-loop (v1.6.0)
  - Locking react/http (v1.11.0)
  - Locking react/promise (v3.3.0)
  - Locking react/socket (v1.17.0)
  - Locking react/stream (v1.4.0)
  - Locking spatie/laravel-package-tools (1.92.7)
  - Locking workerman/workerman (v4.2.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 14 installs, 1 update, 0 removals
  - Downgrading psr/http-message (2.0 => 1.1): Extracting archive
  - Installing workerman/workerman (v4.2.1): Extracting archive
  - Installing spatie/laravel-package-tools (1.92.7): Extracting archive
  - Installing react/event-loop (v1.6.0): Extracting archive
  - Installing evenement/evenement (v3.0.2): Extracting archive
  - Installing react/stream (v1.4.0): Extracting archive
  - Installing react/promise (v3.3.0): Extracting archive
  - Installing react/cache (v1.2.0): Extracting archive
  - Installing react/dns (v1.14.0): Extracting archive
  - Installing react/socket (v1.17.0): Extracting archive
  - Installing fig/http-message-util (1.1.5): Extracting archive
  - Installing react/http (v1.11.0): Extracting archive
  - Installing react/datagram (v1.10.0): Extracting archive
  - Installing endroid/qr-code (5.1.0): Extracting archive
  - Installing nativephp/mobile (3.0.0): Extracting archive
4 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.  

  laravel/fortify .................................................................................... DONE
  laravel/jetstream .................................................................................. DONE
  laravel/pail ....................................................................................... DONE
  laravel/sail ....................................................................................... DONE
  laravel/sanctum .................................................................................... DONE
  laravel/tinker ..................................................................................... DONE
  livewire/livewire .................................................................................. DONE
  nativephp/mobile ................................................................................... DONE
  nesbot/carbon ...................................................................................... DONE
  nunomaduro/collision ............................................................................... DONE
  nunomaduro/termwind ................................................................................ DONE

94 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].  

No security vulnerability advisories found.
Using version ^3.0 for nativephp/mobile
alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ php artisan native:install

  Installing NativePHP for Mobile 

 ┌ What should your app bundle ID be? ──────────────────────────┐
 │ com.alpha.summitcrystalshine                                 │
 └──────────────────────────────────────────────────────────────┘

✅ Set NATIVEPHP_APP_ID=com.alpha.summitcrystalshine in .env

 ┌ Include ICU-enabled PHP binary for Filament/intl support? ───┐
 │ No                                                           │
 └──────────────────────────────────────────────────────────────┘


  Creating Android project .................................................................. 122.03ms DONE
  ICU support .................................................................................... Disabled  
  Downloading Android PHP binaries ................................................................ 8s DONE
  Download size ..................................................................................... 7.6MB  
  Extracting PHP binaries ................................................................... 395.29ms DONE
  Installing Android libraries ............................................................... 53.44ms DONE
  Copying native CLI wrapper .................................................................. 1.05ms DONE

  NativePHP for Mobile installed successfully! 


  ███╗   ██╗ █████╗ ████████╗██╗██╗   ██╗███████╗██████╗ ██╗  ██╗██████╗
  ████╗  ██║██╔══██╗╚══██╔══╝██║██║   ██║██╔════╝██╔══██╗██║  ██║██╔══██╗
  ██╔██╗ ██║███████║   ██║   ██║██║   ██║█████╗  ██████╔╝███████║██████╔╝
  ██║╚██╗██║██╔══██║   ██║   ██║╚██╗ ██╔╝██╔══╝  ██╔═══╝ ██╔══██║██╔═══╝
  ██║ ╚████║██║  ██║   ██║   ██║ ╚████╔╝ ███████╗██║     ██║  ██║██║
  ╚═╝  ╚═══╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═══╝  ╚══════╝╚═╝     ╚═╝  ╚═╝╚═╝

  From laravel new to App Store...

  ⚡ Bifrost — Ship to stores → bifrost.nativephp.com
  🔌 Plugins — Native features → plugins.nativephp.com
  📚 Docs    — Get started → nativephp.com/docs/mobile

alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ php artisan native:jump

  NativePHP Jump Server 

 ┌ Select target platform ──────────────────────────────────────┐
 │ Android                                                      │
 └──────────────────────────────────────────────────────────────┘

  Building assets for android 
.................................................................... 11s DONE
  Cleaning up 1 existing server(s) .......................................................... 503.39ms DONE

 ┌ Multiple network interfaces detected. Select the IP for the QR code ┐
 │ 192.168.1.203                                                       │
 └─────────────────────────────────────────────────────────────────────┘

  Copying files ................................................................................... 9s DONE
  Creating zip archive ........................................................................... 16s DONE
  Bundle created ................................................................................. 42.82 MB  
  Server running ..................................................................... Press Ctrl+C to stop  
  Device ............................................................. PHILIPS S6210 downloading (42.82 MB)  
  Device ............................................................ Unknown device downloading (42.82 MB)  
  Device ............................................................ Unknown device downloading (42.82 MB)  



# conflusion 
fichier creer : config/nativephp.php
                native.php
docummentation de phpnative : https://nativephp.com/docs/desktop/2/getting-started/introduction
ducummentation de jump : https://bifrost.nativephp.com/docs/mobile/teams/overview

Fait le 7/2/2025 par : KATUMBA TCHIBAMBE ALPHONSE

github : Alphonse243