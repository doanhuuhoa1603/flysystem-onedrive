<?php

namespace DoanHuuHoa1603\FlysystemOneDrive\Test;

use Microsoft\Graph\Graph;
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Http\GraphRequest;
use DoanHuuHoa1603\FlysystemOneDrive\OneDriveAdapter;

class OneDriveAdapterTest extends TestCase
{
    /** @var \Microsoft\Graph\Graph|\PHPUnit_Framework_MockObject_MockObject */
    protected $graph;

    /** @var \Microsoft\Graph\Http\GraphRequest|\PHPUnit_Framework_MockObject_MockObject */
    public $graphRequest;

    /** @var \DoanHuuHoa1603\FlysystemOneDrive\OneDriveAdapter */
    protected $oneDriveAdapter;

    public function setUp()
    {
        $this->graph = $this->getMockBuilder(Graph::class)->getMock();
        $this->graphRequest = $this->getMockBuilder(GraphRequest::class)->getMock();

        $this->graph->method('createRequest')->willReturn($this->graphRequest);

        $this->oneDriveAdapter = new OneDriveAdapter($this->graph);
    }

    /** @test */
    public function it_can_run_tests()
    {
        $this->assertTrue(true);
    }
}
