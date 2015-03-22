<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Applicant;

/**
 * ApplicantSearch represents the model behind the search form about `app\models\Applicant`.
 */
class ApplicantSearch extends Applicant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'app_zipcode', 'screening_sched_id'], 'integer'],
            [['app_lname', 'app_fname', 'app_mname', 'app_gender', 'app_bdate', 'app_blkno', 'app_street', 'app_brgy', 'app_city', 'app_contactno', 'app_emailadd', 'app_regdate', 'app_regtime', 'app_talent'], 'safe'],
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
        $query = Applicant::find();

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
            'app_bdate' => $this->app_bdate,
            'app_zipcode' => $this->app_zipcode,
            'app_regdate' => $this->app_regdate,
            'app_regtime' => $this->app_regtime,
            'screening_sched_id' => $this->screening_sched_id,
        ]);

        $query->andFilterWhere(['like', 'app_lname', $this->app_lname])
            ->andFilterWhere(['like', 'app_fname', $this->app_fname])
            ->andFilterWhere(['like', 'app_mname', $this->app_mname])
            ->andFilterWhere(['like', 'app_gender', $this->app_gender])
            ->andFilterWhere(['like', 'app_blkno', $this->app_blkno])
            ->andFilterWhere(['like', 'app_street', $this->app_street])
            ->andFilterWhere(['like', 'app_brgy', $this->app_brgy])
            ->andFilterWhere(['like', 'app_city', $this->app_city])
            ->andFilterWhere(['like', 'app_contactno', $this->app_contactno])
            ->andFilterWhere(['like', 'app_emailadd', $this->app_emailadd])
            ->andFilterWhere(['like', 'app_talent', $this->app_talent]);

        return $dataProvider;
    }
}
