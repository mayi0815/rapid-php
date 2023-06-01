<?php

namespace apps\core\classier\model;

use Exception;
use rapidPHP\modules\core\classier\Model;


/**
 * 资源表
 * @table app_resource
 * rapidPHP auto generate Model 2022-04-11 11:39:19
 */

class AppResourceModel extends Model 
{

    /**
     * table name
     */
    const NAME = 'app_resource';

    
    /**
     * 主键
     * @var 
     * @length 
     * @typed bigint
     */
    protected $id;

    /**
     * 设置 主键
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 获取 主键
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 效验 主键
     * @param string $msg
     * @throws Exception
     */
    public function validId(string $msg = 'id Cannot be empty!')
    {
        if (empty($this->id)) throw new Exception($msg);
    }

    /**
     * 主人 id
     * @var 
     * @length 
     * @typed bigint
     */
    protected $owner_id;

    /**
     * 设置 主人 id
     * @param $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
    }

    /**
     * 获取 主人 id
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * 效验 主人 id
     * @param string $msg
     * @throws Exception
     */
    public function validOwnerId(string $msg = 'owner_id Cannot be empty!')
    {
        if (empty($this->owner_id)) throw new Exception($msg);
    }

    /**
     * 绑定id
     * @var 
     * @length 
     * @typed bigint
     */
    protected $bind_id;

    /**
     * 设置 绑定id
     * @param $bind_id
     */
    public function setBindId($bind_id)
    {
        $this->bind_id = $bind_id;
    }

    /**
     * 获取 绑定id
     * @return mixed
     */
    public function getBindId()
    {
        return $this->bind_id;
    }

    /**
     * 效验 绑定id
     * @param string $msg
     * @throws Exception
     */
    public function validBindId(string $msg = 'bind_id Cannot be empty!')
    {
        if (empty($this->bind_id)) throw new Exception($msg);
    }

    /**
     * 绑定的类型 1 信息 2浏览照片
     * @var int|null 
     * @length 
     * @typed tinyint
     */
    protected $bind_type;

    /**
     * 设置 绑定的类型 1 信息 2浏览照片
     * @param int|null $bind_type
     */
    public function setBindType(?int $bind_type)
    {
        $this->bind_type = $bind_type;
    }

    /**
     * 获取 绑定的类型 1 信息 2浏览照片
     * @return int|null
     */
    public function getBindType(): ?int
    {
        return $this->bind_type;
    }

    /**
     * 效验 绑定的类型 1 信息 2浏览照片
     * @param string $msg
     * @throws Exception
     */
    public function validBindType(string $msg = 'bind_type Cannot be empty!')
    {
        if (empty($this->bind_type)) throw new Exception($msg);
    }

    /**
     * 文件id
     * @var 
     * @length 
     * @typed bigint
     */
    protected $file_id;

    /**
     * 设置 文件id
     * @param $file_id
     */
    public function setFileId($file_id)
    {
        $this->file_id = $file_id;
    }

    /**
     * 获取 文件id
     * @return mixed
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * 效验 文件id
     * @param string $msg
     * @throws Exception
     */
    public function validFileId(string $msg = 'file_id Cannot be empty!')
    {
        if (empty($this->file_id)) throw new Exception($msg);
    }

    /**
     * 文件类型 1 图片 2 视频
     * @var int|null 
     * @length 
     * @typed tinyint
     */
    protected $file_type;

    /**
     * 设置 文件类型 1 图片 2 视频
     * @param int|null $file_type
     */
    public function setFileType(?int $file_type)
    {
        $this->file_type = $file_type;
    }

    /**
     * 获取 文件类型 1 图片 2 视频
     * @return int|null
     */
    public function getFileType(): ?int
    {
        return $this->file_type;
    }

    /**
     * 效验 文件类型 1 图片 2 视频
     * @param string $msg
     * @throws Exception
     */
    public function validFileType(string $msg = 'file_type Cannot be empty!')
    {
        if (empty($this->file_type)) throw new Exception($msg);
    }

