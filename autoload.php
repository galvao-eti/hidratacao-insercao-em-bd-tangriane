<?php

/**
 * Um exemplo de uma implementação específica do projeto.
 *
 * Depois de registrar esta função de autoload com SPL, a seguinte linha
 * Faria com que a função tentasse carregar a classe \ Foo \ Bar \ Baz \ Qux
 * De /path/to/project/LuizHenrique/Baz/Qux.php:
 *
 * Novo \ Foo \ Bar \ Baz \ Qux;
 *
 * @param string $ class O nome da classe totalmente qualificado.
 * @return void
 */
spl_autoload_register(function ($class) {
    
    $prefix = '';
   
// prefixo do espaço para nome específico do projeto

    $base_dir = __DIR__ . '/';
    
// a classe usa o prefixo do namespace?

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
      
// não, mova para o próximo carregador automático registrado
        return;
    }
    
// obtenha o nome relativo da classe
    $relative_class = substr($class, $len);
  
// substitua o prefixo do namespace pelo diretório base, substitua o namespace
   // separadores com separadores de diretório no nome relativo da classe, anexar
    // com .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
