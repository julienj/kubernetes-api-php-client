<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class RestartPolicy extends BaseEntity implements \JsonSerializable {

    protected $always;

    protected $onFailure;

    protected $never;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways
     */
    public function getAlways() {
        return $this->always;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways $always
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways
     */
    public function setAlways($always = self::UNIQUE_DEFAULT) {
        if ($always === self::UNIQUE_DEFAULT) {
            $always = new RestartPolicyAlways();
            $always->_setEntityCallback([$this,__METHOD__]);
        }
        $this->always = $always;
        return $this->always;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever
     */
    public function getNever() {
        return $this->never;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever $never
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever
     */
    public function setNever($never = self::UNIQUE_DEFAULT) {
        if ($never === self::UNIQUE_DEFAULT) {
            $never = new RestartPolicyNever();
            $never->_setEntityCallback([$this,__METHOD__]);
        }
        $this->never = $never;
        return $this->never;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure $onFailure
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure
     */
    public function setOnFailure($onFailure = self::UNIQUE_DEFAULT) {
        if ($onFailure === self::UNIQUE_DEFAULT) {
            $onFailure = new RestartPolicyOnFailure();
            $onFailure->_setEntityCallback([$this,__METHOD__]);
        }
        $this->onFailure = $onFailure;
        return  $this->onFailure;
    }



} 