    /**
     * 其他信息，比如视频的 时长 封面等
     * @var 
     * @length 
     * @typed json
     */
    protected $options;

    /**
     * 设置 其他信息，比如视频的 时长 封面等
     * @param $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * 获取 其他信息，比如视频的 时长 封面等
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * 效验 其他信息，比如视频的 时长 封面等
     * @param string $msg
     * @throws Exception
     */
    public function validOptions(string $msg = 'options Cannot be empty!')
    {
        if (empty($this->options)) throw new Exception($msg);
    }

    /**
     * 是否删除
     * @var bool|null 
     * @length 
     * @typed bit
     */
    protected $is_delete;

    /**
     * 设置 是否删除
     * @param bool|null $is_delete
     */
    public function setIsDelete(?bool $is_delete)
    {
        $this->is_delete = $is_delete;
    }

    /**
     * 获取 是否删除
     * @return bool|null
     */
    public function getIsDelete(): ?bool
    {
        return $this->is_delete;
    }

    /**
     * 效验 是否删除
     * @param string $msg
     * @throws Exception
     */
    public function validIsDelete(string $msg = 'is_delete Cannot be empty!')
    {
        if (empty($this->is_delete)) throw new Exception($msg);
    }

    /**
     * 创建人Id
     * @var 
     * @length 
     * @typed bigint
     */
    protected $created_id;

    /**
     * 设置 创建人Id
     * @param $created_id
     */
    public function setCreatedId($created_id)
    {
        $this->created_id = $created_id;
    }

    /**
     * 获取 创建人Id
     * @return mixed
     */
    public function getCreatedId()
    {
        return $this->created_id;
    }

    /**
     * 效验 创建人Id
     * @param string $msg
     * @throws Exception
     */
    public function validCreatedId(string $msg = 'created_id Cannot be empty!')
    {
        if (empty($this->created_id)) throw new Exception($msg);
    }

    /**
     * 创建时间
     * @var string|null 
     * @length 
     * @typed datetime
     */
    protected $created_time;

    /**
     * 设置 创建时间
     * @param string|null $created_time
     */
    public function setCreatedTime(?string $created_time)
    {
        $this->created_time = $created_time;
    }

    /**
     * 获取 创建时间
     * @return string|null
     */
    public function getCreatedTime(): ?string
    {
        return $this->created_time;
    }

    /**
     * 效验 创建时间
     * @param string $msg
     * @throws Exception
     */
    public function validCreatedTime(string $msg = 'created_time Cannot be empty!')
    {
        if (empty($this->created_time)) throw new Exception($msg);
    }

    /**
     * 修改人Id
     * @var 
     * @length 
     * @typed bigint
     */
    protected $updated_id;

    /**
     * 设置 修改人Id
     * @param $updated_id
     */
    public function setUpdatedId($updated_id)
    {
        $this->updated_id = $updated_id;
    }

    /**
     * 获取 修改人Id
     * @return mixed
     */
    public function getUpdatedId()
    {
        return $this->updated_id;
    }

    /**
     * 效验 修改人Id
     * @param string $msg
     * @throws Exception
     */
    public function validUpdatedId(string $msg = 'updated_id Cannot be empty!')
    {
        if (empty($this->updated_id)) throw new Exception($msg);
    }

    /**
     * 修改时间
     * @var string|null 
     * @length 
     * @typed datetime
     */
    protected $updated_time;

    /**
     * 设置 修改时间
     * @param string|null $updated_time
     */
    public function setUpdatedTime(?string $updated_time)
    {
        $this->updated_time = $updated_time;
    }

    /**
     * 获取 修改时间
     * @return string|null
     */
    public function getUpdatedTime(): ?string
    {
        return $this->updated_time;
    }

    /**
     * 效验 修改时间
     * @param string $msg
     * @throws Exception
     */
    public function validUpdatedTime(string $msg = 'updated_time Cannot be empty!')
    {
        if (empty($this->updated_time)) throw new Exception($msg);
    }

}
