<?php
   /*
   *Base controller
   *Loads the models and views
   */

   class Controller {
   
   public function model($model){
      require_once BASEPATH . '/system/models/' .$model. '.php';
      return new model; 

   }
   
   public function view($view){
      if(file_exists( '../system/resources/views/' .$view. '.php'))
      { 
         require_once  '../system/resources/views/' .$view. '.php'; 
      }
      else 
      { 
         return die('View does not exist');
      }

   }

   }