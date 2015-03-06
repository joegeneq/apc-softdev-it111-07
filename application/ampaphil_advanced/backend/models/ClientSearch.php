<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Client;

/**
 * ClientSearch represents the model behind the search form about `app\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['CLIENT_LName', 'CLIENT_FName', 'CLIENT_MName', 'CLIENT_Company', 'CLIENT_CompanyBlkOrAreaNo', 'CLIENT_CompanyBrgy', 'CLIENT_ContactNo', 'CLIENT_CompanyCity', 'CLIENT_EmailAdd'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Client::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'CLIENT_LName', $this->CLIENT_LName])
            ->andFilterWhere(['like', 'CLIENT_FName', $this->CLIENT_FName])
            ->andFilterWhere(['like', 'CLIENT_MName', $this->CLIENT_MName])
            ->andFilterWhere(['like', 'CLIENT_Company', $this->CLIENT_Company])
            ->andFilterWhere(['like', 'CLIENT_CompanyBlkOrAreaNo', $this->CLIENT_CompanyBlkOrAreaNo])
            ->andFilterWhere(['like', 'CLIENT_CompanyBrgy', $this->CLIENT_CompanyBrgy])
            ->andFilterWhere(['like', 'CLIENT_ContactNo', $this->CLIENT_ContactNo])
            ->andFilterWhere(['like', 'CLIENT_CompanyCity', $this->CLIENT_CompanyCity])
            ->andFilterWhere(['like', 'CLIENT_EmailAdd', $this->CLIENT_EmailAdd]);

        return $dataProvider;
    }
}
