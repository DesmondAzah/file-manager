$(document).ready(function(){
 
      load_folder_list();
      
      function load_folder_list()
      {
       var action = "fetch";
       $.ajax({
        url:"files/action.php",
        method:"POST",
        data:{action:action},
        success:function(data)
        {
         $('#directories').html(data);
         feather.replace();
        }
       });
      }


      $(document).on('click', '#create_folder', function(){
      $('#action').val("create");
      $('#folder_name').val('');
      $('#folder_button').val('Create');
      $('#folderModal').modal('show');
      $('#old_name').val('');
      $('#change_title').text("Create Folder");
      });
      
      $(document).on('click', '#folder_button', function(){
      var folder_name = $('#folder_name').val();
      var old_name = $('#old_name').val();
      var action = $('#action').val();
      if(folder_name != '')
      {
            $.ajax({
            url:"files/action.php",
            method:"POST",
            data:{folder_name:folder_name, old_name:old_name, action:action},
            success:function(data)
            {
            $('#modalCreateChannel').modal('hide');
            load_folder_list();
            alert(data);
            }
            });
      }
      else
      {
            alert("Enter Folder Name");
      }
      });

      $(document).on("click", ".rename", function(){
      var folder_name = $(this).data("name");
      $('#old_name').val(folder_name);
      $('#folder_name').val(folder_name);
      $('#action').val("rename");
      $('#folderModal').modal("show");
      $('#folder_button').val('Rename');
      $('#change_title').text("Rename Folder");
      });

      $(document).on("click", ".delete", function(){
      var folder_name = $(this).data("name");
      var action = "delete";
      if(confirm("Are you sure you want to remove it?"))
      {
            $.ajax({
            url:"files/action.php",
            method:"POST",
            data:{folder_name:folder_name, action:action},
            success:function(data)
            {
            load_folder_list();
            alert(data);
            }
            });
      }
      });
      
});
