<?php
if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
        
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists('/home/vcap/fs/14e09e2c978ac98/'. $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      '/home/vcap/fs/14e09e2c978ac98/' . $_FILES["file"]["name"]);
      echo "Stored in: " . '/home/vcap/fs/14e09e2c978ac98/' . $_FILES["file"]["name"];
      }
    }