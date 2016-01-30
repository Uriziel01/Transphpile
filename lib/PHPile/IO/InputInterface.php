<?php

namespace PHPile\IO;

interface InputInterface
{
    public function getOption($option);
    public function getOptions();

    public function getArgument($argument);
    public function getArguments();
}
