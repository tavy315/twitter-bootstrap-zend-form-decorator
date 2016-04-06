<?php
/**
 * A form reset submit definition
 *
 * @category   Forms
 * @package    Twitter_Bootstrap_Form
 * @subpackage Element
 * @author     Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * A form reset button
 *
 * @category   Forms
 * @package    Twitter_Bootstrap_Form
 * @subpackage Element
 * @author     Christian Soronellas <csoronellas@emagister.com>
 */
class Twitter_Bootstrap_Form_Element_Reset extends Zend_Form_Element_Reset
{
    const BUTTON_PRIMARY = 'primary';
    const BUTTON_INFO = 'info';
    const BUTTON_SUCCESS = 'success';
    const BUTTON_WARNING = 'warning';
    const BUTTON_DANGER = 'danger';
    const BUTTON_INVERSE = 'inverse';
    const BUTTON_LINK = 'link';

    protected $_buttons = [
        self::BUTTON_DANGER,
        self::BUTTON_INFO,
        self::BUTTON_PRIMARY,
        self::BUTTON_SUCCESS,
        self::BUTTON_WARNING,
        self::BUTTON_INVERSE,
        self::BUTTON_LINK
    ];

    /**
     * Class constructor
     *
     * @param       $spec
     * @param array $options
     */
    public function __construct($spec, $options = null)
    {

        if (!isset($options['class'])) {
            $options['class'] = '';
        }

        $classes = explode(' ', $options['class']);
        $classes[] = 'btn';
        $classes[] = 'btn-default';

        if (isset($options['buttonType']) && in_array($options['buttonType'], $this->_buttons)) {
            $classes[] = 'btn-' . $options['buttonType'];
            unset($options['buttonType']);
        }

        if (isset($options['disabled'])) {
            $classes[] = 'disabled';
        }

        $classes = array_unique($classes);

        $options['class'] = trim(implode(' ', $classes));

        parent::__construct($spec, $options);
    }
}
