# PHP Bootstrap Progress Bar

Create static [Bootstrap Progress Bars][1] using PHP.

## Installation

Install into your project using [composer][2].

    composer require jpuck/php-bootstrap-progress-bar

## Usage

See [example.php][3] for usage.

## Views

Additional [twig views][4] may be created and added to the views directory
and referenced using the `render` method. For example, `myview.twig.html` can
be used like:

```php
echo $progressbar->render('myview');
```

[1]:http://getbootstrap.com/components/#progress
[2]:https://getcomposer.org/
[3]:./example.php
[4]:http://twig.sensiolabs.org/
