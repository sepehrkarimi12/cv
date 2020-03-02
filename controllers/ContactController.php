<?php

namespace app\controllers;

use Yii;
use app\models\Contact;

class ContactController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $contact_model = new Contact();
        if ($contact_model->load(Yii::$app->request->post()) && $contact_model->save()) {
            Yii::$app->session->setFlash('success','Thanks, Your message received to me, I response very soon.');
        }
        return $this->goHome();
    }
}
