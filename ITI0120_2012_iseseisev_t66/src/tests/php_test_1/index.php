<?php
//=========================================================================
// Author: martin.vahi@softf1.com that has an
// Estonian personal identification code of 38108050020.
//
// Permission is hereby granted, free of charge, to any person
// obtaining a copy of this software and associated documentation
// files (the "Software"), to deal in the Software without restriction,
// including without limitation the rights to use, copy, modify, merge,
// publish, distribute, sublicense, and/or sell copies of the Software,
// and to permit persons to whom the Software is furnished to do so,
// subject to the following conditions:
//
// The above copyright notice and this permission notice shall be
// included in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
// EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
// IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
// TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
// SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
//
// This license does NOT apply to the sirel PHP library, unless 
// explicitly stated. Ohter dependencies of this file may be under
// different licenses.
//=========================================================================
$s_0='';

$s_path_lib_sirel=realpath('./../../lib/2012_12/sirel');
if(defined('s_path_lib_sirel')!=True) {
	define('s_path_lib_sirel',$s_path_lib_sirel);
} // if
//require_once($s_path_lib_sirel.'/src/sirel.php');
require_once($s_path_lib_sirel.'/src/sirel_html.php');
require_once($s_path_lib_sirel.'/src/sirel_fs.php');
require_once($s_path_lib_sirel.'/src/sirel_text_concatenation.php');
//-------------------------------------------------------------------------
$s_0='<p></p>';
$arht_list=array();
array_push($arht_list,$s_0);
//-------------------------------------------------------------------------
// test cocde start:
//-------------------------------------------------------------------------
$s_0='<br/><h2>Tähelepanekuid</h2><br/>'."\n";
array_push($arht_list,$s_0);
$s_0='<p>'.
		'YouTube API v.2.x. dokumentatsioonis polnud mainitud, mis versiooni Zend Framework\'ist '.
		'vaja oli. Praktikas selgus, et vaadeldav dokumentatsioon, mis käsitles ainukest '.
		'YouTube PHP API stabiilseks loetavat versiooni, '.
		'ei võimalda uusimat, stabiilseks loetavat, '.
		'<a href="http://framework.zend.com/downloads/latest">Zend Framework</a>\'i '.
		'kasutada, kuid '.
		'dokumentatsiooni põhjal on YouTube klientkoodi PHP teek osa Zend Framework\'ist. '.
		'<br/><br/>'.
		'Dokumentatsioonis kirjeldatav Zend Framework\'i kataloogistruktuur erineb '.
		'tegelikkuses kasutusel olevast Zend Framework\'i kataloogistruktuurist. '.
		'<br/><br/>'.
		'Antud ülesande raames pole mõtet edasi testida, '.
		'<span style="color:#FF0505;">testi võib lugeda põrunuks</span>. '.
		''.
		'<p/><br/><br/>';
array_push($arht_list,$s_0);

//-------------------------------------------------------------------------
//$s_path_lib_zend=realpath($s_path_lib_sirel.'/../../2012_11/'.
//		'zend_framework_2_0_4/library/Zend');

//require_once($s_path_lib_zend.'/Loader/ShortNameLocator.php');

//require_once($s_path_lib_zend.'/Loader/ClassMapAutoloader.php');
//require_once($s_path_lib_zend.'/Loader/ModuleAutoloader.php');
//require_once($s_path_lib_zend.'/Loader/PluginClassLocator.php');
//require_once($s_path_lib_zend.'/Loader/SplAutoloader.php');
//require_once($s_path_lib_zend.'/Loader/StandardAutoloader.php');
//require_once($s_path_lib_zend.'/Loader/AutoloaderFactory.php');

//Zend_Loader::loadClass('Zend_Gdata_YouTube');
//$yt = new Zend_Gdata_YouTube();
//-------------------------------------------------------------------------
// test cocde end
//-------------------------------------------------------------------------
$s_1=s_concat_array_of_strings($arht_list);
$ob_html=new sirelHTMLPage();
$s_block_start='<div style="position:relative;left:90px;top:70px;font-size:30pt;">';
//-------------------------------------------------------------------------
$ob_html->add_2_ar_body($s_block_start.'YouTube <a href="https://developers.google.com/youtube/2.0/developers_guide_php">PHP API, v.2.x</a>, test 1'."\n");
$ob_html->add_2_ar_body("</div>\n");
//-------------------------------------------------------------------------
$s_block_start='<div style="padding-left:100px;padding-right:100px">';
$ob_html->add_2_ar_body($s_block_start."\n");
$ob_html->add_2_ar_body('<br/><p>');
$ob_html->add_2_ar_body('</p><br/>');
$ob_html->add_2_ar_body($s_1);
$ob_html->add_2_ar_body("</div>\n");
$ob_html->add_2_ar_body("</div>\n");
$s_html_out=$ob_html->to_s();
echo $s_html_out;
//=========================================================================
?>
