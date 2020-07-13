<?php

function format_folder_size($size)
{
 if ($size >= 1073741824)
 {
  $size = number_format($size / 1073741824, 2) . ' GB';
 }
    elseif ($size >= 1048576)
    {
        $size = number_format($size / 1048576, 2) . ' MB';
    }
    elseif ($size >= 1024)
    {
        $size = number_format($size / 1024, 2) . ' KB';
    }
    elseif ($size > 1)
    {
        $size = $size . ' bytes';
    }
    elseif ($size == 1)
    {
        $size = $size . ' byte';
    }
    else
    {
        $size = '0 bytes';
    }
 return $size;
}

function get_folder_size($folder_name)
{
 $total_size = 0;
 $file_data = scandir($folder_name);
 foreach($file_data as $file)
 {
  if($file === '.' or $file === '..')
  {
   continue;
  }
  else
  {
   $path = $folder_name . '/' . $file;
   $total_size = $total_size + filesize($path);
  }
 }
 return format_folder_size($total_size);
}



if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {

  $folder = array_filter(glob('*'),'is_dir');

  if(count($folder) > 0)
  {
   foreach($folder as $name)
   {
     $link = "http://localhost/health/";
    $output .= '
     <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-10 directory ">
     <div class="media media-folder">
       <i data-feather="folder"></i>
       <div class="media-body">
         <h6><a href="'.$link.''.$name.'" class="link-02">'.$name.'</a></h6>
         <span>'.(count(scandir($name)) - 2).' files, '.get_folder_size($name).'</span>
       </div>
       <div class="dropdown-file">
         <a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
         <div class="dropdown-menu dropdown-menu-right">
           <a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>View Details</a>
           <a href="" class="dropdown-item download"><i data-feather="download"></i>Download</a>
           <a href="#modalMove" data-toggle="modal" class="dropdown-item move"><i data-feather="folder"></i>Move to</a>
           <a class="dropdown-item rename" href="#modalCreateChannel"  data-toggle="modal"  name = "update" data-name="'.$name.'"><i data-feather="edit"></i>Rename</a>
           <a href="#" class="dropdown-item delete" name = "delete" data-name="'.$name.'"><i data-feather="trash"></i>Delete</a>
         </div>
       </div>
     </div>
     </div>
     ';
   }
  }
  else
  {
   $output .= '
  <p>No folders found</p>
    
   ';
  }
 
  echo $output;
 }



 if($_POST["action"] == "create")
 {
  if(!file_exists($_POST["folder_name"])) 
  {
   mkdir($_POST["folder_name"], 0777, true);
   echo 'Folder Created';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }



 if($_POST["action"] == "rename")
 {
  if(!file_exists($_POST["folder_name"]))
  {
   rename($_POST["old_name"], $_POST["folder_name"]);
   echo 'Folder Name Change';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }


  
 if($_POST["action"] == "delete")
 {
  $files = scandir($_POST["folder_name"]);
  foreach($files as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    unlink($_POST["folder_name"] . '/' . $file);
   }
  }
  if(rmdir($_POST["folder_name"]))
  {
   echo 'Folder Deleted';
  }
 }


}?>