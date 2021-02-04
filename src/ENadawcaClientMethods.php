<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

trait ENadawcaClientMethods
{
    public function addShipment(Type\AddShipment $request): Type\AddShipmentResponse
    {
        return $this->callMethod('addShipment', $request);
    }

    public function sendEnvelope(Type\SendEnvelope $request): Type\SendEnvelopeResponse
    {
        return $this->callMethod('sendEnvelope', $request);
    }

    public function getEnvelopeBufor(Type\GetEnvelopeBufor $request): Type\GetEnvelopeBuforResponse
    {
        return $this->callMethod('getEnvelopeBufor', $request);
    }

    public function getEnvelopeBuforList(Type\GetEnvelopeBuforList $request): Type\GetEnvelopeBuforListResponse
    {
        return $this->callMethod('getEnvelopeBuforList', $request);
    }

    public function createEnvelopeBufor(Type\CreateEnvelopeBufor $request): Type\CreateEnvelopeBuforResponse
    {
        return $this->callMethod('createEnvelopeBufor', $request);
    }

    public function updateEnvelopeBufor(Type\UpdateEnvelopeBufor $request): Type\UpdateEnvelopeBuforResponse
    {
        return $this->callMethod('updateEnvelopeBufor', $request);
    }

    public function clearEnvelopeByGuids(Type\ClearEnvelopeByGuids $request): Type\ClearEnvelopeByGuidsResponse
    {
        return $this->callMethod('clearEnvelopeByGuids', $request);
    }

    public function clearEnvelope(Type\ClearEnvelope $request): Type\ClearEnvelopeResponse
    {
        return $this->callMethod('clearEnvelope', $request);
    }

    public function moveShipments(Type\MoveShipments $request): Type\MoveShipmentsResponse
    {
        return $this->callMethod('moveShipments', $request);
    }

    public function getAddressLabel(Type\GetAddressLabel $request): Type\GetAddressLabelResponse
    {
        return $this->callMethod('getAddressLabel', $request);
    }

    public function getAddresLabelCompact(Type\GetAddresLabelCompact $request): Type\GetAddresLabelCompactResponse
    {
        return $this->callMethod('getAddresLabelCompact', $request);
    }

    public function getOutboxBook(Type\GetOutboxBook $request): Type\GetOutboxBookResponse
    {
        return $this->callMethod('getOutboxBook', $request);
    }

    public function getFirmowaPocztaBook(Type\GetFirmowaPocztaBook $request): Type\GetFirmowaPocztaBookResponse
    {
        return $this->callMethod('getFirmowaPocztaBook', $request);
    }

    public function getEnvelopeStatus(Type\GetEnvelopeStatus $request): Type\GetEnvelopeStatusResponse
    {
        return $this->callMethod('getEnvelopeStatus', $request);
    }

    public function getEnvelopeList(Type\GetEnvelopeList $request): Type\GetEnvelopeListResponse
    {
        return $this->callMethod('getEnvelopeList', $request);
    }

    public function getEnvelopeContentShort(Type\GetEnvelopeContentShort $request): Type\GetEnvelopeContentShortResponse
    {
        return $this->callMethod('getEnvelopeContentShort', $request);
    }

    public function getEnvelopeContentFull(Type\GetEnvelopeContentFull $request): Type\GetEnvelopeContentFullResponse
    {
        return $this->callMethod('getEnvelopeContentFull', $request);
    }

    public function getKarty(Type\GetKarty $request): Type\GetKartyResponse
    {
        return $this->callMethod('getKarty', $request);
    }

    public function setAktywnaKarta(Type\SetAktywnaKarta $request): Type\SetAktywnaKartaResponse
    {
        return $this->callMethod('setAktywnaKarta', $request);
    }

    public function getUrzedyNadania(Type\GetUrzedyNadania $request): Type\GetUrzedyNadaniaResponse
    {
        return $this->callMethod('getUrzedyNadania', $request);
    }

    public function getUrzedyWydajaceEPrzesylki(Type\GetUrzedyWydajaceEPrzesylki $request): Type\GetUrzedyWydajaceEPrzesylkiResponse
    {
        return $this->callMethod('getUrzedyWydajaceEPrzesylki', $request);
    }

    public function uploadIWDContent(Type\UploadIWDContent $request): Type\UploadIWDContentResponse
    {
        return $this->callMethod('uploadIWDContent', $request);
    }

