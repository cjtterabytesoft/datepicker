<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/datepicker
 *      @author: Wilmer Arámbula <github@cjtterabyte.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @assets: [DatePickerAsset]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace cjtterabytesoft\widgets\assets;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle
{
	/**
	 * @var string the directory that contains the source asset files for this asset bundle.
	 */
	public $sourcePath = '@bower/tempusdominus-bootstrap-4/build';

	/**
	 * @var array list of CSS files that this bundle contains.
	 */
	public $css = [
		'css/tempusdominus-bootstrap-4.css'
	];

	/**
	 * @var array list of JavaScript files that this bundle contains.
	 */
	public $js = [
		'js/tempusdominus-bootstrap-4.js'
	];

	/**
	 * @var array the options to be passed to [[AssetManager::publish()]] when the asset bundle
	 * is being published.
	 */
	public $publishOptions = [
		'only' => [
			'tempusdominus-bootstrap-4.css',
			'tempusdominus-bootstrap-4.js'
		]
	];

	/**
	 * @var array list of bundle class names that this bundle depends on.
	 */
	public $depends = [
		\cjtterabytesot\widgest\assets\MomentAsset::class,
		\yii\bootstrap4\BootstrapPluginAsset::class,
	];
}
