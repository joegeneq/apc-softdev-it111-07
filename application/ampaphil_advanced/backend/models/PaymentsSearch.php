<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payments;

/**
 * PaymentsSearch represents the model behind the search form about `app\models\Payments`.
 */
class PaymentsSearch extends Payments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['PAYMENTS_Date', 'PAYMENTS_Time', 'EVENT_DETAILS_id'], 'safe'],
            [['Rate', 'TALENT_Share', 'AGENCY_Share'], 'number'],
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
        $query = Payments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('eVENTDETAILS');
        $query->andFilterWhere([
            'id' => $this->id,
            'PAYMENTS_Date' => $this->PAYMENTS_Date,
            'PAYMENTS_Time' => $this->PAYMENTS_Time,
            'Rate' => $this->Rate,
            'TALENT_Share' => $this->TALENT_Share,
            'AGENCY_Share' => $this->AGENCY_Share,
            //'EVENT_DETAILS_id' => $this->EVENT_DETAILS_id,
        ]);

        $query->andFilterWhere(['like','EVENT_DETAILS.EVENT_Name', $this->EVENT_DETAILS_id]);

        return $dataProvider;
    }
}
