# yii2-datepicker
A simple datepicker extension for yii2. 

* All kinds of push like note link file & etc.. supported.
* Easy to use in 5 secs 
* Any push from your yii2

## Installation

To install, either run

```
$ php composer.phar require xiaogouxo/yii2-pushbullet "*"
```

or add

```
"xiaogouxo/yii2-pushbullet": "*"
```

to the ```require``` section of your `composer.json` file.

============
* Add following lines into `main.php` configuration file:

    	'components' => array(
    		...
	        'pushBullet' => [
	            'class' => '\xiaogouxo\pushbullet\PushBullet',
	            'apiKey' => 'XXXX',
	        ]
    		...
    	),

Simple Usage
=====
$channelTagName = "myhashtag";

Yii::$app->pushBullet->pushNote($channelTagName,"hello","welcome to my channel");

* Channel push has alreadly tested.Others not yet ~_~

More
=====
PushBullet
* Get Your access token here:https://www.pushbullet.com/account

Requirements
* PHP 5.4.0 or newer
* cURL library for PHP

SDK
* This repo is a fork of joetannenbaum's phpushbullet php sdk api,see full details here:https://github.com/joetannenbaum/phpushbullet


