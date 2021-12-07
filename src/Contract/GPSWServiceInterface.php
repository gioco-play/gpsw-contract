<?php
declare(strict_types=1);
namespace GiocoPlus\GPSW\Contract;
/**
 * GPS World Match
 */
interface GPSWServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $vendorCode
     * @param string|null $backUrl
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $vendorCode, string $backUrl = null);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $vendorCode
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $vendorCode);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $opCode
     * @param int $pastMinutes
     * @param string $cacheKey
     * @return mixed
     */
    function betLogGrabber(string $opCode, int $pastMinutes, string $cacheKey);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param int $pastMinutes
     * @return mixed
     */
    function betLogGrabberAll(int $pastMinutes);
}

