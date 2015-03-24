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
            [['id', 'screening_sched_id'], 'integer'],
            [['talent_managedstartdate', 'talent_managedenddate', 'manager_id', 'applicant_id'], 'safe'],
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

        $query->joinWith('manager');
        $query->joinWith('applicant');
        $query->andFilterWhere([
            'id' => $this->id,
            //'manager_id' => $this->manager_id,
            'talent_managedstartdate' => $this->talent_managedstartdate,
            'talent_managedenddate' => $this->talent_managedenddate,
            'screening_sched_id' => $this->screening_sched_id,
            //'applicant_id' => $this->applicant_id,
        ]);

        $query->andFilterWhere(['like','manager.mgr_lname', $this->manager_id])
              ->andFilterWhere(['like','applicant.app_lname', $this->applicant_id]);

        return $dataProvider;
    }
}
