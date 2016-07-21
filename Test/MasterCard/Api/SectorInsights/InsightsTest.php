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



class InsightsTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_insights()
        {

            $map = new RequestMap();
            
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            $map->set("Country", "US");
            
            

            $response = Insights::query($map);

            $this->customAssertValue("70", $response->get("SectorRecordList.Count"));
            $this->customAssertValue("Success", $response->get("SectorRecordList.Message"));
            $this->customAssertValue("US", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].Country"));
            $this->customAssertValue("U.S. Natural and Organic Grocery Stores", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].Sector"));
            $this->customAssertValue("NO", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].Ecomm"));
            $this->customAssertValue("Monthly", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].Period"));
            $this->customAssertValue("11/30/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].BeginDate"));
            $this->customAssertValue("1/3/2015", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].EndDate"));
            $this->customAssertValue("0.049201983", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].SalesIndex"));
            $this->customAssertValue("-0.029602284", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].AverageTicketIndex"));
            $this->customAssertValue("7146577.851", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[0].SalesIndexValue"));
            $this->customAssertValue("US", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].Country"));
            $this->customAssertValue("U.S. Natural and Organic Grocery Stores", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].Sector"));
            $this->customAssertValue("NO", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].Ecomm"));
            $this->customAssertValue("Monthly", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].Period"));
            $this->customAssertValue("11/2/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].BeginDate"));
            $this->customAssertValue("11/29/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].EndDate"));
            $this->customAssertValue("0.074896863", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].SalesIndex"));
            $this->customAssertValue("-0.007884916", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].AverageTicketIndex"));
            $this->customAssertValue("5390273.888", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[1].SalesIndexValue"));
            $this->customAssertValue("US", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].Country"));
            $this->customAssertValue("U.S. Natural and Organic Grocery Stores", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].Sector"));
            $this->customAssertValue("NO", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].Ecomm"));
            $this->customAssertValue("Monthly", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].Period"));
            $this->customAssertValue("10/5/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].BeginDate"));
            $this->customAssertValue("11/1/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].EndDate"));
            $this->customAssertValue("0.077937282", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].SalesIndex"));
            $this->customAssertValue("-0.010073866", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].AverageTicketIndex"));
            $this->customAssertValue("4776139.381", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[2].SalesIndexValue"));
            $this->customAssertValue("US", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].Country"));
            $this->customAssertValue("U.S. Natural and Organic Grocery Stores", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].Sector"));
            $this->customAssertValue("NO", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].Ecomm"));
            $this->customAssertValue("Monthly", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].Period"));
            $this->customAssertValue("9/7/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].BeginDate"));
            $this->customAssertValue("10/4/2014", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].EndDate"));
            $this->customAssertValue("0.089992028", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].SalesIndex"));
            $this->customAssertValue("-0.00577838", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].AverageTicketIndex"));
            $this->customAssertValue("4716899.304", $response->get("SectorRecordList.SectorRecordArray.SectorRecord[3].SalesIndexValue"));
            

        }
        
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



