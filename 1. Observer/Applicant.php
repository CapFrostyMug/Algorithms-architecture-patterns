<?php

class Applicant implements \SplObserver
{

    private string $name;
    private string $email;
    private string $experience;

    public function __construct(string $name, string $email, string $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update(\SplSubject $subject)
    {
        echo "Здравствуйте, $this->name! Появилась новая вакансия: $subject->state" . PHP_EOL;
    }

}
