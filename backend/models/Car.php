<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    namespace backend\models;
    
    class Car extends \common\models\Car{
        
        public function getCreator(){
               return $this->hasOne(Admin::className(),['id'=>'created_by']);
        }
        
        public function getUpdator(){
               return $this->hasOne(Admin::className(),['id'=>'updated_by']);
        }
    }
    
    