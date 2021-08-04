  <?php
  class Kelipatan
  {
    public $text1,
           $text2,
           $text3;
    
    function set_text1($text1){
      $this->text1 = $text1;
    }
    function set_text2($text2){
      $this->text2 = $text2;
    }
    function set_text3($text3){
      $this->text3 = $text3;
    }
    function get_text1(){
      return $this->text1;
    }
    function get_text2(){
      return $this->text2;
    }
    function get_text3(){
      return $this->text3;
    }
  }
  $angka = $_REQUEST['txtAngka'];
  $kelipatan = new Kelipatan();
  $kelipatan->set_text1('Pasar 20 Belanja Pangan');
  $kelipatan->set_text2('Pasar 20');
  $kelipatan->set_text3('Belanja Pangan');
  
  for ($i=1; $i <= $angka ; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo $i .' '.$kelipatan->get_text1(). '<br>';
    }else if($i % 3 == 0){
      if($i == 33){
        for ($i=33; $i < $angka ; $i++) { 
          if ($i % 3 == 0 && $i % 5 == 0) {
            echo $i .' '.$kelipatan->get_text1() . '<br>';
          }else if($i % 3 == 0){
            echo $i.' '.$kelipatan->get_text3();
            echo'<br>';
          }else if($i % 5 == 0){
            echo $i.' '.$kelipatan->get_text2();
            echo '<br>';
          }
        }
      }
      echo $i.' '.$kelipatan->get_text2();
      echo'<br>';
    }else if($i % 5 == 0){
      echo $i.' '.$kelipatan->get_text3();
      echo '<br>';
    }
      
    }
  ?>