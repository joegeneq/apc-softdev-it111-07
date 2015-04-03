<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Events;
use app\models\Talent;
use app\models\Manager;
use app\models\EventDetails;
use app\models\Client;

/**
 * EventsSearch represents the model behind the search form about `app\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'talent_id', 'manager_id', 'event_details_id', 'client_id'], 'safe'],
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
        $query = Events::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('talent');
        $query->joinWith('client');
        $query->joinWith('eventDetails');
        $query->andFilterWhere([
            'id' => $this->id,
            'talent_id' => $this->talent_id,
            'manager_id' => $this->manager_id,
            'event_details_id' => $this->event_details_id,
            'client_id' => $this->client_id,
        ]);

        $query->andFilterWhere(['like','eventDetails.event_name', $this->event_details_id])
              ->andFilterWhere(['like','client.client_lname', $this->client_id]);

        return $dataProvider;
    }
}
