<?php
/**
 * 统一的返回结果对象
 */
namespace AthenaToolkits;

class AthenaRes implements \JsonSerializable
{
    private $status;    // 状态，true or false
    private $title;     // 提示语字符串
    private $messageSet;    // 详细信息集合，字符串数组
    private $accessorySet;  // 附加结果，对象

    function __construct()
    {
        $this->status = false;
        $this->title = '';
        $this->messageSet = array();
        $this->accessorySet = new class {};
    }

    /**
     * 重写jsonSerialize方法实现json_encode时输出private属性
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-05
     * @return [type]     [description]
     */
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function setStatus($value)
    {
        $this->status = (bool) $value;
        return $this;
    }

    public function setTitle($value)
    {
        $this->title = (string) $value;
        return $this;
    }

    /**
     * 向messageSet中附加一条新消息
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-05
     * @param  string     $value [消息字符串]
     * @return [type]            [可链式操作]
     */
    public function appendMessage(string $value)
    {
        array_push($this->messageSet, $value);
        return $this;
    }

    /**
     * 将一个新的消息数组与当前消息数组合并
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-19
     * @param  array      $value [字符串数组]
     * @return [type]            [支持链式操作]
     */
    public function mergeMessages(array $value)
    {
        $this->messageSet = array_merge(
            $this->messageSet,
            $value
        );
        return $this;
    }

    /**
     * 向accessorySet中附加一个新的对象
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-05
     * @param  string     $key   [对象的属性名]
     * @param  [type]     $value [对象的属性值]
     * @return [type]            [可链式操作]
     */
    public function appendAccessory(string $key, $value)
    {
        $this->accessorySet->$key = $value;
        return $this;
    }

    /**
     * 将一个新的accessorySet与当前accessorySet合并
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-19
     * @param  array      $value [key=>value数组]
     * @return [type]            [支持链式操作]
     */
    public function mergeAccessories($value)
    {
        foreach ($value as $k => $v) {
            $this->appendAccessory($k, $v);
        }
        return $this;
    }

    /**
     * 将status设置为true同时可附带提示语
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-05
     * @param  string|null $title [提示语，为空时不会对title做任何修改]
     * @return [type]             [可链式操作]
     */
    public function success(?string $title = null)
    {
        $this->status = true;
        if ($title) {
            $this->title = $title;
        }
        return $this;
    }

    /**
     * 将status设置为false同时可附带提示语
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-05
     * @param  string|null $title [description]
     * @return [type]             [description]
     */
    public function failed(?string $title = null)
    {
        $this->status = false;
        if ($title) {
            $this->title = $title;
        }
        return $this;
    }
}