<?php
/**
 * Copyright (c) Apantic (apantic.com) 2015 to present.
 * All rights reserved.
 * @license All use is subject to the Apantic License Agreement (https://www.apantic.com/community/products/license-agreement)
 * @author: Apantic Team <support@apantic.com>
 */
class Apantic_ProfilePostLimit_Listener
{
    public static function extend_xf_pp_listener($class, &$extend)
    {
        $extend[] = 'Apantic_ProfilePostLimit_DataWriter_DiscussionMessage_ProfilePost';
    }

    public static function extend_xf_ppc_listener($class, &$extend)
    {
        $extend[] = 'Apantic_ProfilePostLimit_DataWriter_ProfilePostComment';
    }
}