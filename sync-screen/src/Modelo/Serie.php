<?php

class Serie extends Titulo
{
    public function  __construct(
        string $nome,
        int $anoLancmento,
        Genero $genero,
        public readonly int $episodiosPorTemporada,
        public readonly int $temporadas,
        public readonly int $minutosPorEpisodio
    )
    {
        parent::__construct($nome, $anoLancmento, $genero);

    }
}