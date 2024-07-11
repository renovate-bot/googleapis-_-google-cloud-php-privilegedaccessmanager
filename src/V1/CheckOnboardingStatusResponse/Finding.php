<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1\CheckOnboardingStatusResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Finding represents an issue which prevents PAM from functioning properly
 * for this resource.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse.Finding</code>
 */
class Finding extends \Google\Protobuf\Internal\Message
{
    protected $finding_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PrivilegedAccessManager\V1\CheckOnboardingStatusResponse\Finding\IAMAccessDenied $iam_access_denied
     *           PAM's service account is being denied access by Cloud IAM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * PAM's service account is being denied access by Cloud IAM.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse.Finding.IAMAccessDenied iam_access_denied = 1;</code>
     * @return \Google\Cloud\PrivilegedAccessManager\V1\CheckOnboardingStatusResponse\Finding\IAMAccessDenied|null
     */
    public function getIamAccessDenied()
    {
        return $this->readOneof(1);
    }

    public function hasIamAccessDenied()
    {
        return $this->hasOneof(1);
    }

    /**
     * PAM's service account is being denied access by Cloud IAM.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.CheckOnboardingStatusResponse.Finding.IAMAccessDenied iam_access_denied = 1;</code>
     * @param \Google\Cloud\PrivilegedAccessManager\V1\CheckOnboardingStatusResponse\Finding\IAMAccessDenied $var
     * @return $this
     */
    public function setIamAccessDenied($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PrivilegedAccessManager\V1\CheckOnboardingStatusResponse\Finding\IAMAccessDenied::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFindingType()
    {
        return $this->whichOneof("finding_type");
    }

}


