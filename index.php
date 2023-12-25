<?php

// ����� ��� ��������
class Student {
    public string $name;
    public string $age;

    // �����
    public function displayInfo() {
        echo "�������: {$this->name}, �������: {$this->age} ���";
    }
    public function study() {
        echo "{$this->name} ���������� ����������������.";
    }
}

// ����� ��� ������
class Car {
    public string $brand;
    public string $model;

    // ����� 
    public function displayInfo() {
        echo "������: {$this->brand} {$this->model}";
    }
    public function startEngine() {
        echo "{$this->brand} {$this->model} �������� ���������.";
    }
}

// ����� ��� ����������
class Television {
    public string $brand;
    public string $size;

    // ����� 
    public function displayInfo() {
        echo "���������: {$this->brand}, ������: {$this->size} ������";
    }
    public function changeChannel($channel) {
        echo "{$this->brand} ���������� ����� �� {$channel}.";
    }
}


// ������� ������ ��������
$student = new Student();
$student->name = "��������";
$student->age = 42;
$student->displayInfo();
echo "<br>";
$student->study();

// ������� ������ ������
$car = new Car();
$car->brand = "Toyota";
$car->model = "Camry";
echo "<br>";
$car->displayInfo();
echo "<br>";
$car->startEngine();

// ������� ������ ����������
$tv = new Television();
$tv->brand = "Samsung";
$tv->size = 55;
echo "<br>";
$tv->displayInfo();
echo "<br>";
$tv->changeChannel(3);

?>
