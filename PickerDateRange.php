<?php

namespace xiaogouxo\datepicker\pickerDateRange;

use xiaogouxo\datepicker\assets\DateRangeAsset;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * PickerDateRange Widget
 *
 */
class PickerDateRange extends InputWidget {

    /**
     * 初始化目标ID
     * @var string
     */
    public $id;

    /**
     * 默认值
     * @var string
     */
    public $value;

    /**
     * 表单字段名
     * @var string
     */
    public $name;

    /**
     * Tag/ScriptTag HtmlStyle
     * @var style
     */
    public $style;

    public $type = 'text';

    public $options = ['class' => 'form-control'];

    /**
     * 参数
     * @var array
     */
    public $jsOptions = [];

    /**
     * Initializes the widget.
     */
    public function init() {
        parent::init();
        if (empty($this->id)) {
            $this->id = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }
        if (empty($this->name)) {
            $this->name = $this->hasModel() ? Html::getInputName($this->model, $this->attribute) : $this->id;
        }
        $attributeName = $this->attribute;
        if (empty($this->value) && $this->hasModel()) {
            $this->value = $this->model->$attributeName;
        }
    }

    /**
     * Renders the widget.
     */
    public function run() {
        DateRangeAsset::register($this->view);
        $this->registerScripts();
        if ($this->hasModel()) {
            echo Html::activeInput($this->type, $this->model, $this->attribute, $this->options);
        } else {
            echo Html::input($this->type, $this->name, $this->value, $this->options);
        }
    }

    public function registerScripts() {
        $jsonOptions = Json::encode($this->jsOptions);
        $script = "new pickerDateRange('{$this->id}', " . $jsonOptions . ")";
        $script .= ';';
        $this->view->registerJs($script, View::POS_READY);
    }

}
