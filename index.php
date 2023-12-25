<?php

// Класс для студента
class Student {
    public string $name;
    public string $age;

// Метод
    public function displayInfo() {
        echo "�������: {$this->name}, �������: {$this->age} ���";
    }
    public function study() {
        echo "{$this->name} ���������� ����������������.";
    }
}

// Класс для машины
class Car {
    public string $brand;
    public string $model;

// Метод
    public function displayInfo() {
        echo "������: {$this->brand} {$this->model}";
    }
    public function startEngine() {
        echo "{$this->brand} {$this->model} �������� ���������.";
    }
}

// Класс для телевизора
class Television {
    public string $brand;
    public string $size;

// Метод
    public function displayInfo() {
        echo "���������: {$this->brand}, ������: {$this->size} ������";
    }
    public function changeChannel($channel) {
        echo "{$this->brand} ���������� ����� �� {$channel}.";
    }
}


// Создаем объект студента
$student = new Student();
$student->name = "��������";
$student->age = 42;
$student->displayInfo();
echo "<br>";
$student->study();

// Создаем объект машины
$car = new Car();
$car->brand = "Toyota";
$car->model = "Camry";
echo "<br>";
$car->displayInfo();
echo "<br>";
$car->startEngine();

// Создаем объект телевизора
$tv = new Television();
$tv->brand = "Samsung";
$tv->size = 55;
echo "<br>";
$tv->displayInfo();
echo "<br>";
$tv->changeChannel(3);

?>
