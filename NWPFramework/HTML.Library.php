<?php
/**
 *NWP Framework
 *URL:HTTP://WWW.NWPIR.COM
 *By:ALIREZA GHADIMI
 *Prg.:PHP Storm V.7.1.3
 */
include("External.php");
//start of base html tags
function e($Pro = ""){
    echo "$Pro";
}
//start of base html tags
function html($Pro = ""){
    echo "<html ".$Pro.">";
}
function ehtml(){
    echo "</html>";
}
function head($Pro = ""){
    echo "<head ".$Pro.">";
}
function ehead(){
    echo "</head>";
}
function body($Pro = ""){
    echo "<body ".$Pro.">";
}
function ebody(){
    echo "</body>";
}
//end of base html tags

//start of html tags in the head
function base($Pro = ""){
    echo "<base ".$Pro." />";
}
function externallink($Pro = ""){
    echo "<link ".$Pro." />";
}
function meta($Pro = ""){
    echo "<meta ".$Pro." />";
}
function title($Pro = ""){
    echo "<title ".$Pro.">";
}
function etitle(){
    echo "</title>";
}
function style($Pro = ""){
    echo "<style ".$Pro.">";
}
function estyle(){
    echo "</style>";
}
function script($Pro = ""){
    echo "<script ".$Pro.">";
}
function escript(){
    echo "</script>";
}
//end of html tags in the head

