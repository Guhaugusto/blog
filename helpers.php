<?php

function saudacao(): string
{
    $hora = 15;

    if ($hora >= 0 && $hora <= 5) {
        $saldacao = '<h1>Boa madrugada</h1>';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saldacao = '<h1>Bom dia</h1>';
    } elseif ($hora >= 13 and $hora <= 18) {
        $saldacao = '<h1>Boa tarde</h1>';
    } else {
        $saldacao = '<h1>Boa noite</h1>';
    }

    return $saldacao;
}
function resumirTexto(string $texto,  int $limite, string $continue = '...'): string
{
    return $texto;
}
