<?php

namespace Knightar\StampsSoapClient;

use Phpro\SoapClient\Caller\Caller;
use Knightar\StampsSoapClient\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class StampsSoapClientClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Calculate a rate or a list of rates.
     *
     * @param RequestInterface & Type\GetRates $parameters
     * @return ResultInterface || Type\GetRatesResponse
     * @throws SoapException
     */
    public function getRates(\Knightar\StampsSoapClient\Type\GetRates $parameters) : \Knightar\StampsSoapClient\Type\GetRatesResponse
    {
        $response = ($this->caller)('GetRates', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetRatesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Generate an indicium.
     *
     * @param RequestInterface & Type\CreateIndicium $parameters
     * @return ResultInterface || Type\CreateIndiciumResponse
     * @throws SoapException
     */
    public function createIndicium(\Knightar\StampsSoapClient\Type\CreateIndicium $parameters) : \Knightar\StampsSoapClient\Type\CreateIndiciumResponse
    {
        $response = ($this->caller)('CreateIndicium', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateIndiciumResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Generate an envelope indicium.
     *
     * @param RequestInterface & Type\CreateEnvelopeIndicium $parameters
     * @return ResultInterface || Type\CreateEnvelopeIndiciumResponse
     * @throws SoapException
     */
    public function createEnvelopeIndicium(\Knightar\StampsSoapClient\Type\CreateEnvelopeIndicium $parameters) : \Knightar\StampsSoapClient\Type\CreateEnvelopeIndiciumResponse
    {
        $response = ($this->caller)('CreateEnvelopeIndicium', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateEnvelopeIndiciumResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Generate a mailing label sheet.
     *
     * @param RequestInterface & Type\CreateMailingLabelIndicia $parameters
     * @return ResultInterface || Type\CreateMailingLabelIndiciaResponse
     * @throws SoapException
     */
    public function createMailingLabelIndicia(\Knightar\StampsSoapClient\Type\CreateMailingLabelIndicia $parameters) : \Knightar\StampsSoapClient\Type\CreateMailingLabelIndiciaResponse
    {
        $response = ($this->caller)('CreateMailingLabelIndicia', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateMailingLabelIndiciaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Generate NetStamps indicia.
     *
     * @param RequestInterface & Type\CreateNetStampsIndicia $parameters
     * @return ResultInterface || Type\CreateNetStampsIndiciaResponse
     * @throws SoapException
     */
    public function createNetStampsIndicia(\Knightar\StampsSoapClient\Type\CreateNetStampsIndicia $parameters) : \Knightar\StampsSoapClient\Type\CreateNetStampsIndiciaResponse
    {
        $response = ($this->caller)('CreateNetStampsIndicia', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateNetStampsIndiciaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Register a new Stamps.com account.
     *
     * @param RequestInterface & Type\RegisterAccount $parameters
     * @return ResultInterface || Type\RegisterAccountResponse
     * @throws SoapException
     */
    public function registerAccount(\Knightar\StampsSoapClient\Type\RegisterAccount $parameters) : \Knightar\StampsSoapClient\Type\RegisterAccountResponse
    {
        $response = ($this->caller)('RegisterAccount', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\RegisterAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add carrier.
     *
     * @param RequestInterface & Type\AddCarrier $parameters
     * @return ResultInterface || Type\AddCarrierResponse
     * @throws SoapException
     */
    public function addCarrier(\Knightar\StampsSoapClient\Type\AddCarrier $parameters) : \Knightar\StampsSoapClient\Type\AddCarrierResponse
    {
        $response = ($this->caller)('AddCarrier', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AddCarrierResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add the image uploaded by the user.
     *
     * @param RequestInterface & Type\AddImage $parameters
     * @return ResultInterface || Type\AddImageResponse
     * @throws SoapException
     */
    public function addImage(\Knightar\StampsSoapClient\Type\AddImage $parameters) : \Knightar\StampsSoapClient\Type\AddImageResponse
    {
        $response = ($this->caller)('AddImage', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AddImageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add a payment method for the user.
     *
     * @param RequestInterface & Type\AddUserPaymentMethod $parameters
     * @return ResultInterface || Type\AddUserPaymentMethodResponse
     * @throws SoapException
     */
    public function addUserPaymentMethod(\Knightar\StampsSoapClient\Type\AddUserPaymentMethod $parameters) : \Knightar\StampsSoapClient\Type\AddUserPaymentMethodResponse
    {
        $response = ($this->caller)('AddUserPaymentMethod', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AddUserPaymentMethodResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Authenticate Bridge Authenticator
     *
     * @param RequestInterface & Type\AuthenticateBridgeAuthenticator $parameters
     * @return ResultInterface || Type\AuthenticateBridgeAuthenticatorResponse
     * @throws SoapException
     */
    public function authenticateBridgeAuthenticator(\Knightar\StampsSoapClient\Type\AuthenticateBridgeAuthenticator $parameters) : \Knightar\StampsSoapClient\Type\AuthenticateBridgeAuthenticatorResponse
    {
        $response = ($this->caller)('AuthenticateBridgeAuthenticator', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AuthenticateBridgeAuthenticatorResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Initial authentication.
     *
     * @param RequestInterface & Type\AuthenticateUser $parameters
     * @return ResultInterface || Type\AuthenticateUserResponse
     * @throws SoapException
     */
    public function authenticateUser(\Knightar\StampsSoapClient\Type\AuthenticateUser $parameters) : \Knightar\StampsSoapClient\Type\AuthenticateUserResponse
    {
        $response = ($this->caller)('AuthenticateUser', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AuthenticateUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Authenticate with transfer authenticator.
     *
     * @param RequestInterface & Type\AuthenticateWithTransferAuthenticator $parameters
     * @return ResultInterface || Type\AuthenticateWithTransferAuthenticatorResponse
     * @throws SoapException
     */
    public function authenticateWithTransferAuthenticator(\Knightar\StampsSoapClient\Type\AuthenticateWithTransferAuthenticator $parameters) : \Knightar\StampsSoapClient\Type\AuthenticateWithTransferAuthenticatorResponse
    {
        $response = ($this->caller)('AuthenticateWithTransferAuthenticator', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\AuthenticateWithTransferAuthenticatorResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Cancel an Account.
     *
     * @param RequestInterface & Type\CancelAccount $parameters
     * @return ResultInterface || Type\CancelAccountResponse
     * @throws SoapException
     */
    public function cancelAccount(\Knightar\StampsSoapClient\Type\CancelAccount $parameters) : \Knightar\StampsSoapClient\Type\CancelAccountResponse
    {
        $response = ($this->caller)('CancelAccount', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CancelAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Cancel existing carrier pickup request.
     *
     * @param RequestInterface & Type\CancelCarrierPickup $parameters
     * @return ResultInterface || Type\CancelCarrierPickupResponse
     * @throws SoapException
     */
    public function cancelCarrierPickup(\Knightar\StampsSoapClient\Type\CancelCarrierPickup $parameters) : \Knightar\StampsSoapClient\Type\CancelCarrierPickupResponse
    {
        $response = ($this->caller)('CancelCarrierPickup', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CancelCarrierPickupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Cancel a previously issued indicium.
     *
     * @param RequestInterface & Type\CancelIndicium $parameters
     * @return ResultInterface || Type\CancelIndiciumResponse
     * @throws SoapException
     */
    public function cancelIndicium(\Knightar\StampsSoapClient\Type\CancelIndicium $parameters) : \Knightar\StampsSoapClient\Type\CancelIndiciumResponse
    {
        $response = ($this->caller)('CancelIndicium', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CancelIndiciumResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add a payment method for the user.
     *
     * @param RequestInterface & Type\ChangeDefaultPaymentMethod $parameters
     * @return ResultInterface || Type\ChangeDefaultPaymentMethodResponse
     * @throws SoapException
     */
    public function changeDefaultPaymentMethod(\Knightar\StampsSoapClient\Type\ChangeDefaultPaymentMethod $parameters) : \Knightar\StampsSoapClient\Type\ChangeDefaultPaymentMethodResponse
    {
        $response = ($this->caller)('ChangeDefaultPaymentMethod', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ChangeDefaultPaymentMethodResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Change Password.
     *
     * @param RequestInterface & Type\ChangePassword $parameters
     * @return ResultInterface || Type\ChangePasswordResponse
     * @throws SoapException
     */
    public function changePassword(\Knightar\StampsSoapClient\Type\ChangePassword $parameters) : \Knightar\StampsSoapClient\Type\ChangePasswordResponse
    {
        $response = ($this->caller)('ChangePassword', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ChangePasswordResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Change Plan.
     *
     * @param RequestInterface & Type\ChangePlan $parameters
     * @return ResultInterface || Type\ChangePlanResponse
     * @throws SoapException
     */
    public function changePlan(\Knightar\StampsSoapClient\Type\ChangePlan $parameters) : \Knightar\StampsSoapClient\Type\ChangePlanResponse
    {
        $response = ($this->caller)('ChangePlan', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ChangePlanResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Check carrier pickup availability for an address.
     *
     * @param RequestInterface & Type\CheckCarrierPickupAvailability $parameters
     * @return ResultInterface || Type\CheckCarrierPickupAvailabilityResponse
     * @throws SoapException
     */
    public function checkCarrierPickupAvailability(\Knightar\StampsSoapClient\Type\CheckCarrierPickupAvailability $parameters) : \Knightar\StampsSoapClient\Type\CheckCarrierPickupAvailabilityResponse
    {
        $response = ($this->caller)('CheckCarrierPickupAvailability', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CheckCarrierPickupAvailabilityResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Cleanse an address.
     *
     * @param RequestInterface & Type\CleanseAddress $parameters
     * @return ResultInterface || Type\CleanseAddressResponse
     * @throws SoapException
     */
    public function cleanseAddress(\Knightar\StampsSoapClient\Type\CleanseAddress $parameters) : \Knightar\StampsSoapClient\Type\CleanseAddressResponse
    {
        $response = ($this->caller)('CleanseAddress', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CleanseAddressResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Create Branding.
     *
     * @param RequestInterface & Type\CreateBranding $parameters
     * @return ResultInterface || Type\CreateBrandingResponse
     * @throws SoapException
     */
    public function createBranding(\Knightar\StampsSoapClient\Type\CreateBranding $parameters) : \Knightar\StampsSoapClient\Type\CreateBrandingResponse
    {
        $response = ($this->caller)('CreateBranding', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateBrandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Generate a Carrier Shipment Manifest.
     *
     * @param RequestInterface & Type\CreateManifest $parameters
     * @return ResultInterface || Type\CreateManifestResponse
     * @throws SoapException
     */
    public function createManifest(\Knightar\StampsSoapClient\Type\CreateManifest $parameters) : \Knightar\StampsSoapClient\Type\CreateManifestResponse
    {
        $response = ($this->caller)('CreateManifest', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateManifestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateNotificationSetting $parameters
     * @return ResultInterface || Type\CreateNotificationSettingResponse
     * @throws SoapException
     */
    public function createNotificationSetting(\Knightar\StampsSoapClient\Type\CreateNotificationSetting $parameters) : \Knightar\StampsSoapClient\Type\CreateNotificationSettingResponse
    {
        $response = ($this->caller)('CreateNotificationSetting', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateNotificationSettingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Create Shipment Notification
     *
     * @param RequestInterface & Type\CreateShipmentNotification $parameters
     * @return ResultInterface || Type\CreateShipmentNotificationResponse
     * @throws SoapException
     */
    public function createShipmentNotification(\Knightar\StampsSoapClient\Type\CreateShipmentNotification $parameters) : \Knightar\StampsSoapClient\Type\CreateShipmentNotificationResponse
    {
        $response = ($this->caller)('CreateShipmentNotification', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\CreateShipmentNotificationResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Delete Branding.
     *
     * @param RequestInterface & Type\DeleteBranding $parameters
     * @return ResultInterface || Type\DeleteBrandingResponse
     * @throws SoapException
     */
    public function deleteBranding(\Knightar\StampsSoapClient\Type\DeleteBranding $parameters) : \Knightar\StampsSoapClient\Type\DeleteBrandingResponse
    {
        $response = ($this->caller)('DeleteBranding', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\DeleteBrandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Delete carrier.
     *
     * @param RequestInterface & Type\DeleteCarrier $parameters
     * @return ResultInterface || Type\DeleteCarrierResponse
     * @throws SoapException
     */
    public function deleteCarrier(\Knightar\StampsSoapClient\Type\DeleteCarrier $parameters) : \Knightar\StampsSoapClient\Type\DeleteCarrierResponse
    {
        $response = ($this->caller)('DeleteCarrier', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\DeleteCarrierResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Delete an image uploaded by the user.
     *
     * @param RequestInterface & Type\DeleteImage $parameters
     * @return ResultInterface || Type\DeleteImageResponse
     * @throws SoapException
     */
    public function deleteImage(\Knightar\StampsSoapClient\Type\DeleteImage $parameters) : \Knightar\StampsSoapClient\Type\DeleteImageResponse
    {
        $response = ($this->caller)('DeleteImage', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\DeleteImageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteNotificationSetting $parameters
     * @return ResultInterface || Type\DeleteNotificationSettingResponse
     * @throws SoapException
     */
    public function deleteNotificationSetting(\Knightar\StampsSoapClient\Type\DeleteNotificationSetting $parameters) : \Knightar\StampsSoapClient\Type\DeleteNotificationSettingResponse
    {
        $response = ($this->caller)('DeleteNotificationSetting', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\DeleteNotificationSettingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add a payment method for the user.
     *
     * @param RequestInterface & Type\DeleteUserPaymentMethod $parameters
     * @return ResultInterface || Type\DeleteUserPaymentMethodResponse
     * @throws SoapException
     */
    public function deleteUserPaymentMethod(\Knightar\StampsSoapClient\Type\DeleteUserPaymentMethod $parameters) : \Knightar\StampsSoapClient\Type\DeleteUserPaymentMethodResponse
    {
        $response = ($this->caller)('DeleteUserPaymentMethod', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\DeleteUserPaymentMethodResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Return the list of available CodeWord types.
     *
     * @param RequestInterface & Type\EnumCodeWordTypes $parameters
     * @return ResultInterface || Type\EnumCodeWordTypesResponse
     * @throws SoapException
     */
    public function enumCodeWordTypes(\Knightar\StampsSoapClient\Type\EnumCodeWordTypes $parameters) : \Knightar\StampsSoapClient\Type\EnumCodeWordTypesResponse
    {
        $response = ($this->caller)('EnumCodeWordTypes', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\EnumCodeWordTypesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of cost codes.
     *
     * @param RequestInterface & Type\EnumCostCodes $parameters
     * @return ResultInterface || Type\EnumCostCodesResponse
     * @throws SoapException
     */
    public function enumCostCodes(\Knightar\StampsSoapClient\Type\EnumCostCodes $parameters) : \Knightar\StampsSoapClient\Type\EnumCostCodesResponse
    {
        $response = ($this->caller)('EnumCostCodes', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\EnumCostCodesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of NetStamps layouts.
     *
     * @param RequestInterface & Type\EnumNetStampsLayouts $parameters
     * @return ResultInterface || Type\EnumNetStampsLayoutsResponse
     * @throws SoapException
     */
    public function enumNetStampsLayouts(\Knightar\StampsSoapClient\Type\EnumNetStampsLayouts $parameters) : \Knightar\StampsSoapClient\Type\EnumNetStampsLayoutsResponse
    {
        $response = ($this->caller)('EnumNetStampsLayouts', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\EnumNetStampsLayoutsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Finish account verification for phone.
     *
     * @param RequestInterface & Type\FinishAccountVerification $parameters
     * @return ResultInterface || Type\FinishAccountVerificationResponse
     * @throws SoapException
     */
    public function finishAccountVerification(\Knightar\StampsSoapClient\Type\FinishAccountVerification $parameters) : \Knightar\StampsSoapClient\Type\FinishAccountVerificationResponse
    {
        $response = ($this->caller)('FinishAccountVerification', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\FinishAccountVerificationResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Finish a password reset, setting the permanent password to a new password.
     *
     * @param RequestInterface & Type\FinishPasswordReset $parameters
     * @return ResultInterface || Type\FinishPasswordResetResponse
     * @throws SoapException
     */
    public function finishPasswordReset(\Knightar\StampsSoapClient\Type\FinishPasswordReset $parameters) : \Knightar\StampsSoapClient\Type\FinishPasswordResetResponse
    {
        $response = ($this->caller)('FinishPasswordReset', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\FinishPasswordResetResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get account information, including postage balance.
     *
     * @param RequestInterface & Type\GetAccountInfo $parameters
     * @return ResultInterface || Type\GetAccountInfoResponse
     * @throws SoapException
     */
    public function getAccountInfo(\Knightar\StampsSoapClient\Type\GetAccountInfo $parameters) : \Knightar\StampsSoapClient\Type\GetAccountInfoResponse
    {
        $response = ($this->caller)('GetAccountInfo', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetAccountInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of transactions.
     *
     * @param RequestInterface & Type\GetBalanceHistory $parameters
     * @return ResultInterface || Type\GetBalanceHistoryResponse
     * @throws SoapException
     */
    public function getBalanceHistory(\Knightar\StampsSoapClient\Type\GetBalanceHistory $parameters) : \Knightar\StampsSoapClient\Type\GetBalanceHistoryResponse
    {
        $response = ($this->caller)('GetBalanceHistory', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetBalanceHistoryResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of transactions.
     *
     * @param RequestInterface & Type\GetBalanceHistoryByToken $parameters
     * @return ResultInterface || Type\GetBalanceHistoryByTokenResponse
     * @throws SoapException
     */
    public function getBalanceHistoryByToken(\Knightar\StampsSoapClient\Type\GetBalanceHistoryByToken $parameters) : \Knightar\StampsSoapClient\Type\GetBalanceHistoryByTokenResponse
    {
        $response = ($this->caller)('GetBalanceHistoryByToken', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetBalanceHistoryByTokenResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get Branding.
     *
     * @param RequestInterface & Type\GetBranding $parameters
     * @return ResultInterface || Type\GetBrandingResponse
     * @throws SoapException
     */
    public function getBranding(\Knightar\StampsSoapClient\Type\GetBranding $parameters) : \Knightar\StampsSoapClient\Type\GetBrandingResponse
    {
        $response = ($this->caller)('GetBranding', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetBrandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get the existing carrier pickup requests.
     *
     * @param RequestInterface & Type\GetCarrierPickupList $parameters
     * @return ResultInterface || Type\GetCarrierPickupListResponse
     * @throws SoapException
     */
    public function getCarrierPickupList(\Knightar\StampsSoapClient\Type\GetCarrierPickupList $parameters) : \Knightar\StampsSoapClient\Type\GetCarrierPickupListResponse
    {
        $response = ($this->caller)('GetCarrierPickupList', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetCarrierPickupListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get status of plan change.
     *
     * @param RequestInterface & Type\GetChangePlanStatus $parameters
     * @return ResultInterface || Type\GetChangePlanStatusResponse
     * @throws SoapException
     */
    public function getChangePlanStatus(\Knightar\StampsSoapClient\Type\GetChangePlanStatus $parameters) : \Knightar\StampsSoapClient\Type\GetChangePlanStatusResponse
    {
        $response = ($this->caller)('GetChangePlanStatus', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetChangePlanStatusResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve codeword questions for user for starting password reset.
     *
     * @param RequestInterface & Type\GetCodewordQuestions $parameters
     * @return ResultInterface || Type\GetCodewordQuestionsResponse
     * @throws SoapException
     */
    public function getCodewordQuestions(\Knightar\StampsSoapClient\Type\GetCodewordQuestions $parameters) : \Knightar\StampsSoapClient\Type\GetCodewordQuestionsResponse
    {
        $response = ($this->caller)('GetCodewordQuestions', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetCodewordQuestionsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get the images uploaded by the user.
     *
     * @param RequestInterface & Type\GetImageList $parameters
     * @return ResultInterface || Type\GetImageListResponse
     * @throws SoapException
     */
    public function getImageList(\Knightar\StampsSoapClient\Type\GetImageList $parameters) : \Knightar\StampsSoapClient\Type\GetImageListResponse
    {
        $response = ($this->caller)('GetImageList', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetImageListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get NetStamps Images.
     *
     * @param RequestInterface & Type\GetNetStampsImages $parameters
     * @return ResultInterface || Type\GetNetStampsImagesResponse
     * @throws SoapException
     */
    public function getNetStampsImages(\Knightar\StampsSoapClient\Type\GetNetStampsImages $parameters) : \Knightar\StampsSoapClient\Type\GetNetStampsImagesResponse
    {
        $response = ($this->caller)('GetNetStampsImages', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetNetStampsImagesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetNotificationSettings $parameters
     * @return ResultInterface || Type\GetNotificationSettingsResponse
     * @throws SoapException
     */
    public function getNotificationSettings(\Knightar\StampsSoapClient\Type\GetNotificationSettings $parameters) : \Knightar\StampsSoapClient\Type\GetNotificationSettingsResponse
    {
        $response = ($this->caller)('GetNotificationSettings', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetNotificationSettingsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of shipments.
     *
     * @param RequestInterface & Type\GetShipmentList $parameters
     * @return ResultInterface || Type\GetShipmentListResponse
     * @throws SoapException
     */
    public function getShipmentList(\Knightar\StampsSoapClient\Type\GetShipmentList $parameters) : \Knightar\StampsSoapClient\Type\GetShipmentListResponse
    {
        $response = ($this->caller)('GetShipmentList', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetShipmentListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of shipments.
     *
     * @param RequestInterface & Type\GetShipmentListByToken $parameters
     * @return ResultInterface || Type\GetShipmentListByTokenResponse
     * @throws SoapException
     */
    public function getShipmentListByToken(\Knightar\StampsSoapClient\Type\GetShipmentListByToken $parameters) : \Knightar\StampsSoapClient\Type\GetShipmentListByTokenResponse
    {
        $response = ($this->caller)('GetShipmentListByToken', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetShipmentListByTokenResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get list of supported countries.
     *
     * @param RequestInterface & Type\GetSupportedCountries $parameters
     * @return ResultInterface || Type\GetSupportedCountriesResponse
     * @throws SoapException
     */
    public function getSupportedCountries(\Knightar\StampsSoapClient\Type\GetSupportedCountries $parameters) : \Knightar\StampsSoapClient\Type\GetSupportedCountriesResponse
    {
        $response = ($this->caller)('GetSupportedCountries', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetSupportedCountriesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get URL for a Stamps.com web page.
     *
     * @param RequestInterface & Type\GetURL $parameters
     * @return ResultInterface || Type\GetURLResponse
     * @throws SoapException
     */
    public function getURL(\Knightar\StampsSoapClient\Type\GetURL $parameters) : \Knightar\StampsSoapClient\Type\GetURLResponse
    {
        $response = ($this->caller)('GetURL', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\GetURLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Add a payment method for the user.
     *
     * @param RequestInterface & Type\ListPaymentMethods $parameters
     * @return ResultInterface || Type\ListPaymentMethodsResponse
     * @throws SoapException
     */
    public function listPaymentMethods(\Knightar\StampsSoapClient\Type\ListPaymentMethods $parameters) : \Knightar\StampsSoapClient\Type\ListPaymentMethodsResponse
    {
        $response = ($this->caller)('ListPaymentMethods', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ListPaymentMethodsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Modify Branding.
     *
     * @param RequestInterface & Type\ModifyBranding $parameters
     * @return ResultInterface || Type\ModifyBrandingResponse
     * @throws SoapException
     */
    public function modifyBranding(\Knightar\StampsSoapClient\Type\ModifyBranding $parameters) : \Knightar\StampsSoapClient\Type\ModifyBrandingResponse
    {
        $response = ($this->caller)('ModifyBranding', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ModifyBrandingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Modify existing carrier pickup request.
     *
     * @param RequestInterface & Type\ModifyCarrierPickup $parameters
     * @return ResultInterface || Type\ModifyCarrierPickupResponse
     * @throws SoapException
     */
    public function modifyCarrierPickup(\Knightar\StampsSoapClient\Type\ModifyCarrierPickup $parameters) : \Knightar\StampsSoapClient\Type\ModifyCarrierPickupResponse
    {
        $response = ($this->caller)('ModifyCarrierPickup', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ModifyCarrierPickupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ModifyNotificationSetting $parameters
     * @return ResultInterface || Type\ModifyNotificationSettingResponse
     * @throws SoapException
     */
    public function modifyNotificationSetting(\Knightar\StampsSoapClient\Type\ModifyNotificationSetting $parameters) : \Knightar\StampsSoapClient\Type\ModifyNotificationSettingResponse
    {
        $response = ($this->caller)('ModifyNotificationSetting', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ModifyNotificationSettingResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Place Store Orders.
     *
     * @param RequestInterface & Type\PlaceOrder $parameters
     * @return ResultInterface || Type\PlaceOrderResponse
     * @throws SoapException
     */
    public function placeOrder(\Knightar\StampsSoapClient\Type\PlaceOrder $parameters) : \Knightar\StampsSoapClient\Type\PlaceOrderResponse
    {
        $response = ($this->caller)('PlaceOrder', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\PlaceOrderResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Price Store Orders.
     *
     * @param RequestInterface & Type\PriceOrder $parameters
     * @return ResultInterface || Type\PriceOrderResponse
     * @throws SoapException
     */
    public function priceOrder(\Knightar\StampsSoapClient\Type\PriceOrder $parameters) : \Knightar\StampsSoapClient\Type\PriceOrderResponse
    {
        $response = ($this->caller)('PriceOrder', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\PriceOrderResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Purchase additional postage.
     *
     * @param RequestInterface & Type\PurchasePostage $parameters
     * @return ResultInterface || Type\PurchasePostageResponse
     * @throws SoapException
     */
    public function purchasePostage(\Knightar\StampsSoapClient\Type\PurchasePostage $parameters) : \Knightar\StampsSoapClient\Type\PurchasePostageResponse
    {
        $response = ($this->caller)('PurchasePostage', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\PurchasePostageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Recover Username.
     *
     * @param RequestInterface & Type\RecoverUsername $parameters
     * @return ResultInterface || Type\RecoverUsernameResponse
     * @throws SoapException
     */
    public function recoverUsername(\Knightar\StampsSoapClient\Type\RecoverUsername $parameters) : \Knightar\StampsSoapClient\Type\RecoverUsernameResponse
    {
        $response = ($this->caller)('RecoverUsername', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\RecoverUsernameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Create an ShippingProviderAccount
     *
     * @param RequestInterface & Type\RegisterShippingProviderAccount $parameters
     * @return ResultInterface || Type\RegisterShippingProviderAccountResponse
     * @throws SoapException
     */
    public function registerShippingProviderAccount(\Knightar\StampsSoapClient\Type\RegisterShippingProviderAccount $parameters) : \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountResponse
    {
        $response = ($this->caller)('RegisterShippingProviderAccount', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Begin Reprint Indicium
     *
     * @param RequestInterface & Type\ReprintIndicium $parameters
     * @return ResultInterface || Type\ReprintIndiciumResponse
     * @throws SoapException
     */
    public function reprintIndicium(\Knightar\StampsSoapClient\Type\ReprintIndicium $parameters) : \Knightar\StampsSoapClient\Type\ReprintIndiciumResponse
    {
        $response = ($this->caller)('ReprintIndicium', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ReprintIndiciumResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Resubmit Purchase.
     *
     * @param RequestInterface & Type\ResubmitPurchase $parameters
     * @return ResultInterface || Type\ResubmitPurchaseResponse
     * @throws SoapException
     */
    public function resubmitPurchase(\Knightar\StampsSoapClient\Type\ResubmitPurchase $parameters) : \Knightar\StampsSoapClient\Type\ResubmitPurchaseResponse
    {
        $response = ($this->caller)('ResubmitPurchase', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ResubmitPurchaseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Schedule carrier pickup.
     *
     * @param RequestInterface & Type\ScheduleCarrierPickup $parameters
     * @return ResultInterface || Type\ScheduleCarrierPickupResponse
     * @throws SoapException
     */
    public function scheduleCarrierPickup(\Knightar\StampsSoapClient\Type\ScheduleCarrierPickup $parameters) : \Knightar\StampsSoapClient\Type\ScheduleCarrierPickupResponse
    {
        $response = ($this->caller)('ScheduleCarrierPickup', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\ScheduleCarrierPickupResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Set auto-buy settings
     *
     * @param RequestInterface & Type\SetAutoBuy $parameters
     * @return ResultInterface || Type\SetAutoBuyResponse
     * @throws SoapException
     */
    public function setAutoBuy(\Knightar\StampsSoapClient\Type\SetAutoBuy $parameters) : \Knightar\StampsSoapClient\Type\SetAutoBuyResponse
    {
        $response = ($this->caller)('SetAutoBuy', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\SetAutoBuyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Set CodeWord information
     *
     * @param RequestInterface & Type\SetCodeWords $parameters
     * @return ResultInterface || Type\SetCodeWordsResponse
     * @throws SoapException
     */
    public function setCodeWords(\Knightar\StampsSoapClient\Type\SetCodeWords $parameters) : \Knightar\StampsSoapClient\Type\SetCodeWordsResponse
    {
        $response = ($this->caller)('SetCodeWords', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\SetCodeWordsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Start account verification for phone.
     *
     * @param RequestInterface & Type\StartAccountVerification $parameters
     * @return ResultInterface || Type\StartAccountVerificationResponse
     * @throws SoapException
     */
    public function startAccountVerification(\Knightar\StampsSoapClient\Type\StartAccountVerification $parameters) : \Knightar\StampsSoapClient\Type\StartAccountVerificationResponse
    {
        $response = ($this->caller)('StartAccountVerification', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\StartAccountVerificationResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Start a password reset by sending a temporary password to the e-mail address on file.
     *
     * @param RequestInterface & Type\StartPasswordReset $parameters
     * @return ResultInterface || Type\StartPasswordResetResponse
     * @throws SoapException
     */
    public function startPasswordReset(\Knightar\StampsSoapClient\Type\StartPasswordReset $parameters) : \Knightar\StampsSoapClient\Type\StartPasswordResetResponse
    {
        $response = ($this->caller)('StartPasswordReset', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\StartPasswordResetResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Get tracking events for shipment.
     *
     * @param RequestInterface & Type\TrackShipment $parameters
     * @return ResultInterface || Type\TrackShipmentResponse
     * @throws SoapException
     */
    public function trackShipment(\Knightar\StampsSoapClient\Type\TrackShipment $parameters) : \Knightar\StampsSoapClient\Type\TrackShipmentResponse
    {
        $response = ($this->caller)('TrackShipment', $parameters);

        \Psl\Type\instance_of(\Knightar\StampsSoapClient\Type\TrackShipmentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}