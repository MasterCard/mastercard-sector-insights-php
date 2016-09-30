<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\SectorInsights;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class InsightsTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_insights()
        {
            

            

            $map = new RequestMap();
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            $map->set("Country", "US");
            
            
            $response = Insights::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.Count", "70");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.Message", "Success");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].Sector", "U.S. Natural and Organic Grocery Stores");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].Ecomm", "NO");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].Period", "Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].BeginDate", "11/30/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].EndDate", "1/3/2015");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].SalesIndex", "0.049201983");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].AverageTicketIndex", "-0.029602284");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[0].SalesIndexValue", "7146577.851");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].Sector", "U.S. Natural and Organic Grocery Stores");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].Ecomm", "NO");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].Period", "Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].BeginDate", "11/2/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].EndDate", "11/29/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].SalesIndex", "0.074896863");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].AverageTicketIndex", "-0.007884916");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[1].SalesIndexValue", "5390273.888");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].Sector", "U.S. Natural and Organic Grocery Stores");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].Ecomm", "NO");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].Period", "Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].BeginDate", "10/5/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].EndDate", "11/1/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].SalesIndex", "0.077937282");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].AverageTicketIndex", "-0.010073866");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[2].SalesIndexValue", "4776139.381");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].Sector", "U.S. Natural and Organic Grocery Stores");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].Ecomm", "NO");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].Period", "Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].BeginDate", "9/7/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].EndDate", "10/4/2014");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].SalesIndex", "0.089992028");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].AverageTicketIndex", "-0.00577838");
            $this->customAssertEqual($ignoreAssert, $response, "SectorRecordList.SectorRecordArray.SectorRecord[3].SalesIndexValue", "4716899.304");
            

            self::putResponse("example_insights", $response);
            
        }
        
    
    
}



