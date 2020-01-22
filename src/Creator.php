<?php
namespace Jjshare;

class Creator {
    /**
     * 获取随机字符串
     * @param type $length 随机字符串的长度
     * @param type $type 随机字符串类型，0 使用自定义字符集，1 数字&字母（不包含O01I），2 纯数字，3 纯字母
     * @param type $$caracteres $type=0时，启用该字符串包含的字符作为生成随机字符串的字符集
     * @return type
     */
    function getRandomPhrases($length = 6, $type = 1, $caracteres = '') {
        $all_caracteres = [
            1 => 'ABCDEFGHJKLMPQRSTUVXWYZ23456789', //去掉了O01I
            2 => '1234567890',
            3 => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ];
        $caracteres = $type == 0 ? $caracteres : $all_caracteres[$type];
        $quantidade_caracteres = strlen($caracteres);
        $quantidade_caracteres--;

        $hash = NULL;
        for ($x = 1; $x <= $length; $x++) {
            $posicao = rand(0, $quantidade_caracteres);
            $hash .= substr($caracteres, $posicao, 1);
        }

        return $hash;
    }
}