    public function downloadIWDContent(Type\DownloadIWDContent $request): Type\DownloadIWDContentResponse
    {
        return $this->callMethod('downloadIWDContent', $request);
    }

    public function changePassword(Type\ChangePassword $request): Type\ChangePasswordResponse
    {
        return $this->callMethod('changePassword', $request);
    }

    public function getPasswordExpiredDate(Type\GetPasswordExpiredDate $request): Type\GetPasswordExpiredDateResponse
    {
        return $this->callMethod('getPasswordExpiredDate', $request);
    }

    public function hello(Type\Hello $request): Type\HelloResponse
    {
        return $this->callMethod('hello', $request);
    }

    public function getAddresLabelByGuid(Type\GetAddresLabelByGuid $request): Type\GetAddresLabelByGuidResponse
    {
        return $this->callMethod('getAddresLabelByGuid', $request);
    }

    public function getAddresLabelByGuidCompact(Type\GetAddresLabelByGuidCompact $request): Type\GetAddresLabelByGuidCompactResponse
    {
        return $this->callMethod('getAddresLabelByGuidCompact', $request);
    }

    public function getPlacowkiPocztowe(Type\GetPlacowkiPocztowe $request): Type\GetPlacowkiPocztoweResponse
    {
        return $this->callMethod('getPlacowkiPocztowe', $request);
    }

    public function getGuid(Type\GetGuid $request): Type\GetGuidResponse
    {
        return $this->callMethod('getGuid', $request);
    }

    public function getKierunki(Type\GetKierunki $request): Type\GetKierunkiResponse
    {
        return $this->callMethod('getKierunki', $request);
    }

    public function getKierunkiInfo(Type\GetKierunkiInfo $request): Type\GetKierunkiInfoResponse
    {
        return $this->callMethod('getKierunkiInfo', $request);
    }

    public function getEPOStatus(Type\GetEPOStatus $request): Type\GetEPOStatusResponse
    {
        return $this->callMethod('getEPOStatus', $request);
    }

    public function setEnvelopeBuforDataNadania(Type\SetEnvelopeBuforDataNadania $request): Type\SetEnvelopeBuforDataNadaniaResponse
    {
        return $this->callMethod('setEnvelopeBuforDataNadania', $request);
    }

    public function getUbezpieczeniaInfo(Type\GetUbezpieczeniaInfo $request): Type\GetUbezpieczeniaInfoResponse
    {
        return $this->callMethod('getUbezpieczeniaInfo', $request);
    }

    public function isMiejscowa(Type\IsMiejscowa $request): Type\IsMiejscowaResponse
    {
        return $this->callMethod('isMiejscowa', $request);
    }

    public function getBlankietPobraniaByGuids(Type\GetBlankietPobraniaByGuids $request): Type\GetBlankietPobraniaByGuidsResponse
    {
        return $this->callMethod('getBlankietPobraniaByGuids', $request);
    }

    public function getAccountList(Type\GetAccountList $request): Type\GetAccountListResponse
    {
        return $this->callMethod('getAccountList', $request);
    }

    public function createAccount(Type\CreateAccount $request): Type\CreateAccountResponse
    {
        return $this->callMethod('createAccount', $request);
    }

    public function updateAccount(Type\UpdateAccount $request): Type\UpdateAccountResponse
    {
        return $this->callMethod('updateAccount', $request);
    }

    public function getProfilList(Type\GetProfilList $request): Type\GetProfilListResponse
    {
        return $this->callMethod('getProfilList', $request);
    }

    public function createProfil(Type\CreateProfil $request): Type\CreateProfilResponse
    {
        return $this->callMethod('createProfil', $request);
    }

    public function updateProfil(Type\UpdateProfil $request): Type\UpdateProfilResponse
    {
        return $this->callMethod('updateProfil', $request);
    }

    public function addReklamacje(Type\AddReklamacje $request): Type\AddReklamacjeResponse
    {
        return $this->callMethod('addReklamacje', $request);
    }

    public function addZalacznikDoReklamacji(Type\AddZalacznikDoReklamacji $request): Type\AddZalacznikDoReklamacjiResponse
    {
        return $this->callMethod('addZalacznikDoReklamacji', $request);
    }

    public function getReklamacje(Type\GetReklamacje $request): Type\GetReklamacjeResponse
    {
        return $this->callMethod('getReklamacje', $request);
    }

