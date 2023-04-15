<?php
/**
 * PhpThumb Library Example File
 *
 * This file contains example usage for the PHP Thumb Library
 *
 * PHP Version 8 with GD 2.3+
 * PhpThumb : PHP Thumb Library <https://github.com/PHPThumb/PHPThumb>
 * Copyright (c) 2009, Ian Selby/Gen X Design
 *
 * Author(s): Ian Selby <ianrselby@gmail.com>
 *
 * Licensed under the MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Ian Selby <ianrselby@gmail.com>
 * @copyright Copyright (c) 2009 Gen X Design
 * @link https://github.com/PHPThumb/PHPThumb
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @version 3.0
 * @package PhpThumb
 * @subpackage Examples
 * @filesource
 */

require_once '../vendor/autoload.php';

$thumb = new PHPThumb\GD(__DIR__ .'/../tests/resources/test.jpg', [], [
	new PHPThumb\Plugins\Reflection(40, 40, 80, true, '#a4a4a4')
]);

$thumb->adaptiveResize(250, 250);
$thumb->show();
