<?php

/**
 * This is the model class for table "conf_ci".
 *
 * The followings are the available columns in table 'conf_ci':
 * @property integer $ID
 * @property integer $COSTOS_DEC
 * @property integer $EXISTENCIAS_DEC
 * @property integer $PESOS_DEC
 * @property string $COSTO_FISCAL
 * @property string $COSTO_COMPARATIVO
 * @property string $COSTO_INGR_DEFAULT
 * @property string $UNIDAD_PESO
 * @property string $UNIDAD_VOLUMEN
 * @property string $EXIST_EN_TOTALES
 * @property string $NOMBRE_CLASIF_1
 * @property string $NOMBRE_CLASIF_2
 * @property string $NOMBRE_CLASIF_3
 * @property string $NOMBRE_CLASIF_4
 * @property string $NOMBRE_CLASIF_5
 * @property string $NOMBRE_CLASIF_6
 * @property string $INTEGRACION_CONTA
 * @property string $USA_CODIGO_BARRAS
 * @property integer $LINEAS_MAX_TRANS
 * @property string $USA_UNIDADES_DIST
 * @property string $ASISTENCIA_AUTOMAT
 * @property string $USA_CODIGO_EAN13
 * @property string $USA_CODIGO_EAN8
 * @property string $USA_CODIGO_UCC12
 * @property string $USA_CODIGO_UCC8
 * @property string $EAN13_REGLA_LOCAL
 * @property string $EAN8_REGLA_LOCAL
 * @property string $UCC12_REGLA_LOCAL
 * @property string $PRIORIDAD_BUSQUEDA
 * @property string $CREADO_POR
 * @property string $CREADO_EL
 * @property string $ACTUALIZADO_POR
 * @property string $ACTUALIZADO_EL
 *
 * The followings are the available model relations:
 * @property MetodoValuacionInv $cOSTOFISCAL
 * @property MetodoValuacionInv $cOSTOCOMPARATIVO
 */
