<?php
/*Создать класс "student", атрибутами которого являются идентификаторы студента
и  случайный номер студенческого билета. Используя один из алгоритмов сортировки,
вставки, включения или обмена ("пузырька") упорядочить по возростанию номера
студенческого билета список студентов ЭУ-220.*/
echo "<b>Студенты группы ЭУ-220:</b><br><br>";
class student{
  public $number;
  public $FIO;
  public $card;
  public function __construct(string $number, string $FIO){
  $this->number=$number;
  $this->FIO=$FIO;
  $this->card = rand(0,999);
  }
  public function displaystudentInfo(){
    $card=$this->card;
    if($card){
      echo "Студенческий билет: $card<br>";
    }
    echo "Порядковый номер: $this->number <br>";
    echo "ФИО: $this->FIO <br><br>";
  }
}
$students = [new student(1,'Васильева Ульяна Всеволодовна'),
            new student(5,'Федоров Алексей Валерьевич'),
            new student(16,'Морозова Арина Николаевна'),
          new student(20,'Гусев Владимир Филиппович')];
  // перебираем массив
          for ($j = 0; $j < count($students) - 1; $j++){
              for ($i = 0; $i < count($students) - $j - 1; $i++){
                  // если текущий элемент больше следующего
                  if ($students[$i]->card > $students[$i + 1]->card){
                      // меняем местами элементы
                      $tmp_var = $students[$i + 1];
                      $students[$i + 1] = $students[$i];
                      $students[$i] = $tmp_var;
                  }
              }
          }
foreach ($students as $student) {
  $student->displaystudentInfo();
}
?>
