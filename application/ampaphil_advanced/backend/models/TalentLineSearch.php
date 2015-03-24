<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TalentLine;

/**
 * TalentLineSearch represents the model behind the search form about `app\models\TalentLine`.
 */
class TalentLineSearch extends TalentLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['talent_type', 'talent_specialization', 'applicant_id'], 'safe'],
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
        $query = TalentLine::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('applicant');
        $query->andFilterWhere([
            'id' => $this->id,
            'applicant_id' => $this->applicant_id,
        ]);

        $query->andFilterWhere(['like', 'talent_type', $this->talent_type])
            ->andFilterWhere(['like', 'talent_specialization', $this->talent_specialization])
            ->andFilterWhere(['like', 'applicant.app_lname', $this->applicant_id]);

        return $dataProvider;
    }
}
