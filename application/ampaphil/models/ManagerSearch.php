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
            [['id', 'MGR_ZipCode'], 'integer'],
            [['MGR_LName', 'MGR_FName', 'MGR_MName', 'MGR_Gender', 'MGR_BDate', 'MGR_BlkOrAreaNo', 'MGR_Street', 'MGR_Brgy', 'MGR_City', 'MGR_ContactNo', 'MGR_EmailAdd', 'MGR_Expertise'], 'safe'],
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
            'MGR_BDate' => $this->MGR_BDate,
            'MGR_ZipCode' => $this->MGR_ZipCode,
        ]);

        $query->andFilterWhere(['like', 'MGR_LName', $this->MGR_LName])
            ->andFilterWhere(['like', 'MGR_FName', $this->MGR_FName])
            ->andFilterWhere(['like', 'MGR_MName', $this->MGR_MName])
            ->andFilterWhere(['like', 'MGR_Gender', $this->MGR_Gender])
            ->andFilterWhere(['like', 'MGR_BlkOrAreaNo', $this->MGR_BlkOrAreaNo])
            ->andFilterWhere(['like', 'MGR_Street', $this->MGR_Street])
            ->andFilterWhere(['like', 'MGR_Brgy', $this->MGR_Brgy])
            ->andFilterWhere(['like', 'MGR_City', $this->MGR_City])
            ->andFilterWhere(['like', 'MGR_ContactNo', $this->MGR_ContactNo])
            ->andFilterWhere(['like', 'MGR_EmailAdd', $this->MGR_EmailAdd])
            ->andFilterWhere(['like', 'MGR_Expertise', $this->MGR_Expertise]);

        return $dataProvider;
    }
}
