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
<<<<<<< HEAD
            [['id'], 'integer'],
            [['TALENT_Type', 'TALENT_Specialization', 'APPLICANT_id'], 'safe'],
=======
            [['id','APPLICANT_id'], 'integer'],
            [['TALENT_Type','TALENT_Specialization'], 'safe'],
>>>>>>> 52cf3f49c33f37da65b7d58af28d7ec4d4e338e6
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

<<<<<<< HEAD
        $query->joinWith('aPPLICANT');
=======

>>>>>>> 52cf3f49c33f37da65b7d58af28d7ec4d4e338e6
        $query->andFilterWhere([
            'id' => $this->id
        ]);

<<<<<<< HEAD
        $query->andFilterWhere(['like', 'TALENT_Type', $this->TALENT_Type])
            ->andFilterWhere(['like', 'TALENT_Specialization', $this->TALENT_Specialization])
            ->andFilterWhere(['like', 'aPPLICANT.APP_LName', $this->APPLICANT_id]);
=======
        $query->andFilterWhere(['like','TALENT_Type', $this->TALENT_Type])
        ->andFilterWhere(['like', 'TALENT_Specialization', $this->TALENT_Specialization]);
>>>>>>> 52cf3f49c33f37da65b7d58af28d7ec4d4e338e6

        return $dataProvider;
    }
}
