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
            [['id', 'EMP_ZipCode'], 'integer'],
            [['EMP_LName', 'EMP_FName', 'EMP_MName', 'EMP_Gender', 'EMP_BDate', 'EMP_BlkOrAreaNo', 'EMP_Street', 'EMP_Brgy', 'EMP_City', 'EMP_ContactNo', 'EMP_EmailAdd', 'EMP_Position'], 'safe'],
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
            'EMP_BDate' => $this->EMP_BDate,
            'EMP_ZipCode' => $this->EMP_ZipCode,
        ]);

        $query->andFilterWhere(['like', 'EMP_LName', $this->EMP_LName])
            ->andFilterWhere(['like', 'EMP_FName', $this->EMP_FName])
            ->andFilterWhere(['like', 'EMP_MName', $this->EMP_MName])
            ->andFilterWhere(['like', 'EMP_Gender', $this->EMP_Gender])
            ->andFilterWhere(['like', 'EMP_BlkOrAreaNo', $this->EMP_BlkOrAreaNo])
            ->andFilterWhere(['like', 'EMP_Street', $this->EMP_Street])
            ->andFilterWhere(['like', 'EMP_Brgy', $this->EMP_Brgy])
            ->andFilterWhere(['like', 'EMP_City', $this->EMP_City])
            ->andFilterWhere(['like', 'EMP_ContactNo', $this->EMP_ContactNo])
            ->andFilterWhere(['like', 'EMP_EmailAdd', $this->EMP_EmailAdd])
            ->andFilterWhere(['like', 'EMP_Position', $this->EMP_Position]);

        return $dataProvider;
    }
}
