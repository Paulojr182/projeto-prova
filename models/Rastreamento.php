<?php

namespace app\models;

use Yii;

/**
 * Este é o model para a tabela "rastreamento".
 *
 * @property string $id
 * @property string $placa
 * @property string $nome_funcionario
 * @property string $data_ocorrencia
 * @property integer $velocidade_maxima
 * @property integer $velocidade_registrada_ocorrência
 * @property string $diferença_velocidade_permitida_registrada
 * @property string $latitude
 * @property string $longitude
 *
 * @author Unknown 14/07/2021
 */
class Rastreamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     * @author Unknown 14/07/2021
     */
    public static function tableName()
    {
        return 'rastreamento';
    }

    /**
     * @inheritdoc
     * @author Unknown 14/07/2021
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [[ 'velocidade_maxima', 'velocidade_registrada_ocorrência'], 'integer'],
            [['placa', 'nome_funcionario','latitude', 'longitude', 'diferença_velocidade_permitida_registrada'], 'string'],
            [['data_ocorrencia'], 'safe'],
            [['id'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     * @author Unknown 14/07/2021
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'placa' => 'Placa',
            'nome_funcionario' => 'Nome Funcionario',
            'data_ocorrencia' => 'Data Ocorrencia',
            'velocidade_maxima' => 'Velocidade Maxima',
            'velocidade_registrada_ocorrência' => 'Velocidade Registrada Ocorrência',
            'diferença_velocidade_permitida_registrada' => 'Diferença Velocidade Permitida Registrada',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     * @author Unknown 14/07/2021
    */
    public static function find()
    {
        return new RastreamentoQuery(get_called_class());
    }
}

/**
 * Classe para contenção de escopos da Rastreamento, utilizada nas operações find() da mesma
 * @return \yii\db\ActiveQuery
 * @author Unknown 14/07/2021
*/
class RastreamentoQuery extends \yii\db\ActiveQuery
{
    /**
     * Ordenação Alfabética
     * @return \yii\db\ActiveQuery
     * @author Unknown 14/07/2021
    */
    public function ordemAlfabetica($sort_type = SORT_ASC)
    {
        return $this->orderBy(['rastreamento.nome' => $sort_type]);
    }
}
