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

## WordPress sans Bootstrap

If you're using WordPress without Bootstrap, then you can add
[the stylesheet][5] to the `<head>` section with the [`wp_head` action hook][6].

```php
add_action( 'wp_head', array( ProgressBar::class, 'wp_head' ) );
```

[1]:http://getbootstrap.com/components/#progress
[2]:https://getcomposer.org/
[3]:./example.php
[4]:http://twig.sensiolabs.org/
[5]:./css/style.css
[6]:https://codex.wordpress.org/Plugin_API/Action_Reference/wp_head
