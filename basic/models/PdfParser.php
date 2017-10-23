<?php
/**
 * Created by PhpStorm.
 * User: SawyerLancer
 * Date: 08.10.2017
 * Time: 1:18
 */

namespace app\models;

require __DIR__ ."/../vendor/autoload.php";

use yii\base\Model;
use yii\web\UploadedFile;


class PdfParser extends Model
{

   public  $file;
   public  $FileTeacher;


   public function rules()
   {
       return[
    [['file','FileTeacher'],'file','skipOnEmpty'=>true,'extensions'=>'pdf'],];
   }

   public function upload()
   {
      if ($this->validate())
      {
          $this->file->saveAs(''.$this->file->baseName.'.'.$this->file->extension);
          $this->FileTeacher->saveAs(''.$this->FileTeacher->baseName.'.'.$this->FileTeacher->extension);
          return true;
      }else{
          return false;
      }
   }

   public function ParserPdf($file){
       $parser = new \Smalot\PdfParser\Parser();
       $pdf= $parser->parseFile($file);
       $text=$pdf->getText();
      // $this->DelFile($file);
       return $text;
   }


   public function PrintData($text){
       $html="<div class='jumbotron'>
             <h1 class='text-center'>Содержимое</h1>
               <span class='text-center'>$text</span>  
             </div>";
       if($text!=null) {
           echo $html;
       }
       else{
           return false;
       }
   }
   public function DelFile($file){

       if(file_exists($file)) {
           unlink($file);
           return true;
       }else{
           return false;
       }

   }

   public function FindWord($word,$text)
   {
       $mathes=null;
       preg_match_all('/'.$word.'/',$text,$mathes,PREG_OFFSET_CAPTURE);
       return $mathes;

   }

   public function WordLight($word,$text,$replacment='<span style="color: skyblue">\'.$word.\'</span>\'')
   {
       return preg_replace('/'.$word.'/','<span style="color: skyblue">'.$word.'</span>',$text);
   }
   public function WordCol($text)
   {
       $mathes=$this->FindWord($text);

       $number=count($mathes);

       echo ('<h1>Количество повторов в тексте:'.$number.'</h1>');

   }


}