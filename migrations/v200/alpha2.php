<?php
/**
*
* @package Quick Title Edition Extension
* @copyright (c) 2015 ABDev
* @copyright (c) 2015 PastisD
* @copyright (c) 2015 Geolim4 <http://geolim4.com>
* @copyright (c) 2015 Zoddo <zoddo.ino@gmail.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace ernadoo\qte\migrations\v200;

class alpha2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\ernadoo\qte\migrations\v200\alpha1',
			'\ernadoo\qte\migrations\v200\drop_columns',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('qte_version', '2.0.0-a2')),
		);
	}
}
