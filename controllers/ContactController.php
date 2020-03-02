<?php

namespace app\controllers;

use app\models\searchModels\ContactSearch;
use Yii;
use app\models\Contact;
use yii\filters\AccessControl;

class ContactController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'index', 'view', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['create'],
                        'allow' => true,
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new ContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $contact_model = new Contact();
        if ($contact_model->load(Yii::$app->request->post()) && $contact_model->save()) {
            Yii::$app->session->setFlash('success','Thanks, Your message received to me, I response very soon.');
        }
        return $this->goHome();
    }

    public function actionView($id)
    {
        $model = Contact::findOne($id);

        if (!$model) {
            Yii::$app->session->setFlash('warning','There is no any user with this id : ' . $id);
            return $this->redirect('index');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        if (Contact::findOne($id)->delete()) {
            Yii::$app->session->setFlash('success','deleted successfully');
            return $this->redirect(['index']);
        }
        Yii::$app->session->setFlash('error','there is an error, Boss.');
        return $this->goBack();
    }
}
