<?php

namespace GerMdz\LoremIpsumBundle;

interface WordProviderInterface
{
    /**
     * Recupera una lista de palabras.
     *
     * @return array La lista de palabras.
     */
    public function getWordList(): array;
}