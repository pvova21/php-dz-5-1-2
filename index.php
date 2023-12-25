<?php

// Класс для студента
class Student {
    public string $name;
    public string $age;

    // Метод
    public function displayInfo() {
        echo "Студент: {$this->name}, Возраст: {$this->age} лет";
    }
    public function study() {
        echo "{$this->name} занимается програмированием.";
    }
}

// Класс для машины
class Car {
    public string $brand;
    public string $model;

    // Метод 
    public function displayInfo() {
        echo "Машина: {$this->brand} {$this->model}";
    }
    public function startEngine() {
        echo "{$this->brand} {$this->model} запустил двигатель.";
    }
}

// Класс для телевизора
class Television {
    public string $brand;
    public string $size;

    // Метод 
    public function displayInfo() {
        echo "Телевизор: {$this->brand}, Размер: {$this->size} дюймов";
    }
    public function changeChannel($channel) {
        echo "{$this->brand} переключил канал на {$channel}.";
    }
}


// Создаем объект студента
$student = new Student();
$student->name = "Владимир";
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
