<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @author Geoffray Warnants
 * @version 0.2b
 */

//
// Database "candycane"
//
// candycane.enabled_modules
$tables['enabled_modules'] = array(
	array('id' => 1, 'project_id' => 1, 'name' => 'issue_tracking'),
	array('id' => 2, 'project_id' => 1, 'name' => 'time_tracking'),
	array('id' => 3, 'project_id' => 1, 'name' => 'news'),
	array('id' => 4, 'project_id' => 1, 'name' => 'documents'),
	array('id' => 5, 'project_id' => 1, 'name' => 'files'),
	array('id' => 6, 'project_id' => 1, 'name' => 'wiki'),
	array('id' => 7, 'project_id' => 1, 'name' => 'repository'),
	array('id' => 8, 'project_id' => 1, 'name' => 'boards'),
);

// candycane.enumerations
$tables['enumerations'] = array(
	array('id' => 1, 'opt' => 'DCAT', 'name' => 'User documentation', 'position' => 1, 'is_default' => 0),
	array('id' => 2, 'opt' => 'DCAT', 'name' => 'Technical documentation', 'position' => 2, 'is_default' => 0),
	array('id' => 3, 'opt' => 'IPRI', 'name' => 'Low', 'position' => 1, 'is_default' => 0),
	array('id' => 4, 'opt' => 'IPRI', 'name' => 'Normal', 'position' => 2, 'is_default' => 1),
	array('id' => 5, 'opt' => 'IPRI', 'name' => 'High', 'position' => 3, 'is_default' => 0),
	array('id' => 6, 'opt' => 'IPRI', 'name' => 'Urgent', 'position' => 4, 'is_default' => 0),
	array('id' => 7, 'opt' => 'IPRI', 'name' => 'Immediate', 'position' => 5, 'is_default' => 0),
	array('id' => 8, 'opt' => 'ACTI', 'name' => 'Design', 'position' => 1, 'is_default' => 0),
	array('id' => 9, 'opt' => 'ACTI', 'name' => 'Development', 'position' => 2, 'is_default' => 0),
);

// candycane.issues
$tables['issues'] = array(
	array('id' => 1, 'tracker_id' => 1, 'project_id' => 1, 'subject' => 'Sample Ticket', 'description' => 'Hello candycane users.', 'due_date' => null, 'category_id' => null, 'status_id' => 1, 'assigned_to_id' => null, 'priority_id' => 4, 'fixed_version_id' => null, 'author_id' => 3, 'lock_version' => 0, 'created_on' => '2009-03-14 10:32:00', 'updated_on' => '2009-03-14 10:32:00', 'start_date' => '2009-03-14', 'done_ratio' => 0, 'estimated_hours' => null),
);

// candycane.issue_statuses
$tables['issue_statuses'] = array(
	array('id' => 1, 'name' => 'New', 'is_closed' => 0, 'is_default' => 1, 'position' => 1),
	array('id' => 2, 'name' => 'Assigned', 'is_closed' => 0, 'is_default' => 0, 'position' => 2),
	array('id' => 3, 'name' => 'Resolved', 'is_closed' => 0, 'is_default' => 0, 'position' => 3),
	array('id' => 4, 'name' => 'Feedback', 'is_closed' => 0, 'is_default' => 0, 'position' => 4),
	array('id' => 5, 'name' => 'Closed', 'is_closed' => 1, 'is_default' => 0, 'position' => 5),
	array('id' => 6, 'name' => 'Rejected', 'is_closed' => 1, 'is_default' => 0, 'position' => 6),
);

