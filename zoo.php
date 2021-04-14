<?php
class animal{
  public $type;
  public $nickname;
  public $age;
  public $breed;
  public $vacction;
  public $gender;
  public function __construct(string $type, string $nickname, string $breed, string $age, array $vacction) {
      $this->type=$type;
      $this->nickname=$nickname;
      $this->age=$age;
      $this->breed=$breed;
      $this->vacction=$vacction;
}
  public function displayAnimalInfo(){
      $gender = $this->gender;
      echo "Вид: $this->type <br>";
      if($gender){
      echo "Пол: $gender <br>";
    }
    echo "Кличка: <b>$this->nickname</b> <br>";
    echo "Порода: $this->breed <br>";
    echo "Возраст: $this->age <br>";
    echo "Прививки: <br>";
    foreach($this->vacction as $vacction => $date) {
    echo "&nbsp&nbsp&nbsp".$vacction.'- '.$date."<br>" ;
    }
    echo "<br>";
    }
    }
$animals = [
        new animal("Кошка","Кэррис","Британская","6 лет",["Мультифел"=>"04.04.2021","Нобивак"=>"03.03.2021"]),
        new animal("Кот","Акван","Манчкин","3 месяца",["Мультифел"=>"04.02.2021","Нобивак"=>"03.03.2021"]),
        new animal("Собака","Найс","Самоед","8 месяцев",["Нобивак"=>"26.12.2020","Эурикан"=>"15.03.2021"]),
        new animal("Морская свинка","Люси","Крестед","1 год",["Ньюкасла"=>"10.08.2020"]),
        new animal("Попугай","Каспер","Монах","3 года",["Ньюкасла"=>"10.01.2020"]),
    ];
    $animals[0]->gender = 'Кошка';
    $animals[1]->gender = 'Кот';
    $animals[2]->gender = 'Кобель';
    $animals[3]->gender = 'Самка';
    $animals[4]->gender = 'Самец';

    foreach($animals as $animal){
    $animal->displayAnimalInfo();
    }
?>
