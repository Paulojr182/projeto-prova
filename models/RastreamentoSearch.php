<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rastreamento;

/**
 * RastreamentoSearch represents the model behind the search form about `app\models\Rastreamento`.
 */
class RastreamentoSearch extends Rastreamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'data_ocorrencia'], 'safe'],
            [['placa', 'nome_funcionario', 'velocidade_maxima', 'velocidade_registrada_ocorrência', 'diferença_velocidade_permitida_registrada', 'latitude', 'longitude'], 'integer'],
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
        $query = Rastreamento::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'placa' => $this->placa,
            'nome_funcionario' => $this->nome_funcionario,
            'data_ocorrencia' => $this->data_ocorrencia,
            'velocidade_maxima' => $this->velocidade_maxima,
            'velocidade_registrada_ocorrência' => $this->velocidade_registrada_ocorrência,
            'diferença_velocidade_permitida_registrada' => $this->diferença_velocidade_permitida_registrada,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id]);

        return $dataProvider;
    }
}
