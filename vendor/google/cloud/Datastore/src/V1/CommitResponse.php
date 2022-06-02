<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Datastore.Commit][google.datastore.v1.Datastore.Commit].
 *
 * Generated from protobuf message <code>google.datastore.v1.CommitResponse</code>
 */
class CommitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.MutationResult mutation_results = 3;</code>
     */
    private $mutation_results;
    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     */
    private $index_updates = 0;
    /**
     * The transaction commit timestamp. Not set for non-transactional commits.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 8;</code>
     */
    private $commit_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\MutationResult[]|\Google\Protobuf\Internal\RepeatedField $mutation_results
     *           The result of performing the mutations.
     *           The i-th mutation result corresponds to the i-th mutation in the request.
     *     @type int $index_updates
     *           The number of index entries updated during the commit, or zero if none were
     *           updated.
     *     @type \Google\Protobuf\Timestamp $commit_time
     *           The transaction commit timestamp. Not set for non-transactional commits.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.MutationResult mutation_results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutationResults()
    {
        return $this->mutation_results;
    }

    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.MutationResult mutation_results = 3;</code>
     * @param \Google\Cloud\Datastore\V1\MutationResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutationResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\MutationResult::class);
        $this->mutation_results = $arr;

        return $this;
    }

    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     * @return int
     */
    public function getIndexUpdates()
    {
        return $this->index_updates;
    }

    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIndexUpdates($var)
    {
        GPBUtil::checkInt32($var);
        $this->index_updates = $var;

        return $this;
    }

    /**
     * The transaction commit timestamp. Not set for non-transactional commits.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCommitTime()
    {
        return $this->commit_time;
    }

    public function hasCommitTime()
    {
        return isset($this->commit_time);
    }

    public function clearCommitTime()
    {
        unset($this->commit_time);
    }

    /**
     * The transaction commit timestamp. Not set for non-transactional commits.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commit_time = $var;

        return $this;
    }

}
