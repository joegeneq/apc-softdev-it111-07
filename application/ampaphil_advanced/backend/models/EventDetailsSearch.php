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
            [['id', 'transaction_id'], 'integer'],
            [['event_name', 'event_location', 'event_type', 'event_datefrom', 'event_dateto', 'event_timefrom', 'event_timeto'], 'safe'],
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
            'event_datefrom' => $this->event_datefrom,
            'event_dateto' => $this->event_dateto,
            'event_timefrom' => $this->event_timefrom,
            'event_timeto' => $this->event_timeto,
            'transaction_id' => $this->transaction_id,
        ]);

        $query->andFilterWhere(['like', 'event_name', $this->event_name])
            ->andFilterWhere(['like', 'event_location', $this->event_location])
            ->andFilterWhere(['like', 'event_type', $this->event_type]);

        return $dataProvider;
    }
}
