<?php

function redireciona(string $url): void
{
    // padrao de projeto post redirect get

    header("Location: $url");
    die();
}