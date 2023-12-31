<?php

/**
 * Get CSS file path
 * @param  string $file Filename
 * @return string       File path
 */
function css($file = '') {
    return CSS_PATH . $file;
}

/**
 * Get JavaScript file path
 * @param  string $file Filename
 * @return string       File path
 */
function javascript($file = '') {
    return JS_PATH . $file;
}

/**
 * Get image file path
 * @param  string $file Filename
 * @return string       File path
 */
function image($file = '') {
    return IMAGES_PATH . $file;
}

/**
 * Get site base URL
 * @param  string $url Path
 * @return string      Base path
 */
function base_url($url = '') {
    return BASE_URL . $url;
}

/**
 * Get asset path
 * @param  string $file File name
 * @param  string $dir  Assets directory
 * @return string       Asset path
 */
function asset($file, $dir = 'assets') {
    return get_template_directory_uri() . '/' . ltrim($dir, '/') . '/' . ltrim($file, '/');
}

/**
 * Get file path from asset manifest
 * @param  string $file           File path
 * @param  string $buildDirectory Assets directory
 * @return string                 Versioned file path
 */
function manifest($file, $buildDirectory = 'build') {
    $manifest = [];
    $buildDirectory = '/' . ltrim($buildDirectory, '/');

    if (empty($manifest)) {
        $path = get_template_directory() . $buildDirectory . '/rev-manifest.json';

        if (file_exists($path)) {
            $manifest = json_decode(file_get_contents($path), true);
        }
    }

    $file = ltrim($file, '/');

    if (isset($manifest[$file])) {
        return asset($manifest[$file], $buildDirectory);
    }

    $unversioned = get_template_directory() . $buildDirectory . '/' . $file;

    if (file_exists($unversioned)) {
        return asset($file, $buildDirectory);
    }
}

/**
 * Like get_template_part() but lets you pass args to the template file
 * Args are available in the template as $args array.
 * Args can be passed in as url parameters, e.g 'key1=value1&key2=value2'.
 * Args can be passed in as an array, e.g. ['key1' => 'value1', 'key2' => 'value2']
 * Filepath is available in the template as $file string.
 * @param string      $slug The slug name for the generic template.
 * @param string|null $name The name of the specialized template.
 * @param array       $args The arguments passed to the template
 */
function _get_template_part( $slug, $args = array(), $name = null ) {
    if ( isset( $name ) && $name !== 'none' ) $slug = "{$slug}-{$name}.php";
    else $slug = "{$slug}.php";
    $dir = get_template_directory();
    $file = "{$dir}/{$slug}";

    ob_start();
    $args = wp_parse_args( $args );
    $slug = $dir = $name = null;
    require( $file );
    echo ob_get_clean();
}

/**
 * Resumo do conteúdo do post limitado a um numero de caracteres, 
 * exibe o excerpt (caso exista), ou o conteúdo da página cortado e sem tags html.
 * @param int $id ID do post, opcional
 * @param int $total Máximo de caracteres, opcional, padrão = 115
 * @return string
 */
function resume($id = '', $total = '') {
    global $post;
    $num = ($total) ? $total : 115;
    $post_id = ($id) ? $id : $post->ID;
    $content = (get_the_excerpt($post_id)) ? get_the_excerpt($post_id) : get_the_content($post_id);
    $resume = wp_strip_all_tags( mb_strimwidth($content, 0, $num, '...') );
    return $resume;
}

/**
 * Resumo do conteúdo do post limitado a um numero de caracteres, 
 * exibe o excerpt (caso exista), ou o conteúdo da página cortado e sem tags html.
 * @param string $file name file in partial or child folders
 * @return file 
 */
function partial($file = '') {
    get_template_part('partials/'. $file);
}

/**
 * Gerar slug com base na string passada, remove espaços e caracteres especiais,
 * adicionando hippen no lugar do espaço e ponto.
 * @param string $string texto a ser convertido, obrigatorio
 * @return string
 */
function slugify($string) {
    $string = preg_replace('/[\t\n]/', ' ', $string);
    $string = preg_replace('/\s{2,}/', ' ', $string);
    $list = array(
        'Š' => 'S',
        'š' => 's',
        'Đ' => 'Dj',
        'đ' => 'dj',
        'Ž' => 'Z',
        'ž' => 'z',
        'Č' => 'C',
        'č' => 'c',
        'Ć' => 'C',
        'ć' => 'c',
        'À' => 'A',
        'Á' => 'A',
        'Â' => 'A',
        'Ã' => 'A',
        'Ä' => 'A',
        'Å' => 'A',
        'Æ' => 'A',
        'Ç' => 'C',
        'È' => 'E',
        'É' => 'E',
        'Ê' => 'E',
        'Ë' => 'E',
        'Ì' => 'I',
        'Í' => 'I',
        'Î' => 'I',
        'Ï' => 'I',
        'Ñ' => 'N',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ö' => 'O',
        'Ø' => 'O',
        'Ù' => 'U',
        'Ú' => 'U',
        'Û' => 'U',
        'Ü' => 'U',
        'Ý' => 'Y',
        'Þ' => 'B',
        'ß' => 'Ss',
        'à' => 'a',
        'á' => 'a',
        'â' => 'a',
        'ã' => 'a',
        'ä' => 'a',
        'å' => 'a',
        'æ' => 'a',
        'ç' => 'c',
        'è' => 'e',
        'é' => 'e',
        'ê' => 'e',
        'ë' => 'e',
        'ì' => 'i',
        'í' => 'i',
        'î' => 'i',
        'ï' => 'i',
        'ð' => 'o',
        'ñ' => 'n',
        'ò' => 'o',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ö' => 'o',
        'ø' => 'o',
        'ù' => 'u',
        'ú' => 'u',
        'û' => 'u',
        'ý' => 'y',
        'ý' => 'y',
        'þ' => 'b',
        'ÿ' => 'y',
        'Ŕ' => 'R',
        'ŕ' => 'r',
        '/' => '-',
        ' ' => '-',
        '.' => '',
        ',' => '-',
        '<' => '-',
        '>' => '-',
        ':' => '-',
    );

    $string = strtr($string, $list);
    $string = preg_replace('/-{2,}/', '-', $string);
    $string = strtolower($string);

    return $string;
}