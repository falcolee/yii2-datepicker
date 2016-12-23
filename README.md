# yii2-datepicker
A simple datepicker extension for yii2. 


## Installation

To install, either run

```
$ php composer.phar require xiaogouxo/yii2-datepicker "*"
```

or add

```
"xiaogouxo/yii2-datepicker": "*"
```

Simple Usage
=====

        echo $form->field($model, 'date_range')->widget(\xiaogouxo\datepicker\pickerDateRange::classname(), [
            'jsOptions' => [
                'isTodayValid' => true,
                'defaultText' => " - "
            ]
        ]);


Requirements
* PHP 5.4.0 or newer


