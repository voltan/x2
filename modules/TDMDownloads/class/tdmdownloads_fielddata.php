<?php
/**
 * TDMDownload
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */

if (!defined("XOOPS_ROOT_PATH")) {
    die("XOOPS root path not defined");
}
class TDMDownloads_fielddata extends XoopsObject
{
// constructor
    function __construct()
    {
        $this->XoopsObject();
        $this->initVar("iddata",XOBJ_DTYPE_INT,null,false,11);
        $this->initVar("fid",XOBJ_DTYPE_INT,null,false,11);
        $this->initVar("lid",XOBJ_DTYPE_INT,null,false,11);
        $this->initVar("data",XOBJ_DTYPE_TXTBOX, null, false);
        $this->initVar('dohtml', XOBJ_DTYPE_INT, 1, false);
    }
    function TDMDownloads_fielddata()
    {
        $this->__construct();
    }
}

class TDMDownloadstdmdownloads_fielddataHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db)
    {
        parent::__construct($db, "tdmdownloads_fielddata", 'tdmdownloads_fielddata', 'iddata', 'data');
    }
}
?>