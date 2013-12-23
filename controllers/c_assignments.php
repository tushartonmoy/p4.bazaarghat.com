<?php
class assignments_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function add($success = NULL) {

        # Setup view
        $this->template->content = View::instance('v_assignments_add');
        $this->template->title   = "Add an Assignment";
		$this->template->content->success = $success;

        # Render template
        echo $this->template;

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('assignments', $_POST);

        # Quick and dirty feedback
        Router::redirect("/assignments/add/success");

    }
	
	public function delete($id){
		$ui = $this->user->user_id;
		   # Build the query
    $q = "DELETE 
        FROM assignments
        WHERE user_id = ".$ui." and assign_id = $id;";

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);
		header("Location:/assignments/index");
		die();
	}
	
	public function done($id){
		$ui = $this->user->user_id;
		   # Build the query
    $q = "UPDATE assignments SET status = 'Completed'
        WHERE user_id = ".$ui." and assign_id = $id;";

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);
		header("Location:/assignments/index");
		die();
	}
	
	public function index() {

    # Set up the View
    $this->template->content = View::instance('v_assignments_index');
    $this->template->title   = "Assignments";
	$ui = $this->user->user_id;
    # Build the query
    $q = "SELECT 
            assignments .* 
        FROM assignments
        INNER JOIN users 
            ON assignments.user_id = users.user_id WHERE users.user_id = ".$ui.";";

    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->posts = $posts;

    # Render the View
    echo $this->template;

	}
}