<?php
// ------------------------------------------------------------------------
// Copyright (c) 2012, martin.vahi@softf1.com that has an
// Estonian personal identification code of 38108050020.
// All rights reserved.

// Redistribution and use in source and binary forms, with or
// without modification, are permitted provided that the following
// conditions are met:

// * Redistributions of source code must retain the above copyright
// notice, this list of conditions and the following disclaimer.
// * Redistributions in binary form must reproduce the above copyright
// notice, this list of conditions and the following disclaimer
// in the documentation and/or other materials provided with the
// distribution.
// * Neither the name of the Martin Vahi nor the names of its
// contributors may be used to endorse or promote products derived
// from this software without specific prior written permission.

// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND
// CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
// INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
// DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR
// CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
// BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
// SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
// INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
// WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
// OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//=========================================================================
$s_0='';
// RENESSAATOR_BLOCK_START
// RENESSAATOR_BLOCK_ID=block1
// RENESSAATOR_SOURCE_LANGUAGE=Ruby
// RENESSAATOR_SOURCE_START
// SIREL_HOME=ENV["SIREL_HOME"]
// SIREL_HOME="./doc_bonnet/sirel" if SIREL_HOME==nil
// puts "$s_0='"+SIREL_HOME.to_s+"/src/devel';"
// RENESSAATOR_SOURCE_END
// 
// RENESSAATOR_AUTOGENERATED_TEXT_START
$s_0='/home/zornilemma/Projektid/progremise_infrastruktuur/teeke/sirel/sirel_liivakast/sirel/src/devel';

// RENESSAATOR_AUTOGENERATED_TEXT_END
// RENESSAATOR_BLOCK_END
$s_0='./doc_bonnet/sirel';
$s_path_lib_sirel=realpath($s_0);
if(defined('s_path_lib_sirel')!=True) {
	define('s_path_lib_sirel',$s_path_lib_sirel);
} // if
//require_once($s_path_lib_sirel.'/src/sirel.php');
require_once($s_path_lib_sirel.'/src/sirel_html.php');
require_once($s_path_lib_sirel.'/src/sirel_fs.php');
require_once($s_path_lib_sirel.'/src/sirel_text_concatenation.php');
//-------------------------------------------------------------------------
function s2link($s_in) {
	try {
		$s_out='';
		if($s_in=='index.php') {
			// It's OK to display the existence of
			// index.html if the index.php generates the view.
			//return($s_out);
		} // if
		if (is_dir($s_in)) {
			$s_in=$s_in.'/';
		} // if
		$s_out='<a href="'.$s_in.'">'.$s_in."</a><br/>\n";
		return($s_out);
	}catch (Exception $err_exception) {
		sirelBubble(__FILE__,__LINE__, $err_exception,
				__CLASS__.'->'.__FUNCTION__.': ');
	} // catch
} // s2link

//-------------------------------------------------------------------------

function s_ls($s_prefix,$i_recursion_limit,&$arht_list,&$arht_skiplist) {
	$i_recursion_limit=$i_recursion_limit-1;
	$arht=sirelFS::ls(realpath($s_prefix));
	$i_len=count($arht);
	$s_fn=NULL;
	$s_token=$s_prefix;
	$b_insert2arht=FALSE;
	if ($i_len==0) {
		$s_token=s2link($s_token);
		array_push($arht_list, $s_token);
	} else {
		for($i=0;$i<$i_len;$i++) {
			$s_fn=$arht[$i];
			if(!array_key_exists($s_fn,$arht_skiplist)) {
				$s_token=$s_prefix.'/'.$s_fn;
				if (is_dir($s_token)) {
					if (0<=$i_recursion_limit) {
						s_ls($s_token,$i_recursion_limit,$arht_list,$arht_skiplist);
					} else {
						$s_token=s2link($s_token);
						$b_insert2arht=TRUE;
					} // else
				} else {
					$s_token=s2link($s_token);
					$b_insert2arht=TRUE;
				} // else
			} // if
			if ($b_insert2arht) {
				array_push($arht_list, $s_token);
			} // if
			$b_insert2arht=FALSE;
		} // for
	} // else
	//array_push($arht_list, '<br/>');
} // s_ls

//-------------------------------------------------------------------------

$s_prefix='./../src/';
$arht_skiplist=array();
$arht_skiplist['.git']=42;
$arht_skiplist['.hg']=42;
$arht_skiplist['.svn']=42;
$arht_skiplist['IDE']=42;
$arht_skiplist['SVN_hoidlad']=42;
$arht_skiplist['SVN_hoidlaid']=42;
$arht_list=array();
s_ls($s_prefix,5,$arht_list,$arht_skiplist);
$s_1=s_concat_array_of_strings($arht_list);

$ob_html=new sirelHTMLPage();
$s_block_start='<div style="position:relative;left:35px;top:35px;">';
//$ob_html->add_2_ar_body($s_block_start.'<a href="./../">up</a>'."\n");
$ob_html->add_2_ar_body("</div>\n");
$s_block_start='<div style="position:relative;left:90px;top:70px;font-size:30pt;">';
$ob_html->add_2_ar_body($s_block_start.'YouTube <a href="https://developers.google.com/youtube/">API</a> testide indeks'."\n");
$ob_html->add_2_ar_body("</div>\n");
$s_block_start='<div style="position:relative;left:200px;top:80px;">';
$ob_html->add_2_ar_body($s_block_start."\n");
$ob_html->add_2_ar_body('<br/><p>');
$ob_html->add_2_ar_body('<a href="https://github.com/kalatestimine/ITI0120_2012_iseseisev_t66">Koodihoidla</a><br/>');
$ob_html->add_2_ar_body('<a href="https://sandbox.asaquality.ee/moodle/login/index.php">Kursuse kodulehekülg</a><br/>');
$ob_html->add_2_ar_body('<a href="http://urls.softf1.com/2012_ttu/tarkvaratestimine/g/projekt_1/doc/">Viidatav demo</a><br/>');
$ob_html->add_2_ar_body('</p><br/>');
$ob_html->add_2_ar_body($s_1);
$ob_html->add_2_ar_body("</div>\n");
$s_html_out=$ob_html->to_s();
echo $s_html_out;
//=========================================================================
?>
