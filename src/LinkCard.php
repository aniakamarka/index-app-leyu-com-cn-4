<?php

/**
 * Renders an HTML link card for a given URL and keyword.
 */
function renderLinkCard(string $url, string $keyword): string
{
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeKeyword = htmlspecialchars($keyword, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">';
    $html .= '<a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">';
    $html .= '<span class="link-card-keyword">' . $safeKeyword . '</span>';
    $html .= '<span class="link-card-url">' . $safeUrl . '</span>';
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

/**
 * Example usage: display a link card for 乐鱼体育.
 */
$exampleUrl = 'https://index-app-leyu.com.cn';
$exampleKeyword = '乐鱼体育';
echo renderLinkCard($exampleUrl, $exampleKeyword);