<?
/**
* @+===========================================================================+
* @� MUCore v1.0.8 Premium                                                     �
* @� Credits: Isumeru & MaryJo & Dao Van Trong - Trong.CF                      �
* @+===========================================================================+
*/
if (isset($_GET['get_edit'])) {
    $get_edit = safe_input($_GET['get_edit'], '');
    $get_id   = $core_db2->Execute("Select memb_guid from MEMB_INFO where memb___id=?", array(
        $get_edit
    ));
    if (!$get_id->EOF) {
        header('Location: index.php?get=edit_account&mod=edit&id=' . $get_id->fields[0] . '');
        
    }
}
if (isset($_GET['mod'])) {
    if (empty($_GET['id'])) {
        echo notice_message_admin('Unable to proceed your request.', '0', '1', '0');
    } else {
        $id   = safe_input($_GET['id'], '');
        $info = $core_db2->Execute("Select  memb_guid,memb___id,bloc_code,mail_addr,sno__numb,SecretQuestion,SecretAnswer,Country,Gender from MEMB_INFO where memb_guid=?", array(
            $id
        ));
        if ($info->EOF) {
            echo notice_message_admin('Unable to find account.', '0', '1', '0');
        } else {
            if (isset($_POST['edit'])) {
                if ($_POST['mode'] == 'x' || $_POST['question'] == 'x' || $_POST['country'] == 'x') {
                    echo notice_message_admin('Error some fields where left blank.', '0', '1', '0');
                } else {
                    if (account_online($info->fields[1]) === true) {
                        echo notice_message_admin('Account is connected in game.', '0', '1', '0');
                    } else {
                        if (!empty($_POST['password'])) {
                            $password = safe_input($_POST['password'], '');
                        }
                        $mode = safe_input($_POST['mode'], '');
                        $mail = safe_input($_POST['email'], '\_\@\.\-');
                        if (empty($_POST['pid'])) {
                            $pid = '111111111111';
                        } else {
                            $pid = safe_input($_POST['pid'], '');
                        }
                        $question = safe_input($_POST['question'], '');
                        $answer   = safe_input($_POST['answer'], '');
                        $country  = safe_input($_POST['country'], '');
                        $gender   = safe_input($_POST['gender'], '');
                        
                        
                        
                        if (isset($password)) {
                            if ($core['config']['md5'] == '1') {
                                $update = $core_db2->Execute("Update MEMB_INFO set memb__pwd=[dbo].[fn_md5](?,?),bloc_code=?,mail_addr=?,sno__numb=?,SecretQuestion=?,SecretAnswer=?,Country=?,Gender=? from MEMB_INFO where memb_guid=?", array(
                                    $password,
                                    $info->fields[1],
                                    $mode,
                                    $mail,
                                    $pid,
                                    $question,
                                    $answer,
                                    $country,
                                    $gender,
                                    $id
                                ));
                            } elseif ($core['config']['md5'] == '1') {
                                $update = $core_db2->Execute("Update memb_info set memb__pwd,bloc_code=?,mail_addr=?,sno__numb=?,SecretQuestion=?,SecretAnswer=?,Country=?,Gender=? from MEMB_INFO where memb_guid=?", array(
                                    $password,
                                    $mode,
                                    $mail,
                                    $pid,
                                    $question,
                                    $answer,
                                    $country,
                                    $gender,
                                    $id
                                ));
                            }
                        } else {
                            $update = $core_db2->Execute("Update MEMB_INFO set bloc_code=?,mail_addr=?,sno__numb=?,SecretQuestion=?,SecretAnswer=?,Country=?,Gender=? from MEMB_INFO where memb_guid=?", array(
                                $mode,
                                $mail,
                                $pid,
                                $question,
                                $answer,
                                $country,
                                $gender,
                                $id
                            ));
                        }
                        if ($update) {
                            echo notice_message_admin('Account successfully edited', 1, 0, 'index.php?get=edit_account&mod=edit&id=' . $id . '');
                        } else {
                            echo notice_message_admin('Unable to edit account, system error.', '0', '1', '0');
                        }
                    }
                }
            } else {
                echo '

    <div align="right" style="width: 90%; margin-bottom: 2px;"><a href="index.php?get=edit_account">[Return Check Account]</a></div>
    <form action="" method="POST" name="forum">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_panel">
    <tr>
     <td align="center" class="panel_title" colspan="2">Find account characters (User ID: ' . htmlspecialchars($info->fields[1]) . ')</td>
    </tr>
    
    
    <tr>
    
    
    </table>
    </form>';
                
                $char = $core_db->Execute("Select mu_id,Name from Character where AccountID=?", array(
                    $info->fields[1]
                ));
                echo '
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_panel" style="margin-top: 20px;">
<tr>
 <td align="center" class="panel_title" colspan="3">' . htmlspecialchars($info->fields[1]) . '\'s Characters</td>
</tr>
<tr>
<td align="left" class="panel_title_sub2">Character</td>
<td align="left" class="panel_title_sub2" width="50">Controls</td>
</tr>';
                $count = 0;
                while (!$char->EOF) {
                    $count++;
                    $tr_color = ($count % 2) ? '' : 'even';
                    echo '<tr class="' . $tr_color . '">
            <td align="left" class="panel_text_alt_list"><strong>' . htmlspecialchars($char->fields[1]) . '</strong></td>
            <td align="left" class="panel_text_alt_list" width="50"><a href="index.php?get=edit_character&mod=edit&id=' . $char->fields[0] . '"></a></td>
            </tr>';
                    $char->MoveNext();
                }
                if ($count == '0') {
                    echo '<tr><td align="center" class="panel_text_alt_list" colspan="3">No Characters Found</td></tr>';
                }
                
                
                echo '</table>';
                
                
                
                
            }
            
        }
    }
} else {
    echo '
<form action="" name="form_edit" method="POST">
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_panel">
<tr>
 <td align="center" class="panel_title" colspan="2">Find Characters under account </td>
</tr>
<tr>
<td align="left" class="panel_title_sub" colspan="2">User ID</td>
</tr>
<tr>
<td align="left" class="panel_text_alt1" width="45%" valign="top">
Enter User ID of account which you want to find.</td>
<td align="left" class="panel_text_alt2" width="45%" valign="top">
';
    if (isset($_SESSION['search_user'])) {
        if (isset($_POST['user'])) {
            echo '<input type="text" value="' . $_POST['user'] . '" name="user">';
        } else {
            echo '<input type="text" value="' . $_SESSION['search_user'] . '" name="user">';
        }
        
    } else {
        echo '<input type="text" name="user">';
    }
    echo '
<br>
</td>
</tr>

<tr>
<td align="left" class="panel_title_sub" colspan="2">Search Criteria</td>
</tr>
<tr>
<td align="left" class="panel_text_alt1" width="45%" valign="top">
Select search type.<br<br><b>Exact Match</b> - Will search for exact match of use id you enter.
<br><b>Partial Match</b> - Will search for a partial match of user id you enter.<br><br>Note: If you choose \'Partial Match\' only first 100 matches will be displayed.</td>
<td align="left" class="panel_text_alt2" width="45%" valign="top">';
    if (isset($_SESSION['search_t'])) {
        if (isset($_POST['search_t'])) {
            switch ($_POST['search_t']) {
                case '0':
                    echo '<label><input type="radio" name="search_t" value="1">Exact Match</label> <label><input type="radio" name="search_t" value="0"  checked="checked">Partial Match</label>';
                    break;
                case '1':
                    echo '<label><input type="radio" name="search_t" value="1" checked="checked">Exact Match</label> <label><input type="radio" name="search_t" value="0"  >Partial Match</label>';
                    break;
            }
        } else {
            switch ($_SESSION['search_t']) {
                case '0':
                    echo '<label><input type="radio" name="search_t" value="1">Exact Match</label> <label><input type="radio" name="search_t" value="0"  checked="checked">Partial Match</label>';
                    break;
                case '1':
                    echo '<label><input type="radio" name="search_t" value="1" checked="checked">Exact Match</label> <label><input type="radio" name="search_t" value="0"  >Partial Match</label>';
                    break;
            }
        }
        
    } else {
        echo '<label><input type="radio" name="search_t" value="1" checked="checked">Exact Match</label> <label><input type="radio" name="search_t" value="0"  >Partial Match</label>';
    }
    
    echo '

</td>
</tr>




<tr>
<td align="right" class="panel_buttons" colspan="2">
<input type="hidden" name="search">
<input type="submit" value="Search"></td>
</tr>
</table>
</form>
';
    
    
    
    if (isset($_POST['search'])) {
        if (!empty($_POST['user'])) {
            $_SESSION['search_user'] = $_POST['user'];
            $_SESSION['search_t']    = $_POST['search_t'];
            $userid                  = safe_input($_POST['user'], '');
            
            echo '
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_panel" style="margin-top: 20px;">
<tr>
 <td align="center" class="panel_title" colspan="5">Search Results</td>
</tr>
<tr>
<td align="left" class="panel_title_sub2">User ID</td>
<td align="left" class="panel_title_sub2">Email Address</td>
<td align="left" class="panel_title_sub2">Gender</td>
<td align="left" class="panel_title_sub2">Country</td>
<td align="left" class="panel_title_sub2" width="50">Controls</td>
</tr>';
            
            if ($_POST['search_t'] == '1') {
                $user = $core_db2->Execute("Select memb_guid from MEMB_INFO where memb___id=?", array(
                    $userid
                ));
                #echo $user->fields[0];
                if (!$user->EOF) {
                    header('Location: index.php?get=edit_account&mod=edit&id=' . $user->fields[0] . '');
                } else {
                    $not_found = '1';
                }
                
            } elseif ($_POST['search_t'] == '0') {
                $user  = $core_db2->Execute("Select top 100 memb_guid,memb___id,mail_addr,Gender,Country from MEMB_INFO where memb___id like ?", array(
                    '%' . $userid . '%'
                ));
                $count = 0;
                while (!$user->EOF) {
                    $count++;
                    $tr_color = ($count % 2) ? '' : 'even';
                    echo '<tr class="' . $tr_color . '">
            <td align="left" class="panel_text_alt_list"><strong>' . htmlspecialchars($user->fields[1]) . '</strong></td>
            <td align="left" class="panel_text_alt_list" >' . htmlspecialchars($user->fields[2]) . '</td>
            <td align="left" class="panel_text_alt_list" >';
                    switch ($user->fields[3]) {
                        case '1':
                            echo 'Male';
                            break;
                        case '2':
                            echo 'Female';
                            break;
                    }
                    echo '</td>
            <td align="left" class="panel_text_alt_list" >' . getcountry($user->fields[4]) . '</td>
            <td align="left" class="panel_text_alt_list"><a href="index.php?get=edit_account&mod=edit&id=' . $user->fields[0] . '">[Edit]</a></td>
            </tr>';
                    $user->MoveNext();
                }
                
                if ($count == '0') {
                    echo '<tr><td align="center" class="panel_text_alt_list" colspan="5">No Accounts Found</td></tr>';
                }
                
                
            }
            
            if ($not_found == '1') {
                echo '<tr><td align="center" class="panel_text_alt_list" colspan="5">No Accounts Found</td></tr>';
            }
            echo '</table>';
            
        }
    }
}
/**
* @+===========================================================================+
* @� MUCore v1.0.8 Premium                                                     �
* @� Credits: Isumeru & MaryJo & Dao Van Trong - Trong.CF                      �
* @+===========================================================================+
*/
?> 