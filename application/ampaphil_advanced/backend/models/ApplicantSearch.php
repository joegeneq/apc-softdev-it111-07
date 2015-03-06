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
            [['id', 'APP_ZipCode', 'SCREENING_SCHED_id'], 'integer'],
            [['APP_LName', 'APP_FName', 'APP_MName', 'APP_Gender', 'APP_BDate', 'APP_BlkOrAreaNo', 'APP_Street', 'APP_Brgy', 'APP_City', 'APP_ContactNo', 'APP_EmailAdd', 'APP_RegDate', 'APP_RegTime', 'APP_Talent'], 'safe'],
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
            'APP_BDate' => $this->APP_BDate,
            'APP_ZipCode' => $this->APP_ZipCode,
            'APP_RegDate' => $this->APP_RegDate,
            'APP_RegTime' => $this->APP_RegTime,
            'SCREENING_SCHED_id' => $this->SCREENING_SCHED_id,
        ]);

        $query->andFilterWhere(['like', 'APP_LName', $this->APP_LName])
            ->andFilterWhere(['like', 'APP_FName', $this->APP_FName])
            ->andFilterWhere(['like', 'APP_MName', $this->APP_MName])
            ->andFilterWhere(['like', 'APP_Gender', $this->APP_Gender])
            ->andFilterWhere(['like', 'APP_BlkOrAreaNo', $this->APP_BlkOrAreaNo])
            ->andFilterWhere(['like', 'APP_Street', $this->APP_Street])
            ->andFilterWhere(['like', 'APP_Brgy', $this->APP_Brgy])
            ->andFilterWhere(['like', 'APP_City', $this->APP_City])
            ->andFilterWhere(['like', 'APP_ContactNo', $this->APP_ContactNo])
            ->andFilterWhere(['like', 'APP_EmailAdd', $this->APP_EmailAdd])
            ->andFilterWhere(['like', 'APP_Talent', $this->APP_Talent]);

        return $dataProvider;
    }
}
