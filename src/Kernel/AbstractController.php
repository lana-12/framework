<?php

namespace Digi\Keha\Kernel;

class AbstractController
{
    private ?string $flashMessage = null;

    public function getFlashMessage()
    {
        return $this->flashMessage;
    }

    public function setFlashMessage(string $message, string $type)
    {
        if ($type === 'success') {
            $this->flashMessage = "<p style='background-color: green;color: #ffffff;'>$message</p>";
            return $this;
        }
        if ($type === 'error') {
            $this->flashMessage = "<p style='background-color: red;color: #ffffff;'>$message</p>";
            return $this;
        }
        $this->flashMessage = "<p>$message</p>";
        return $this;
    }
}