// candycane.news
$tables['news'] = array(
	array('id' => 1, 'project_id' => 1, 'title' => 'Sample News', 'summary' => 'Working fine.', 'description' => 'Worked
*YEAH!!*', 'author_id' => 3, 'created_on' => '2009-03-20 23:25:45', 'comments_count' => 0),
);
// candycane.projects
$tables['projects'] = array(
	array('id' => 1, 'name' => 'Sample Project', 'description' => 'Candycane rocks!', 'homepage' => '', 'is_public' => 1, 'parent_id' => null, 'projects_count' => 0, 'created_on' => '2009-03-04 23:09:49', 'updated_on' => '2009-03-04 23:09:49', 'identifier' => 'sampleproject', 'status' => 1),
);

// candycane.projects_trackers
$tables['projects_trackers'] = array(
	array('id' => 1, 'project_id' => 1, 'tracker_id' => 1),
	array('id' => 2, 'project_id' => 1, 'tracker_id' => 2),
	array('id' => 3, 'project_id' => 1, 'tracker_id' => 3),
);

// candycane.roles
$tables['roles'] = array(
	array('id' => 1, 'name' => 'Non member', 'position' => 1, 'assignable' => 1, 'builtin' => 1, 'permissions' => array(
		':add_issues',
		':add_issue_notes',
		':save_queries',
		':view_gantt',
		':view_calendar',
		':view_time_entries',
		':comment_news',
		':view_documents',
		':view_wiki_pages',
		':view_wiki_edits',
		':add_messages',
		':view_files',
		':browse_repository',
		':view_changesets',
	)),
	array('id' => 2, 'name' => 'Anonymous', 'position' => 2, 'assignable' => 1, 'builtin' => 2, 'permissions' => array(
		':view_gantt',
		':view_calendar',
		':view_time_entries',
		':view_documents',
		':view_wiki_pages',
		':view_wiki_edits',
		':view_files',
		':browse_repository',
		':view_changesets',
	)),
	array('id' => 3, 'name' => 'Manager', 'position' => 3, 'assignable' => 1, 'builtin' => 0, 'permissions' => array(
		':edit_project',
		':select_project_modules',
		':manage_members',
		':manage_versions',
		':manage_categories',
		':add_issues',
		':edit_issues',
		':manage_issue_relations',
		':add_issue_notes',
		':edit_issue_notes',
		':edit_own_issue_notes',
		':move_issues',
		':delete_issues',
		':manage_public_queries',
		':save_queries',
		':view_gantt',
		':view_calendar',
		':view_issue_watchers',
		':add_issue_watchers',
		':log_time',
		':view_time_entries',
		':edit_time_entries',
		':edit_own_time_entries',
		':manage_news',
		':comment_news',
		':manage_documents',
		':view_documents',
		':manage_files',
		':view_files',
		':manage_wiki',
		':rename_wiki_pages',
		':delete_wiki_pages',
		':view_wiki_pages',
		':view_wiki_edits',
		':edit_wiki_pages',
		':delete_wiki_pages_attachments',
		':protect_wiki_pages',
		':manage_repository',
		':browse_repository',
		':view_changesets',
		':commit_access',
		':manage_boards',
		':add_messages',
		':edit_messages',
		':edit_own_messages',
		':delete_messages',
		':delete_own_messages',
	)),
	array('id' => 4, 'name' => 'Developer', 'position' => 4, 'assignable' => 1, 'builtin' => 0, 'permissions' => array(
		':manage_versions',
		':manage_categories',
		':add_issues',
		':edit_issues',
		':manage_issue_relations',
		':add_issue_notes',
		':save_queries',
		':view_gantt',
		':view_calendar',
		':log_time',
		':view_time_entries',
		':comment_news',
		':view_documents',
		':view_wiki_pages',
		':view_wiki_edits',
		':edit_wiki_pages',
		':delete_wiki_pages',
		':add_messages',
		':edit_own_messages',
		':view_files',
		':manage_files',
		':browse_repository',
		':view_changesets',
		':commit_access',
	)),
	array('id' => 5, 'name' => 'Reporter', 'position' => 5, 'assignable' => 1, 'builtin' => 0, 'permissions' => array(
		':add_issues',
		':add_issue_notes',
		':save_queries',
		':view_gantt',
		':view_calendar',
		':log_time',
		':view_time_entries',
		':comment_news',
		':view_documents',
		':view_wiki_pages',
		':view_wiki_edits',
		':add_messages',
		':edit_own_messages',
		':view_files',
		':browse_repository',
		':view_changesets',
	)),
);


// candycane.tokens
$tables['tokens'] = array(
	array('id' => 1, 'user_id' => 1, 'action' => 'feeds', 'value' => 'D7ukdhHJXK7MTwDELqToVcTHPczo4rbCsLTim0pv', 'created_on' => '2009-03-04 23:03:11'),
	array('id' => 2, 'user_id' => 1, 'action' => 'feeds', 'value' => 'rV5I24UQkA7AImh0FOYM84eNSpDbsOpTFCRcMort', 'created_on' => '2009-03-04 23:03:11'),
	array('id' => 3, 'user_id' => 3, 'action' => 'feeds', 'value' => 'Zi1s5C1vyA8TAzMXm2hAAIOD8CveWiT3LSI763Ie', 'created_on' => '2009-03-04 23:08:46'),
	array('id' => 4, 'user_id' => 3, 'action' => 'feeds', 'value' => 'HxAUNOsdgv1y3m8Y0ilEOpW6P3sQaydgCxcmsHx8', 'created_on' => '2009-03-04 23:08:46'),
);

// candycane.trackers
$tables['trackers'] = array(
	array('id' => 1, 'name' => 'Bug', 'is_in_chlog' => 1, 'position' => 1, 'is_in_roadmap' => 0),
	array('id' => 2, 'name' => 'Feature', 'is_in_chlog' => 1, 'position' => 2, 'is_in_roadmap' => 1),
	array('id' => 3, 'name' => 'Support', 'is_in_chlog' => 0, 'position' => 3, 'is_in_roadmap' => 0),
);

// candycane.users
// hashed_password is not hashed in order to make Security.salt be enable to be changed.
// this will be hashed with migrations after callback. see config/migrations/001_candycane_init.php
$tables['users'] = array(
	array('id' => 1, 'login' => 'admin', 'hashed_password' => 'admin', 'firstname' => 'Redmine', 'lastname' => 'Admin', 'mail' => 'admin@example.net', 'mail_notification' => 1, 'admin' => 1, 'status' => 1, 'last_login_on' => '2011-06-12 19:11:57', 'language' => 'en', 'auth_source_id' => null, 'created_on' => '2009-03-04 23:00:57', 'updated_on' => '2009-03-04 23:06:50', 'type' => 'User'),
	array('id' => 2, 'login' => '', 'hashed_password' => '', 'firstname' => '', 'lastname' => 'Anonymous', 'mail' => '', 'mail_notification' => 0, 'admin' => 0, 'status' => 0, 'last_login_on' => null, 'language' => '', 'auth_source_id' => null, 'created_on' => '2009-03-04 23:02:30', 'updated_on' => '2009-03-04 23:02:30', 'type' => 'AnonymousUser'),
	array('id' => 3, 'login' => 'testuser', 'hashed_password' => 'yando', 'firstname' => 'yusuke', 'lastname' => 'ando', 'mail' => 'test@example.com', 'mail_notification' => 0, 'admin' => 1, 'status' => 1, 'last_login_on' => '2009-03-20 23:24:42', 'language' => 'ja', 'auth_source_id' => null, 'created_on' => '2009-03-04 23:06:32', 'updated_on' => '2009-03-20 23:24:42', 'type' => null),
);

// candycane.user_preferences
$tables['user_preferences'] = array(
	array('id' => 1, 'user_id' => 1, 'others' => array(), 'hide_mail' => 0, 'time_zone' => null),
	array('id' => 2, 'user_id' => 2, 'others' => array(), 'hide_mail' => 0, 'time_zone' => null),
	array('id' => 3, 'user_id' => 3, 'others' => array(), 'hide_mail' => 0, 'time_zone' => null),
);

// candycane.workflows
$tables['workflows'] = array(
	array('id' => 1, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 2, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 3, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 4, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 5, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 6, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 7, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 8, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 9, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 10, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 11, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 12, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 13, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 14, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 15, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 16, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 17, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 18, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 19, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 20, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 21, 'tracker_id' => 1, 'old_status_id' => 5, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 22, 'tracker_id' => 1, 'old_status_id' => 5, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 23, 'tracker_id' => 1, 'old_status_id' => 5, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 24, 'tracker_id' => 1, 'old_status_id' => 5, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 25, 'tracker_id' => 1, 'old_status_id' => 5, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 26, 'tracker_id' => 1, 'old_status_id' => 6, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 27, 'tracker_id' => 1, 'old_status_id' => 6, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 28, 'tracker_id' => 1, 'old_status_id' => 6, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 29, 'tracker_id' => 1, 'old_status_id' => 6, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 30, 'tracker_id' => 1, 'old_status_id' => 6, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 31, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 32, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 33, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 34, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 35, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 36, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 37, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 38, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 39, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 40, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 41, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 42, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 43, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 44, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 45, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 46, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 47, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 48, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 49, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 50, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 51, 'tracker_id' => 2, 'old_status_id' => 5, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 52, 'tracker_id' => 2, 'old_status_id' => 5, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 53, 'tracker_id' => 2, 'old_status_id' => 5, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 54, 'tracker_id' => 2, 'old_status_id' => 5, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 55, 'tracker_id' => 2, 'old_status_id' => 5, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 56, 'tracker_id' => 2, 'old_status_id' => 6, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 57, 'tracker_id' => 2, 'old_status_id' => 6, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 58, 'tracker_id' => 2, 'old_status_id' => 6, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 59, 'tracker_id' => 2, 'old_status_id' => 6, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 60, 'tracker_id' => 2, 'old_status_id' => 6, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 61, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 62, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 63, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 64, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 65, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 66, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 67, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 68, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 69, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 70, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 71, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 72, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 73, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 74, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 75, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 76, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 77, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 78, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 79, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 80, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 81, 'tracker_id' => 3, 'old_status_id' => 5, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 82, 'tracker_id' => 3, 'old_status_id' => 5, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 83, 'tracker_id' => 3, 'old_status_id' => 5, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 84, 'tracker_id' => 3, 'old_status_id' => 5, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 85, 'tracker_id' => 3, 'old_status_id' => 5, 'new_status_id' => 6, 'role_id' => 3),
	array('id' => 86, 'tracker_id' => 3, 'old_status_id' => 6, 'new_status_id' => 1, 'role_id' => 3),
	array('id' => 87, 'tracker_id' => 3, 'old_status_id' => 6, 'new_status_id' => 2, 'role_id' => 3),
	array('id' => 88, 'tracker_id' => 3, 'old_status_id' => 6, 'new_status_id' => 3, 'role_id' => 3),
	array('id' => 89, 'tracker_id' => 3, 'old_status_id' => 6, 'new_status_id' => 4, 'role_id' => 3),
	array('id' => 90, 'tracker_id' => 3, 'old_status_id' => 6, 'new_status_id' => 5, 'role_id' => 3),
	array('id' => 91, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 92, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 93, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 94, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 95, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 96, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 97, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 98, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 99, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 100, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 101, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 102, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 103, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 104, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 105, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 106, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 107, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 108, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 109, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 110, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 111, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 112, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 113, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 114, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 115, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 116, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 117, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 118, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 119, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 120, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 121, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 122, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 123, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 124, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 125, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 4),
	array('id' => 126, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 127, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 2, 'role_id' => 4),
	array('id' => 128, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 3, 'role_id' => 4),
	array('id' => 129, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 4),
	array('id' => 130, 'tracker_id' => 1, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 131, 'tracker_id' => 1, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 132, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 133, 'tracker_id' => 1, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 134, 'tracker_id' => 1, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 5),
	array('id' => 135, 'tracker_id' => 2, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 136, 'tracker_id' => 2, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 137, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 138, 'tracker_id' => 2, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 139, 'tracker_id' => 2, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 5),
	array('id' => 140, 'tracker_id' => 3, 'old_status_id' => 1, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 141, 'tracker_id' => 3, 'old_status_id' => 2, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 142, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 143, 'tracker_id' => 3, 'old_status_id' => 4, 'new_status_id' => 5, 'role_id' => 5),
	array('id' => 144, 'tracker_id' => 3, 'old_status_id' => 3, 'new_status_id' => 4, 'role_id' => 5),
);

