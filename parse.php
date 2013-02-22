<?php

    /* Sass Compile
     * @felquis
     */

    include './phpsass/SassParser.php';

    function __parse($file, $syntax, $style = 'compressed') {
      $options = array(
        'style' => $style,
        'cache' => FALSE,
        'syntax' => $syntax,
        'debug' => FALSE,
        'callbacks' => array(
          'warn' => 'cb_warn',
          'debug' => 'cb_debug',
        ),
      );

      // Executa o compilador
      $parser = new SassParser($options);
      return $parser->toCss($file);
    }

    function cb_warn($message, $context) {
      print "<p class='warn'>WARN : ";
      print_r($message);
      print "</p>";
    }
    function cb_debug($message) {
      print "<p class='debug'>DEBUG : ";
      print_r($message);
      print "</p>";
    }

    /*
     * Cria um arquivo temporário para compilar o Sass
    */
    $my_file = 'scss-user/user-' . $_POST['time'] . '.scss';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);

    fwrite($handle, $_POST['code']);

    fclose($handle);

    /*
     * Compila o arquivo scss
     * O segundo parametro pode ser 'scss' ou 'sass'
     * Aceita também um terceiro parâmetro como o estilo da saída 'compressed', 'expanded' entre outros
    */
    echo __parse($my_file, "scss");

    /*
     * Apaga o arquivo criado
    */
    unlink($my_file);
?>