<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('external', dirname(dirname(__DIR__)) . '/external');

Yii::setAlias('external_url','external/frontend_assets');
Yii::setAlias('uploads_url','uploads/');

