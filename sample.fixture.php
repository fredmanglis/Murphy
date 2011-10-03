<?php
    /**
    * @database test_fixture1
    * @tables user,group,user_in_group
    * user_id | username                    | group_id | group_name
    * 3       | iain@workingsoftware.com.au | 4        | Users
    * 4       | iaindooley@gmail.com        | 5        | Staff
    */
    murphy\Fixture::add(function($data)
    {
        mysql_query('INSERT INTO `group`(group_id,group_name) VALUES('.(int)$data['group_id'].',\''.mysql_real_escape_string($data['group_name']).'\')') or die('err1: '.mysql_error());
        mysql_query('INSERT INTO `user`(user_id,username) VALUES('.(int)$data['user_id'].',\''.mysql_real_escape_string($data['username']).'\')') or die('err2: '.mysql_error());
        mysql_query('INSERT INTO user_in_group(user_id,group_id) VALUES('.(int)$data['user_id'].','.(int)$data['group_id'].')') or die('err3: '.mysql_error());
    });

    /**
    * user_id | username                    | group_id | group_name
    * 1       | iain@workingsoftware.com.au | 2        | Users
    * 2       | iaindooley@gmail.com        | 3        | Staff
    */
    murphy\Fixture::add(function($data)
    {
        echo 'non db fixture'.PHP_EOL;
    });
