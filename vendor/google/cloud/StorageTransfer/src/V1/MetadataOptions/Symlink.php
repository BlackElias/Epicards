<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\MetadataOptions;

use UnexpectedValueException;

/**
 * Whether symlinks should be skipped or preserved during a transfer job.
 *
 * Protobuf type <code>google.storagetransfer.v1.MetadataOptions.Symlink</code>
 */
class Symlink
{
    /**
     * Symlink behavior is unspecified.
     *
     * Generated from protobuf enum <code>SYMLINK_UNSPECIFIED = 0;</code>
     */
    const SYMLINK_UNSPECIFIED = 0;
    /**
     * Do not preserve symlinks during a transfer job.
     *
     * Generated from protobuf enum <code>SYMLINK_SKIP = 1;</code>
     */
    const SYMLINK_SKIP = 1;
    /**
     * Preserve symlinks during a transfer job.
     *
     * Generated from protobuf enum <code>SYMLINK_PRESERVE = 2;</code>
     */
    const SYMLINK_PRESERVE = 2;

    private static $valueToName = [
        self::SYMLINK_UNSPECIFIED => 'SYMLINK_UNSPECIFIED',
        self::SYMLINK_SKIP => 'SYMLINK_SKIP',
        self::SYMLINK_PRESERVE => 'SYMLINK_PRESERVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

