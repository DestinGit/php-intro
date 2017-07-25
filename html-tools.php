<?php
/**
 * @param string $tag
 * @param string $content
 * @param array $attributes
 * @param bool $autoClose
 * @return string
 */
function htmlTag(string $tag, string $content, array $attributes = [], bool $autoClose = false):string {
    $theAttributes = '';
    foreach ($attributes as $key => $value) {
        $theAttributes .= " {$key}='{$value}'";
    }

    $html = "<{$tag}{$theAttributes}>";

    return (!$autoClose) ? $html . "{$content}</{$tag}>": $html;
}

/**
 * @param string $source
 * @param string $alt
 * @param array $attributes
 * @return string
 */
function htmlImg(string $source, string $alt, array $attributes = []):string {
    $attributes["src"] = $source;
    $attributes["alt"] = $alt;

    return htmlTag("img", "", $attributes, true);
}

/**
 * @param string $link
 * @param string $content
 * @param array $attributes
 * @return string
 */
function htmlLink(string $link, string $content, array $attributes = []):string {
    $attributes['href'] = $link;

    return htmlTag("a", $content, $attributes);
}
