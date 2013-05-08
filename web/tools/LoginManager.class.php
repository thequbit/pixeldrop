<?php

	require_once("DatabaseTool.class.php");
	

	class LoginManager
	{
	
		function CheckCredentials($email, $password)
		{
	
			dprint( "CheckCredentials() Start." );
			
			try
			{
		
				$db = new DatabaseTool();
			
				// create the query
				$query = 'SELECT COUNT(firstname) AS count, firstname, lastname, verified FROM users WHERE email = ? AND password = ?';
			
				$passhash = md5($password);
			
				//echo $passhash . "</br>";
			
				$mysqli = $db->Connect();
				$stmt = $mysqli->prepare($query);
				$stmt->bind_param("ss", $email,$passhash);
				$results = $db->Execute($stmt);
			
				dprint( "Processing " . count($results) . " Results ..." );
			
				if( $results[0]['count'] != 0 )
				{
					//echo "count was non-zero.</br>";
					$retVal = (object) array("valid" => true, "firstname" => $results[0]['firstname'], "lastname" => $results[0]['lastname'], "verified" => $results[0]['verified']);
				}
				else
				{
					//echo "count was zero.</br>";
					$retVal = (object) array("valid" => false, "firstname" => "", "lastname" => "", "verified" => 0);
				}
				
				// close our DB connection
				$db->Close($mysqli, $stmt);
			
			}
			catch (Exception $e)
			{
				dprint( "Caught exception: " . $e->getMessage() );
			}
			
			dprint("CheckCredentials() Done.");
			
			return $retVal;
		}
	
		/*
		function CreateUser($username, $password, $displayname)
		{
	
			dprint( "validate() Start." );
			
			try
			{
		
				$db = new DatabaseTool();
			
				// create the query
				$query = 'INSERT INTO users(username,password,displayname) VALUES(?,?,?)';
			
				$passhash = md5($password);
			
				$mysqli = $db->Connect();
				$stmt = $mysqli->prepare($query);
				$stmt->bind_param("sss", $username,$passhash,$displayname);
				$results = $db->Execute($stmt);
			
				dprint( "Processing " . count($results) . " Results ..." );
			
				if( $results[0]['count'] != 0 )
					$displayname = $results[0]['displayname'];
				else
					$displayname = null;
			
				// close our DB connection
				$db->Close($mysqli, $stmt);
			
			}
			catch (Exception $e)
			{
				dprint( "Caught exception: " . $e->getMessage() );
			}
			
			dprint("Validate() Done.");
			
			return $displayname;
		}
		*/
		
	}