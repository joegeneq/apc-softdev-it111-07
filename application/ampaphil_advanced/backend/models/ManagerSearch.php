<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manager;

/**
 * ManagerSearch represents the model behind the search form about `app\models\Manager`.
 */
class ManagerSearch extends Manager
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mgr_zipcode'], 'integer'],
            [['mgr_lname', 'mgr_fname', 'mgr_mname', 'mgr_gender', 'mgr_bdate', 'mgr_blkno', 'mgr_street', 'mgr_brgy', 'mgr_city', 'mgr_contactno', 'mgr_emailadd', 'mgr_expertise'], 'safe'],
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
        $query = Manager::find();

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
            'mgr_bdate' => $this->mgr_bdate,
            'mgr_zipcode' => $this->mgr_zipcode,
        ]);

        $query->andFilterWhere(['like', 'mgr_lname', $this->mgr_lname])
            ->andFilterWhere(['like', 'mgr_fname', $this->mgr_fname])
            ->andFilterWhere(['like', 'mgr_mname', $this->mgr_mname])
            ->andFilterWhere(['like', 'mgr_gender', $this->mgr_gender])
            ->andFilterWhere(['like', 'mgr_blkno', $this->mgr_blkno])
            ->andFilterWhere(['like', 'mgr_street', $this->mgr_street])
            ->andFilterWhere(['like', 'mgr_brgy', $this->mgr_brgy])
            ->andFilterWhere(['like', 'mgr_city', $this->mgr_city])
            ->andFilterWhere(['like', 'mgr_contactno', $this->mgr_contactno])
            ->andFilterWhere(['like', 'mgr_emailadd', $this->mgr_emailadd])
            ->andFilterWhere(['like', 'mgr_expertise', $this->mgr_expertise]);

        return $dataProvider;
    }
}
