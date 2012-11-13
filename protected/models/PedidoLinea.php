<?php

/**
 * This is the model class for table "pedido_linea".
 *
 * The followings are the available columns in table 'pedido_linea':
 * @property integer $ID
 * @property string $ARTICULO
 * @property string $PEDIDO
 * @property integer $LINEA
 * @property integer $UNIDAD
 * @property string $CANTIDAD
 * @property string $PRECIO_UNITARIO
 * @property string $TIPO_DESCUENTO
 * @property string $PORC_DESCUENTO
 * @property string $MONTO_DESCUENTO
 * @property string $COMENTARIO
 * @property string $ESTADO
 * @property string $ACTIVO
 * @property string $CREADO_POR
 * @property string $CREADO_EL
 * @property string $ACTUALIZADO_POR
 * @property string $ACTUALIZADO_EL
 *
 * The followings are the available model relations:
 * @property Articulo $aRTICULO
 * @property Pedido $pEDIDO
 * @property UnidadMedida $uNIDAD
 */
class PedidoLinea extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PedidoLinea the static model class
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
		return 'pedido_linea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, ARTICULO, PEDIDO, LINEA, UNIDAD, CANTIDAD, PRECIO_UNITARIO, TIPO_DESCUENTO, PORC_DESCUENTO, MONTO_DESCUENTO, ESTADO, ACTIVO, CREADO_POR, CREADO_EL, ACTUALIZADO_POR, ACTUALIZADO_EL', 'required'),
			array('ID, LINEA, UNIDAD', 'numerical', 'integerOnly'=>true),
			array('ARTICULO, CREADO_POR, ACTUALIZADO_POR', 'length', 'max'=>20),
			array('PEDIDO', 'length', 'max'=>50),
			array('CANTIDAD, PRECIO_UNITARIO, PORC_DESCUENTO, MONTO_DESCUENTO', 'length', 'max'=>28),
			array('TIPO_DESCUENTO, ESTADO, ACTIVO', 'length', 'max'=>1),
			array('COMENTARIO', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ARTICULO, PEDIDO, LINEA, UNIDAD, CANTIDAD, PRECIO_UNITARIO, TIPO_DESCUENTO, PORC_DESCUENTO, MONTO_DESCUENTO, COMENTARIO, ESTADO, ACTIVO, CREADO_POR, CREADO_EL, ACTUALIZADO_POR, ACTUALIZADO_EL', 'safe', 'on'=>'search'),
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
			'aRTICULO' => array(self::BELONGS_TO, 'Articulo', 'ARTICULO'),
			'pEDIDO' => array(self::BELONGS_TO, 'Pedido', 'PEDIDO'),
			'uNIDAD' => array(self::BELONGS_TO, 'UnidadMedida', 'UNIDAD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ARTICULO' => 'Articulo',
			'PEDIDO' => 'Pedido',
			'LINEA' => 'Linea',
			'UNIDAD' => 'Unidad',
			'CANTIDAD' => 'Cantidad',
			'PRECIO_UNITARIO' => 'Precio Unitario',
			'TIPO_DESCUENTO' => 'Tipo Descuento',
			'PORC_DESCUENTO' => 'Porc Descuento',
			'MONTO_DESCUENTO' => 'Monto Descuento',
			'COMENTARIO' => 'Comentario',
			'ESTADO' => 'Estado',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('ARTICULO',$this->ARTICULO,true);
		$criteria->compare('PEDIDO',$this->PEDIDO,true);
		$criteria->compare('LINEA',$this->LINEA);
		$criteria->compare('UNIDAD',$this->UNIDAD);
		$criteria->compare('CANTIDAD',$this->CANTIDAD,true);
		$criteria->compare('PRECIO_UNITARIO',$this->PRECIO_UNITARIO,true);
		$criteria->compare('TIPO_DESCUENTO',$this->TIPO_DESCUENTO,true);
		$criteria->compare('PORC_DESCUENTO',$this->PORC_DESCUENTO,true);
		$criteria->compare('MONTO_DESCUENTO',$this->MONTO_DESCUENTO,true);
		$criteria->compare('COMENTARIO',$this->COMENTARIO,true);
		$criteria->compare('ESTADO',$this->ESTADO,true);
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