<?php
namespace Microsoft\Azure\Management\ApiManagement\_2017_03_01;
final class ProductSubscriptions
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_List_operation = $_client->createOperation('ProductSubscriptions_List');
    }
    /**
     * Lists the collection of subscriptions to the specified product.
     * @param string $resourceGroupName
     * @param string $serviceName
     * @param string $productId
     * @param string $_filter
     * @param integer $_top
     * @param integer $_skip
     * @return array
     */
    public function list_(
        $resourceGroupName,
        $serviceName,
        $productId,
        $_filter,
        $_top,
        $_skip
    )
    {
        return $this->_List_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'serviceName' => $serviceName,
            'productId' => $productId,
            '$filter' => $_filter,
            '$top' => $_top,
            '$skip' => $_skip
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_List_operation;
}