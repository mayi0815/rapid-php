<?php

namespace apps\core\classier\dao\master\oauth2;

use apps\core\classier\dao\MasterDao;
use apps\core\classier\model\OAuth2ModelInterface;
use apps\core\classier\model\OAuth2WeChatInterface;
use Exception;
use function rapidPHP\Cal;

class WeChatDao extends MasterDao implements OAuth2DaoInterface
{

    /**
     * WeChatDao constructor.
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct(OAuth2WeChatInterface::class);
    }

    /**
     * 添加 OAuth2 user
     * @param OAuth2ModelInterface $oauth2UserModel
     * @return bool
     * @throws Exception
     */
    public function addOAuth2User(OAuth2ModelInterface $oauth2UserModel): bool
    {
        if (!($oauth2UserModel instanceof OAuth2WeChatInterface))
            throw new Exception('wechat model 错误');

        $result = parent::add([
            'bind_id' => $oauth2UserModel->getBindId(),
            'open_id' => $oauth2UserModel->getOpenId(),
            'union_id' => $oauth2UserModel->getUnionId(),
            'nickname' => $oauth2UserModel->getNickname(),
            'headimgurl' => $oauth2UserModel->getHeadimgurl(),
            'gender' => $oauth2UserModel->getGender(),
            'language' => $oauth2UserModel->getLanguage(),
            'country' => $oauth2UserModel->getCountry(),
            'province' => $oauth2UserModel->getProvince(),
            'city' => $oauth2UserModel->getCity(),
            'is_delete' => false,
            'created_id' => $oauth2UserModel->getBindId(),
            'created_time' => Cal()->getDate(),
        ], $id);

        if ($result) $oauth2UserModel->setId($id);

        return $result;
    }

    /**
     * 修改 OAuth2 user
     * @param OAuth2ModelInterface $oauth2UserModel
     * @return bool
     * @throws Exception
     */
    public function setOAuth2User(OAuth2ModelInterface $oauth2UserModel): bool
    {
        if (!($oauth2UserModel instanceof OAuth2WeChatInterface))
            throw new Exception('wechat model 错误');

        return parent::set([
            'bind_id' => $oauth2UserModel->getBindId(),
            'open_id' => $oauth2UserModel->getOpenId(),
            'union_id' => $oauth2UserModel->getUnionId(),
            'nickname' => $oauth2UserModel->getNickname(),
            'headimgurl' => $oauth2UserModel->getHeadimgurl(),
            'gender' => $oauth2UserModel->getGender(),
            'language' => $oauth2UserModel->getLanguage(),
            'country' => $oauth2UserModel->getCountry(),
            'province' => $oauth2UserModel->getProvince(),
            'city' => $oauth2UserModel->getCity(),
            'updated_id' => $oauth2UserModel->getUpdatedId(),
            'updated_time' => Cal()->getDate(),
        ])->where('id', $oauth2UserModel->getId())->execute();
    }

    /**
     * 通过bind id获取 OAuth2 user
     * @param $bindId
     * @return OAuth2ModelInterface|null
     * @throws Exception
     */
    public function getOAuth2UserByBindId($bindId): ?OAuth2ModelInterface
    {
        return parent::get()
            ->where('is_delete', false)
            ->where('bind_id', $bindId)
            ->getStatement()
            ->fetch(OAuth2WeChatInterface::class);
    }

    /**
     * 通过unionId 获取 OAuth2 user
     * @param $unionId
     * @return OAuth2ModelInterface|null
     * @throws Exception
     */
    public function getOAuth2UserByUnionId($unionId): ?OAuth2ModelInterface
    {
        return parent::get()
            ->where('is_delete', false)
            ->where('union_id', $unionId)
            ->getStatement()
            ->fetch(OAuth2WeChatInterface::class);
    }

    /**
     * 通过openId 获取 OAuth2 user
     * @param $openId
     * @return OAuth2ModelInterface|null
     * @throws Exception
     */
    public function getOAuth2UserByOpenId($openId): ?OAuth2ModelInterface
    {
        return parent::get()
            ->where('is_delete', false)
            ->where('open_id', $openId)
            ->getStatement()
            ->fetch(OAuth2WeChatInterface::class);
    }
}
