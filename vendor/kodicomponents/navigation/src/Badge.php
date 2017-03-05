<?php

namespace KodiComponents\Navigation;

use Closure;
use KodiComponents\Navigation\Contracts\BadgeInterface;
use KodiComponents\Support\HtmlAttributes;

class Badge implements BadgeInterface
{

    use HtmlAttributes;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var int
     */
    protected $priority = 0;

    /**
     * Badge constructor.
     *
     * @param string|Closure|null $value
     * @param int $priority
     */
    public function __construct($value = null, $priority = 0)
    {
        if (! is_null($value)) {
            $this->setValue($value);
        }

        $this->setPriority($priority);

        $this->setHtmlAttribute('class', 'label pull-right');
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = (int) $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        if (is_callable($this->value)) {
            return call_user_func($this->value, $this);
        }

        return $this->value;
    }

    /**
     * @param string|Closure $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'value' => $this->getValue(),
            'attributes' => $this->htmlAttributesToString(),
        ];
    }

    /**
     * @param string|null $view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render($view = null)
    {
        if (is_null($view)) {
            $view = config('navigation.view.badge', 'navigation::badge');
        }

        return view($view, $this->toArray());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->render();
    }
}
