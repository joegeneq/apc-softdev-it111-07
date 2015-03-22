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
            [['id', 'employee_id'], 'integer'],
            [['scr_date', 'scr_time', 'app_status'], 'safe'],
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

        $query->andFilterWhere([
            'id' => $this->id,
            'scr_date' => $this->scr_date,
            'scr_time' => $this->scr_time,
            'employee_id' => $this->employee_id,
        ]);

        $query->andFilterWhere(['like', 'app_status', $this->app_status]);

        return $dataProvider;
    }
}
