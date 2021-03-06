<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /*
 * @package     CodeIgniter
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2008, EllisLab, Inc.
 * @license     http://codeigniter.com/user_guide/license.html
 * @link        http://codeigniter.com
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Pagination Class
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Pagination
 * @author      ExpressionEngine Dev Team
 * @link        http://codeigniter.com/user_guide/libraries/pagination.html
 */
class CI_Pagination {

    var $base_url           = ''; // The page we are linking to
    var $total_rows         = ''; // Total number of items (database results)
    var $per_page           = 10; // Max number of items you want shown per page
    var $num_links          =  2; // Number of "digit" links to show before/after the currently viewed page
    var $cur_page           =  0; // The current page being viewed
    var $first_link         = '<i class="fa fa-angle-double-left"></i>';
    var $next_link          = '<i class="fa fa-chevron-right"></i>';
    var $prev_link          = '<i class="fa fa-chevron-left"></i>';
    var $last_link          = '<i class="fa fa-angle-double-right"></i>';
    var $uri_segment        = 3;
    var $full_tag_open      = '';
    var $full_tag_close     = '';
    var $first_tag_open     = '';
    var $first_tag_close    = '';
    var $last_tag_open      = '';
    var $last_tag_close     = '';
    var $cur_tag_open       = '<b>';
    var $cur_tag_close      = '</b>';
    var $next_tag_open      = '';
    var $next_tag_close     = '';
    var $prev_tag_open      = '';
    var $prev_tag_close     = '';
    var $num_tag_open       = '';
    var $num_tag_close      = '';
    var $page_query_string  = FALSE;
    var $query_string_segment = 'per_page';

    /**
     * Constructor
     *
     * @access  public
     * @param   array   initialization parameters
     */
    function CI_Pagination($params = array())
    {
        if (count($params) > 0)
        {
            $this->initialize($params);     
        }
        
        log_message('debug', "Pagination Class Initialized");
    }
    
    // --------------------------------------------------------------------
    
    /**
     * Initialize Preferences
     *
     * @access  public
     * @param   array   initialization parameters
     * @return  void
     */
    function initialize($params = array())
    {
        if (count($params) > 0)
        {
            foreach ($params as $key => $val)
            {
                if (isset($this->$key))
                {
                    $this->$key = $val;
                }
            }       
        }
    }
    
    // --------------------------------------------------------------------
    
    /**
     * Generate the pagination links
     *
     * @access  public
     * @return  string
     */ 
    function create_links($search='') { 
    
        if ($search!='') $search = '/'.$search;
        
        // If our item count or per-page total is zero there is no need to continue. 
        if ($this->total_rows == 0 OR $this->per_page == 0) { 
            return ''; 
        } 
        
        // Calculate the total number of pages 
        $num_pages = ceil($this->total_rows / $this->per_page); 
        // Is there only one page? Hm... nothing more to do here then. 
        if ($num_pages == 1) {
            return ''; 
        } 
        
        // Determine the current page number.       
        $CI =& get_instance();
        
        if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE){
            if ($CI->input->get($this->query_string_segment) != 0){
                $this->cur_page = $CI->input->get($this->query_string_segment); 
                // Prep the current page - no funny business!
                $this->cur_page = (int) $this->cur_page;
            }
        } else {
            if ($CI->uri->segment($this->uri_segment) != 0) {
                $this->cur_page = $CI->uri->segment($this->uri_segment);
                // Prep the current page - no funny business!
                $this->cur_page = (int) $this->cur_page;
            }
        }
        
        if ( ! is_numeric($this->cur_page)) { 
            $this->cur_page = 0; 
        } 
        
        if ($this->cur_page==0) { 
            $this->cur_page = 1; 
        } 
        
        // Is the page number beyond the result range? 
        // If so we show the last page 
        if ($this->cur_page > $this->total_rows) { 
            $this->cur_page = ($num_pages - 1) * $this->per_page; 
        } 
        
        $uri_page_number = $this->cur_page;
        
        // Calculate the start and end numbers. These determine 
        // which number to start and end the digit links with 
        $start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1; 
        $end = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages; 
        

        // Is pagination being used over GET or POST?  If get, add a per_page query
        // string. If post, add a trailing slash to the base URL if needed
        if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE) {
            $this->base_url = rtrim($this->base_url).'&amp;'.$this->query_string_segment.'=';
        } else {
            $this->base_url = rtrim($this->base_url, '/') .'';
        }
        
        // And herwe go...
        $output = ''; 
        
        // Render the "First" link 
        if ($this->cur_page > $this->num_links) { 
            $output .= $this->first_tag_open.'<a class="btn btn-default" href="'.$this->base_url.'1'.$search.'">'.$this->first_link.'</a>'.$this->first_tag_close; 
        } 
        
        // Render the "previous" link 
        if (($this->cur_page - $this->num_links) >= 0) { 
            $i = $this->cur_page - 1; 
            if ($i == 0) $i = ''; 
            $output .= $this->prev_tag_open.'<a class="btn btn-default" href="'.$this->base_url.$i.$search.'">'.$this->prev_link.'</a>'.$this->prev_tag_close; 
        } 
        
        // Write the digit links 
        for ($loop = $start -1; $loop <= $end; $loop++) { 
            $i = ($loop * $this->per_page) - $this->per_page; 
            if ($i >= 0) { 
                if ($this->cur_page == $loop) { 
                   $output .= $this->num_tag_open.'<a class="btn btn-info active" href="'.$this->base_url.$n.$search.'">'.$loop.'</a>'.$this->num_tag_close; 
                } else {  
                    $n = ($i == 0) ? '1' : $loop; 
                    $output .= $this->num_tag_open.'<a class="btn btn-default" href="'.$this->base_url.$n.$search.'">'.$loop.'</a>'.$this->num_tag_close; 
                }
            } 
        } 
        
        // Render the "next" link 
        if ($this->cur_page < $num_pages) { 
            $output .= $this->next_tag_open.'<a class="btn btn-default" href="'.$this->base_url.($this->cur_page + 1).$search.'">'.$this->next_link.'</a>'.$this->next_tag_close; 
        } 
        
        // Render the "Last" link 
        if (($this->cur_page + $this->num_links) < $num_pages) { 
            $i = $num_pages; 
            $output .= $this->last_tag_open.'<a class="btn btn-default" href="'.$this->base_url.$i.$search.'">'.$this->last_link.'</a>'.$this->last_tag_close; 
        } 
        
        // Kill double slashes.  Note: Sometimes we can end up with a double slash 
        // in the penultimate link so we'll kill all double slashes. 
        $output = preg_replace("#([^:])//+#", "\\1/", $output); 
        
        // Add the wrapper HTML if exists 
        $output = $this->full_tag_open.$output.$this->full_tag_close; 
        
        return $output; 
    }
}

/* End of file Pagination.php */
/* Location: ./system/libraries/Pagination.php */