<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * oledrion
 *
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      Hossein Azizabadi (azizabadi@faragostaresh.com)
 * @version     $Id$
 */

require 'classheader.php';

class oledrion_delivery_payment extends Oledrion_Object
{
    public function __construct()
    {
        $this->initVar('dp_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('dp_delivery', XOBJ_DTYPE_INT, null, false);
        $this->initVar('dp_payment', XOBJ_DTYPE_INT, null, false);
    }
}


class OledrionOledrion_delivery_paymentHandler extends Oledrion_XoopsPersistableObjectHandler
{
    public function __construct($db)
    { //							              Table					          Classe				    Id
        parent::__construct($db, 'oledrion_delivery_payment', 'oledrion_delivery_payment', 'dp_id');
    }
}

?>