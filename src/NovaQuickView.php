<?php

namespace PhpJunior\NovaQuickView;

use Laravel\Nova\Fields\Field;

class NovaQuickView extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-quick-view';

    /**
     * NovaQuickView constructor.
     *
     * @param string $name
     * @param string|null $attribute
     * @param mixed|null $resolveCallback
     */
    public function __construct(string $name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct(null, $attribute, $resolveCallback);
        $this->onlyOnIndex();
        $this->withMeta([
            'tooltip' => $name,
            'icon' => 'el-icon-search',
            'direction' => 'rtl'
        ]);
    }

    /**
     * @param $icon
     * @return NovaQuickView
     */
    public function icon($icon)
    {
        return $this->withMeta([
            'icon' => $icon
        ]);
    }

    /**
     * @param $title
     * @return NovaQuickView
     */
    public function title($title)
    {
        return $this->withMeta([
            'title' => $title
        ]);
    }

    /**
     * @param $direction
     * @return NovaQuickView
     */
    public function direction($direction)
    {
        return $this->withMeta([
            'direction' => $direction
        ]);
    }
}
