<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
$this->title = 'My Yii Application';
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<div class="site-index">
<div class="row" >
    <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
                    <span style="font-size: 18px;" class="text-center"> Текст Преподователя </span>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <input type="file" id="uploadTeacher" name="PdfParser[FileTeacher]" value="null" style="visibility:hidden; position: absolute;">
                    <a class="btn   btn-primary" onclick="document.getElementById('uploadTeacher').click()" >загрузить</a>
                </div>
            </div> </div>
        <div class="panel-footer"><span><?php echo $DataTeacher;?>
                </span></div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
            <span style="font-size: 18px;" class="text-center"> Текст студента </span>
                </div>
                <div class="col-md-5 col-md-offset-2">
            <input type="file" id="upload" name="PdfParser[file]" value="null" style="visibility:hidden; position: absolute;">
            <a class="btn   btn-primary" onclick="document.getElementById('upload').click()" >загрузить</a>

            <button id="submit" class="btn  btn-success">Отправить</button></div>
            </div>
        </div>
        <div class="panel-footer"><span><?php echo $data ?></span>

        </div>
    </div>
    </div>
</div>
    <?php ActiveForm::end() ?>


</div>
