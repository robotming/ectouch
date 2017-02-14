<?php

/**
 * var_dump & die
 * @param $data
 */
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

/**
 * 返回商品图片URL
 * @param $url
 * @return string
 */
function getImagePath($url)
{
    return rtrim(Yii::$app->params['static'], '/') . '/' . ltrim($url, '/');
}

/**
 * 返回Data资源URL
 * @param $url
 * @return string
 */
function getDataPath($url)
{
    return rtrim(Yii::$app->params['static'], '/') . '/data/' . ltrim($url, '/');
}
