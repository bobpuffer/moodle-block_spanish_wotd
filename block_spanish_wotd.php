<?php
  
  /* This is the global search shortcut block - a single query can be entered, and
  * the user will be redirected to the query page where they can enter more
  *  advanced queries, and view the results of their search. When searching from
  *  this block, the broadest possible selection of documents is searched.
  *  
  *
  *  Todo: make strings -> get_string()  
  * 
  * @package search
  * @subpackage search block
  * @author: Michael Champanis (mchampan), reengineered by Valery Fremaux 
  * @date: 2006 06 25
  */
     
  class block_spanish_wotd extends block_base {
    
    function init() {
      $this->title = get_string('pluginname', 'block_spanish_wotd');
      $this->cron = 1;
      $this->version = 2009111100;
    } //init  
    
    // only one instance of this block is required
    function instance_allow_multiple() {
      return false;
    } //instance_allow_multiple
    
    // label and button values can be set in admin
    function has_config() {
      return false;
    } //has_config
      
    function get_content() {
      global $CFG;
 
      $this->content = new stdClass;
      
      //basic search form
        
      //no footer, thanks
      
      $this->content->footer = '';
      $this->content->text = '
            <div style="width: 159px; margin: 0pt; padding-left: 16px;">
            <object data="http://wotd.transparent.com/rss/widget_spanish_s2.swf" height="191" type="application/x-shockwave-flash" width="159">
            <param name="data" value="http://wotd.transparent.com/rss/widget_spanish_s2.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#ffffff" />
            <param name="allowScriptAccess" value="always" />
            <param name="src" value="http://wotd.transparent.com/rss/widget_spanish_s2.swf" />
            </object>
            <div style="background: url(http://www.transparent.com/widgets/images/shadow-all.png) no-repeat scroll 0% 0% transparent; font-size: 9px; font-weight: bold; margin: -4px -4px 0px 0px; padding: 0pt; font-family: verdana; height: 16px; line-height: 16px; text-indent: 0pt; border-width: 0pt;">
            <div style="float: left; margin-left: 5px; margin-right: 7px;"><a href="http://www.transparent.com/wotd/today/spanish.htm" style="color: #ffffff; text-decoration: none;" target="_parent">Get widget</a></div>
            <a href="http://www.transparent.com/learn-spanish/index.html" style="color: #004078; text-decoration: none;" target="_parent">Learn Spanish »</a></div>
            </div>';
     return $this->content;      
    } //get_content
    
    function specialisation() {
        $this->title = '';
    } //specialisation
    
    /**
    * wraps up to search engine cron
    *
    */    
  } //block_admin_chat

?>
