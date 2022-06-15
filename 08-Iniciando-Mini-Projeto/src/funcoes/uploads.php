<?php

function upload($arquivo, $subpasta = null, $imagemRemover = null)
{

    $extensao = strrchr($arquivo['name'], '.');
    $nomeNome = md5($arquivo['name']) . uniqid() . $extensao;

    if (!is_dir(PASTA_UPLOADS)) {
        // IDE CREATED
        if (!mkdir($concurrentDirectory = PASTA_UPLOADS, 755, true) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
    }

    if(!is_dir(PASTA_UPLOADS . $subpasta)){
        if (!mkdir($concurrentDirectory = PASTA_UPLOADS . $subpasta, 755, true) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
    }

    $novoNome = $subpasta ? $subpasta . '/' . $nomeNome
                                    : $nomeNome;

    if (!move_uploaded_file($arquivo['tmp_name'], PASTA_UPLOADS .  $novoNome)) {
        return false;
    }

    if ($imagemRemover && file_exists(PASTA_UPLOADS . $imagemRemover)) {
        unlink(PASTA_UPLOADS . $imagemRemover);
    }

    return $nomeNome;
}