<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */

namespace Tests\unit\AzureServiceBus\ServiceBus\models;

use AzureServiceBus\ServiceBus\Internal\Action;
use AzureServiceBus\ServiceBus\Internal\Filter;
use AzureServiceBus\ServiceBus\Models\RuleDescription;
use AzureServiceBus\ServiceBus\Models\RuleInfo;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for class WrapAccessTokenResult.
 *
 * @category  Microsoft
 *
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @version   Release: 0.5.0_2016-11
 *
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */
class RuleInfoTest extends TestCase
{
    /**
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::__construct
     */
    public function testRuleInfoConstructor()
    {
        // Setup
        $expected = 'testRuleInfoName';

        // Test
        $ruleInfo = new RuleInfo($expected);
        $actual = $ruleInfo->getTitle();

        // Assert
        $this->assertNotNull($ruleInfo);
        $this->assertEquals(
            $expected,
            $actual
        );
    }

    /** 
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::getRuleDescription
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::setRuleDescription
     */
    public function testGetSetRuleDescription()
    {
        // Setup
        $expected = new RuleDescription();
        $ruleInfo = new RuleInfo();

        // Test
        $ruleInfo->setRuleDescription($expected);
        $actual = $ruleInfo->getRuleDescription();

        // Assert 
        $this->assertEquals(
            $expected,
            $actual
        );
    }

    /** 
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::getFilter
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::setFilter
     */
    public function testGetSetFilter()
    {
        // Setup
        $expected = new Filter();
        $ruleInfo = new RuleInfo();

        // Test
        $ruleInfo->setFilter($expected);
        $actual = $ruleInfo->getFilter();

        // Assert 
        $this->assertEquals(
            $expected,
            $actual
        );
    }

    /** 
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::getAction
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::setAction
     */
    public function testGetSetAction()
    {
        // Setup
        $expected = new Action();
        $ruleInfo = new RuleInfo();

        // Test
        $ruleInfo->setAction($expected);
        $actual = $ruleInfo->getAction();

        // Assert 
        $this->assertEquals(
            $expected,
            $actual
        );
    }

    /** 
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::getName
     * @covers \AzureServiceBus\ServiceBus\Models\RuleInfo::setName
     */
    public function testGetSetName()
    {
        // Setup
        $expected = 'testName';
        $ruleInfo = new RuleInfo();

        // Test
        $ruleInfo->setName($expected);
        $actual = $ruleInfo->getName();

        // Assert 
        $this->assertEquals(
            $expected,
            $actual
        );
    }
}
