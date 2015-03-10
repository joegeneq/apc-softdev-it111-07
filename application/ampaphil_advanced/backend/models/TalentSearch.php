<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Talent;

/**
 * TalentSearch represents the model behind the search form about `app\models\Talent`.
 */
class TalentSearch extends Talent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'SCREENING_SCHED_id'], 'integer'],
            [['TALENT_ManagedStartDate', 'TALENT_ManagedEndDate', 'MANAGER_id', 'APPLICANT_id'], 'safe'],
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
        $query = Talent::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('mANAGER');
        $query->joinWith('aPPLICANT');
        $query->andFilterWhere([
            'id' => $this->id,
            //'MANAGER_id' => $this->MANAGER_id,
            'TALENT_ManagedStartDate' => $this->TALENT_ManagedStartDate,
            'TALENT_ManagedEndDate' => $this->TALENT_ManagedEndDate,
            'SCREENING_SCHED_id' => $this->SCREENING_SCHED_id,
            //'APPLICANT_id' => $this->APPLICANT_id,
        ]);

        $query->andFilterWhere(['like','mANAGER.MGR_LName', $this->MANAGER_id])
              ->andFilterWhere(['like','aPPLICANT.APP_LName', $this->APPLICANT_id]);

        return $dataProvider;
    }
}
