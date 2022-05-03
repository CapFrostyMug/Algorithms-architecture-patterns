<?php

/**
 * Общий интерфейс
 */

interface iNotice
{
    public function notify();
}

/**
 * Класс конкретного компонента
 */

class Notice implements iNotice
{
    public function notify()
    {
        echo "Отправка уведомления..." . PHP_EOL;
    }
}

/**
 * Базовый класс декораторов
 */

class NoticeEmail implements iNotice
{
    protected iNotice $notice;

    public function __construct(iNotice $notice)
    {
        $this->notice = $notice;
    }

    public function notify()
    {
        echo "...по E-mail" . PHP_EOL;
        $this->notice->notify();
    }
}

/**
 * Конкретный декоратор
 */

class NoticeSms extends NoticeEmail
{
    public function notify()
    {
        echo "...по SMS" . PHP_EOL;
        $this->notice->notify();
    }
}

/**
 * Конкретный декоратор
 */

class NoticePhone extends NoticeEmail
{
    public function notify()
    {
        echo "...по Телефону" . PHP_EOL;
        $this->notice->notify();
    }
}

$alert = new NoticeEmail(new NoticeSms(new NoticePhone(new Notice())));

$alert->notify();
