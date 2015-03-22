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
            [['id'], 'integer'],
            [['event_name', 'event_location', 'event_type', 'event_startdate', 'event_enddate', 'event_starttime', 'event_endtime', 'event_status'], 'safe'],
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
            'event_startdate' => $this->event_startdate,
            'event_enddate' => $this->event_enddate,
            'event_starttime' => $this->event_starttime,
            'event_endtime' => $this->event_endtime,
        ]);

        $query->andFilterWhere(['like', 'event_name', $this->event_name])
            ->andFilterWhere(['like', 'event_location', $this->event_location])
            ->andFilterWhere(['like', 'event_type', $this->event_type])
            ->andFilterWhere(['like', 'event_status', $this->event_status]);

        return $dataProvider;
    }
}
