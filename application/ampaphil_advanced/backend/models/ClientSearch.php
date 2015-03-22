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
            [['client_lname', 'client_fname', 'client_mname', 'client_company', 'client_companyblkno', 'client_companybrgy', 'client_contactno', 'client_companycity', 'client_emailadd'], 'safe'],
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

        $query->andFilterWhere(['like', 'client_lname', $this->client_lname])
            ->andFilterWhere(['like', 'client_fname', $this->client_fname])
            ->andFilterWhere(['like', 'client_mname', $this->client_mname])
            ->andFilterWhere(['like', 'client_company', $this->client_company])
            ->andFilterWhere(['like', 'client_companyblkno', $this->client_companyblkno])
            ->andFilterWhere(['like', 'client_companybrgy', $this->client_companybrgy])
            ->andFilterWhere(['like', 'client_contactno', $this->client_contactno])
            ->andFilterWhere(['like', 'client_companycity', $this->client_companycity])
            ->andFilterWhere(['like', 'client_emailadd', $this->client_emailadd]);

        return $dataProvider;
    }
}
