<?php
/**
 * ファイルに関する定数
 *
 * LICENSE: ライセンスに関する情報
 *
 * @category   Setuco
 * @package    Setuco_Data
 * @subpackage Constant
 * @license    http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @copyright  Copyright (c) 2010 SetucoCMS Project.(http://sourceforge.jp/projects/setucocms)
 * @link       
 * @version    
 * @since      File available since Release 0.1.0
 * @author     charlesvineyard
 */

/**
 * @package    Setuco_Data
 * @subpackage Constant
 * @author     akitsukada
 */
class Setuco_Data_Constant_Media
{
    /**
     * ファイルの新規登録中に作成する一時ファイルの名前
     * (物理ファイル名でなくmediaテーブルのname属性の値)
     */
    const TEMP_FILE_NAME = 'tmpName';

    /**
     * ファイルの新規登録中に作成する一時ファイルの拡張子
     */
    const TEMP_FILE_EXTENSION = 'new';

    /**
     * ファイル保存ディレクトリのbaseUrl用パス。
     */
    const UPLOAD_DIR_PATH_FROM_BASE = '/media/upload/';

    /**
     * サムネイル保存ディレクトリのbaseUrl用パス。
     */
    const THUMB_DIR_PATH_FROM_BASE = '/media/thumbnail/';

    /**
     * 絞り込み処理で使うファイル種別「全て」のSelectBoxでのインデックス
     */
    const FILEEXT_ALL_INDEX = -1;

    /**
     * 絞り込み処理で使うファイル種別「全て」のSelectBoxでの値
     */
    const FILEEXT_ALL_VALUE = 'all';

    /**
     * 絞り込み処理で使うファイル種別「全て」のSelectBoxでの表示文字列
     */
    const FILEEXT_ALL_STRING = '--指定なし--';

    /**
     * SetucoCMSで対応するファイル種類（拡張子）を得る
     *
     * @return array SetucoCMSで対応する拡張子の配列
     * @author akitsukada
     */
    public static function VALID_FILE_EXTENSIONS()
    {
        return array('jpg', 'gif', 'png', 'pdf', 'txt');
    }

    /**
     * SetucoCMSで対応するファイル種類（拡張子）うち、画像の拡張子のみを得る
     *
     * @return array SetucoCMSで対応する画像の拡張子の配列
     * @author akitsukada
     */
    public static function IMAGE_FILE_EXTENSIONS()
    {
        return array('jpg', 'gif', 'png');
    }

}