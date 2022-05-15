<?php

class HandHunter implements \SplSubject
{

    public string $state;
    private $applicants;

    public function __construct()
    {
        $this->applicants = new \SplObjectStorage();
    }

    public function attach(\SplObserver $applicant): void
    {
        echo "HandHunter: Вы подписаны на рассылку :)" . PHP_EOL;
        $this->applicants->attach($applicant);
    }

    public function detach(\SplObserver $applicant): void
    {
        echo "HandHunter: Вы отписались от рассылки :(" . PHP_EOL;
        $this->applicants->detach($applicant);
    }

    public function setState(string $data): void
    {
        $this->state = $data;
        $this->notify();
    }

    public function notify(): void
    {
        echo "HandHunter: Оповещаю подписчиков о новых вакансиях..." . PHP_EOL;
        foreach ($this->applicants as $applicant) {
            $applicant->update($this);
        }
    }

}