class ConfCi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConfCi the static model class
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
		return 'conf_ci';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COSTOS_DEC, EXISTENCIAS_DEC, PESOS_DEC, COSTO_FISCAL, COSTO_COMPARATIVO, COSTO_INGR_DEFAULT, UNIDAD_PESO, UNIDAD_VOLUMEN, EXIST_EN_TOTALES, NOMBRE_CLASIF_1, NOMBRE_CLASIF_2, NOMBRE_CLASIF_3, INTEGRACION_CONTA, USA_CODIGO_BARRAS, LINEAS_MAX_TRANS, USA_UNIDADES_DIST, PRIORIDAD_BUSQUEDA', 'required'),
			array('ID, COSTOS_DEC, EXISTENCIAS_DEC, PESOS_DEC, LINEAS_MAX_TRANS', 'numerical', 'integerOnly'=>true),
			array('COSTO_FISCAL, COSTO_COMPARATIVO,', 'length', 'max'=>11),
			array('COSTO_INGR_DEFAULT, INTEGRACION_CONTA, USA_CODIGO_BARRAS, USA_UNIDADES_DIST, ASISTENCIA_AUTOMAT, USA_CODIGO_EAN13, USA_CODIGO_EAN8, USA_CODIGO_UCC12, USA_CODIGO_UCC8, PRIORIDAD_BUSQUEDA', 'length', 'max'=>1),
			array('UNIDAD_PESO, UNIDAD_VOLUMEN, UCC12_REGLA_LOCAL', 'length', 'max'=>6),
			array('NOMBRE_CLASIF_1, NOMBRE_CLASIF_2, NOMBRE_CLASIF_3, NOMBRE_CLASIF_4, NOMBRE_CLASIF_5, NOMBRE_CLASIF_6', 'length', 'max'=>15),
			array('EAN13_REGLA_LOCAL', 'length', 'max'=>18),
			array('EAN8_REGLA_LOCAL', 'length', 'max'=>3),
			array('CREADO_POR, ACTUALIZADO_POR', 'length', 'max'=>20),
			
			array('EAN13_REGLA_LOCAL', 'miValidacion1'),
			array('EAN8_REGLA_LOCAL', 'miValidacion2'),
			array('UCC12_REGLA_LOCAL', 'miValidacion3'),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, COSTOS_DEC, EXISTENCIAS_DEC, PESOS_DEC, COSTO_FISCAL, COSTO_COMPARATIVO, COSTO_INGR_DEFAULT, UNIDAD_PESO, UNIDAD_VOLUMEN, EXIST_EN_TOTALES, NOMBRE_CLASIF_1, NOMBRE_CLASIF_2, NOMBRE_CLASIF_3, NOMBRE_CLASIF_4, NOMBRE_CLASIF_5, NOMBRE_CLASIF_6, INTEGRACION_CONTA, USA_CODIGO_BARRAS, LINEAS_MAX_TRANS, USA_UNIDADES_DIST, ASISTENCIA_AUTOMAT, USA_CODIGO_EAN13, USA_CODIGO_EAN8, USA_CODIGO_UCC12, USA_CODIGO_UCC8, EAN13_REGLA_LOCAL, EAN8_REGLA_LOCAL, UCC12_REGLA_LOCAL, PRIORIDAD_BUSQUEDA, CREADO_POR, CREADO_EL, ACTUALIZADO_POR, ACTUALIZADO_EL', 'safe', 'on'=>'search'),
		);
	}
	public function miValidacion1($attribute,$params){
		
		if ($this->ASISTENCIA_AUTOMAT == true && $this->USA_CODIGO_EAN13 == true)
			if($this->EAN13_REGLA_LOCAL == null)
				$this->addError('EAN13_REGLA_LOCAL','Cod Pais no puede ser nulo');
		
	}
	public function miValidacion2($attribute,$params){
	
		if ($this->ASISTENCIA_AUTOMAT == true && $this->USA_CODIGO_EAN8 == true)
			if ( $this->EAN8_REGLA_LOCAL == null)
				$this->addError('EAN8_REGLA_LOCAL','Cod Pais no puede ser nulo');
		
	}
	public function miValidacion3($attribute,$params){
	
		if ($this->ASISTENCIA_AUTOMAT == true && $this->USA_CODIGO_UCC12 == true)
			if ( $this->UCC12_REGLA_LOCAL == null)
				$this->addError('UCC12_REGLA_LOCAL','Cod Sistema no puede ser nulo');
		
	}
	
	public function behaviors()
	{
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'CREADO_EL',
				'updateAttribute' => 'ACTUALIZADO_EL',
				'setUpdateOnCreate' => true,
			),
			'BlameableBehavior' => array(
				'class' => 'application.components.BlameableBehavior',
				'createdByColumn' => 'CREADO_POR',
				'updatedByColumn' => 'ACTUALIZADO_POR',
			),
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
			'cOSTOFISCAL' => array(self::BELONGS_TO, 'MetodoValuacionInv', 'COSTO_FISCAL'),
			'cOSTOCOMPARATIVO' => array(self::BELONGS_TO, 'MetodoValuacionInv', 'COSTO_COMPARATIVO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'COSTOS_DEC' => 'Costos:',
			'EXISTENCIAS_DEC' => 'Existencias:',
			'PESOS_DEC' => 'Pesos:',
			'COSTO_FISCAL' => 'Fiscal:',
			'COSTO_COMPARATIVO' => 'Comparativo:',
			'COSTO_INGR_DEFAULT' => 'Costo Ingresos Especiales',
			'UNIDAD_PESO' => 'Unidad Peso:',
			'UNIDAD_VOLUMEN' => 'Unidad Volumen:',
			'EXIST_EN_TOTALES' => 'Existencias en Totales',
			'NOMBRE_CLASIF_1' => '1:',
			'NOMBRE_CLASIF_2' => '2:',
			'NOMBRE_CLASIF_3' => '3:',
			'NOMBRE_CLASIF_4' => '4:',
			'NOMBRE_CLASIF_5' => '5:',
			'NOMBRE_CLASIF_6' => '6:',
			'INTEGRACION_CONTA' => utf8_encode('Integraci�n Contable'),
			'USA_CODIGO_BARRAS' => utf8_encode('Usa C�digo de Barras'),
			'LINEAS_MAX_TRANS' => utf8_encode('N�mero M�x L�neas:'),
			'USA_UNIDADES_DIST' => utf8_encode('Unidades de Distribuci�n'),
			'ASISTENCIA_AUTOMAT' => utf8_encode('Asistencia Autom�tica'),
			'USA_CODIGO_EAN13' => 'EAN13',
			'USA_CODIGO_EAN8' => 'EAN8',
			'USA_CODIGO_UCC12' => 'UCC12',
			'USA_CODIGO_UCC8' => 'UCC8',
			'EAN13_REGLA_LOCAL' => '',
			'EAN8_REGLA_LOCAL' => '',
			'UCC12_REGLA_LOCAL' => '',
			'PRIORIDAD_BUSQUEDA' => 'Prioridad:',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('COSTOS_DEC',$this->COSTOS_DEC);
		$criteria->compare('EXISTENCIAS_DEC',$this->EXISTENCIAS_DEC);
		$criteria->compare('PESOS_DEC',$this->PESOS_DEC);
		$criteria->compare('COSTO_FISCAL',$this->COSTO_FISCAL,true);
		$criteria->compare('COSTO_COMPARATIVO',$this->COSTO_COMPARATIVO,true);
		$criteria->compare('COSTO_INGR_DEFAULT',$this->COSTO_INGR_DEFAULT,true);
		$criteria->compare('UNIDAD_PESO',$this->UNIDAD_PESO,true);
		$criteria->compare('UNIDAD_VOLUMEN',$this->UNIDAD_VOLUMEN,true);
		$criteria->compare('EXIST_EN_TOTALES',$this->EXIST_EN_TOTALES,true);
		$criteria->compare('NOMBRE_CLASIF_1',$this->NOMBRE_CLASIF_1,true);
		$criteria->compare('NOMBRE_CLASIF_2',$this->NOMBRE_CLASIF_2,true);
		$criteria->compare('NOMBRE_CLASIF_3',$this->NOMBRE_CLASIF_3,true);
		$criteria->compare('NOMBRE_CLASIF_4',$this->NOMBRE_CLASIF_4,true);
		$criteria->compare('NOMBRE_CLASIF_5',$this->NOMBRE_CLASIF_5,true);
		$criteria->compare('NOMBRE_CLASIF_6',$this->NOMBRE_CLASIF_6,true);
		$criteria->compare('INTEGRACION_CONTA',$this->INTEGRACION_CONTA,true);
		$criteria->compare('USA_CODIGO_BARRAS',$this->USA_CODIGO_BARRAS,true);
		$criteria->compare('LINEAS_MAX_TRANS',$this->LINEAS_MAX_TRANS);
		$criteria->compare('USA_UNIDADES_DIST',$this->USA_UNIDADES_DIST,true);
		$criteria->compare('ASISTENCIA_AUTOMAT',$this->ASISTENCIA_AUTOMAT,true);
		$criteria->compare('USA_CODIGO_EAN13',$this->USA_CODIGO_EAN13,true);
		$criteria->compare('USA_CODIGO_EAN8',$this->USA_CODIGO_EAN8,true);
		$criteria->compare('USA_CODIGO_UCC12',$this->USA_CODIGO_UCC12,true);
		$criteria->compare('USA_CODIGO_UCC8',$this->USA_CODIGO_UCC8,true);
		$criteria->compare('EAN13_REGLA_LOCAL',$this->EAN13_REGLA_LOCAL,true);
		$criteria->compare('EAN8_REGLA_LOCAL',$this->EAN8_REGLA_LOCAL,true);
		$criteria->compare('UCC12_REGLA_LOCAL',$this->UCC12_REGLA_LOCAL,true);
		$criteria->compare('PRIORIDAD_BUSQUEDA',$this->PRIORIDAD_BUSQUEDA,true);
		$criteria->compare('CREADO_POR',$this->CREADO_POR,true);
		$criteria->compare('CREADO_EL',$this->CREADO_EL,true);
		$criteria->compare('ACTUALIZADO_POR',$this->ACTUALIZADO_POR,true);
		$criteria->compare('ACTUALIZADO_EL',$this->ACTUALIZADO_EL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}