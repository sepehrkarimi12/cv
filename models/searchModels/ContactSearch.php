<?php

namespace app\models\searchModels;

use app\models\Contact;
use yii\data\ActiveDataProvider;

class ContactSearch extends Contact
{

    public function rules()
    {
        return [
            [['name', 'email_or_phone_number', 'subject', 'text'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Contact::find()->orderBy(['sent_at' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        $this->load($params);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email_or_phone_number', $this->email_or_phone_number])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }

}
