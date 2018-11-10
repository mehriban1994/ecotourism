<?php

namespace frontend\widgets;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;


class ObjectWidget extends ListView
{
    public function init()
    {
        parent::init();
        //unset($_GET['slug']);
    }


    public function renderItems()
    {
        $models = array_values($this->dataProvider->getModels());

        $g = "";
        foreach ($models as $model) {

            $g .= "
                <div class='col-md-4'>
                    <div class='flat-imagebox style2 v2'>
                        <div class='item'>
                                    <a href='". Url::to(['site/object', 'object_id' => $model->object_id]) . "'>
                            <div class='imagebox'>
                                <div class='box-wrap'>
                                        <div class='box-image'>"
                                            .Html::img('images/uz/objects/' . $model->getThumbImage()->image) . "
                                            <div class='overlay'></div> <!-- /.overlay -->
                                            <div class='imagebox-content'>
                                                <ul class='imagebox-link'>
                                                    <li class='icon-s FromLeft'><button class='flat-button'>View</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class='box-content'>
                                            <h4>" . $model->object_name . "</h4>
                                            <div class='sub-title'>" . $model->address . "</div>
                                    </div>
                                </div>
                            </div>

                                    </a>
                        </div>

                        <div class='dividers dividers-imagebox s2 v2'></div>
                    </div>
                </div>
                        
                     ";
        }
        return $g;
    }
}

?>
