<!DOCTYPE html>
<html>
<head>
	<title>IMS Client</title>
</head>
<body>

    <h1 align="center">IMS Client</h1>

    <p style="margin-top:40px; margin-bottom:40px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
	<h4>Client Name = {{ $client_name }}</h4>
	<h4>Phone Number = {{ $phone_number }}</h4>
	<h4>Client Email = {{ $client_email }}</h4>
	<h4>Contact Via = {{ $contact_via }}</h4>
	<h4>Message = {{ $message }}</h4>
	<h4>IP Address = {{ $ip_address }}</h4>

    @if($assign_by != null)
	    <h4>Assigned By = {{ $assign_by }}</h4>
    @endif
    @if($manager_comment != null)
	    <h4>Manager Comment = {{ $manager_comment }}</h4>
    @endif
    @if($comment != null)
	    <h4>Comment = {{ $comment }}</h4>
    @endif
    @if($action_taken != null)
	    <h4>Action Taken = {{ $action_taken }}</h4>
    @endif
    @if($status != null)
	    <h4>Status = {{ $status }}</h4>
    @endif
</body>
</html>