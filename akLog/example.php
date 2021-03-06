<?

/*
 * This file is part of the akLib package.
 * (c) 2010 Azat Khuzhin <dohardgopro@gmail.com>
 *
 * For the full copyright and license information, please view http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Exapmle of akLog
 * 
 * @licence GPLv2
 * 
 * @author Azat Khuzhin <dohardgopro@gmail.com>
 */

require_once __DIR__ . '/../main.php';
require_once 'akLog.class.php';

// if from CLI
if (PHP_SAPI != 'cli') echo '<pre>';

$l = akLog::getInstance();
for ($i = 0; $i < 100; $i++) {
	$l->add(array('test' . $i, 'testFile' . $i, $i));
}

// if from CLI
if (PHP_SAPI != 'cli') echo '</pre>';
