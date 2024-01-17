<?php
// Получатель (Receiver)
class Light {
    public function turnOn() {
        echo "Light is ON\n";
    }

    public function turnOff() {
        echo "Light is OFF\n";
    }
}

// Команда (Command)
interface Command {
    public function execute();
}

// Конкретная команда (ConcreteCommand) - Включение света
class TurnOnLightCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }
}

// Конкретная команда (ConcreteCommand) - Выключение света
class TurnOffLightCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOff();
    }
}

// Инициатор (Invoker)
class RemoteControl {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}

// Использование паттерна "Команда"
$light = new Light();

$turnOnCommand = new TurnOnLightCommand($light);
$turnOffCommand = new TurnOffLightCommand($light);

$remote = new RemoteControl();

$remote->setCommand($turnOnCommand);
$remote->pressButton();

$remote->setCommand($turnOffCommand);
$remote->pressButton();
