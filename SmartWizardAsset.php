<?php
namespace kuakling\smartwizard;
use yii\web\AssetBundle;
/**
 * Asset bundle for the smart wizard files.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class SmartWizardAsset extends AssetBundle
{
    public $sourcePath = '@vendor/techlab/smartwizard';
    
    public $css = [
        'css/smart_wizard.css',
    ];
    
    public $js = [
        'js/jquery.smartWizard.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
