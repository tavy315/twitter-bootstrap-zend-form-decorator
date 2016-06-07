<?php
/**
 * Twitter Bootstrap v.3 Form for Zend Framework v.1
 *
 * @category   Forms
 * @package    Twitter_Bootstrap3_View
 * @subpackage Helper
 * @author     Ilya Serdyuk <ilya.serdyuk@youini.org>
 */

/**
 * Helper to generate a "email" element
 *
 * @category   Forms
 * @package    Twitter_Bootstrap3_View
 * @subpackage Helper
 */
class Twitter_Bootstrap_View_Helper_FormEmail extends Twitter_Bootstrap_View_Helper_FormText
{
    /**
     * Generates a 'email' element.
     *
     * @access public
     *
     * @param string|array $name    If a string, the element name.  If an
     *                              array, all other parameters are ignored, and the array elements
     *                              are used in place of added parameters.
     *
     * @param mixed        $value   The element value.
     *
     * @param array        $attribs Attributes for the element tag.
     *
     * @return string The element XHTML.
     */
    public function formEmail($name, $value = null, $attribs = null)
    {
        return $this->_formText('email', $name, $value, $attribs);
    }
}