<?php

/**
 * This is the model class for table "katale.vendor_comodity".
 *
 * The followings are the available columns in table 'katale.vendor_comodity':
 * @property integer $id
 * @property integer $comodity_id
 * @property double $price
 * @property integer $quantity
 * @property string $last_updated
 * @property integer $vendor_id
 *
 * The followings are the available model relations:
 * @property Comodity $comodity
 * @property Vendor $vendor
 */
class VendorComodity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'katale.vendor_comodity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comodity_id, vendor_id', 'required'),
			array('comodity_id, quantity, vendor_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, comodity_id, price, quantity, last_updated, vendor_id', 'safe', 'on'=>'search'),
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
			'comodity' => array(self::BELONGS_TO, 'Comodity', 'comodity_id'),
			'vendor' => array(self::BELONGS_TO, 'Vendor', 'vendor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comodity_id' => 'Comodity',
			'price' => 'Price',
			'quantity' => 'Quantity',
			'last_updated' => 'Last Updated',
			'vendor_id' => 'Vendor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('comodity_id',$this->comodity_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('vendor_id',$this->vendor_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VendorComodity the static model class
	 */

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave() {
        if ($this->isNewRecord)
            $this->last_updated = new CDbExpression('CURRENT_TIMESTAMP');
        else
            $this->last_updated = new CDbExpression('CURRENT_TIMESTAMP');

        return parent::beforeSave();
    }

}
