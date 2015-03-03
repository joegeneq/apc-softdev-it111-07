<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EventDetails;

/**
 * EventDetailsSearch represents the model behind the search form about `app\models\EventDetails`.
 */
class EventDetailsSearch extends EventDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'TRANSACTION_id'], 'integer'],
            [['EVENT_Name', 'EVENT_Location', 'EVENT_Type', 'EVENT_DateFrom', 'EVENT_DateTo', 'EVENT_TimeFrom', 'EVENT_TimeTo'], 'safe'],
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
        $query = EventDetails::find();

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
            'EVENT_DateFrom' => $this->EVENT_DateFrom,
            'EVENT_DateTo' => $this->EVENT_DateTo,
            'EVENT_TimeFrom' => $this->EVENT_TimeFrom,
            'EVENT_TimeTo' => $this->EVENT_TimeTo,
            'TRANSACTION_id' => $this->TRANSACTION_id,
        ]);

        $query->andFilterWhere(['like', 'EVENT_Name', $this->EVENT_Name])
            ->andFilterWhere(['like', 'EVENT_Location', $this->EVENT_Location])
            ->andFilterWhere(['like', 'EVENT_Type', $this->EVENT_Type]);

        return $dataProvider;
    }
}
