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

namespace DevStub\KubernetesAPIClient\Adapter;


use DevStub\KubernetesAPIClient\IConfig;

interface IAdapter {

    /**
     * @param IConfig $config
     */
    public function setConfig(IConfig $config);

    /**
     * @param string    $path
     * @param array     $options
     *
     * @return AdapterResponse
     */
    public function sendGETRequest($path,$options = null);

    /**
     * @param string    $path
     * @param string    $content
     * @param array     $options
     *
     * @return AdapterResponse
     */
    public function sendPUTRequest($path,$content,$options = null);

    /**
     * @param string    $path
     * @param string    $content
     * @param array     $options
     *
     * @return AdapterResponse
     */
    public function sendPOSTRequest($path,$content,$options = null);

    /**
     * @param string    $path
     * @param array     $options
     *
     * @return AdapterResponse
     */
    public function sendDELETERequest($path,$options = null);

} 