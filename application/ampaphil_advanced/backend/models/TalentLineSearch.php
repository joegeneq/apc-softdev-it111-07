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
            [['id','APPLICANT_id'], 'integer'],
            [['TALENT_Type','TALENT_Specialization'], 'safe'],
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


        $query->andFilterWhere([
            'id' => $this->id,
            'APPLICANT_id' => $this->APPLICANT_id,
        ]);

        $query->andFilterWhere(['like','TALENT_Type', $this->TALENT_Type])
        ->andFilterWhere(['like', 'TALENT_Specialization', $this->TALENT_Specialization]);

        return $dataProvider;
    }
}
