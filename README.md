# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see the default home page.

## Update

Since this skeleton is a starting point for your application and various files would have been modified as per your needs, there isn't a way to provide automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout
The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) CSS framework by default. You can, however, replace it with any other library or custom styles.

### CELL

Supposons que nous travaillions sur une application qui permette aux utilisateurs d’envoyer des messages aux autres.
Nous avons un model Messages, et nous voulons montrer le nombre de messages non lus sans avoir à polluer
AppController. C’est un cas d’utilisation parfait pour une cell.

use Cake\View\Cell;
class InboxCell extends Cell
{
    public function display()
    {
        $this->loadModel('Messages');
        $unread = $this->Messages->find('unread');
        $this->set('unread_count', $unread->count());
    }
}

<!-- src/Template/Cell/Inbox/display.ctp -->
<div class="notification-icon">
Vous avez <?= $unread_count ?> messages non lus.
</div>

//Charger des cell
$cell = $this->cell('Inbox');

une fois que la celle est chargée, elle va exécuté la methode dispaly.
On peut executer d'autre methodes en itulisant
$cell = $this->cell->('Inbox::expanded');

//Pour activer le cell dans le controller

public function Dashboard extends AppController{
    use CellTrait;
}


Afficher un Template alternatif

Par convention, les cells affichent les templates qui correspondent à l’action qu’ils exécutent. Si vous avez besoin
d’afficher un template de vue différent, vous pouvez spécifier le template à utiliser lors de l’affichage de la cell :

// Appel de render() explicitement

echo $this->cell('Inbox::recent', ['-3 days'])->render('messages');
// Définit le template avant de faire un echo de la cell.
$cell = $this->cell('Inbox'); ?>
$cell->template = 'messages';
echo $cell;
