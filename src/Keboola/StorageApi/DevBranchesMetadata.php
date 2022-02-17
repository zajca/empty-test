<?php

namespace Keboola\StorageApi;

class DevBranchesMetadata
{
    /**
     * @var BranchAwareClient
     */
    private $client;

    public function __construct(BranchAwareClient $client)
    {
        $this->client = $client;
    }
    /**
     * @return mixed|string
     */
    public function listBranchMetadata()
    {
        return $this->client->apiGet("metadata");
    }

    /**
     * @param array $metadata
     * @return mixed|string
     */
    public function postBranchMetadata(array $metadata)
    {
        return $this->client->apiPost("metadata", [
            'metadata' => $metadata,
        ]);
    }

    /**
     * @param int|string $id
     * @return mixed|string
     */
    public function deleteBranchMetadata($id)
    {
        return $this->client->apiDelete("metadata/$id");
    }
}
