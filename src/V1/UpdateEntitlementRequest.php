<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating an entitlement.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.UpdateEntitlementRequest</code>
 */
class UpdateEntitlementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The entitlement resource that is updated.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement entitlement = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entitlement = null;
    /**
     * Required. The list of fields to update. A field is overwritten if, and only
     * if, it is in the mask. Any immutable fields set in the mask are ignored by
     * the server. Repeated fields and map fields are only allowed in the last
     * position of a `paths` string and overwrite the existing values. Hence an
     * update to a repeated field or a map should contain the entire list of
     * values. The fields specified in the update_mask are relative to the
     * resource and not to the request.
     * (e.g. `MaxRequestDuration`; *not* `entitlement.MaxRequestDuration`)
     * A value of '*' for this field refers to full replacement of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\PrivilegedAccessManager\V1\Entitlement $entitlement Required. The entitlement resource that is updated.
     * @param \Google\Protobuf\FieldMask                           $updateMask  Required. The list of fields to update. A field is overwritten if, and only
     *                                                                          if, it is in the mask. Any immutable fields set in the mask are ignored by
     *                                                                          the server. Repeated fields and map fields are only allowed in the last
     *                                                                          position of a `paths` string and overwrite the existing values. Hence an
     *                                                                          update to a repeated field or a map should contain the entire list of
     *                                                                          values. The fields specified in the update_mask are relative to the
     *                                                                          resource and not to the request.
     *                                                                          (e.g. `MaxRequestDuration`; *not* `entitlement.MaxRequestDuration`)
     *                                                                          A value of '*' for this field refers to full replacement of the resource.
     *
     * @return \Google\Cloud\PrivilegedAccessManager\V1\UpdateEntitlementRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\PrivilegedAccessManager\V1\Entitlement $entitlement, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setEntitlement($entitlement)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PrivilegedAccessManager\V1\Entitlement $entitlement
     *           Required. The entitlement resource that is updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update. A field is overwritten if, and only
     *           if, it is in the mask. Any immutable fields set in the mask are ignored by
     *           the server. Repeated fields and map fields are only allowed in the last
     *           position of a `paths` string and overwrite the existing values. Hence an
     *           update to a repeated field or a map should contain the entire list of
     *           values. The fields specified in the update_mask are relative to the
     *           resource and not to the request.
     *           (e.g. `MaxRequestDuration`; *not* `entitlement.MaxRequestDuration`)
     *           A value of '*' for this field refers to full replacement of the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The entitlement resource that is updated.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement entitlement = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\PrivilegedAccessManager\V1\Entitlement|null
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    public function hasEntitlement()
    {
        return isset($this->entitlement);
    }

    public function clearEntitlement()
    {
        unset($this->entitlement);
    }

    /**
     * Required. The entitlement resource that is updated.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement entitlement = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\PrivilegedAccessManager\V1\Entitlement $var
     * @return $this
     */
    public function setEntitlement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PrivilegedAccessManager\V1\Entitlement::class);
        $this->entitlement = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update. A field is overwritten if, and only
     * if, it is in the mask. Any immutable fields set in the mask are ignored by
     * the server. Repeated fields and map fields are only allowed in the last
     * position of a `paths` string and overwrite the existing values. Hence an
     * update to a repeated field or a map should contain the entire list of
     * values. The fields specified in the update_mask are relative to the
     * resource and not to the request.
     * (e.g. `MaxRequestDuration`; *not* `entitlement.MaxRequestDuration`)
     * A value of '*' for this field refers to full replacement of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update. A field is overwritten if, and only
     * if, it is in the mask. Any immutable fields set in the mask are ignored by
     * the server. Repeated fields and map fields are only allowed in the last
     * position of a `paths` string and overwrite the existing values. Hence an
     * update to a repeated field or a map should contain the entire list of
     * values. The fields specified in the update_mask are relative to the
     * resource and not to the request.
     * (e.g. `MaxRequestDuration`; *not* `entitlement.MaxRequestDuration`)
     * A value of '*' for this field refers to full replacement of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
