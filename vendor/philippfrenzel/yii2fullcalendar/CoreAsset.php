<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/fullcalendar';

    /**
     * the language the calender will be displayed in
     * @var string ISO2 code for the wished display language
     */
    public $language = NULL;

    /**
     * [$autoGenerate description]
     * @var boolean
     */
    public $autoGenerate = true;
    
    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'fullcalendar.css',
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'fullcalendar.js',
        'gcal.js',
        'lang-all.js',
    ];
    
    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii2fullcalendar\MomentAsset',
        'yii2fullcalendar\PrintAsset',
        'yii\jui\JuiAsset'
    ];

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        /* $language = $this->language ? $this->language : Yii::$app->language;
         $this->js[] = "lang/{$language}.js";
	*/
	$language = strtolower($this->language ? $this->language : Yii::$app->language);
         
         if ($language != 'en-us') {
             $this->js[] = "lang/{$language}.js";
         }
        parent::registerAssetFiles($view);
    }

}
