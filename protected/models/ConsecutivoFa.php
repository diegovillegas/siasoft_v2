<?php

/**
 * This is the model class for table "consecutivo_fa".
 *
 * The followings are the available columns in table 'consecutivo_fa':
 * @property string $CODIGO_CONSECUTIVO
 * @property integer $FORMATO_IMPRESION
 * @property string $DESCRIPCION
 * @property string $TIPO
 * @property integer $LONGITUD
 * @property string $VALOR_CONSECUTIVO
 * @property string $MASCARA
 * @property string $USA_DESPACHOS
 * @property string $USA_ESQUEMA_CAJAS
 * @property string $VALOR_MAXIMO
 * @property integer $NUMERO_COPIAS
 * @property string $ORIGINAL
 * @property string $COPIA1
 * @property string $COPIA2
 * @property string $COPIA3
 * @property string $COPIA4
 * @property string $COPIA5
 * @property string $RESOLUCION
 * @property string $ACTIVO
 * @property string $CREADO_POR
 * @property string $CREADO_EL
 * @property string $ACTUALIZADO_POR
 * @property string $ACTUALIZADO_EL
 *
 * The followings are the available model relations:
 * @property FormatoImpresion $fORMATOIMPRESION
 */
class ConsecutivoFa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConsecutivoFa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consecutivo_fa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CODIGO_CONSECUTIVO, DESCRIPCION, TIPO, LONGITUD, VALOR_CONSECUTIVO, MASCARA, USA_DESPACHOS, USA_ESQUEMA_CAJAS, NUMERO_COPIAS, ACTIVO, CREADO_POR, CREADO_EL, ACTUALIZADO_POR, ACTUALIZADO_EL', 'required'),
			array('FORMATO_IMPRESION, LONGITUD, NUMERO_COPIAS', 'numerical', 'integerOnly'=>true),
			array('CODIGO_CONSECUTIVO', 'length', 'max'=>10),
			array('DESCRIPCION, VALOR_CONSECUTIVO, MASCARA, VALOR_MAXIMO', 'length', 'max'=>64),
			array('TIPO, USA_DESPACHOS, USA_ESQUEMA_CAJAS, ACTIVO', 'length', 'max'=>1),
			array('ORIGINAL, COPIA1, COPIA2, COPIA3, COPIA4, COPIA5', 'length', 'max'=>30),
			array('RESOLUCION, CREADO_POR, ACTUALIZADO_POR', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CODIGO_CONSECUTIVO, FORMATO_IMPRESION, DESCRIPCION, TIPO, LONGITUD, VALOR_CONSECUTIVO, MASCARA, USA_DESPACHOS, USA_ESQUEMA_CAJAS, VALOR_MAXIMO, NUMERO_COPIAS, ORIGINAL, COPIA1, COPIA2, COPIA3, COPIA4, COPIA5, RESOLUCION, ACTIVO, CREADO_POR, CREADO_EL, ACTUALIZADO_POR, ACTUALIZADO_EL', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fORMATOIMPRESION' => array(self::BELONGS_TO, 'FormatoImpresion', 'FORMATO_IMPRESION'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CODIGO_CONSECUTIVO' => 'Codigo Consecutivo',
			'FORMATO_IMPRESION' => 'Formato Impresion',
			'DESCRIPCION' => 'Descripcion',
			'TIPO' => 'Tipo',
			'LONGITUD' => 'Longitud',
			'VALOR_CONSECUTIVO' => 'Valor Consecutivo',
			'MASCARA' => 'Mascara',
			'USA_DESPACHOS' => 'Usa Despachos',
			'USA_ESQUEMA_CAJAS' => 'Usa Esquema Cajas',
			'VALOR_MAXIMO' => 'Valor Maximo',
			'NUMERO_COPIAS' => 'Numero Copias',
			'ORIGINAL' => 'Original',
			'COPIA1' => 'Copia1',
			'COPIA2' => 'Copia2',
			'COPIA3' => 'Copia3',
			'COPIA4' => 'Copia4',
			'COPIA5' => 'Copia5',
			'RESOLUCION' => 'Resolucion',
			'ACTIVO' => 'Activo',
			'CREADO_POR' => 'Creado Por',
			'CREADO_EL' => 'Creado El',
			'ACTUALIZADO_POR' => 'Actualizado Por',
			'ACTUALIZADO_EL' => 'Actualizado El',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CODIGO_CONSECUTIVO',$this->CODIGO_CONSECUTIVO,true);
		$criteria->compare('FORMATO_IMPRESION',$this->FORMATO_IMPRESION);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('TIPO',$this->TIPO,true);
		$criteria->compare('LONGITUD',$this->LONGITUD);
		$criteria->compare('VALOR_CONSECUTIVO',$this->VALOR_CONSECUTIVO,true);
		$criteria->compare('MASCARA',$this->MASCARA,true);
		$criteria->compare('USA_DESPACHOS',$this->USA_DESPACHOS,true);
		$criteria->compare('USA_ESQUEMA_CAJAS',$this->USA_ESQUEMA_CAJAS,true);
		$criteria->compare('VALOR_MAXIMO',$this->VALOR_MAXIMO,true);
		$criteria->compare('NUMERO_COPIAS',$this->NUMERO_COPIAS);
		$criteria->compare('ORIGINAL',$this->ORIGINAL,true);
		$criteria->compare('COPIA1',$this->COPIA1,true);
		$criteria->compare('COPIA2',$this->COPIA2,true);
		$criteria->compare('COPIA3',$this->COPIA3,true);
		$criteria->compare('COPIA4',$this->COPIA4,true);
		$criteria->compare('COPIA5',$this->COPIA5,true);
		$criteria->compare('RESOLUCION',$this->RESOLUCION,true);
		$criteria->compare('ACTIVO',$this->ACTIVO,true);
		$criteria->compare('CREADO_POR',$this->CREADO_POR,true);
		$criteria->compare('CREADO_EL',$this->CREADO_EL,true);
		$criteria->compare('ACTUALIZADO_POR',$this->ACTUALIZADO_POR,true);
		$criteria->compare('ACTUALIZADO_EL',$this->ACTUALIZADO_EL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}