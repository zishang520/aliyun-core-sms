<?php
namespace luoyy\AliCore\Sms\Request;

use luoyy\AliCore\RpcAcsRequest;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

class SendBatchSmsRequest extends RpcAcsRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dysmsapi',
            '2017-05-25',
            'SendBatchSms',
            'dysms',
            'openAPI'
        );
    }

    /**
     * @param string $templateParamJson
     *
     * @return $this
     */
    public function setTemplateParamJson($templateParamJson)
    {
        $this->requestParameters['TemplateParamJson'] = $templateParamJson;
        $this->queryParameters['TemplateParamJson'] = $templateParamJson;
        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;
        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
     * @param string $smsUpExtendCodeJson
     *
     * @return $this
     */
    public function setSmsUpExtendCodeJson($smsUpExtendCodeJson)
    {
        $this->requestParameters['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;
        $this->queryParameters['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;
        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;
        return $this;
    }

    /**
     * @param string $signNameJson
     *
     * @return $this
     */
    public function setSignNameJson($signNameJson)
    {
        $this->requestParameters['SignNameJson'] = $signNameJson;
        $this->queryParameters['SignNameJson'] = $signNameJson;
        return $this;
    }

    /**
     * @param string $templateCode
     *
     * @return $this
     */
    public function setTemplateCode($templateCode)
    {
        $this->requestParameters['TemplateCode'] = $templateCode;
        $this->queryParameters['TemplateCode'] = $templateCode;
        return $this;
    }

    /**
     * @param string $phoneNumberJson
     *
     * @return $this
     */
    public function setPhoneNumberJson($phoneNumberJson)
    {
        $this->requestParameters['PhoneNumberJson'] = $phoneNumberJson;
        $this->queryParameters['PhoneNumberJson'] = $phoneNumberJson;
        return $this;
    }

}
