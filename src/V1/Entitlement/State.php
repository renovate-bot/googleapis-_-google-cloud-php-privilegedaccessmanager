<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1\Entitlement;

use UnexpectedValueException;

/**
 * Different states an entitlement can be in.
 *
 * Protobuf type <code>google.cloud.privilegedaccessmanager.v1.Entitlement.State</code>
 */
class State
{
    /**
     * Unspecified state. This value is never returned by the server.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The entitlement is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The entitlement is available for requesting access.
     *
     * Generated from protobuf enum <code>AVAILABLE = 2;</code>
     */
    const AVAILABLE = 2;
    /**
     * The entitlement is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * The entitlement has been deleted.
     *
     * Generated from protobuf enum <code>DELETED = 4;</code>
     */
    const DELETED = 4;
    /**
     * The entitlement is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 5;</code>
     */
    const UPDATING = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::AVAILABLE => 'AVAILABLE',
        self::DELETING => 'DELETING',
        self::DELETED => 'DELETED',
        self::UPDATING => 'UPDATING',
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

