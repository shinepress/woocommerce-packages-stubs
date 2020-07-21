<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC Admin Note Data Store (Custom Tables)
 */
class DataStore extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface
{
    /**
     * Method to create a new note in the database.
     *
     * @param WC_Admin_Note $note Admin note.
     */
    public function create(&$note)
    {
    }
    /**
     * Method to read a note.
     *
     * @param WC_Admin_Note $note Admin note.
     * @throws \Exception Throws exception when invalid data is found.
     */
    public function read(&$note)
    {
    }
    /**
     * Updates a note in the database.
     *
     * @param WC_Admin_Note $note Admin note.
     */
    public function update(&$note)
    {
    }
    /**
     * Deletes a note from the database.
     *
     * @param WC_Admin_Note $note Admin note.
     * @param array         $args Array of args to pass to the delete method (not used).
     */
    public function delete(&$note, $args = array())
    {
    }
    /**
     * Read actions from the database.
     *
     * @param WC_Admin_Note $note Admin note.
     */
    private function read_actions(&$note)
    {
    }
    /**
     * Save actions to the database.
     * This function clears old actions, then re-inserts new if any changes are found.
     *
     * @param WC_Admin_Note $note Note object.
     *
     * @return bool|void
     */
    private function save_actions(&$note)
    {
    }
    /**
     * Return an ordered list of notes.
     *
     * @param array $args Query arguments.
     * @return array An array of objects containing a note id.
     */
    public function get_notes($args = array())
    {
    }
    /**
     * Return a count of notes.
     *
     * @param string $type Comma separated list of note types.
     * @param string $status Comma separated list of statuses.
     * @return array An array of objects containing a note id.
     */
    public function get_notes_count($type = array(), $status = array())
    {
    }
    /**
     * Return where clauses for getting notes by status and type. For use in both the count and listing queries.
     *
     *  @param array $args Array of args to pass.
     * @return string Where clauses for the query.
     */
    public function get_notes_where_clauses($args = array())
    {
    }
    /**
     * Find all the notes with a given name.
     *
     * @param string $name Name to search for.
     * @return array An array of matching note ids.
     */
    public function get_notes_with_name($name)
    {
    }
}