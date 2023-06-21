<?php
class Node {
  public $name;
  public $score;
  public $next;

  function __construct($name, $score) {
    $this->name = $name;
    $this->score = $score;
    $this->next = null;
  }
}

class LinkedList {
  private $head;

  function __construct() {
    $this->head = null;
  } 

  function insertFirst($name, $score) {
    $newNode = new Node($name, $score);
    $newNode->next = $this->head;
    $this->head = $newNode;
  }

  function insertLast($name, $score) {
    $newNode = new Node($name, $score);

    if ($this->head == null) {
      $this->head = $newNode;
    } else {
      $current = $this->head;
      while ($current->next != null) {
        $current = $current->next;
      }
      $current->next = $newNode;
    }
  }

  function showList() {
    $current = $this->head;
    while ($current != null) {
      echo $current->name . " - " . $current->score . "<br>";
      $current = $current->next;
    }
  }

  function totalStudentsFail() {
    $count = 0;
    $current = $this->head;
    while ($current != null) {
      if ($current->score <= 5) {
        $count++;
      }
      $current = $current->next;
    }
    echo "Tong so sinh vien thi lai: " . $count . "<br>";
  }

  function listStudentsMaxScore() {
    $maxScore = 0;
    $highestScorers = array();
    $current = $this->head;

    while ($current != null) {
      if ($current->score > $maxScore) {
        $maxScore = $current->score;
        $highestScorers = array($current->name);
      } else if ($current->score == $maxScore) {
        $highestScorers[] = $current->name;
      }
      $current = $current->next;
    }
    echo "Sinh vien co diem cao nhat la: ";
    foreach ($highestScorers as $name) {
      echo $name . " ";
    }
    echo "<br>";
  }

  function findByName($name) {
    $found = false;
    $current = $this->head;

    while ($current != null) {
      if ($current->name == $name) {
        echo $current->name . " - " . $current->score . "<br>";
        $found = true;
      }
      $current = $current->next;
    }

    if (!$found) {
      echo "Khong tim thay sinh vien nao co ten la " . $name . "<br>";
    }
  }
}

// Sử dụng chương trình
$students = new LinkedList();

$students->insertFirst("Tran Thi A", 9.0);
$students->insertFirst("Nguyen Van B", 7.5);
$students->insertLast("Le Van C", 5.0);
$students->insertLast("Pham Thi D", 6.5);

$students->showList();
$students->totalStudentsFail();
$students->listStudentsMaxScore();
$students->findByName("Nguyen Van B");
