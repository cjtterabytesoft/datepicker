<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/datepicker
 *      @author: Wilmer Arámbula <github@cjtterabyte.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @assets: [MomentAsset]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace cjtterabytesoft\widgets\assets;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
	/**
	 * @var string the directory that contains the source asset files for this asset bundle.
	 */
	public $sourcePath = '@bower/moment/min';
	
	/**
	 * @var array list of JavaScript files that this bundle contains.
	 */
	public $js = [
		'moment-with-locales.js'
	];
}
