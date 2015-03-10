<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScreeningSched;

/**
 * ScreeningSchedSearch represents the model behind the search form about `app\models\ScreeningSched`.
 */
class ScreeningSchedSearch extends ScreeningSched
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['SCR_Date', 'SCR_Time', 'APP_Status', 'EMPLOYEE_id'], 'safe'],
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
        $query = ScreeningSched::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('eMPLOYEE');
        $query->andFilterWhere([
            'id' => $this->id,
            'SCR_Date' => $this->SCR_Date,
            'SCR_Time' => $this->SCR_Time,
            //'EMPLOYEE_id' => $this->EMPLOYEE_id,
        ]);

        $query->andFilterWhere(['like', 'APP_Status', $this->APP_Status])
              ->andFilterWhere(['like', 'eMPLOYEE.EMP_LName', $this->EMPLOYEE_id]);

        return $dataProvider;
    }
}
