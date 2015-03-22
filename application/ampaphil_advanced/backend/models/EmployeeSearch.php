<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `app\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emp_zipcode'], 'integer'],
            [['emp_lname', 'emp_fname', 'emp_mname', 'emp_gender', 'emp_bdate', 'emp_blkno', 'emp_street', 'emp_brgy', 'emp_city', 'emp_contactno', 'emp_emailadd', 'emp_position'], 'safe'],
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
        $query = Employee::find();

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
            'emp_bdate' => $this->emp_bdate,
            'emp_zipcode' => $this->emp_zipcode,
        ]);

        $query->andFilterWhere(['like', 'emp_lname', $this->emp_lname])
            ->andFilterWhere(['like', 'emp_fname', $this->emp_fname])
            ->andFilterWhere(['like', 'emp_mname', $this->emp_mname])
            ->andFilterWhere(['like', 'emp_gender', $this->emp_gender])
            ->andFilterWhere(['like', 'emp_blkno', $this->emp_blkno])
            ->andFilterWhere(['like', 'emp_street', $this->emp_street])
            ->andFilterWhere(['like', 'emp_brgy', $this->emp_brgy])
            ->andFilterWhere(['like', 'emp_city', $this->emp_city])
            ->andFilterWhere(['like', 'emp_contactno', $this->emp_contactno])
            ->andFilterWhere(['like', 'emp_emailadd', $this->emp_emailadd])
            ->andFilterWhere(['like', 'emp_position', $this->emp_position]);

        return $dataProvider;
    }
}
