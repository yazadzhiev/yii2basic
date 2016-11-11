<?php
/**
 * Created by PhpStorm.
 * User: Sasho
 * Date: 11/11/2016
 * Time: 9:48 AM
 */

namespace app\models;

use yii;
use yii\base\Model;

class EntryForm extends Model{
  public $name;
  public $email;

  public function rules(){
    return [
      [['name', 'email'], 'required'],
      ['email', 'email'],
    ];
  }
}

?>