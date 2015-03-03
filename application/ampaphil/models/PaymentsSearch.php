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
            [['TRANS_Date', 'TRANS_Time'], 'safe'],
            [['TRANS_Rate', 'REG_Percentage', 'AGENCY_Percentage'], 'number'],
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

        $query->andFilterWhere([
            'id' => $this->id,
            'TRANS_Date' => $this->TRANS_Date,
            'TRANS_Time' => $this->TRANS_Time,
            'TRANS_Rate' => $this->TRANS_Rate,
            'REG_Percentage' => $this->REG_Percentage,
            'AGENCY_Percentage' => $this->AGENCY_Percentage,
        ]);

        return $dataProvider;
    }
}
