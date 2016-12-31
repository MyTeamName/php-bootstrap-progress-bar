<?php namespace jpuck\php\bootstrap\ProgressBar;

use InvalidArgumentException;
use Twig_Environment;
use Twig_Loader_Filesystem;

class ProgressBar
{
    protected $percent = 0;
    protected $views = __DIR__."/../views";

    public function __construct(int $percent, array $options = null)
    {
        if ($percent < 0) {
            throw new InvalidArgumentException("percent must be positive");
        }

        if ($percent > 100) {
            throw new InvalidArgumentException("percent must not be greater than 100");
        }

        $this->percent = $percent;

        $this->views = realpath($this->views);
    }

    protected function getColorContextClass()
    {
        switch (true) {
            case $this->percent < 51:
                return 'danger';
            case $this->percent < 100:
                return 'warning';
            case $this->percent = 100:
                return 'success';
            default:
                return 'info';
        }
    }

    public static function getBootstrapCdn() : string
    {
        return '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
    }

    public static function getCssEmbed() : string
    {
        $css = file_get_contents(__DIR__.'/../css/style.css');
        return "<style>$css</style>";
    }

    public function render(string $view = 'default') : string
    {
        $data = [
            'percent' => $this->percent,
            'color'   => $this->getColorContextClass(),
        ];

        $twig = new Twig_Environment(new Twig_Loader_Filesystem($this->views));

        return $twig->loadTemplate("$view.twig.html")->render($data);
    }

    public function __toString()
    {
        return $this->render();
    }
}
