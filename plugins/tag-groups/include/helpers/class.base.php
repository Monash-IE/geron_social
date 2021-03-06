<?php
/**
* @package     Tag Groups
* @author      Christoph Amthor
* @copyright   2018 Christoph Amthor (@ Chatty Mango, chattymango.com)
* @license     GPL-3.0+
*/

if ( ! class_exists('TagGroups_Base') ) {

  /**
  *
  */
  class TagGroups_Base {


    /**
    * Returns the first element of an array without changing the original array
    *
    * @param array $array
    * @return mixed
    */
    public static function get_first_element( $array = array() )
    {

      if ( ! is_array( $array ) ) {

        return;

      }

      return reset( $array );

    }


    /**
    * sanitizes many classes separated by space
    *
    * @param string $classes
    * @return string
    */
    public static function sanitize_html_classes( $classes ){

      // replace multiple spaces by one
      $classes = preg_replace( '!\s+!', ' ', $classes );

      // turn into array
      $classes = explode( ' ', $classes );

      if( ! empty( $classes ) ) {

        $classes = array_map( 'sanitize_html_class', $classes );

      }

      // turn back
      $classes = implode( ' ', $classes );

      return $classes;

    }


    /**
    * Change the time until the first trial encouragement appears
    *
    * @param int $sec Default is 24 hours.
    * @return int
    * @since 1.19.1
    */
    public static function change_time_show_first_trial( $sec ) {

      // 7 days in sec.
      return 7 * 24 * 60 * 60;

    }


    /**
    * Change the time between trial encouragements
    *
    * @param int $sec Default is 30 days.
    * @return int
    * @since 1.19.1
    */
    public static function change_time_reshow_trial( $sec ) {

      // 60 days in sec.
      return 60 * 24 * 60 * 60;

    }


    /**
    * Show Freemius admin notice of trial promotion only in Tag Groups own settings or Tag Groups Admin page
    * "page" parameter starts with tag-groups-settings or is tag-groups_{post_type}
    *
    * @param mixed $show
    * @param array $msg
    * @return boolean
    * @since 1.19.2
    */
    public static function change_show_admin_notice( $show, $msg ) {

      if (
        'trial_promotion' == $msg['id']
        && ( empty( $_GET['page'] ) || strpos( $_GET['page'], 'tag-groups' ) !== 0 )
      ) {

        // Don't show the trial promotional admin notice.
        return false;

      }

      return true;

    }


    /**
    * Clear the cache of various plugins
    *
    * @param void
    * @return void
    */
    public static function clear_cache()
    {

      if ( function_exists( 'flush_pgcache' ) ) {

        flush_pgcache;

      }

      if ( function_exists( 'flush_minify' ) ) {

        flush_minify;

      }

      if ( function_exists( 'wp_cache_clear_cache' ) ) {

        wp_cache_clear_cache();

      }

    }


    /**
    * executes the routines to migrate posts and tags from the base to the premium plugin
    *
    *
    * @param void
    * @return void
    */
    public static function run_term_migration()
    {

      global $tag_group_terms;

      /**
      * Add group affiliation to the term meta; term_group will be only secondary
      */
      if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {

        error_log( '[Tag Groups] Migrating terms.' );

        $start_time = microtime( true );

      }

      $count_term = $tag_group_terms->convert_to_term_meta();

      if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {

        error_log( sprintf( '[Tag Groups] %d term(s) migrated in %d milliseconds.', $count_term, round( ( microtime( true ) - $start_time ) * 1000 ) ) );

      }

      if ( $count_term > 0 ) {

        $tag_group_terms->clear_term_cache();

      }

    }


    /**
     * Turns a string into a valid JS function name, preserving as much as possible uniqueness
     * 
     * @since 1.26.1
     * @param string $raw
     * @return string
     */
    static function create_js_fn_name( $raw ) {

      return str_replace( '-', '', sanitize_html_class( $raw ) );

    }

  } // class

}