    public function addOdwolanieDoReklamacji(Type\AddOdwolanieDoReklamacji $request): Type\AddOdwolanieDoReklamacjiResponse
    {
        return $this->callMethod('addOdwolanieDoReklamacji', $request);
    }

    public function cancelReklamacja(Type\CancelReklamacja $request): Type\CancelReklamacjaResponse
    {
        return $this->callMethod('cancelReklamacja', $request);
    }

    public function getListaPowodowReklamacji(Type\GetListaPowodowReklamacji $request): Type\GetListaPowodowReklamacjiResponse
    {
        return $this->callMethod('getListaPowodowReklamacji', $request);
    }

    public function getZapowiedziFaktur(Type\GetZapowiedziFaktur $request): Type\GetZapowiedziFakturResponse
    {
        return $this->callMethod('getZapowiedziFaktur', $request);
    }

    public function addRozbieznoscDoZapowiedziFaktur(Type\AddRozbieznoscDoZapowiedziFaktur $request): Type\AddRozbieznoscDoZapowiedziFakturResponse
    {
        return $this->callMethod('addRozbieznoscDoZapowiedziFaktur', $request);
    }

    public function zamowKuriera(Type\ZamowKuriera $request): Type\ZamowKurieraResponse
    {
        return $this->callMethod('zamowKuriera', $request);
    }

    public function getEZDO(Type\GetEZDO $request): Type\GetEZDOResponse
    {
        return $this->callMethod('getEZDO', $request);
    }

    public function getEZDOList(Type\GetEZDOList $request): Type\GetEZDOListResponse
    {
        return $this->callMethod('getEZDOList', $request);
    }

    public function getWplatyCKP(Type\GetWplatyCKP $request): Type\GetWplatyCKPResponse
    {
        return $this->callMethod('getWplatyCKP', $request);
    }

    public function updateShopEZwroty(Type\UpdateShopEZwroty $request): Type\UpdateShopEZwrotyResponse
    {
        return $this->callMethod('updateShopEZwroty', $request);
    }

    public function getListaZgodEZwrotow(Type\GetListaZgodEZwrotow $request): Type\GetListaZgodEZwrotowResponse
    {
        return $this->callMethod('getListaZgodEZwrotow', $request);
    }

    public function setStatusZgodyNaEZwrot(Type\SetStatusZgodyNaEZwrot $request): Type\SetStatusZgodyNaEZwrotResponse
    {
        return $this->callMethod('setStatusZgodyNaEZwrot', $request);
    }

    public function wyslijLinkaOStatusieEZwrotu(Type\WyslijLinkaOStatusieEZwrotu $request): Type\WyslijLinkaOStatusieEZwrotuResponse
    {
        return $this->callMethod('wyslijLinkaOStatusieEZwrotu', $request);
    }

    public function isObszarMiasto(Type\IsObszarMiasto $request): Type\IsObszarMiastoResponse
    {
        return $this->callMethod('isObszarMiasto', $request);
    }

    public function getPaczkaKorzysciInfo(Type\GetPaczkaKorzysciInfo $request): Type\GetPaczkaKorzysciInfoResponse
    {
        return $this->callMethod('getPaczkaKorzysciInfo', $request);
    }

    public function setJednostkaOrganizacyjna(Type\SetJednostkaOrganizacyjna $request): Type\SetJednostkaOrganizacyjnaResponse
    {
        return $this->callMethod('setJednostkaOrganizacyjna', $request);
    }

    public function getJednostkaOrganizacyjna(Type\GetJednostkaOrganizacyjna $request): Type\GetJednostkaOrganizacyjnaResponse
    {
        return $this->callMethod('getJednostkaOrganizacyjna', $request);
    }

    public function getPrintForParcel(Type\GetPrintForParcel $request): Type\GetPrintForParcelResponse
    {
        return $this->callMethod('getPrintForParcel', $request);
    }

    public function createShopEZwroty(Type\CreateShopEZwroty $request): Type\CreateShopEZwrotyResponse
    {
        return $this->callMethod('createShopEZwroty', $request);
    }

    public function deleteShopEZwroty(Type\DeleteShopEZwroty $request): Type\DeleteShopEZwrotyResponse
    {
        return $this->callMethod('deleteShopEZwroty', $request);
    }

    public function getShopEZwrotyList(Type\GetShopEZwrotyList $request): Type\GetShopEZwrotyListResponse
    {
        return $this->callMethod('getShopEZwrotyList', $request);
    }

    abstract protected function callMethod(string $method, $arguments);
}
