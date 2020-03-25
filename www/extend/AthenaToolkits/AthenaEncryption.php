<?php
/**
 * 封装的加/解密方法
 * 包含可逆与不可逆加密
 */
namespace AthenaToolkits;

class AthenaEncryption
{
    private $desCipher = '';
    private $desKey1 = '';
    private $desKey2 = '';

    function __construct()
    {
        // 直接语取配置文件中的默认值
        $this->desCipher = config('encrypt.des_cipher');
        $this->desKey1 = config('encrypt.des_key1');
        $this->desKey2 = config('encrypt.des_key2');
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    /**
     * 对字符串进行des加密（可逆）
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-09
     * @param  string      $plaintext [需要加密的明文]
     * @param  string|null $cipher    [加密算法，在环境变量中定义默认值]
     * @param  string|null $key1      [密钥1，在环境变量中定义默认值]
     * @param  string|null $key2      [密钥2，在环境变量中定义默认值]
     * @return [type]                 [加密后的密文字符串]
     */
    public function desEncrypt(
        string $plaintext,
        ?string $cipher = null,
        ?string $key1 = null,
        ?string $key2 = null
    ): string
    {
        $this->desCipher = $cipher ?: $this->desCipher;
        $this->desKey1 = $key1 ?: $this->desKey1;
        $this->desKey2 = $key2 ?: $this->desKey2;

        $ciphertext = $plaintext;
        $ciphertext = openssl_encrypt($ciphertext, $this->desCipher, $this->desKey1);
        $ciphertext = openssl_encrypt($ciphertext, $this->desCipher, $this->desKey2);
        $ciphertext = openssl_encrypt($ciphertext, $this->desCipher, $this->desKey1);
        return $ciphertext;
    }

    /**
     * 对密文进行des解密
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-09
     * @param  string      $ciphertext [需要解密的密文]
     * @param  string|null $cipher     [加密算法，在环境变量中定义默认值]
     * @param  string|null $key1       [密钥1，在环境变量中定义默认值]
     * @param  string|null $key2       [密钥2，在环境变量中定义默认值]
     * @return [type]                  [返回string或false]
     */
    public function desDecrypt(
        string $ciphertext,
        ?string $cipher = null,
        ?string $key1 = null,
        ?string $key2 = null
    )
    {
        $this->desCipher = $cipher ?: $this->desCipher;
        $this->desKey1 = $key1 ?: $this->desKey1;
        $this->desKey2 = $key2 ?: $this->desKey2;

        $plaintext = $ciphertext;
        $plaintext = openssl_decrypt($plaintext, $this->desCipher, $this->desKey1);
        $plaintext = openssl_decrypt($plaintext, $this->desCipher, $this->desKey2);
        $plaintext = openssl_decrypt($plaintext, $this->desCipher, $this->desKey1);
        return $plaintext;
    }
}