//start of html tags in the body
function a($Pro = ""){
    echo "<a ".$Pro.">";
}
function ea(){
    echo "</a>";
}
function abbr($Pro = ""){
    echo "<abbr ".$Pro.">";
}
function eabbr(){
    echo "</abbr>";
}
function address($Pro = ""){
    echo "<address ".$Pro.">";
}
function eaddress(){
    echo "</address>";
}
function area($Pro = ""){
    echo "<area  ".$Pro."/>";
}
function b($Pro = ""){
    echo "<B ".$Pro.">";
}
function eb(){
    echo "</b>";
}
function br(){
    echo "<br/>";
}
function button($Pro = ""){
    echo "<button ".$Pro.">";
}
function ebutton(){
    echo "</button>";
}
function cite($Pro = ""){
    echo "<cite ".$Pro.">";
}
function ecite(){
    echo "</cite>";
}
function code($Pro = ""){
    echo "<code ".$Pro.">";
}
function ecode(){
    echo "</code>";
}
function col($Pro = ""){
    echo "<col ".$Pro." />";
}
function dd($Pro = ""){
    echo "<dd ".$Pro.">";
}
function edd(){
    echo "</dd>";
}
function del($Pro = ""){
    echo "<del ".$Pro.">";
}
function edel(){
    echo "</del>";
}
function dfn($Pro = ""){
    echo "<dfn ".$Pro.">";
}
function edfn(){
    echo "</dfn>";
}
function div($Pro = ""){
    echo "<div ".$Pro.">";
}
function ediv(){
    echo "</div>";
}
function dl($Pro = ""){
    echo "<dl ".$Pro.">";
}
function edl(){
    echo "</dl>";
}
function dt($Pro = ""){
    echo "<dt ".$Pro.">";
}
function edt(){
    echo "</dt>";
}
function em($Pro = ""){
    echo "<em ".$Pro.">";
}
function eem(){
    echo "</em>";
}
function fieldset($Pro = ""){
    echo "<fieldset ".$Pro.">";
}
function efieldset(){
    echo "</fieldset>";
}
function form($Pro = ""){
    echo "<form ".$Pro.">";
}
function eform(){
    echo "</form>";
}
function h1($Pro = ""){
    echo "<h1 ".$Pro.">";
}
function eh1(){
    echo "</h1>";
}
function h2($Pro = ""){
    echo "<h2 ".$Pro.">";
}
function eh2(){
    echo "</h2>";
}
function h3($Pro = ""){
    echo "<h3 ".$Pro.">";
}
function eh3(){
    echo "</h3>";
}
function h4($Pro = ""){
    echo "<h4 ".$Pro.">";
}
function eh4(){
    echo "</h4>";
}
function h5($Pro = ""){
    echo "<h5 ".$Pro.">";
}
function eh5(){
    echo "</h5>";
}
function h6($Pro = ""){
    echo "<h6 ".$Pro.">";
}
function eh6(){
    echo "</h6>";
}
function hr($Pro = ""){
    echo "<hr ".$Pro.">";
}
function i($Pro = ""){
    echo "<i ".$Pro.">";
}
function ei(){
    echo "</i>";
}
function iframe($Pro = ""){
    echo "<iframe ".$Pro.">";
}
function eiframe(){
    echo "</iframe>";
}
function img($Pro = ""){
    echo "<img ".$Pro.">";
}
function input($Pro = ""){
    echo "<input ".$Pro.">";
}
function ins($Pro = ""){
    echo "<ins ".$Pro.">";
}
function kbd($Pro = ""){
    echo "<kbd ".$Pro.">";
}
function ekbd(){
    echo "</kbd>";
}
function label($Pro = ""){
    echo "<label ".$Pro.">";
}
function elabel(){
    echo "</label>";
}
function legend($Pro = ""){
    echo "<label ".$Pro.">";
}
function elegend(){
    echo "</legend>";
}
function li($Pro = ""){
    echo "<li ".$Pro.">";
}
function eli(){
    echo "</li>";
}
function map($Pro = ""){
    echo "<map ".$Pro.">";
}
function emap(){
    echo "</map>";
}
function menu($Pro = ""){
    echo "<menu ".$Pro.">";
}
function emenu(){
    echo "</menu>";
}
function noscript($Pro = ""){
    echo "<menu ".$Pro.">";
}
function enoscript(){
    echo "</noscript>";
}
function object($Pro = ""){
    echo "<object ".$Pro.">";
}
function eobject(){
    echo "</object>";
}
function ol($Pro = ""){
    echo "<ol ".$Pro.">";
}
function eol(){
    echo "</ol>";
}
function optgroup($Pro = ""){
    echo "<optgroup ".$Pro.">";
}
function eoptgroup(){
    echo "</optgroup>";
}
function option($Pro = ""){
    echo "<option ".$Pro.">";
}
function eoption(){
    echo "</option>";
}
function p($Pro = ""){
    echo "<p ".$Pro.">";
}
function ep(){
    echo "</p>";
}
function param($Pro = ""){
    echo "<param ".$Pro.">";
}
function pre($Pro = ""){
    echo "<pre ".$Pro.">";
}
function epre(){
    echo "</pre>";
}
function q($Pro = ""){
    echo "<q ".$Pro.">";
}
function eq(){
    echo "</q>";
}
function s($Pro = ""){
    echo "<s ".$Pro.">";
}
function es(){
    echo "</s>";
}
function samp($Pro = ""){
    echo "<samp ".$Pro.">";
}
function esamp(){
    echo "</samp>";
}
function select($Pro = ""){
    echo "<select ".$Pro.">";
}
function eselect(){
    echo "</select>";
}
function small($Pro = ""){
    echo "<small ".$Pro.">";
}
function esmall(){
    echo "</small>";
}
function span($Pro = ""){
    echo "<span ".$Pro.">";
}
function espan(){
    echo "</span>";
}
function strike($Pro = ""){
    echo "<strike ".$Pro.">";
}
function estrike(){
    echo "</strike>";
}
function strong($Pro = ""){
    echo "<strong ".$Pro.">";
}
function estrong(){
    echo "</strong>";
}
function sub($Pro = ""){
    echo "<sub ".$Pro.">";
}
function esub(){
    echo "</sub>";
}
function sup($Pro = ""){
    echo "<sup ".$Pro.">";
}
function esup(){
    echo "</sup>";
}
function table($Pro = ""){
    echo "<table ".$Pro.">";
}
function etable(){
    echo "</table>";
}
function tbody($Pro = ""){
    echo "<tbody ".$Pro.">";
}
function etbody(){
    echo "</tbody>";
}
function td($Pro = ""){
    echo "<td ".$Pro.">";
}
function etd(){
    echo "</td>";
}
function textarea($Pro = ""){
    echo "<textarea ".$Pro.">";
}
function etextarea(){
    echo "</textarea>";
}
function foot($Pro = ""){
    echo "<foot ".$Pro.">";
}
function efoot(){
    echo "</foot>";
}
function th($Pro = ""){
    echo "<th ".$Pro.">";
}
function eth(){
    echo "</th>";
}
function thead($Pro = ""){
    echo "<thead ".$Pro.">";
}
function ethead(){
    echo "</thead>";
}
function tr($Pro = ""){
    echo "<tr ".$Pro.">";
}
function etr(){
    echo "</tr>";
}
function tt($Pro = ""){
    echo "<tt ".$Pro.">";
}
function ett(){
    echo "</tt>";
}
function u($Pro = ""){
    echo "<u ".$Pro.">";
}
function ul($Pro = ""){
    echo "<ul ".$Pro.">";
}
function eul(){
    echo "</ul>";
}
//end of html tags in the body