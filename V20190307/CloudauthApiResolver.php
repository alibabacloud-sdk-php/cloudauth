<?php

namespace AlibabaCloud\Cloudauth\V20190307;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CompareFaces compareFaces(array $options = [])
 * @method ContrastFaceVerify contrastFaceVerify(array $options = [])
 * @method CreateAuthKey createAuthKey(array $options = [])
 * @method CreateRPSDK createRPSDK(array $options = [])
 * @method CreateVerifySDK createVerifySDK(array $options = [])
 * @method CreateVerifySetting createVerifySetting(array $options = [])
 * @method DescribeDeviceInfo describeDeviceInfo(array $options = [])
 * @method DescribeFaceUsage describeFaceUsage(array $options = [])
 * @method DescribeFaceVerify describeFaceVerify(array $options = [])
 * @method DescribeOssUploadToken describeOssUploadToken(array $options = [])
 * @method DescribeRPSDK describeRPSDK(array $options = [])
 * @method DescribeUploadInfo describeUploadInfo(array $options = [])
 * @method DescribeUserStatus describeUserStatus(array $options = [])
 * @method DescribeVerifyRecords describeVerifyRecords(array $options = [])
 * @method DescribeVerifyResult describeVerifyResult(array $options = [])
 * @method DescribeVerifySDK describeVerifySDK(array $options = [])
 * @method DescribeVerifySetting describeVerifySetting(array $options = [])
 * @method DescribeVerifyToken describeVerifyToken(array $options = [])
 * @method DescribeVerifyUsage describeVerifyUsage(array $options = [])
 * @method DetectFaceAttributes detectFaceAttributes(array $options = [])
 * @method InitDevice initDevice(array $options = [])
 * @method InitFaceVerify initFaceVerify(array $options = [])
 * @method ModifyDeviceInfo modifyDeviceInfo(array $options = [])
 * @method UpdateVerifySetting updateVerifySetting(array $options = [])
 * @method VerifyDevice verifyDevice(array $options = [])
 * @method VerifyMaterial verifyMaterial(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2019-03-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getSourceImageType()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetImageType()
 * @method string getTargetImageValue()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSourceImageValue()
 */
class CompareFaces extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageType($value)
    {
        $this->data['SourceImageType'] = $value;
        $this->options['form_params']['SourceImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageType($value)
    {
        $this->data['TargetImageType'] = $value;
        $this->options['form_params']['TargetImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetImageValue($value)
    {
        $this->data['TargetImageValue'] = $value;
        $this->options['form_params']['TargetImageValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceImageValue($value)
    {
        $this->data['SourceImageValue'] = $value;
        $this->options['form_params']['SourceImageValue'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getFaceContrastPicture()
 * @method $this withFaceContrastPicture($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getDeviceToken()
 * @method $this withDeviceToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getFaceContrastPictureUrl()
 * @method $this withFaceContrastPictureUrl($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 */
class ContrastFaceVerify extends Rpc
{
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getTest()
 * @method $this withTest($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAuthYears()
 * @method $this withAuthYears($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateAuthKey extends Rpc
{
}

/**
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateRPSDK extends Rpc
{
}

/**
 * @method string getAppUrl()
 * @method $this withAppUrl($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CreateVerifySDK extends Rpc
{
}

/**
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class CreateVerifySetting extends Rpc
{
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExpiredStartDay()
 * @method $this withExpiredStartDay($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getExpiredEndDay()
 * @method $this withExpiredEndDay($value)
 */
class DescribeDeviceInfo extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeFaceUsage extends Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 */
class DescribeFaceVerify extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOssUploadToken extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeRPSDK extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUploadInfo extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeUserStatus extends Rpc
{
}

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getIdCardNum()
 * @method $this withIdCardNum($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyRecords extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeVerifyResult extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVerifySetting extends Rpc
{
}

/**
 * @method string getFaceRetainedImageUrl()
 * @method $this withFaceRetainedImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCallbackSeed()
 * @method $this withCallbackSeed($value)
 * @method string getUserIp()
 * @method $this withUserIp($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPassedRedirectUrl()
 * @method $this withPassedRedirectUrl($value)
 * @method string getUserRegistTime()
 * @method $this withUserRegistTime($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUserPhoneNumber()
 * @method $this withUserPhoneNumber($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getFailedRedirectUrl()
 * @method $this withFailedRedirectUrl($value)
 */
class DescribeVerifyToken extends Rpc
{
}

/**
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeVerifyUsage extends Rpc
{
}

/**
 * @method string getMaxNumPhotosPerCategory()
 * @method string getMaxFaceNum()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRetAttributes()
 * @method string getClientTag()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMaterialValue()
 * @method string getDontSaveDB()
 */
class DetectFaceAttributes extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxNumPhotosPerCategory($value)
    {
        $this->data['MaxNumPhotosPerCategory'] = $value;
        $this->options['form_params']['MaxNumPhotosPerCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxFaceNum($value)
    {
        $this->data['MaxFaceNum'] = $value;
        $this->options['form_params']['MaxFaceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRetAttributes($value)
    {
        $this->data['RetAttributes'] = $value;
        $this->options['form_params']['RetAttributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientTag($value)
    {
        $this->data['ClientTag'] = $value;
        $this->options['form_params']['ClientTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaterialValue($value)
    {
        $this->data['MaterialValue'] = $value;
        $this->options['form_params']['MaterialValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDontSaveDB($value)
    {
        $this->data['DontSaveDB'] = $value;
        $this->options['form_params']['DontSaveDB'] = $value;

        return $this;
    }
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getBizData()
 * @method $this withBizData($value)
 * @method string getMerchant()
 * @method $this withMerchant($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getDeviceToken()
 * @method $this withDeviceToken($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getProduceNode()
 * @method $this withProduceNode($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getCertifyPrincipal()
 * @method $this withCertifyPrincipal($value)
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 */
class InitDevice extends Rpc
{
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getFaceContrastPicture()
 * @method $this withFaceContrastPicture($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 * @method string getCertNo()
 * @method $this withCertNo($value)
 * @method string getOuterOrderNo()
 * @method $this withOuterOrderNo($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getFaceContrastPictureUrl()
 * @method $this withFaceContrastPictureUrl($value)
 * @method string getMetaInfo()
 * @method $this withMetaInfo($value)
 * @method string getOssObjectName()
 * @method $this withOssObjectName($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOssBucketName()
 * @method $this withOssBucketName($value)
 * @method string getReturnUrl()
 * @method $this withReturnUrl($value)
 */
class InitFaceVerify extends Rpc
{
}

/**
 * @method string getUserDeviceId()
 * @method $this withUserDeviceId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getExpiredDay()
 * @method $this withExpiredDay($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class ModifyDeviceInfo extends Rpc
{
}

/**
 * @method string getGuideStep()
 * @method $this withGuideStep($value)
 * @method string getResultStep()
 * @method $this withResultStep($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSolution()
 * @method $this withSolution($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getPrivacyStep()
 * @method $this withPrivacyStep($value)
 */
class UpdateVerifySetting extends Rpc
{
}

/**
 * @method string getCertifyData()
 * @method $this withCertifyData($value)
 * @method string getAppVersion()
 * @method $this withAppVersion($value)
 * @method string getCertifyId()
 * @method $this withCertifyId($value)
 */
class VerifyDevice extends Rpc
{
}

/**
 * @method string getFaceImageUrl()
 * @method $this withFaceImageUrl($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIdCardBackImageUrl()
 * @method $this withIdCardBackImageUrl($value)
 * @method string getIdCardNumber()
 * @method $this withIdCardNumber($value)
 * @method string getIdCardFrontImageUrl()
 * @method $this withIdCardFrontImageUrl($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class VerifyMaterial extends Rpc
{
}
